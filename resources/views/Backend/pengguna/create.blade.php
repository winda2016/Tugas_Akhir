@extends('backend.layouts.index')
@section('container')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4><i class="mdi mdi-library-plus"></i> Tambah Data Pengguna</h4>
                        <a href="/pengguna">
                            <button type="button" class="btn cur-p btn-dark "><i class="fa fa-arrow-left"></i> Back</button>
                        </a>
                    </div>
                    <hr>
                    <form class="forms-sample" action="/pengguna" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama</label>
                            <input type="text" autofocus required class="form-control" name="nama" placeholder="Masukan Nama...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Email</label>
                            <input type="text" autofocus required class="form-control" name="email" placeholder="Masukan Email...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Role</label>
                            <select class="form-control" data-hide-search="true" data-placeholder="Pilih Role Pengguna" name="role">
                                <option value="">Select role...</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">No Hp</label>
                            <input type="text" autofocus required class="form-control" name="no_hp" placeholder="Masukan No Hp...">
                        </div>
                        <div class="form-group">
                            <label class="visually-hidden" for="autoSizingInputGroup">Instagram</label>
                            <div class="input-group">
                                <div class="input-group-text">@</div>
                                <input type="text" class="form-control" name="instagram" placeholder="Username">
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label class="visually-hidden" for="autoSizingInputGroup">Instagram</label>
                            <div class="input-group-text">@</div>
                            <input type="text" class="form-control" name="instagram" placeholder="Masukan Instagram...">
                        </div> -->
                        <div class="form-group">
                            <label for="exampleInputUsername1">Alamat</label>
                            <input type="text" autofocus required class="form-control" name="alamat" placeholder="Masukan Alamat...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Password</label>
                            <input type="password" autofocus required class="form-control" name="password" placeholder="Masukan Password...">
                        </div>
                        <button type="submit" onclick="return confirm('Apakan Anda yakin ingin menyimpan data ini?')" class="btn btn-primary mt-1 mr-2"><i class="mdi mdi-content-save-all"></i> Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
