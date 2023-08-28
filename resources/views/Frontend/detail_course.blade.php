<!doctype html>
<html lang="en">

<head>
    <title>Teduh Hair Studio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{!! asset('css/open-iconic-bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/animate.css') !!}">

    <link rel="stylesheet" href="{!! asset('css/owl.carousel.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/owl.theme.default.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/magnific-popup.css') !!}">

    <link rel="stylesheet" href="{!! asset('css/aos.css') !!}">

    <link rel="stylesheet" href="{!! asset('css/ionicons.min.css') !!}">

    <link rel="stylesheet" href="{!! asset('css/bootstrap-datepicker.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/jquery.timepicker.css') !!}">


    <link rel="stylesheet" href="{!! asset('css/flaticon.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/icomoon.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
        .custom-radio {
            display: none;
        }

        .custom-radio+label {
            display: inline-block;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 5px 10px;
            cursor: pointer;
        }

        .custom-radio:checked+label {
            background-color: #428bca;
            color: white;
            border-color: #428bca;
        }
    </style>

</head>

<body>
    <div class="bg-light fixed-top">
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-2">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap" />
                    </svg>
                    <img class="text-center" src="{{asset('images/logoo_1.png')}}"></span>
                </a>
                <ul class="nav nav-pills my-auto">
                    <li class="nav-item"><a href="{{url('pilih_course')}}/2" class="nav-link btn btn-primary rounded-3 fw-bold"><span class="icon icon-arrow-left me-1"></span>Kembali</a></li>
                </ul>
            </header>
        </div>
    </div>
    <div class="mt-5 pt-5"></div>
    <div class="container mx-auto">
        <h1 class="fw-bold text-center">{{strtoupper($course->nama_course)}}</h1>
        <h3 class="fw-bold text-right">Rp{{ number_format($course->harga, 0, ',', '.') }},-</h3>
    </div>
    <div class="row container mx-auto">
        <div class="card">
            <div class="card-body">
                <div class="row d-flex justify-content-center">
                    <div class="col-5">
                        <img src="{{ asset('images/'.$course->gambar)}}" class="card-img-top" alt="..." style="width: 80%;">
                    </div>
                    <div class="col-7">
                        <h5>Apa itu {{$course->nama_course}} ?</h5>
                        <p class="text-justify">{{$course->tentang}}</p>

                        <h5>Apa yang dipelajari di {{$course->nama_course}} ?</h5>
                        <p class="text-justify">{{$course->yang_dipelajari}}</p>

                        <h5>Waktu Pembelajaran :</h5>
                        <p>Senin : 14.00 WIB - 17.00 WIB</p>
                        <p>Selasa : 14.00 WIB - 17.00 WIB</p>
                        <p>Rabu : 14.00 WIB - 17.00 WIB</p>
                        <p>Kamis : 14.00 WIB - 17.00 WIB</p>
                        <p>Jumat : 14.00 WIB - 17.00 WIB</p>
                        <h5>Materi Pembelajaran :</h5>
                        @foreach($course->jadwal as $jadwal)
                        <p>{{$jadwal->hari}} : {{$jadwal->materi}}</p>
                        @endforeach
                        <div>
                            <form action="{{url('booking_academy')}}" method="POST">
                                @csrf
                                @error('batch')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                @foreach($course->angkatan as $angkatan)
                                @if($angkatan->kuota > 0)
                                <input type="radio" name="batch" id="batch_{{ $angkatan->id }}" value="{{ $angkatan->id }}" class="custom-radio">
                                <label for="batch_{{ $angkatan->id }}" class="text-center">
                                    <h5 class="fw-bold">{{ $angkatan->nama_angkatan }}</h5>
                                    {{ date('d M Y', strtotime($angkatan->tgl_mulai)) }} - {{ date('d M Y', strtotime($angkatan->tgl_akhir)) }}
                                </label><br>
                                @else
                                <input type="radio" name="batch" id="batch_{{ $angkatan->id }}" value="{{ $angkatan->id }}" class="custom-radio" disabled>
                                <label for="batch_{{ $angkatan->id }}" class="text-center">
                                    <h5 class="fw-bold">{{ $angkatan->nama_angkatan }}</h5>
                                    <span class="text-danger">KUOTA PENUH</span> <br>
                                    {{ date('d M Y', strtotime($angkatan->tgl_mulai)) }} - {{ date('d M Y', strtotime($angkatan->tgl_akhir)) }}
                                </label><br>
                                @endif
                                @endforeach

                        </div>
                        <button class="btn btn-primary fw-bold" type="submit">Daftar Kursus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="{!! asset('js/jquery.min.js') !!}"></script>
    <script src="{!! asset('js/jquery-migrate-3.0.1.min.js') !!}"></script>
    <script src="{!! asset('js/popper.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('js/jquery.easing.1.3.js') !!}"></script>
    <script src="{!! asset('js/jquery.waypoints.min.js') !!}"></script>
    <script src="{!! asset('js/jquery.stellar.min.js') !!}"></script>
    <script src="{!! asset('js/owl.carousel.min.js') !!}"></script>
    <script src="{!! asset('js/jquery.magnific-popup.min.js') !!}"></script>
    <script src="{!! asset('js/aos.js') !!}"></script>
    <script src="{!! asset('js/jquery.animateNumber.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap-datepicker.js') !!}"></script>
    <script src="{!! asset('js/jquery.timepicker.min.js') !!}"></script>
    <script src="{!! asset('js/scrollax.min.js') !!}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{!! asset('js/google-map.js') !!}"></script>
    <script src="{!! asset('js/main.js') !!}"></script>
</body>

</html>
