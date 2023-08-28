@extends('backend.layouts.index')
@section('container')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4><i class="mdi mdi-library-plus"></i> Edit Data Booking HairCut</h4>
                        <a href="/bookingcut">
                            <button type="button" class="btn cur-p btn-dark "><i class="fa fa-arrow-left"></i> Back</button>
                        </a>
                    </div>
                    <hr>
                    <form class="forms-sample" action="/bookingcut/{{$bookingcut->id}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="text-center mx-auto">
                            <img src="{{ asset('images/'.$bookingcut->gambar)}}" style="width: 50%;">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Status</label>
                            <select class="form-control" data-hide-search="true" data-placeholder="Pilih Status Pembayaran" name="status">
                                <option value="">Select status...</option>
                                <option value="2">Sudah Bayar</option>
                                <option value="1">Proses</option>
                                <option value="0">Belum Bayar</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-1 mr-2"><i class="mdi mdi-content-save-all"></i> Update Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
