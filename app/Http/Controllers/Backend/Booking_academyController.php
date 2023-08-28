<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Angkatan;
use App\Models\Bookingaca;
use App\Models\Course;
use App\Models\Layanan;
use App\Models\Pendapatan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Booking_academyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookingaca = Bookingaca::where('cek_kelengkapan', 1)
            ->get();

        // dd($bookingaca);
        return view('backend.booking_academy.index', [
            'booking_academys' => $bookingaca
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.bookingaca.create', [
            'users' => User::where('role', 'user')->get(),
            'layanans' => Layanan::get(),
            'angkatans' => Angkatan::get(),
            'courses' => Course::get(),
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
            'angkatan' => 'required',
            'course' => 'required',
            'total' => 'required',
            'status' => 'required',
        ]);

        $bookingaca = new Bookingaca();
        $bookingaca->nama = $request->input('nama');
        $bookingaca->email = $request->input('email');
        $bookingaca->no_hp = $request->input('no_hp');
        $bookingaca->layanan = $request->input('layanan');
        $$bookingaca->angkatan = $request->input('angkatan');
        $$bookingaca->course = $request->input('course');
        $$bookingaca->total = $request->input('total');
        $$bookingaca->status = $request->input('status');
        $$bookingaca->save();


        // Sesuaikan dengan logika autentikasi atau pengalihan halaman setelah pendaftaran berhasil
        return redirect('bookingaca')->with('success', 'data berhasil ditambahkan.');
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
        $bookingaca = Bookingaca::find($id);
        return view('backend.booking_academy.edit', ['bookingaca' => $bookingaca]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $bookingaca = Bookingaca::findOrFail($id);

            $request->validate([
                'status' => 'required',
            ]);

            $oldStatus = $bookingaca->status;
            $newStatus = $request->input('status');

            $bookingaca->update([
                'status' => $newStatus,
            ]);

            // Jika status berubah menjadi 2 dan sebelumnya bukan 1
            if ($newStatus == 2 && $oldStatus != 2) {
                $tanggal = $bookingaca->tanggal; // Ambil tanggal dari bookingaca

                // Ambil total bayar dari semua pemesanan dengan status 2 pada tanggal tertentu
                $totalBayar = Bookingaca::where('status', 2)
                    ->where('tanggal', $tanggal)
                    ->sum('total');

                // Simpan total bayar ke dalam tabel "pendapatan"
                Pendapatan::updateOrCreate(
                    ['tanggal' => $tanggal, 'layanan_id' => $bookingaca->layanan_id],
                    ['total_pendapatan' => $totalBayar]
                );
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
        return redirect('data_academy')->with('succes', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $data = Bookingaca::find($id);
        $data->delete();
        return redirect()->back()->with('succes', 'data berhasil dihapus.');
    }
}
