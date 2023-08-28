<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.course.index',[
            'courses'=>Course::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_course' => 'required',
            'deskripsi' => 'required',
            'tentang' => 'required',
            'yang_dipelajari' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }

        $course = new Course();
        $course->nama_course = $request->input('nama_course');
        $course->deskripsi = $request->input('deskripsi');
        $course->tentang = $request->input('tentang');
        $course->yang_dipelajari = $request->input('yang_dipelajari');
        $course->harga = $request->input('harga');
        $course->gambar = $imageName;
        $course->save();

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
        $course = Course::find($id);
        return view('backend.course.edit',[
            'course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course = Course::findOrFail($id);
        $request->validate([
            'nama_course' => 'required',
            'deskripsi' => 'required',
            'tentang' => 'required',
            'yang_dipelajari' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image',
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }

        $course->update([
            'nama_course' => $request->input('nama_course'),
            'deskripsi' => $request->input('deskripsi'),
            'tentang' => $request->input('tentang'),
            'yang_dipelajari' => $request->input('yang_dipelajari'),
            'harga' => $request->input('harga'),
            'gambar' => $imageName,
        ]);

        return redirect('course')->with('succes', 'data berhasil ditambah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Course::find($id);
        $data->delete();
        return redirect()->back()->with('succes', 'data berhasil dihapus.');
    }
}
