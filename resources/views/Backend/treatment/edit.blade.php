@extends('backend.layouts.index')
@section('container')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4><i class="mdi mdi-library-plus"></i> Edit Data Stylist</h4>
                            <a href="/treatment">
                            <button type="button" class="btn cur-p btn-dark "><i class="fa fa-arrow-left"></i> Back</button>
                            </a>
                        </div>
                        <hr>
                        <form class="forms-sample" action="/treatment/{{$treatment->id}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nama Treatment</label>
                                <input type="text" autofocus required class="form-control" name="nama_treatment" value="{{$treatment->nama_treatment}}" placeholder="Masukan Nama Treatment...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Harga</label>
                                <input type="text" autofocus required class="form-control" name="harga" value="{{$treatment->harga}}" placeholder="Masukan Harga...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Waktu Pengerjaan</label>
                                <input type="text" autofocus required class="form-control" name="waktu" value="{{$treatment->waktu}}" placeholder="Masukan Waktu Pengerjaan...">
                            </div>
                            <button type="submit" class="btn btn-primary mt-1 mr-2"><i class="mdi mdi-content-save-all"></i> Update Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 @endsection
