<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Umkm;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, $id)
    {
        $category = Category::all();
        $user = User::all();
        $user = Auth::user();
        $umkmCount = Umkm::all()->count();
        $culinary = Umkm::orderBy('id_user')->take(3)->get();
        $fashion = UMKM::where('category_id', 2)->get();
        $service = UMKM::where('category_id', 3)->get();
        $pageTitle = "Home";
        $user = auth()->user();
    $umkm = Umkm::where('id_user', $user->id)->get();

        return view('home', [
            'user' => $user,
            'category' => $category,
            'umkm' => $umkm,
            'umkmCount' => $umkmCount,
            'culinary' => $culinary,
            'fashion' => $fashion,
            'service' => $service,
            'pageTitle' => $pageTitle,
        ]);
    }

    public function getData(Request $request)
{
    $umkm = Umkm::with('category');

    if ($request->ajax()) {
        return datatables()->of($umkm)
            ->addIndexColumn()
            ->addColumn('actions', function($umkm) {
                return view('umkm.actions', compact('umkm'));
            })
            ->toJson();
    }
}


public function getUser(Request $request)
{
    $user = User::all();

    if ($request->ajax()) {
        return datatables()->of($user)
            ->addIndexColumn()

            ->toJson();
    }
}
}
