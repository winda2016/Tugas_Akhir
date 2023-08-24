<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hipstyle</title>
    <link rel="icon" href="{!! asset('frontend/img/favicon.png') !!}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{!! asset('frontend/css/bootstrap.min.css') !!}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{!! asset('frontend/css/animate.css') !!}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{!! asset('frontend/css/owl.carousel.min.css') !!}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{!! asset('frontend/css/themify-icons.css') !!}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{!! asset('frontend/css/flaticon.css') !!}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{!! asset('frontend/css/magnific-popup.css') !!}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{!! asset('frontend/css/slick.css') !!}">
    <link rel="stylesheet" href="{!! asset('frontend/css/gijgo.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('frontend/css/nice-select.css') !!}">
    <link rel="stylesheet" href="{!! asset('frontend/css/all.css') !!}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{!! asset('frontend/css/style.css') !!}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .priceing_part {
            padding: 0px 0px 40px;
        }
    </style>
</head>

<body>
    <div class="bg-dark">
        <p class="button py-3 mx-3"><a href="/pilih_layanan" class="btn btn-hijau rounded-circle px-4 py-3"><i class="fa-solid fa-arrow-left"></i> Back</a></p>
    </div>
    <section class="priceing_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-lg-6 col-sm-10">
                    <div class="section_tittle">
                        <img class="text-center" src="{{asset('images/logoo_1.png')}}"></span>
                        <h2>Pilih Treatment</h2>
                        <p>Pilih beberapa treatment yang anda inginkan</p>
                    </div>
                </div>
            </div>
            <form action="{{ url('get-booking-treatment') }}" method="POST">
                @csrf
                <div class="container row align-items-center">
                    @foreach($treatments as $treatment)
                    <div class="col-md-6">
                        <div class="single_pricing_item">
                            <div class="single_pricing_text">
                                <input type="checkbox" class="custom-control-input" id="customCheck{{$treatment->id}}" name="selected_treatments[]" value="{{$treatment->id}}">
                                <label class="custom-control-label" for="customCheck{{$treatment->id}}">
                                </label>
                                <h5>{{$treatment->nama_treatment}}</h5>
                                <h6>Rp{{$treatment->harga}}</h6>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-hijau rounded-0">Pilih Treatment</button>
                </div>
            </form>
        </div>
    </section>
    <!-- priceing part end-->



    <!-- jquery plugins here-->

    <script src="{!! asset('frontend/js/jquery-1.12.1.min.js') !!}"></script>
    <!-- popper js -->
    <script src="{!! asset('frontend/js/popper.min.js') !!}"></script>
    <!-- bootstrap js -->
    <script src="{!! asset('frontend/js/bootstrap.min.js') !!}"></script>
    <!-- easing js -->
    <script src="{!! asset('frontend/js/jquery.magnific-popup.js') !!}"></script>
    <!-- swiper js -->
    <script src="{!! asset('frontend/js/swiper.min.js') !!}"></script>
    <!-- swiper js -->
    <script src="{!! asset('frontend/js/masonry.pkgd.js') !!}"></script>
    <!-- particles js -->
    <script src="{!! asset('frontend/js/owl.carousel.min.js') !!}"></script>
    <!-- swiper js -->
    <script src="{!! asset('frontend/js/slick.min.js') !!}"></script>
    <script src="{!! asset('frontend/js/gijgo.min.js') !!}"></script>
    <script src="{!! asset('frontend/js/jquery.nice-select.min.js') !!}"></script>
    <!-- contact js -->
    <script src="{!! asset('frontend/js/jquery.ajaxchimp.min.js') !!}"></script>
    <script src="{!! asset('frontend/js/jquery.form.js') !!}"></script>
    <script src="{!! asset('frontend/js/jquery.validate.min.js') !!}"></script>
    <script src="{!! asset('frontend/js/mail-script.js') !!}"></script>
    <script src="{!! asset('frontend/js/contact.js') !!}"></script>
    <!-- custom js -->
    <script src="{!! asset('frontend/js/custom.js') !!}"></script>
</body>

</html>
