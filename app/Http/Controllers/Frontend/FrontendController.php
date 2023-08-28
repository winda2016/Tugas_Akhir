<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Angkatan;
use App\Models\Bookingcut;
use App\Models\Bookingaca;
use App\Models\Layanan;
use App\Models\Stylist;
use App\Models\Treatment;
use App\Models\Course;
use App\Models\detail_course;
use App\Models\JadwalKursus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

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
            // Simpan id_booking ke dalam sesi
            session(['id_booking' => $booking->id]);
            return redirect('/pilih_stylist/' . $request->layanan_id);
        } elseif ($selectedLayanan->id === 2) {
            $booking = Bookingaca::create([
                'user_id' => Auth::user()->id,
                'layanan_id' => $selectedLayanan->id,
            ]);
            // Simpan id_booking ke dalam sesi
            session(['id_booking' => $booking->id]);
            session(['id_layanan' => $request->layanan_id]);
            return redirect('/pilih_course/' . $request->layanan_id);
        } else {
            return redirect()->back()->with('error', 'Layanan tidak valid.');
        }
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

        return redirect('/booking_haircut')->with('success', 'Booking berhasil dibuat');
    }

    public function booking_haircut()
    {
        // Ambil id_booking dari sesi
        $id_booking = session('id_booking');

        // Ambil data booking berdasarkan id_booking
        $booking = Bookingcut::findOrFail($id_booking);
        return view('frontend.form_booking_haircut', ['booking' => $booking]);
    }

    public function booking_cut(Request $request)
    {
        $id_booking = session('id_booking');
        $booking = Bookingcut::findOrFail($id_booking);

        $request->validate([
            'tanggal' => 'required',
            'jam_mulai' => 'required',
        ]);

        $tanggal = $request->input('tanggal');
        $jam_mulai = $request->input('jam_mulai');
        $total_durasi = $request->input('total_durasi');
        $total_harga = $request->input('total_harga');

        // Menggunakan Carbon untuk menghitung jam selesai
        $jam_selesai = Carbon::createFromFormat('H:i', $jam_mulai)->addMinutes($total_durasi);

        // Cek apakah ada konflik dengan pemesanan yang sudah ada di database
        $conflictingBooking = Bookingcut::where('id', '<>', $id_booking)
            ->where('tanggal', $tanggal)
            ->where('jam_mulai', '<', $jam_selesai)
            ->where('jam_selesai', '>', $jam_mulai)
            ->where('stylist_id', $booking->stylist_id)
            ->first();

        if ($conflictingBooking) {
            return back()->with('error', 'Konflik dengan pemesanan lain yang sudah ada.');
        }

        $booking->update([
            'tanggal' => $tanggal,
            'jam_mulai' => $jam_mulai,
            'total_durasi' => $total_durasi,
            'total_harga' => $total_harga,
            'jam_selesai' => $jam_selesai,
            'cek_kelengkapan' => 1
        ]);

        return redirect('/info_pesanan')->with('success', 'Booking berhasil diperbarui.');
    }

    public function pilih_course()
    {
        // Ambil id_booking dari sesi
        $id_booking = session('id_booking');
        $id_layanan = session('id_layanan');
        // dd($id_booking);
        return view('frontend.pilih_course', [
            'courses' => Course::get(),
            'id_booking' => $id_booking,
            'id_layanan' => $id_layanan
        ]);
    }

    public function course_detail(Request $request)
    {
        // Ambil id_booking dari sesi
        $id_booking = session('id_booking');
        // dd($id_booking);

        $booking_academy = Bookingaca::where('id', $id_booking);
        $booking_academy->update([
            'course_id' => $request->input('course'),
            'total' => $request->input('harga'),
        ]);

        $courseId = $request->input('course');

        return redirect('/get-detail-course/' . $courseId);
    }

    public function getDetailCourse($id)
    {
        $detail = Course::where('id', $id)->first();
        $id_booking = session('id_booking');
        $jadwal = JadwalKursus::where('course_id', $id)->first();
        $batch = Angkatan::where('course_id', $id)->get();
        // dd($id_booking);
        return view('frontend.detail_course', [
            'course' => $detail,
            'jadwal' => $jadwal,
            'id_booking' => $id_booking,
            'angkatan' => $batch
        ]);
    }

    public function booking_academy(Request $request)
    {
        $request->validate([
            'batch' => 'required'
        ], [
            'batch.required' => 'Silahkan pilih batch terlebih dahulu'
        ]);

        $id_booking = session('id_booking');
        $selectedBatchId = $request->input('batch');

        $angkatan = Angkatan::findOrFail($selectedBatchId);

        if ($angkatan->kuota > 0) {
            $angkatan->kuota -= 1;

            if ($angkatan->kuota === 0) {
                $angkatan->status = 0;
            }

            $angkatan->save();

            $booking_academy = Bookingaca::where('id', $id_booking);
            $booking_academy->update([
                'angkatan_id' => $selectedBatchId,
                'cek_kelengkapan' => 1,
                'tanggal' => now()
            ]);
        }

        return redirect('/info_pesanan');
    }

    public function get_konfirmasi_pesanan()
    {
        $user = Auth::user()->id;
        $booking_academy = Bookingaca::where('user_id', $user)
            ->where('cek_kelengkapan', 1)
            ->where('status', '<>', 2)->get();
        $booking_cut = Bookingcut::where('user_id', $user)
            ->where('cek_kelengkapan', 1)
            ->where('status','<>',2)
            ->get();
        return view('frontend.info_pesanan', [
            'booking_academy' => $booking_academy,
            'booking_cut' => $booking_cut,
        ]);
    }

    public function konfirmasi_pembayaran_academy(Request $request, $id) {
        $booking_aca = Bookingaca::findOrFail($id);
        // dd($booking_aca);
        $request->validate([
            'gambar' => 'required|image',
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }

        $booking_aca->update([
            'gambar' => $imageName,
            'status' => 1
        ]);

        return redirect()->back();
    }

    public function konfirmasi_pembayaran_haircut(Request $request, $id) {
        $booking = Bookingcut::findOrFail($id);
        // dd($booking_aca);
        $request->validate([
            'gambar' => 'required|image',
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }

        $booking->update([
            'gambar' => $imageName,
            'status' => 1
        ]);

        return redirect()->back();
    }
}
