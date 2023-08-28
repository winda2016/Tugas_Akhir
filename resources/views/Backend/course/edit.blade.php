@extends('backend.layouts.index')
@section('container')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4><i class="mdi mdi-library-plus"></i> Edit Data Course</h4>
                            <a href="/course">
                            <button type="button" class="btn cur-p btn-dark "><i class="fa fa-arrow-left"></i> Back</button>
                            </a>
                        </div>
                        <hr>
                        <form class="forms-sample" action="/course/{{$course->id}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nama Course</label>
                                <input type="text" autofocus required class="form-control" name="nama_course" value="{{$course->nama_course}}" placeholder="Masukan Nama Course...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Deskripsi</label>
                                <input type="text" autofocus required class="form-control" name="deskripsi" value="{{$course->deskripsi}}" placeholder="Masukan Nama Deskripsi...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Harga</label>
                                <input type="text" autofocus required class="form-control" name="harga" value="{{$course->harga}}" placeholder="Masukan Harga...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Gambar</label>
                                <input type="file" autofocus required class="form-control" name="gambar" value="{{$course->gambar}}" placeholder="Masukan Gambar...">
                            </div>
                            <button type="submit" class="btn btn-primary mt-1 mr-2"><i class="mdi mdi-content-save-all"></i> Update Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 @endsection
