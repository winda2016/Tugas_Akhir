<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bookingcut;
use App\Models\Layanan;
use App\Models\Stylist;
use App\Models\Treatment;
use App\Models\User;
use PDF; // Import class PDF
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Booking_cutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookingcut = Bookingcut::where('cek_kelengkapan', 1)
            ->get();
        return view('backend.bookingcut.index', [
            'booking_cuts' => $bookingcut
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.bookingcut.create', [
            'users' => User::where('role', 'user')->get(),
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
        $bookingcut->nama = $request->input('nama');
        $bookingcut->email = $request->input('email');
        $bookingcut->no_hp = $request->input('no_hp');
        $bookingcut->layanan = $request->input('layanan');
        $bookingcut->stylist = $request->input('stylist');
        $bookingcut->treatment = $request->input('treatment');
        $bookingcut->tanggal = $request->input('tanggal');
        $bookingcut->jam = $request->input('jam');
        $bookingcut->save();


        // Sesuaikan dengan logika autentikasi atau pengalihan halaman setelah pendaftaran berhasil
        return redirect('bookingcut')->with('success', 'data berhasil ditambahkan.');
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
        $bookingcut = Bookingcut::findOrFail($id);
        $request->validate([
            'status' => 'required',

        ]);

        $bookingcut->update([
            'status' => $request->input('status'),

        ]);

        return redirect('bookingcut')->with('succes', 'data berhasil diupdate');
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


    public function cetakStruk($bookingId)
    {
        $booking_cut = BookingCut::find($bookingId); // Ganti BookingCut dengan model yang sesuai

        // Cetak struk menggunakan library PDF
        $pdf = PDF::loadView('backend.bookingcut.struk', compact('booking_cut'));
        return $pdf->stream('struk.pdf');
    }
}
