@extends('backend.layouts.index')
@section('container')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4><i class="mdi mdi-library-plus"></i> Tambah Data Booking Hair Cut</h4>
                        <a href="/bookingcut">
                            <button type="button" class="btn cur-p btn-dark "><i class="fa fa-arrow-left"></i> Back</button>
                        </a>
                    </div>
                    <hr>
                    <form class="forms-sample" action="/bookingcut" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama</label>
                            <select class="form-control" aria-label="Default select example" name="user">
                                <option>Pilih Nama</option>
                                @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Layanan</label>
                            <select class="form-control" aria-label="Default select example" name="layanan">
                                <option>Pilih Layanan</option>
                                @foreach($layanans as $layanan)
                                <option value="{{$layanan->id}}">{{$layanan->nama_layanan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Hair Stylist</label>
                            <select class="form-control" aria-label="Default select example" name="stylist">
                                <option>Pilih Hair Stylist</option>
                                @foreach($stylists as $stylist)
                                <option value="{{$stylist->id}}">{{$stylist->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Treatment</label>
                            <select class="form-control" aria-label="Default select example" name="stylist">
                                <option>Pilih Treatment</option>
                                @foreach($treatments as $treatment)
                                <option value="{{$treatment->id}}">{{$treatment->nama_treatment}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Jam</label>
                            <input type="time" autofocus required class="form-control" name="jam" placeholder="Masukan Jam Booking...">
                        </div>
                        <button type="submit" onclick="return confirm('Apakan Anda yakin ingin menyimpan data ini?')" class="btn btn-primary mt-1 mr-2"><i class="mdi mdi-content-save-all"></i> Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
