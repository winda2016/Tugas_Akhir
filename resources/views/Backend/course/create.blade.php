@extends('backend.layouts.index')
@section('container')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4><i class="mdi mdi-library-plus"></i> Tambah Data Course</h4>
                            <a href="/course">
                            <button type="button" class="btn cur-p btn-dark "><i class="fa fa-arrow-left"></i> Back</button>
                            </a>
                        </div>
                        <hr>
                        <form class="forms-sample" action="/course" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nama Course</label>
                                <input type="text" autofocus required class="form-control" name="nama_course" placeholder="Masukan Course...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Harga</label>
                                <input type="text" autofocus required class="form-control" name="harga" placeholder="Masukan Harga...">
                            </div>
                            <button type="submit" onclick="return confirm('Apakan Anda yakin ingin menyimpan data ini?')" class="btn btn-primary mt-1 mr-2"><i class="mdi mdi-content-save-all"></i> Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 @endsection
