@extends('backend.layouts.index')
@section('container')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">DataCourse</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item">Course</li>
            <li class="breadcrumb-item active" aria-current="page">DataCourse</li>
        </ol>
    </div>
    <!-- Row -->
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                    <a href="/course/create">
                        <button type="button" class="btn btn-primary btn-xs">
                            <i class="fa fa-plus"></i> Tambah Data
                        </button>
                    </a>
                </div>
                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="dataTable">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Course</th>
                                <th>Harga</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($courses as $course)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$course->nama_course ?? 'data tidak ada'}}</td>
                                <td>Rp. {{$course->harga ?? 'data tidak ada'}}</td>
                                <td>

                                    <a href="/course/{{$course->id}}/edit" class="btn btn-primary btn-sm"> Edit </a>
                                    <form action="/course/{{$course->id}}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <td colspan="2"> data tidak ada
                            </td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
