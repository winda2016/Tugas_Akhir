@extends('backend.layouts.index')
@section('container')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4><i class="mdi mdi-library-plus"></i> Edit Data Layanan</h4>
                            <a href="/layanan">
                            <button type="button" class="btn cur-p btn-dark "><i class="fa fa-arrow-left"></i> Back</button>
                            </a>
                        </div>
                        <hr>
                        <form class="forms-sample" action="/layanan/{{$layanan->id}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nama Layanan</label>
                                <input type="text" autofocus required class="form-control" name="nama_layanan" value="{{$layanan->nama_layanan}}" placeholder="Masukan Nama Layanan...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Gambar</label>
                                <input type="file" autofocus required class="form-control" name="gambar" value="{{$layanan->gambar}}" placeholder="Masukan Gambar...">
                            </div>
                            <button type="submit" class="btn btn-primary mt-1 mr-2"><i class="mdi mdi-content-save-all"></i> Update Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 @endsection
