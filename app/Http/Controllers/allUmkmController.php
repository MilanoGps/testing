<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Umkm;
use App\Models\User;
use Illuminate\Http\Request;

class allUmkmController extends Controller
{
    public function index(){
        $user = User::all();
        $umkm = Umkm::all();
        $umkmCount = Umkm::all()->count();
        $pageTitle = "UMKM";

        return view('allUmkm', [
            'user' => $user,
            'umkm' => $umkm,
            'umkmCount' => $umkmCount,
            'pageTitle' => $pageTitle,

        ]);
    }
}
