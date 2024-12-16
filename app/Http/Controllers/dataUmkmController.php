<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Umkm;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class dataUmkmController extends Controller
{
    public function index(){
        $category = Category::all();
        $umkm = Umkm::all();

        $pageTitle = "Data UMKM";


        return view('umkm.data_umkm', [
            'category' => $category,
            'umkm' => $umkm,
            'pageTitle' => $pageTitle,
        ]);

        

    }
}
