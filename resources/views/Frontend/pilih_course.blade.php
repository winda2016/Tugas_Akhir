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
          <li class="nav-item"><a href="{{url('pilih_layanan')}}" class="nav-link btn btn-primary rounded-3 fw-bold"><span class="icon icon-arrow-left me-1"></span>Kembali</a></li>
        </ul>
      </header>
    </div>
  </div>
  <div class="mt-5 pt-5"></div>
  <div class="container mx-auto text-center">
    <h1 class="fw-bold">ACADEMY COURSES</h1>
  </div>
  <div class="row container text-center mx-auto">
    @foreach($courses as $course)
    <div class="col-6">
      <div class="card text-center">
        <div class="card-header">
          <div class="card-title fw-bold">{{$course->nama_course}}</div>
        </div>
        <div class="text-center">
          <img src="{{ asset('images/'.$course->gambar)}}" class="card-img-top" alt="..." style="width: 40%;">
        </div>
        <div class="card-body">
          <p class="text-justify">
            {{$course->deskripsi}}
          </p>
        </div>
        <form action="{{url('detail_course')}}" class="mb-4" method="POST">
          @csrf
          <input type="hidden" name="course" value="{{$course->id}}">
          <input type="hidden" name="harga" value="{{$course->harga}}">
          <div class="d-flex justify-content-center">
            <p class="me-3 my-auto fw-bold">Rp{{ number_format($course->harga, 0, ',', '.') }},-</p>
            <button class="btn btn-primary rounded-3 px-5 fw-bold" type="submit">Register</button>
          </div>
        </form>
      </div>
    </div>
    @endforeach
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
