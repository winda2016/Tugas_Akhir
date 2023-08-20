<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Stylist;
use Illuminate\Http\Request;

class StylistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.stylist.index',[
            'stylists'=>Stylist::get()

        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.stylist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        $stylist = new Stylist();
        $stylist->nama = $request->input('nama');
        $stylist->no_hp = $request->input('no_hp');
        $stylist->alamat = $request->input('alamat');
        $stylist->save();

        // Sesuaikan dengan logika autentikasi atau pengalihan halaman setelah pendaftaran berhasil
        return redirect('stylist')->with('success', 'data berhasil ditambahkan.');

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
        $stylist = Stylist::find($id);
        return view('backend.stylist.edit',['stylist' => $stylist]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $stylist = Stylist::findOrFail($id);
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required'
        ]);

        $stylist->update([
            'nama' => $request->input('nama'),
            'no_hp' => $request->input('no_hp'),
            'alamat' => $request->input('alamat')

        ]);

        return redirect('stylist')->with('succes', 'data berhasil ditambah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Stylist::find($id);
        $data->delete();
        return redirect()->back()->with('succes', 'data berhasil dihapus.');
    }
}
