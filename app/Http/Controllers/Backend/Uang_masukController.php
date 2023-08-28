<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use App\Models\UangMasuk;
use Illuminate\Http\Request;

class Uang_masukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.uang_masuk.index', [
            'uang_masuk' => UangMasuk::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view('backend.uang_masuk.create', [
            'layanans' => Layanan::get(),
            'tanggal_sekarang' => now()->toDateString(), // Tambahkan ini
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'layanan_id' => 'required',
            'total_uang_masuk' => 'required',
            'tanggal_pemasukan' => 'required|date',
        ]);

        UangMasuk::create([
            'layanan_id' => $request->input('layanan_id'),
            'total_uang_masuk' => $request->input('total_uang_masuk'),
            'tanggal_pemasukan' => $request->input('tanggal_pemasukan'),
        ]);

        return redirect()->route('uang_masuk.index')->with('success', 'Data uang masuk berhasil ditambahkan.');
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
        //
    }
}
