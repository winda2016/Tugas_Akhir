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

    <!-- ClockPicker -->
    <link href="{!! asset('backend/vendor/clock-picker/clockpicker.css') !!}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

    <!-- END nav -->
    <section id="layanan" class="hero-wrap js-fullheight" style="background-image: url(images/D3.png);" width="100%" height="100%">
        <div class="container">
            <div>
                <p class="button pt-3 mx-3"><a href="/" class="btn btn-primary rounded-circle px-4 py-3"><span class="icon icon-arrow-left"> Back</a></p>
            </div>
            <div class="row col-md 6 col-12">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span>Change hair stylist? <b><a href="/pilih_stylist" target="_blank">here</a></b></span>
                    <div>
                        <h3 class="mb-4">Konfirmasi Booking</h3>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="mb-3 row">
                        <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputnohp" class="col-sm-2 col-form-label">No Hp</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="no_hp">
                        </div>
                    </div>
                    <div class="col-md-10 heading-section  ftco-animate">

                        <span class="subheading">Harga yang tertera merupakan harga dasar akan menyesuaikan</span>
                        <p class="button"><a href="#" class="btn btn-warning">Confirm Booking </a></p>
                    </div>

                </div>
                <div class="col-md-7">
                    <div class="mb-2 row">
                        <label for="inputlayanan" class="col-sm-3 col-form-label">Layanan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="layanan">
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="inputemail" class="col-sm-3 col-form-label">Hair Stylist</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="inputnohp" class="col-sm-3 col-form-label">Treatment</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="no_hp">
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="inputnohp" class="col-sm-3 col-form-label">Jam</label>
                        <div class="col-sm-8">
                            <input type="time" class="form-control" id="no_hp">
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label for="clockPicker1">Simple ClockPicker</label>
                        <div class="input-group clockpicker" id="clockPicker1">
                            <input type="time" class="form-control" value="06:30">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-clock"></i></span>
                            </div>
                        </div>
                    </div> -->
                    <div class="mb-2 row">
                        <label for="inputnohp" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="no_hp">
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <!-- ClockPicker -->
    <script src="{{ asset('backend/vendor/clock-picker/clockpicker.js') !!}}"></script>

    <script>
        $(document).ready(function() {

            $('.select2-single').select2();

            // Select2 Single  with Placeholder
            $('.select2-single-placeholder').select2({
                placeholder: "Select a Province",
                allowClear: true
            });

            // Select2 Multiple
            $('.select2-multiple').select2();

            // Bootstrap Date Picker
            $('#simple-date1 .input-group.date').datepicker({
                format: 'dd/mm/yyyy',
                todayBtn: 'linked',
                todayHighlight: true,
                autoclose: true,
            });

            $('#simple-date2 .input-group.date').datepicker({
                startView: 1,
                format: 'dd/mm/yyyy',
                autoclose: true,
                todayHighlight: true,
                todayBtn: 'linked',
            });

            $('#simple-date3 .input-group.date').datepicker({
                startView: 2,
                format: 'dd/mm/yyyy',
                autoclose: true,
                todayHighlight: true,
                todayBtn: 'linked',
            });

            $('#simple-date4 .input-daterange').datepicker({
                format: 'dd/mm/yyyy',
                autoclose: true,
                todayHighlight: true,
                todayBtn: 'linked',
            });

            // TouchSpin

            $('#touchSpin1').TouchSpin({
                min: 0,
                max: 100,
                boostat: 5,
                maxboostedstep: 10,
                initval: 0
            });

            $('#touchSpin2').TouchSpin({
                min: 0,
                max: 100,
                decimals: 2,
                step: 0.1,
                postfix: '%',
                initval: 0,
                boostat: 5,
                maxboostedstep: 10
            });

            $('#touchSpin3').TouchSpin({
                min: 0,
                max: 100,
                initval: 0,
                boostat: 5,
                maxboostedstep: 10,
                verticalbuttons: true,
            });

            $('#clockPicker1').clockpicker({
                donetext: 'Done'
            });

            $('#clockPicker2').clockpicker({
                autoclose: true
            });

            let input = $('#clockPicker3').clockpicker({
                autoclose: true,
                'default': 'now',
                placement: 'top',
                align: 'left',
            });

            $('#check-minutes').click(function(e) {
                e.stopPropagation();
                input.clockpicker('show').clockpicker('toggleView', 'minutes');
            });

        });
    </script>

</body>

</html>
