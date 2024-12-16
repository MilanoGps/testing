<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class dataUserController extends Controller
{
    public function index(){
        $umkm = Umkm::all();

        $user = Auth::user();
        $pageTitle = "Data User";

        return view('umkm.data_user', compact('umkm', 'user', 'pageTitle'));

    }
}
