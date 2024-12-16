<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Umkm;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OwnerController extends Controller
{
    public function index(Request $request, $id){
        $category = Category::all();
        $user = Auth::user();
                $umkmCount = Umkm::all()->count();
        $culinary = UMKM::where('category_id', 1)->get();
        $fashion = UMKM::where('category_id', 2)->get();
        $service = UMKM::where('category_id', 3)->get();
        $pageTitle = "Owner Page";
        $umkm = Umkm::where('id_user', $user->id)->get();

        return view('owner', [
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
}
