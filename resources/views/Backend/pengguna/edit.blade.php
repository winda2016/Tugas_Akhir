@extends('backend.layouts.index')
@section('container')
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h4><i class="mdi mdi-library-plus"></i> Edit Data Pengguna</h4>
            <a href="/pengguna">
              <button type="button" class="btn cur-p btn-dark "><i class="fa fa-arrow-left"></i> Back</button>
            </a>
          </div>
          <hr>
          <form class="forms-sample" action="/pengguna/{{$pengguna->id}}" method="POST">
            @method('PATCH')
            @csrf
            <div class="form-group">
              <label for="exampleInputUsername1">Nama</label>
              <input type="text" autofocus required class="form-control" name="nama" value="{{$pengguna->nama}}" placeholder="Masukan Nama...">
            </div>
            <div class="form-group">
              <label for="exampleInputUsername1">Email</label>
              <input type="text" autofocus required class="form-control" name="email" value="{{$pengguna->email}}" placeholder="Masukan Email...">
            </div>
            <div class="form-group">
              <label for="exampleInputUsername1">Role</label>
              <select class="form-control" data-hide-search="true" data-placeholder="Pilih Role Pengguna" name="role">
                <option value="">Select role...</option>
                <option value="super_admin">Super Admin</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputUsername1">No Hp</label>
              <input type="text" autofocus required class="form-control" name="no_hp" value="{{$pengguna->no_hp}}" placeholder="Masukan No Hp...">
            </div>
            <div class="form-group">
              <label for="exampleInputUsername1">Instagram</label>
              <input type="text" class="form-control" name="instagram" value="{{$pengguna->instagram}}" placeholder="Masukan Instagram...">
            </div>
            <div class="form-group">
              <label for="exampleInputUsername1">Alamat</label>
              <input type="text" autofocus required class="form-control" name="alamat" value="{{$pengguna->alamat}}" placeholder="Masukan Alamat...">
            </div>
            <div class="form-group">
              <label for="exampleInputUsername1">Password</label>
              <input type="password" autofocus required class="form-control" name="password" value="{{$pengguna->password}}" placeholder="Masukan Password...">
            </div>
            <button type="submit" class="btn btn-primary mt-1 mr-2"><i class="mdi mdi-content-save-all"></i> Update Data</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
