<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Al-Huda Admin | @yield('title', $title)</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('css/typography.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <style>
        .center-img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
    </style>
</head>

<body>
    <!-- loader Start -->
    {{-- <div id="loading">
        <div id="loading-center">
            <div class="loader">
                <div class="cube">
                    <div class="sides">
                        <div class="top"></div>
                        <div class="right"></div>
                        <div class="bottom"></div>
                        <div class="left"></div>
                        <div class="front"></div>
                        <div class="back"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- loader END -->
    <!-- Sign in Start -->
    <section class="sign-in-page bg-white">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-sm-6 align-self-center">
                    <div class="sign-in-from">
                        <h1 class="mb-0">Masuk</h1>
                        <p>Masukkan email dan password untuk mengakses halaman admin.</p>
                        @if ($errors->any())
                            @foreach ($errors->all() as $err)
                            <div class="z-index-2">
                                <div class="alert text-white bg-danger" role="alert">
                                    <div class="iq-alert-icon">
                                        <i class="ri-information-line"></i>
                                    </div>
                                    <div class="iq-alert-text"><b>Gagal ! </b> {{$err}}</div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="ri-close-line"></i>
                                    </button>
                                </div>
                            </div>
                            @endforeach
                        @endif
                        <form class="mt-4" action="{{ url('/login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control mb-0" id="exampleInputEmail1"
                                    name="email" placeholder="Masukkan Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control mb-0" id="exampleInputPassword1"
                                    name="password" placeholder="Masukkan Password">
                            </div>
                            <div class="d-inline-block w-100">
                                <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 text-center">
                    <div class="sign-in-detail text-white"
                        style="background: url({{ asset('images/login/2.jpg') }}) no-repeat 0 0; background-size: cover;">
                        <a class="sign-in-logo mb-2" href="#">
                            <h2 class="text-white">Al-Huda Admin</h2>
                        </a>
                        <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false"
                            data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1"
                            data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                            <div class="item">
                                <img src="{{ asset('images/local/bg-1.png') }}" style="max-width: 400px;" class="img-fluid mb-2 center-img" alt="logo">
                                <h4 class="mb-1 text-white">Kelola Keuangan Pondok</h4>
                                <p>Kelola keuangan dengan mencatat pemasukan dan pengeluaran Anda.</p>
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/local/bg-2.png') }}" style="max-width: 400px;" class="img-fluid mb-2 center-img" alt="logo">
                                <h4 class="mb-1 text-white">Kelola Data Santri</h4>
                                <p>Mengelola data siswa untuk mempermudah pencatatan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sign in END -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Appear JavaScript -->
    <script src="{{ asset('js/jquery.appear.js') }}"></script>
    <!-- Countdown JavaScript -->
    <script src="{{ asset('js/countdown.min.js') }}"></script>
    <!-- Counterup JavaScript -->
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- Wow JavaScript -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- Apexcharts JavaScript -->
    <script src="{{ asset('js/apexcharts.js') }}"></script>
    <!-- Slick JavaScript -->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!-- Select2 JavaScript -->
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="{{ asset('js/smooth-scrollbar.js') }}"></script>
    <!-- lottie JavaScript -->
    <script src="{{ asset('js/lottie.js') }}"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('js/chart-custom.js') }}"></script>
    <!-- Custom JavaScript -->
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
