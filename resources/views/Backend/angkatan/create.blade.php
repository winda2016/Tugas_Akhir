@extends('backend.layouts.index')
@section('container')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4><i class="mdi mdi-library-plus"></i> Tambah Data Angkatan</h4>
                        <a href="/angkatan">
                            <button type="button" class="btn cur-p btn-dark "><i class="fa fa-arrow-left"></i> Back</button>
                        </a>
                    </div>
                    <hr>
                    <form class="forms-sample" action="/angkatan" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama Angkatan</label>
                            <input type="text" autofocus required class="form-control" name="nama_angkatan" placeholder="Masukan Nama Angkatan...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Tgl Mulai</label>
                            <input type="date" autofocus required class="form-control" name="tgl_mulai" placeholder="Masukan Tanggal Mulai...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Tgl Selesai</label>
                            <input type="date" autofocus required class="form-control" name="tgl_akhir" placeholder="Masukan Tanggal Selesai...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Kuota</label>
                            <input type="number" autofocus required class="form-control" name="kuota" placeholder="Masukan Tanggal Selesai...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Course</label>
                            <select class="form-control" aria-label="Default select example" name="course">
                                @foreach($courses as $course)
                                <option value="{{$course->id}}">{{$course->nama_course}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" onclick="return confirm('Apakan Anda yakin ingin menyimpan data ini?')" class="btn btn-primary mt-1 mr-2"><i class="mdi mdi-content-save-all"></i> Tambah Data</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
