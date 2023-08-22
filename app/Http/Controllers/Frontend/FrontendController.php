<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Bookingcut;
use App\Models\Layanan;
use App\Models\Stylist;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function layanan(Request $request, Layanan $layanan)
    {
        $request->validate([
            'layanan_id' => 'required',
        ]);

        $selectedLayanan = Layanan::find($request->layanan_id);

        if ($selectedLayanan->id === 1) {
            $booking = Bookingcut::create([
                'user_id' => Auth::user()->id,
                'layanan_id' => $selectedLayanan->id,
            ]);
        } elseif ($selectedLayanan->id === 2) {
            // $booking = BookingAca::create([
            //     'layanan_id' => $selectedLayanan->id,
            // });
        } else {
            return redirect()->back()->with('error', 'Layanan tidak valid.');
        }

        // Simpan id_booking ke dalam sesi
        session(['id_booking' => $booking->id]);

        return redirect('/pilih_stylist/' . $request->layanan_id);
    }


    public function pilih_layanan()
    {
        return view('frontend.pilih_layanan', [
            'layanans' => Layanan::get()
        ]);
    }

    public function pilih_stylist()
    {
        // Ambil id_booking dari sesi
        $id_booking = session('id_booking');

        // dd($id_booking);

        // Lakukan validasi atau tindakan lain yang Anda perlukan

        return view('frontend.pilih_stylist', [
            'stylists' => Stylist::get(),
            'id_booking' => $id_booking
        ]);
    }

    public function stylist(Request $request, $id_stylist)
    {
        // Ambil id_booking dari sesi
        $id_booking = session('id_booking');

        // dd($id_booking);

        $request->validate([
            'stylist_id' => 'required',
        ]);

        // Ambil data booking berdasarkan id_booking
        $booking = Bookingcut::findOrFail($id_booking);

        // Lakukan update data booking dengan stylist baru
        $booking->update([
            'stylist_id' => $request->input('stylist_id')
        ]);

        $stylist_id = $request->input('stylist_id');
        // Hapus id_booking dari sesi setelah selesai
        // $request->session()->forget('id_booking');

        return redirect('/pilih_treatment/' . $stylist_id);
    }


    public function pilih_treatment()
    {
        return view('frontend.pilih_treatment', [
            'treatments' => Treatment::get()
        ]);
    }

    public function get_booking_treatment(Request $request)
    {
        // Ambil id_booking dari sesi
        $id_booking = session('id_booking');

        // Ambil data booking berdasarkan id_booking
        $booking = Bookingcut::findOrFail($id_booking);

        // Hubungkan booking dengan treatment(s) yang dipilih
        $booking->treatments()->sync($request->input('selected_treatments'));

        return redirect('/pilih_stylist')->with('success', 'Booking berhasil dibuat');
    }
}
