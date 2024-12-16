<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UMKM;

class umkmDetailController extends Controller
{
    public function index($id)
    {
        $umkm = UMKM::all();

        $idUmkm = $id;

        if (!$umkm) {
            return abort(404);
        }


        return view('umkm.umkm_detail', compact('umkm' , 'idUmkm'));
    }

    public function show($id)
    {
        $umkm = UMKM::findOrFail($id);
        return view('umkm.show', compact('umkm'));
    }


}
