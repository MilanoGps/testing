<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Umkm;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class UMKMController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Alert::success('Added Successfully', 'UMKM Data Added Successfully.');
        $category = Category::all();
        $user = User::all();
        $umkm = Umkm::all();
        $umkmCount = Umkm::all()->count();
        $culinary = Umkm::orderBy('id')->take(3)->get();
        $fashion = UMKM::where('category_id', 2)->get();
        $service = UMKM::where('category_id', 3)->get();
        $pageTitle = "UMKM";


        return redirect()->route('home', ['id' => Auth::user()->id]) ->with([
            'user' => $user,
            'categorys' => $category,
            'umkm' => $umkm,
            'umkmCount' => $umkmCount,
            'culinary' => $culinary,
            'fashion' => $fashion,
            'service' => $service,
            'pageTitle' => $pageTitle,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'email' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'umkm' => 'required',
            'description' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'telNum' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Get File
        $file = $request->file('usahaDoc');
        $photo = $request->file('imgPhoto');

        if ($file != null && $photo != null) {
            $original_filesname = $file->getClientOriginalName();
            $encrypted_filesname = $file->hashName();

            // Store File
            $file->store('public/files/documentUser/suratIzin');

            $original_photoname = $photo->getClientOriginalName();
            $encrypted_photoname = $photo->hashName();

            // Store File
            $photo->storeAs('public/files/documentUser/profileUMKM', $original_photoname);


        }

        // ELOQUENT
        $umkm = new Umkm;
        $umkm->umkm = $request->umkm;
        $umkm->description = $request->description;
        $umkm->email = $request->email;
        $umkm->address = $request->address;
        $umkm->id_user = $request->id;
        $umkm->telephone_number = $request->telNum;
        $umkm->category_id = $request->category;

        if ($file != null && $photo != null) {
            $umkm->original_photoname = $original_photoname;
            $umkm->encrypted_photoname = $encrypted_photoname;

            $umkm->original_filesname = $original_filesname;
            $umkm->encrypted_filesname = $encrypted_filesname;
        }

        $umkm->save();



        return redirect()->route('umkm.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $umkm = Umkm::find($id);

        if ($umkm) {
            if (Storage::disk('public')->exists('files/documentUser/suratIzin/' . $umkm->encrypted_filesname) && Storage::disk('public')->exists('files/documentUser/profileUMKM/' . $umkm->encrypted_photoname)) {
                Storage::disk('public')->delete('files/documentUser/suratIzin/' . $umkm->encrypted_filesname);
                Storage::disk('public')->delete('files/documentUser/profileUMKM/' . $umkm->encrypted_filesname);
                echo 'File deleted successfully.';
            } else {
                echo 'File not found.';
            }
        }
        $umkm->delete();

        return redirect()->route('dataUmkm');
    }

    public function getAllUmkm()
    {
        $category = Category::all();
        $user = User::all();
        $umkm = Umkm::all();
        $umkmCount = Umkm::all()->count();
        $pageTitle = "UMKM";

        return view('owner', [
            'user' => $user,
            'category' => $category,
            'umkm' => $umkm,
            'umkmCount' => $umkmCount,
            'pageTitle' => $pageTitle,

        ]);
    }
}
