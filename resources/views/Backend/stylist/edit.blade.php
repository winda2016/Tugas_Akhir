@extends('backend.layouts.index')
@section('container')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4><i class="mdi mdi-library-plus"></i> Edit Data Stylist</h4>
                            <a href="/stylist">
                            <button type="button" class="btn cur-p btn-dark "><i class="fa fa-arrow-left"></i> Back</button>
                            </a>
                        </div>
                        <hr>
                        <form class="forms-sample" action="/stylist/{{$stylist->id}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nama Hair Stylist</label>
                                <input type="text" autofocus required class="form-control" name="nama" value="{{$stylist->nama}}" placeholder="Masukan Nama Stylist...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">No Hp</label>
                                <input type="text" autofocus required class="form-control" name="no_hp" value="{{$stylist->no_hp}}" placeholder="Masukan No Hp...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Alamat</label>
                                <input type="text" autofocus required class="form-control" name="alamat" value="{{$stylist->alamat}}" placeholder="Masukan Alamat...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Gambar</label>
                                <input type="file" autofocus required class="form-control" name="gambar" value="{{$stylist->gambar}}" placeholder="Masukan Foto...">
                            </div>
                            <button type="submit" class="btn btn-primary mt-1 mr-2"><i class="mdi mdi-content-save-all"></i> Update Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 @endsection
