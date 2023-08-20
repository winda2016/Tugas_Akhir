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
    @include('frontend.header')

    @include('frontend.banner')

    @include('frontend.services')

    <!-- <section class="ftco-section ftco-booking bg-light">
        <div class="container ftco-relative">
            <div class="row justify-content-center pb-3">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <span class="subheading">Booking</span>
                    <h2 class="mb-4">Make an Appointment</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <h3 class="vr">Call Us: 012-3456-7890</h3>
            <div class="row justify-content-center">
                <div class="col-md-10 ftco-animate">
                    <form action="#" class="appointment-form">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="appointment_name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="appointment_email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control appointment_date" placeholder="Date">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control appointment_time" placeholder="Time">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">Professional Makeup</option>
                                            <option value="">Manicure Pedicure</option>
                                            <option value="">Body Treatment</option>
                                            <option value="">Haircut &amp; Coloring</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
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
    </section> -->
    @include('frontend.about')

    @include('frontend.artist')

    @include('frontend.gallery')

    <!-- <section class="ftco-section ftco-pricing">
        <div class="container">
            <div class="row justify-content-center pb-3">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <span class="subheading">Pricing</span>
                    <h2 class="mb-4">Our Prices</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Hair Style</h3>
                            <p><span class="price">$50.00</span> <span class="per">/ session</span></p>
                        </div>
                        <ul>
                            <li>Hair Dryer</li>
                            <li>Hair Coloring</li>
                            <li>Hair Cut</li>
                            <li>Hair Dresser</li>
                            <li>Hair Spa</li>
                        </ul>
                        <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Manicure Pedicure</h3>
                            <p><span class="price">$34.50</span> <span class="per">/ session</span></p>
                        </div>
                        <ul>
                            <li>Manicure</li>
                            <li>Pedicure</li>
                            <li>Coloring</li>
                            <li>Nails</li>
                            <li>Nail Cut</li>
                        </ul>
                        <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry active pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Makeup</h3>
                            <p><span class="price">$54.50</span> <span class="per">/ session</span></p>
                        </div>
                        <ul>
                            <li>Makeup</li>
                            <li>Professional Makeup</li>
                            <li>Blush On</li>
                            <li>Facial Massage</li>
                            <li>Facial Spa</li>
                        </ul>
                        <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Body Treatment</h3>
                            <p><span class="price">$89.50</span> <span class="per">/ session</span></p>
                        </div>
                        <ul>
                            <li>Massage</li>
                            <li>Spa</li>
                            <li>Foot Spa</li>
                            <li>Body Spa</li>
                            <li>Relaxing</li>
                        </ul>
                        <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section class="testimony-section bg-light">
        <div class="container">
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="testimony-img" style="background-image: url(images/testimony-img.jpg);"></div>
                </div>
                <div class="col-md-6 col-lg-7 py-5 pl-md-5">
                    <div class="py-md-5">
                        <div class="heading-section ftco-animate">
                            <span class="subheading">Testimony</span>
                            <h2 class="mb-0">Happy Customer</h2>
                        </div>
                        <div class="carousel-testimony owl-carousel ftco-animate">
                            <div class="item">
                                <div class="testimony-wrap pb-4">
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="user-img" style="background-image: url(images/stylist-1.jpg)">
                                        </div>
                                        <div class="pos ml-3">
                                            <p class="name">Jeff Nucci</p>
                                            <span class="position">Businessman</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap pb-4">
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="user-img" style="background-image: url(images/stylist-2.jpg)">
                                        </div>
                                        <div class="pos ml-3">
                                            <p class="name">Jeff Nucci</p>
                                            <span class="position">Businessman</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap pb-4">
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="user-img" style="background-image: url(images/stylist-3.jpg)">
                                        </div>
                                        <div class="pos ml-3">
                                            <p class="name">Jeff Nucci</p>
                                            <span class="position">Businessman</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap pb-4">
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="user-img" style="background-image: url(images/stylist-4.jpg)">
                                        </div>
                                        <div class="pos ml-3">
                                            <p class="name">Jeff Nucci</p>
                                            <span class="position">Businessman</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap pb-4">
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="user-img" style="background-image: url(images/stylist-5.jpg)">
                                        </div>
                                        <div class="pos ml-3">
                                            <p class="name">Jeff Nucci</p>
                                            <span class="position">Businessman</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    @include('frontend.contact')
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
