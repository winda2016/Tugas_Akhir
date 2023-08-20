@extends('backend.layouts.index')
@section('container')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4><i class="mdi mdi-library-plus"></i> Tambah Data Stylist</h4>
                            <a href="/stylist">
                            <button type="button" class="btn cur-p btn-dark "><i class="fa fa-arrow-left"></i> Back</button>
                            </a>
                        </div>
                        <hr>
                        <form class="forms-sample" action="/stylist" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nama Hair Stylist</label>
                                <input type="text" autofocus required class="form-control" name="nama" placeholder="Masukan Nama...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">No Hp</label>
                                <input type="text" autofocus required class="form-control" name="no_hp" placeholder="Masukan No Hp...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Alamat</label>
                                <input type="text" autofocus required class="form-control" name="alamat" placeholder="Masukan Alamat...">
                            </div>
                            <button type="submit" onclick="return confirm('Apakan Anda yakin ingin menyimpan data ini?')" class="btn btn-primary mt-1 mr-2"><i class="mdi mdi-content-save-all"></i> Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 @endsection
