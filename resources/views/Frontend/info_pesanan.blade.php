<!DOCTYPE html>
<html lang="en">

<head>
  <title>Teduh Hair Studio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,600,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <style>
    body {
      background-color: aliceblue;
    }
  </style>
</head>

<body>
  <div class="fixed-top bg-light">
    <div class="container">
      <header class="d-flex flex-wrap justify-content-center py-2">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
          <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap" />
          </svg>
          <img class="text-center" src="{{asset('images/logoo_1.png')}}"></span>
        </a>
        <ul class="nav nav-pills my-auto">
          <li class="nav-item"><a href="{{url('/')}}" class="nav-link btn btn-primary rounded-3 fw-bold"><span class="icon icon-arrow-left me-1"></span>Kembali</a></li>
        </ul>
      </header>
    </div>
  </div>
  <div class="mt-5 pt-5"></div>
  <div class="container mx-auto text-center">
    <h1 class="fw-bold mb-5">KONFIRMASI PEMBAYARAN</h1>
  </div>
  <div class="row contaner mx-auto justify-content-center">
    <div class="col-md-10 ftco-animate">
      @if($booking_academy)
      <h5 class="text-center">Konfirmasi Pembayaran Academy</h5>
      @foreach($booking_academy as $booking_aca)
      <div class="row mt-5">
        <div class="col-sm-6">
          <div class="card rounded">
            <div class="card-body">
              <div class="row">
                <table class="border-0">
                  <tr>
                    <td class="col-2">Nama</td>
                    <td class="col-1">:</td>
                    <td>{{ $booking_aca->user->nama ?? '-' }}</td>
                  </tr>
                  <tr>
                    <td class="col-2">Email</td>
                    <td class="col-1">:</td>
                    <td>{{ $booking_aca->user->email ?? '-' }}</td>
                  </tr>
                  <tr>
                    <td class="col-2">No Hp</td>
                    <td class="col-1">:</td>
                    <td>{{ $booking_aca->user->no_hp ?? '-' }}</td>
                  </tr>
                  <tr>
                    <td class="col-2">Total</td>
                    <td class="col-1">:</td>
                    <td>Rp {{number_format($booking_aca->total, 0, ',',)}}</td>
                  </tr>
                  <tr>
                    <td class="col-2">Kursus</td>
                    <td class="col-1">:</td>
                    <td>{{ $booking_aca->course->nama_course ?? '-' }}
                    <td>
                  </tr>
                  <tr>
                    <td class="col-2">Angkatan</td>
                    <td class="col-1">:</td>
                    <td>{{ $booking_aca->angkatan->nama_angkatan ?? '-' }}
                    <td>
                  </tr>
                  <tr>
                    <td class="col-4">Tanggal Mulai</td>
                    <td class="col-1">:</td>
                    <td>{{\Carbon\Carbon::createFromFormat('Y-m-d', $booking_aca->angkatan->tgl_mulai)->format('d M Y')}}</td>
                  </tr>
                  <tr>
                    <td class="col-4">Tanggal Selesai</td>
                    <td class="col-1">:</td>
                    <td>{{\Carbon\Carbon::createFromFormat('Y-m-d', $booking_aca->angkatan->tgl_akhir)->format('d M Y')}}</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card rounded">
            <div class="card-body">
              <div class="row">
                <table class="border-0">
                  <tr>
                    <td class="col-4">Nama Bank</td>
                    <td class="col-1">:</td>
                    <td>BNI (Bank Negara Indonesia)</td>
                  </tr>
                  <tr>
                    <td class="col-4">No Rekening</td>
                    <td class="col-1">:</td>
                    <td>1234567890</td>
                  </tr>
                  <tr>
                    <td class="col-2">Nama</td>
                    <td class="col-1">:</td>
                    <td>Winda Wulandari</td>
                  </tr>
                </table>
              </div>
              <hr>
              @if($booking_aca->status === 0)
              <form action="{{url('konfirmasi_pembayaran_academy')}}/{{$booking_aca->id}}" class="appointment-form" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" class="form-control" name="gambar">
                <div class="form-group">
                  <button class="btn btn-sm btn-primary" type="submit">Upload bukti pembayaran</button>
                </div>
              </form>
              @elseif($booking_aca->status === 1)
              <h6 class="text-primary text-center">Upload bukti pembayaran berhasil</h6>
              @endif
            </div>
          </div>
        </div>
      </div>
      @endforeach
      @endif

      @if($booking_cut)
      <h5 class="text-center mt-3">Konfirmasi Pembayaran Hair Cut</h5>
      @foreach($booking_cut as $booking_cut)
      <div class="row mb-5">
        <div class="col-sm-6">
          <div class="card rounded">
            <div class="card-body">
              <div class="row">
                <table class="border-0">
                  <tr>
                    <td class="col-4">Nama</td>
                    <td class="col-1">:</td>
                    <td>{{ $booking_cut->user->nama ?? '-' }}</td>
                  </tr>
                  <tr>
                    <td class="col-2">Email</td>
                    <td class="col-1">:</td>
                    <td>{{ $booking_cut->user->email ?? '-' }}</td>
                  </tr>
                  <tr>
                    <td class="col-2">No Hp</td>
                    <td class="col-1">:</td>
                    <td>{{ $booking_cut->user->no_hp ?? '-' }}</td>
                  </tr>
                  <tr>
                    <td class="col-2">Total</td>
                    <td class="col-1">:</td>
                    <td>Rp {{number_format($booking_cut->total_harga, 0, ',',)}}</td>
                  </tr>
                  <tr>
                    <td class="col-2">Tanggal</td>
                    <td class="col-1">:</td>
                    <td>{{\Carbon\Carbon::createFromFormat('Y-m-d', $booking_cut->tanggal)->format('d M Y')}}</td>
                  </tr>
                  <tr>
                    <td class="col-2">Stylist</td>
                    <td class="col-1">:</td>
                    <td>{{$booking_cut->stylist->nama ?? '-'}}</td>
                  </tr>
                  <tr>
                    <td class="col-2 align-top">Treatment</td>
                    <td class="col-1 align-top">:</td>
                    <td>
                      @foreach($booking_cut->treatments as $treatment)
                      <span>- {{$treatment->nama_treatment}}</span><br>
                      @endforeach
                    </td>
                  </tr>
                  <tr>
                    <td class="col-2 align-top">Jam</td>
                    <td class="col-1 align-top">:</td>
                    <td>{{ \Carbon\Carbon::parse($booking_cut->jam_mulai)->format('H:i') }} WIB - {{ \Carbon\Carbon::parse($booking_cut->jam_selesai)->format('H:i') }} WIB</td>
                  </tr>
                  <tr>
                    <td class="col-2">Durasi</td>
                    <td class="col-1">:</td>
                    <td>{{$booking_cut->total_durasi ?? '-'}} Menit</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card rounded">
            <div class="card-body">
              <div class="row">
                <table class="border-0">
                  <tr>
                    <td class="col-4">Nama Bank</td>
                    <td class="col-1">:</td>
                    <td>BNI (Bank Negara Indonesia)</td>
                  </tr>
                  <tr>
                    <td class="col-4">No Rekening</td>
                    <td class="col-1">:</td>
                    <td>1234567890</td>
                  </tr>
                  <tr>
                    <td class="col-2">Nama</td>
                    <td class="col-1">:</td>
                    <td>Winda Wulandari</td>
                  </tr>
                </table>
              </div>
              <hr>
              @if($booking_cut->status === 0)
              <form action="{{url('konfirmasi_pembayaran_haircut')}}/{{$booking_cut->id}}" class="appointment-form" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" class="form-control" name="gambar">
                <div class="form-group">
                  <button class="btn btn-sm btn-primary" type="submit">Upload bukti pembayaran</button>
                </div>
              </form>
              @elseif($booking_cut->status === 1)
              <h6 class="text-primary text-center">Upload bukti pembayaran berhasil</h6>
              @endif
            </div>
          </div>
        </div>
      </div>
      @endforeach
      @endif
    </div>
  </div>

  <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg>
  </div>



  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>
