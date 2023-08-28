@extends('backend.layouts.index')
@section('container')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Booking Academy</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">DataBookingAcademy</li>
        </ol>
    </div>
    <!-- Row -->
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                    <a href="/bookingaca/create">
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
                                <th class="col-1 align-middle">No</th>
                                <th class="align-middle">Nama</th>
                                <th class="align-middle">Email</th>
                                <th class="align-middle">No Hp</th>
                                <th class="align-middle">Layanan</th>
                                <th class="align-middle">Angkatan</th>
                                <th class="align-middle">Course</th>
                                <th class="align-middle">Total</th>
                                <th class="align-middle">Bukti Pembayaran</th>
                                <th class="align-middle">Status</th>
                                <th class="align-middle">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($booking_academys as $booking_academy)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$booking_academy->user->nama ?? '-'}}</td>
                                <td>{{$booking_academy->user->email ?? '-'}}</td>
                                <td>{{$booking_academy->user->no_hp ?? '-'}}</td>
                                <td>{{$booking_academy->layanan->nama_layanan ?? '-'}}</td>
                                <td>{{$booking_academy->angkatan->nama_angkatan ?? '-'}}</td>
                                <td>{{$booking_academy->course->nama_course ?? '-'}}</td>
                                <td>{{number_format($booking_academy->total, 0, ',',)}}</td>
                                <td>
                                    <img src="{{ asset('images/'.$booking_academy->gambar)}}" alt="" width="50" height="50">
                                </td>

                                <td>
                                    @if($booking_academy->status === 2)
                                    <div class="badge badge-success">Sudah bayar</div>
                                    @elseif($booking_academy->status === 1)
                                    <div class="badge badge-primary">Proses</div>
                                    @else
                                    <div class="badge badge-danger">Belum bayar</div>
                                    @endif
                                </td>
                                <td>
                                    <a href="/data_academy/{{$booking_academy->id}}/edit" class="btn btn-primary btn-sm mb-2 px-3"> Edit </a>
                                    <form action="/data_academy/{{$booking_academy->id}}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <td colspan="10"> data tidak ada
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
