<!DOCTYPE html>
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
</head>

<body>

    <!-- END nav -->

    <section id="layanan" class="hero-wrap js-fullheight">
        <div class="container">
            <div>
                <p class="button pt-3 mx-3"><a href="/pilih_layanan" class="btn btn-primary rounded-circle px-4 py-3"><span class="icon icon-arrow-left"> Back</a></p>
            </div>

            <div class="container">
                <div class="row justify-content-center pb-3">
                    <div class="col-md-10 heading-section text-center ftco-animate">
                        <img class="text-center" src="{!! asset('images/logoo_1.png') !!}"></span>
                        <h1 class="mb-4">Pilih Hair Stylist</h1>
                    </div>
                </div>
                <div class="row mx-auto">
                    @foreach($stylists as $stylist)
                    <div class="col-lg-4 ftco-animate">
                        <div class="media block-6 services d-block text-center">
                            <img src="{{ asset('images/'.$stylist->gambar)}}" width="200" height="200">
                            <form action="{{url('stylist')}}/{{$stylist->id}}" method="POST">
                                @csrf
                                <input type="hidden" name="stylist_id" value="{{ $stylist->id }}">
                                <p class="button text-center">
                                    <button type="submit" class="btn btn-primary rounded-circle px-5 py-1">Pilih</button>
                                </p>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
    </section>

    
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


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
