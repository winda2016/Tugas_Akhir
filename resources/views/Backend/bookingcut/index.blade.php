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
                                <th class="col-1 align-middle">No</th>
                                <th class="align-middle">Nama</th>
                                <th class="align-middle">Email</th>
                                <th class="align-middle">No Hp</th>
                                <th class="align-middle">Layanan</th>
                                <th class="align-middle">Hair Stylist</th>
                                <th class="align-middle">Treatment</th>
                                <th class="align-middle">Tanggal</th>
                                <th class="align-middle">Jam Mulai</th>
                                <th class="align-middle">Durasi</th>
                                <th class="align-middle">Jam Selesai</th>
                                <th class="align-middle">Total Harga</th>
                                <th class="align-middle">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($booking_cuts as $booking_cut)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$booking_cut->user->nama ?? '-'}}</td>
                                <td>{{$booking_cut->user->email ?? '-'}}</td>
                                <td>{{$booking_cut->user->no_hp ?? '-'}}</td>
                                <td>{{$booking_cut->layanan->nama_layanan ?? '-'}}</td>
                                <td>{{$booking_cut->stylist->nama ?? '-'}}</td>
                                <td>
                                    <ul>
                                        @foreach ($booking_cut->treatments as $treatment)
                                        <li>{{ $treatment->nama_treatment }} - Rp{{ number_format($treatment->harga, 0, ',', '.') }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>{{\Carbon\Carbon::createFromFormat('Y-m-d', $booking_cut->tanggal)->format('d M Y')}}</td>
                                <td>{{ isset($booking_cut->jam_mulai) ? \Carbon\Carbon::createFromFormat('H:i:s', $booking_cut->jam_mulai)->format('H:i') : '-' }} WIB
                                </td>
                                <td>{{$booking_cut->total_durasi ?? '-'}} Menit</td>
                                <td>{{ isset($booking_cut->jam_selesai) ? \Carbon\Carbon::createFromFormat('H:i:s', $booking_cut->jam_selesai)->format('H:i') : '-' }} WIB
                                </td>
                                <td>Rp {{number_format($booking_cut->total_harga, 0, ',',)}}</td>
                                <td>
                                    <a href="/bookingcut/{{$booking_cut->id}}/edit" class="btn btn-primary btn-sm mb-2 px-3"> Edit </a>
                                    <form action="/bookingcut/{{$booking_cut->id}}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <td colspan="11"> data tidak ada
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
