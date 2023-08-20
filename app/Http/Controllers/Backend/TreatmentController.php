<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.treatment.index',[
            'treatments'=>Treatment::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.treatment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_treatment' => 'required',
            'harga' => 'required',
            'waktu' => 'required',
        ]);

        $treatment = new Treatment();
        $treatment->nama_treatment = $request->input('nama_treatment');
        $treatment->harga = $request->input('harga');
        $treatment->waktu = $request->input('waktu');
        $treatment->save();

        // Sesuaikan dengan logika autentikasi atau pengalihan halaman setelah pendaftaran berhasil
        return redirect('treatment')->with('success', 'data berhasil ditambahkan.');
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
        $treatment = Treatment::find($id);
        return view('backend.treatment.edit',['treatment' => $treatment]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $treatment = Treatment::findOrFail($id);
        $request->validate([
            'nama_treatment' => 'required',
            'harga' => 'required',
            'waktu' => 'required'
        ]);

        $treatment->update([
            'nama_treatment' => $request->input('nama_treatment'),
            'harga' => $request->input('harga'),
            'waktu' => $request->input('waktu')
        ]);

        return redirect('treatment')->with('succes', 'data berhasil ditambah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Treatment::find($id);
        $data->delete();
        return redirect()->back()->with('succes', 'data berhasil dihapus.');
    }
}
