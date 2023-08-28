<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Angkatan;
use App\Models\Course;
use Illuminate\Http\Request;

class AngkatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'backend.angkatan.index',
            [
                'angkatans' => Angkatan::get()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.angkatan.create',[
            'courses' => Course::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_angkatan' => 'required',
            'tgl_mulai' => 'required',
            'tgl_akhir' => 'required',
            'kuota' => 'required',
            'course' => 'required',
        ]);

        $angkatan = new Angkatan();
        $angkatan->nama_angkatan = $request->input('nama_angkatan');
        $angkatan->tgl_mulai = $request->input('tgl_mulai');
        $angkatan->tgl_akhir = $request->input('tgl_akhir');
        $angkatan->kuota = $request->input('kuota');
        $angkatan->course_id = $request->input('course');
        $angkatan->save();

        // Sesuaikan dengan logika autentikasi atau pengalihan halaman setelah pendaftaran berhasil
        return redirect('angkatan')->with('success', 'data berhasil ditambahkan.');
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
        $angkatan = Angkatan::find($id);
        return view('backend.angkatan.edit',['angkatan' => $angkatan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $angkatan = Angkatan::findOrFail($id);
        $request->validate([
            'nama_angkatan' => 'required',
            'tgl_mulai' => 'required',
            'tgl_akhir' => 'required',
            'kuota' => 'required',
        ]);

        $angkatan->update([
            'nama_angkatan' => $request->input('nama_angkatan'),
            'tgl_mulai' => $request->input('tgl_mulai'),
            'tgl_akhir' => $request->input('tgl_akhir'),
            'kuota' => $request->input('kuota')
        ]);

        return redirect('angkatan')->with('succes', 'data berhasil ditambah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Angkatan::find($id);
        $data->delete();
        return redirect()->back()->with('succes', 'data berhasil dihapus.');
    }
}
