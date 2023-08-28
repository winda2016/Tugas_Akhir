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
          <li class="nav-item"><a href="{{url('/')}}" class="nav-link btn btn-primary rounded-3 fw-bold"><span class="icon icon-arrow-left me-1"></span>Kembali</a></li>
        </ul>
      </header>
    </div>
  </div>
  <div class="mt-5 pt-5"></div>
  <!-- END nav -->
  <section id="layanan" class="hero-wrap js-fullheight" style="background-image: url(images/D3.png);" width="100%" height="100%">
    <div class="container">

      <div class="row justify-content-center pb-3">
        <div class="col-md-10 heading-section text-center ftco-animate">
          <h1 class="mb-4 fw-bold">PILIH LAYANAN</h1>
        </div>
      </div>

      <div class="row ">
        @foreach($layanans as $layanan)
        <div class="col-lg-6 ftco-animate">
          <div class="pricing-entry pb-3 text-center">
            <div>
              <div class="align-items-center text-center">
                <img class="text-center" src="{{ asset('images/'.$layanan->gambar)}}" width="220" height="220">
              </div>
            </div>
            <form action="layanan/{{$layanan->id}}" method="POST">
              @csrf
              <input type="hidden" name="layanan_id" value="{{ $layanan->id }}">
              <p class="button text-center">
                <button type="submit" class="btn btn-primary px-4 py-3">Pilih</button>
              </p>
            </form>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


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
