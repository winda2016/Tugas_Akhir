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
</head>

<body>
    <section class="ftco-section ftco-booking bg-light">
        <div class="container">
            <div style="position: absolute; top: 0; left: 0;">
                <img id="logo" src="images/logoo_1.png" width="90" height="90" alt="">
            </div>
            <div class="mt-2 mx-2" style="position: absolute; top: 0; right: 0;">
                <a href="/pilih_layanan" class="btn btn-primary rounded-circle px-4 py-3"><span class="icon icon-arrow-left"></span> Back</a>
            </div>

            <div class="row justify-content-center pb-3">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <span class="subheading">Booking</span>
                    <h2 class="mb-4">Konfirmasi Booking</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10 ftco-animate">
                    <form action="{{url('booking')}}" class="appointment-form" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card rounded">
                                    <div class="card-body">
                                        <div class="row">
                                            <table class="border-0">
                                                <tr>
                                                    <td class="col-2">Nama</td>
                                                    <td class="col-1">:</td>
                                                    <td>{{ $booking->user->nama ?? '-' }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Email</td>
                                                    <td class="col-1">:</td>
                                                    <td>{{ $booking->user->email ?? '-' }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">No Hp</td>
                                                    <td class="col-1">:</td>
                                                    <td>{{ $booking->user->no_hp ?? '-' }}</td>
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
                                                    <td class="col-2">Layanan</td>
                                                    <td class="col-1">:</td>
                                                    <td>{{ $booking->layanan->nama_layanan ?? '-' }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2">Stylist</td>
                                                    <td class="col-1">:</td>
                                                    <td>{{ $booking->stylist->nama ?? '-' }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2 align-top">Treatment</td>
                                                    <td class="col-1 align-top">:</td>
                                                    <td>
                                                        @foreach($booking->treatments as $treatment)
                                                        <li>{{$treatment->nama_treatment}}</li>
                                                        @endforeach
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2 align-top">Durasi</td>
                                                    <td class="col-1 align-top">:</td>
                                                    <td class=" align-top">
                                                        @if($booking->treatments)
                                                        @php
                                                        $totalDurasiTreatment = 0.0; // Menggunakan float
                                                        foreach ($booking->treatments as $treatment) {
                                                        $totalDurasiTreatment += (float) $treatment->waktu; // Konversi ke float
                                                        }
                                                        @endphp
                                                        {{$totalDurasiTreatment}} Menit
                                                        @else
                                                        Tidak ada data treatment.
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-2 align-top">Total </td>
                                                    <td class="col-1 align-top">:</td>
                                                    <td class=" align-top">
                                                        @if($booking->treatments)
                                                        @php
                                                        $totalHargaTreatment = 0.0; // Menggunakan float
                                                        foreach ($booking->treatments as $treatment) {
                                                        $totalHargaTreatment += (float) $treatment->harga; // Konversi ke float
                                                        }
                                                        @endphp
                                                        Rp {{ number_format($totalHargaTreatment, 0, ',', '.') }},-
                                                        @else
                                                        Tidak ada data treatment.
                                                        @endif
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <hr>
                                        <div class="row mb-2">
                                            <div class="col-3">
                                                <label for="appointment_date" class="subheading">Tanggal</label>
                                            </div>
                                            <div class="col-9">
                                                <input type="date" name="tanggal" class="form-control" id="appointment_date">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <label for="appointment_date" class="subheading">Jam Mulai</label>
                                            </div>
                                            <div class="col-9">
                                                <input type="time" name="jam_mulai" class="form-control" id="appointment_date">
                                            </div>
                                        </div>
                                        <input type="hidden" name="total_durasi" value="{{$totalDurasiTreatment}}">
                                        <input type="hidden" name="total_harga" value="{{$totalHargaTreatment}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Make an Appointment" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

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
