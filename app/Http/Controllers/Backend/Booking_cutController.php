<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bookingcut;
use App\Models\Layanan;
use App\Models\Stylist;
use App\Models\Treatment;
use App\Models\User;
use Illuminate\Http\Request;

class Booking_cutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.bookingcut.index', [
            'booking_cuts' => Bookingcut::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.bookingcut.create', [
            'users' => User::get(),
            'layanans' => Layanan::get(),
            'stylists' => Stylist::get(),
            'treatments' => Treatment::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'layanan' => 'required',
            'hairstylist' => 'required',
            'treatment' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'total' => 'required',
        ]);

        $bookingcut = new Bookingcut();
        $bookingcut->nama_course = $request->input('nama_course');
        $bookingcut->harga = $request->input('harga');
        $bookingcut->save();

        // Sesuaikan dengan logika autentikasi atau pengalihan halaman setelah pendaftaran berhasil
        return redirect('course')->with('success', 'data berhasil ditambahkan.');
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
        $bookingcut = Bookingcut::find($id);
        return view('backend.bookingcut.edit', ['bookingcut' => $bookingcut]);
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
        $data = Bookingcut::find($id);
        $data->delete();
        return redirect()->back()->with('succes', 'data berhasil dihapus.');
    }
}
