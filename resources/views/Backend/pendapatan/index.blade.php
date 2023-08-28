@extends('backend.layouts.index')
@section('container')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Uang Masuk</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">DataUangMasuk</li>
        </ol>
    </div>
    <!-- Row -->
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                        <!-- <a href="/pendapatan/create">
                            <button type="button" class="btn btn-primary btn-xs">
                                <i class="fa fa-plus"></i> Tambah Data
                            </button>
                        </a> -->
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
                                <th class="col-1 align-middle">No</th>
                                <th class="align-middle">Tanggal</th>
                                <th class="align-middle">Layanan</th>
                                <th class="align-middle">Total Pendapatan</th>
                                <!-- <th class="align-middle">Opsi</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($pendapatan as $uang_masuk)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{\Carbon\Carbon::createFromFormat('Y-m-d', $uang_masuk->tanggal)->format('d M Y')}}</td>
                                <td>{{$uang_masuk->layanan->nama_layanan ?? '-'}}</td>
                                <td>Rp {{number_format($uang_masuk->total_pendapatan, 0, ',',)}},-</td>
                                    <!-- <td>
                                    <a href="/uang_masuk/{{$uang_masuk->id}}/edit" class="btn btn-primary btn-sm mb-2 px-3"> Edit </a>
                                    <form action="/uang_masuk/{{$uang_masuk->id}}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')">Hapus</button>
                                    </form>
                                </td> -->
                            </tr>
                            @empty
                            <td colspan="5" class="text-center">-- data tidak ada --</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
