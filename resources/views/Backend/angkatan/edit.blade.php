@extends('backend.layouts.index')
@section('container')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4><i class="mdi mdi-library-plus"></i> Edit Data Angkatan</h4>
                            <a href="/angkatan">
                            <button type="button" class="btn cur-p btn-dark "><i class="fa fa-arrow-left"></i> Back</button>
                            </a>
                        </div>
                        <hr>
                        <form class="forms-sample" action="/angkatan/{{$angkatan->id}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nama Angkatan</label>
                                <input type="text" autofocus required class="form-control" name="nama_angkatan" value="{{$angkatan->nama_angkatan}}" placeholder="Masukan Nama Angkatan...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Tgl Mulai</label>
                                <input type="date" autofocus required class="form-control" name="tgl_mulai" value="{{$angkatan->tgl_mulai}}" placeholder="Masukan Tanggal Mulai...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Tgl Selesai</label>
                                <input type="date" autofocus required class="form-control" name="tgl_akhir" value="{{$angkatan->tgl_akhir}}" placeholder="Masukan Tanggal Selesai...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Kuota</label>
                                <input type="number" autofocus required class="form-control" name="kuota" value="{{$angkatan->kuota}}" placeholder="Masukan Kuota...">
                            </div>
                            <button type="submit" class="btn btn-primary mt-1 mr-2"><i class="mdi mdi-content-save-all"></i> Update Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 @endsection
