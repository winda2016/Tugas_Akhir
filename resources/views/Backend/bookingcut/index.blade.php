@extends('backend.layouts.index')
@section('container')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">DataBooking HairCut</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">DataBookingHairCut</li>
        </ol>
    </div>
    <!-- Row -->
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                    <a href="/bookingcut/create">
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
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No Hp</th>
                                <th>Layanan</th>
                                <th>Hair Stylist</th>
                                <th>Treatment</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Total</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($booking_cuts as $booking_cut)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$booking_cut->user->nama ?? 'data tidak ada'}}</td>
                                <td>{{$booking_cut->user->email ?? 'data tidak ada'}}</td>
                                <td>{{$booking_cut->user->no_hp ?? 'data tidak ada'}}</td>
                                <td>{{$booking_cut->layanan->nama_layanan ?? 'data tidak ada'}}</td>
                                <td>{{$booking_cut->stylist->nama ?? 'data tidak ada'}}</td>
                                <td>{{$booking_cut->treatment->nama_treatment ?? 'data tidak ada'}}</td>
                                <td>{{$booking_cut->tanggal ?? 'data tidak ada'}}</td>
                                <td>{{$booking_cut->jam ?? 'data tidak ada'}}</td>
                                <td>{{$booking_cut->total ?? 'data tidak ada'}}</td>
                                <td>
                                    <a href="/bookingcut/{{$bookingcut->id}}/edit" class="btn btn-primary btn-sm"> Edit </a>
                                    <form action="/bookingcut/{{$bookingcut->id}}" method="POST" style="display: inline;">
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
