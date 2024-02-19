@extends('app')
@section('sidebar')
    <!-- Sidebar  -->
    <div class="iq-sidebar">
        <div class="iq-sidebar-logo d-flex justify-content-between">
            <a href="index.html">
                <span>Al-Huda Admin</span>
            </a>
        </div>
        <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
                <ul id="iq-sidebar-toggle" class="iq-menu">
                    <li class="iq-menu-title">
                        <i class="ri-separator"></i><span>Main</span>
                    </li>
                    <li class="active">
                        <a href="{{ route('beranda') }}" class="iq-waves-effect">
                            <i class="ri-home-4-line"></i><span>Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="#pembayaran" class="iq-waves-effect collapsed" data-toggle="collapse"
                            aria-expanded="false"><i class="ri-chat-check-line"></i><span>Pembayaran</span>
                            <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                        </a>
                        <ul id="pembayaran" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="{{ route('daftar_ulang') }}">Daftar Ulang</a></li>
                            <li><a href="{{ route('iuran_bulanan') }}">Iuran Bulanan</a></li>
                            <li><a href="{{ route('tamrin') }}">Tamrin</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('pengeluaran') }}" class="iq-waves-effect"><i class="ri-message-line"></i><span>Pengeluaran</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('laporan_keuangan') }}" class="iq-waves-effect"><i class="ri-calendar-2-line"></i><span>Laporan
                                Keuangan</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('santri') }}" class="iq-waves-effect"><i class="ri-user-line"></i><span>Santri</span>
                        </a>
                    </li>
                    {{-- Tambahan Menu --}}
                    <li class="iq-menu-title">
                        <i class="ri-separator"></i><span>Master</span>
                    </li>
                    <li>
                        <a href="" class="iq-waves-effect"><i class="ri-profile-line"></i><span>Master Admin</span>
                        </a>
                    </li>
                    <li>
                        <a href="" class="iq-waves-effect"><i class="ri-pencil-ruler-line"></i><span>Master Guest</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="p-3"></div>
        </div>
    </div>
@endsection
@section('navbar')
    <!-- TOP Nav Bar -->
    <div class="iq-top-navbar">
        <div class="iq-navbar-custom">
            <div class="iq-sidebar-logo">
                <div class="top-logo">
                    <a href="index.html" class="logo">
                        <span>Al-Huda Admin</span>
                    </a>
                </div>
            </div>
            {{-- Halaman --}}
            <div class="navbar-breadcrumb">
                <h5 class="mb-0">Beranda</h5>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/beranda') }}">Main</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Beranda</li>
                    </ul>
                </nav>
            </div>
            {{-- Logo Kanan --}}
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                </button>
                <div class="iq-menu-bt align-self-center">
                    <div class="wrapper-menu">
                        <div class="line-menu half start"></div>
                        <div class="line-menu"></div>
                        <div class="line-menu half end"></div>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list">
                        {{-- Notif --}}
                        <li class="nav-item">
                            <a href="#" class="search-toggle iq-waves-effect">
                                <i class="ri-notification-2-line"></i>
                                <span class="bg-danger dots"></span>
                            </a>
                            <div class="iq-sub-dropdown">
                                <div class="iq-card iq-card-block iq-card-stretch iq-card-height shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                        <div class="bg-danger p-3">
                                            <h5 class="mb-0 text-white">All Notifications<small
                                                    class="badge  badge-light float-right pt-1">4</small></h5>
                                        </div>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">New Order Recieved</h6>
                                                    <small class="float-right font-size-12">23 hrs ago</small>
                                                    <p class="mb-0">Lorem is simply</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="{{ asset('images/user/01.jpg') }}" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Emma Watson Nik</h6>
                                                    <small class="float-right font-size-12">Just Now</small>
                                                    <p class="mb-0">95 MB</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="{{ asset('images/user/02.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">New customer is join</h6>
                                                    <small class="float-right font-size-12">5 days ago</small>
                                                    <p class="mb-0">Jond Nik</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40" src="{{ asset('images/small/jpg.svg') }}" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Updates Available</h6>
                                                    <small class="float-right font-size-12">Just Now</small>
                                                    <p class="mb-0">120 MB</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        {{-- FullScreen --}}
                        <li class="nav-item iq-full-screen"><a href="#" class="iq-waves-effect"
                                id="btnFullscreen"><i class="ri-fullscreen-line"></i></a></li>
                    </ul>
                </div>
                <ul class="navbar-list">
                    <li>
                        <a href="#" class="search-toggle iq-waves-effect bg-white text-white"><img
                                src="{{ asset('images/local/user-1.png') }}" class="img-fluid rounded" alt="user"></a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height shadow-none m-0">
                                <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                        <h5 class="mb-0 text-white line-height">{{ Auth::user()->nama }}</h5>
                                        <span class="text-white font-size-12">Online</span>
                                    </div>
                                    <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                        <div class="media align-items-center">
                                            <div class="rounded iq-card-icon iq-bg-primary">
                                                <i class="ri-file-user-line"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Profil Saya</h6>
                                                <p class="mb-0 font-size-12">Tampilkan data pribadi saya.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-secondary-hover">
                                        <div class="media align-items-center">
                                            <div class="rounded iq-card-icon iq-bg-secondary">
                                                <i class="ri-lock-line"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Setelan Privasi</h6>
                                                <p class="mb-0 font-size-12">Kontrol parameter privasi Anda.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="d-inline-block w-100 text-center p-3">
                                        <a class="iq-bg-danger iq-sign-btn btn-block" href="{{ url('/logout') }}" role="button">Keluar<i
                                                class="ri-login-box-line ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
@section('content')
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <!-- Card -->
        <div class="container-fluid">
            <div class="d-flex">
                <div class="col iq-card iq-card-block iq-card-stretch iq-card-height-half me-2">
                    <div class="iq-card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <img src="{{ asset('images/local/pemasukan.png') }}" width="50px" alt="">
                            </div>
                            <div class="col-lg">
                                <span class="font-size-14">Pemasukan Pondok</span>
                                <h5 class="fw-bold text-success">Rp. {{ number_format($totalPemasukan, 0, ',', '.') }}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col iq-card iq-card-block iq-card-stretch iq-card-height-half ms-2 me-2">
                    <div class="iq-card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <img src="{{ asset('images/local/pengeluaran.png') }}" width="50px" alt="">
                            </div>
                            <div class="col-lg">
                                <span class="font-size-14">Pengeluaran Pondok</span>
                                <h5 class="fw-bold text-danger">Rp. {{ number_format($totalPengeluaran, 0, ',', '.') }}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col iq-card iq-card-block iq-card-stretch iq-card-height-half ms-2 me-2">
                    <div class="iq-card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <img src="{{ asset('images/local/total_uang.png') }}" width="50px" alt="">
                            </div>
                            <div class="col-lg">
                                <span class="font-size-14">Total Keuangan Pondok</span>
                                <h5 class="fw-bold text-primary">Rp. {{ number_format($totalKeuangan, 0, ',', '.') }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col iq-card iq-card-block iq-card-stretch iq-card-height-half ms-2">
                    <div class="iq-card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <img src="{{ asset('images/local/group.png') }}" width="50px" alt="">
                            </div>
                            <div class="col-lg">
                                <span class="font-size-14">Total Santri Pondok</span>
                                <h5 class="fw-bold text-warning">{{ $totalsantri }} Santri</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            {{-- Grafik Keuangan --}}
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height fadeInUp p-2">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Grafik Keuangan</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <div id="chart_keuangan"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-body pb-0">
                            <div class="rounded-circle iq-card-icon iq-bg-primary"><i class="ri-exchange-dollar-fill"></i>
                            </div>
                            <span class="float-right line-height-6">Net Worth</span>
                            <div class="clearfix"></div>
                            <div class="text-center">
                                <h2 class="mb-0"><span class="counter">65</span><span>M</span></h2>
                                <p class="mb-0 text-secondary line-height"><i
                                        class="ri-arrow-up-line text-success mr-1"></i><span
                                        class="text-success">10%</span> Increased</p>
                            </div>
                        </div>
                        <div id="chart-1"></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-body pb-0">
                            <div class="rounded-circle iq-card-icon iq-bg-warning"><i
                                    class="ri-bar-chart-grouped-line"></i></div>
                            <span class="float-right line-height-6">Todays Gains</span>
                            <div class="clearfix"></div>
                            <div class="text-center">
                                <h2 class="mb-0"><span>$</span><span class="counter">4500</span></h2>
                                <p class="mb-0 text-secondary line-height"><i
                                        class="ri-arrow-up-line text-success mr-1"></i><span
                                        class="text-success">20%</span> Increased</p>
                            </div>
                        </div>
                        <div id="chart-2"></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-body pb-0">
                            <div class="rounded-circle iq-card-icon iq-bg-success"><i class="ri-group-line"></i>
                            </div>
                            <span class="float-right line-height-6">Total Users</span>
                            <div class="clearfix"></div>
                            <div class="text-center">
                                <h2 class="mb-0"><span class="counter">96.6</span><span>K</span></h2>
                                <p class="mb-0 text-secondary line-height"><i
                                        class="ri-arrow-up-line text-success mr-1"></i><span
                                        class="text-success">30%</span> Increased</p>
                            </div>
                        </div>
                        <div id="chart-3"></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-body pb-0">
                            <div class="rounded-circle iq-card-icon iq-bg-danger"><i class="ri-shopping-cart-line"></i>
                            </div>
                            <span class="float-right line-height-6">Orders Received</span>
                            <div class="clearfix"></div>
                            <div class="text-center">
                                <h2 class="mb-0"><span class="counter">15.5</span><span>K</span></h2>
                                <p class="mb-0 text-secondary line-height"><i
                                        class="ri-arrow-down-line text-danger mr-1"></i><span
                                        class="text-danger">10%</span> Increased</p>
                            </div>
                        </div>
                        <div id="chart-4"></div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Monthly sales trend </h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link active">Latest</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Month</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">All Time</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="d-flex justify-content-around">
                                <div class="price-week-box mr-5">
                                    <span>Current Week</span>
                                    <h2>$<span class="counter">180</span> <i
                                            class="ri-funds-line text-success font-size-18"></i></h2>
                                </div>
                                <div class="price-week-box">
                                    <span>Previous Week</span>
                                    <h2>$<span class="counter">52.55</span><i
                                            class="ri-funds-line text-danger font-size-18"></i></h2>
                                </div>
                            </div>
                        </div>
                        <div id="chart-5"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height animation-card">
                        <div class="iq-card-body p-0">
                            <div class="an-text">
                                <span>Quarterly Target </span>
                                <h2 class="display-4 font-weight-bold">$<span>2M</span></h2>
                            </div>
                            <div class="an-img">
                                <div class="bodymovin" data-bm-path="images/small/data.json" data-bm-renderer="svg"
                                    data-bm-loop="true"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-lg-8">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Top Grossing</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <div class="dropdown">
                                    <span class="dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown">
                                        <i class="ri-more-2-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-pencil-fill mr-2"></i>Edit</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-printer-fill mr-2"></i>Print</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-file-download-fill mr-2"></i>Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="media-sellers">
                                        <div class="media-sellers-img">
                                            <img src="images/page-img/01.jpg" class="mr-3 rounded" alt="">
                                        </div>
                                        <div class="media-sellers-media-info">
                                            <h5 class="mb-0"><a class="text-dark" href="#">Android
                                                    Tablet</a></h5>
                                            <p class="mb-1">Android 10 supported tablet with best features.</p>
                                            <div class="sellers-dt">
                                                <span class="font-size-12">Vendor: <a href="#">
                                                        iqonicdesign</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 text-center mt-3">
                                    <h5 class="mb-0">20,019</h5>
                                    <span>Sales</span>
                                </div>
                                <div class="col-sm-2 text-center mt-3">
                                    <ul class="list-inline mb-0 list-star">
                                        <li class="list-inline-item text-warning"><i class="ri-star-fill"></i>
                                        </li>
                                        <li class="list-inline-item text-warning"><i class="ri-star-fill"></i>
                                        </li>
                                        <li class="list-inline-item text-warning"><i class="ri-star-fill"></i>
                                        </li>
                                        <li class="list-inline-item text-warning"><i class="ri-star-fill"></i>
                                        </li>
                                        <li class="list-inline-item text-warning"><i class="ri-star-fill"></i>
                                        </li>
                                    </ul>
                                    <span>Rating</span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-sm-8">
                                    <div class="media-sellers">
                                        <div class="media-sellers-img">
                                            <img src="images/page-img/02.jpg" class="mr-3 rounded" alt="">
                                        </div>
                                        <div class="media-sellers-media-info">
                                            <h5 class="mb-0"><a class="text-dark" href="#">Apple
                                                    Watch</a></h5>
                                            <p class="mb-1">Latest model of apple watch for productivity.</p>
                                            <div class="sellers-dt">
                                                <span class="font-size-12">Vendor: <a href="#">Apple</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 text-center mt-3">
                                    <h5 class="mb-0">56,112</h5>
                                    <span>Sales</span>
                                </div>
                                <div class="col-sm-2 text-center mt-3">
                                    <ul class="list-inline mb-0 list-star">
                                        <li class="list-inline-item text-warning"><i class="ri-star-fill"></i>
                                        </li>
                                        <li class="list-inline-item text-warning"><i class="ri-star-fill"></i>
                                        </li>
                                        <li class="list-inline-item text-warning"><i class="ri-star-fill"></i>
                                        </li>
                                        <li class="list-inline-item text-warning"><i class="ri-star-fill"></i>
                                        </li>
                                        <li class="list-inline-item text-warning"><i class="ri-star-fill"></i>
                                        </li>
                                    </ul>
                                    <span>Rating</span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-sm-8">
                                    <div class="media-sellers">
                                        <div class="media-sellers-img">
                                            <img src="images/page-img/03.jpg" class="mr-3 rounded" alt="">
                                        </div>
                                        <div class="media-sellers-media-info">
                                            <h5 class="mb-0"><a class="text-dark" href="#">I-Phone &
                                                    I-Mac</a></h5>
                                            <p class="mb-1">Best ever combo package for work and personal use.
                                            </p>
                                            <div class="sellers-dt">
                                                <span class="font-size-12">Vendor: <a href="#"> Iqonic
                                                        devices</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 text-center mt-3">
                                    <h5 class="mb-0">9,895</h5>
                                    <span>Sales</span>
                                </div>
                                <div class="col-sm-2 text-center mt-3">
                                    <ul class="list-inline mb-0 list-star">
                                        <li class="list-inline-item text-warning"><i class="ri-star-fill"></i>
                                        </li>
                                        <li class="list-inline-item text-warning"><i class="ri-star-fill"></i>
                                        </li>
                                        <li class="list-inline-item text-warning"><i class="ri-star-fill"></i>
                                        </li>
                                        <li class="list-inline-item text-warning"><i class="ri-star-fill"></i>
                                        </li>
                                        <li class="list-inline-item text-warning"><i class="ri-star-fill"></i>
                                        </li>
                                    </ul>
                                    <span>Rating</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Support Tickets</h4>
                                    </div>
                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle dropdown-bg" id="dropdownMenuButton2"
                                                data-toggle="dropdown">View all</span>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i
                                                        class="ri-eye-fill mr-2"></i>View</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ri-pencil-fill mr-2"></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ri-printer-fill mr-2"></i>Print</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ri-file-download-fill mr-2"></i>Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div class="media-support">
                                        <div class="media-support-header mb-2">
                                            <div class="media-support-user-img mr-3">
                                                <img class="rounded-circle" src="images/user/1.jpg" alt="">
                                            </div>
                                            <div class="media-support-info mt-2">
                                                <h6 class="mb-0"><a href="#" class="">Nik
                                                        Jordan</a></h6>
                                                <small>2 day ago</small>
                                            </div>
                                            <div class="mt-3">
                                                <span class="badge badge-success">Pending</span>
                                            </div>
                                        </div>
                                        <div class="media-support-body">
                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry.</p>
                                        </div>
                                    </div>
                                    <hr class="mt-4 mb-4">
                                    <div class="media-support">
                                        <div class="media-support-header mb-2">
                                            <div class="media-support-user-img mr-3">
                                                <img class="rounded-circle" src="images/user/02.jpg" alt="">
                                            </div>
                                            <div class="media-support-info mt-2">
                                                <h6 class="mb-0"><a href="#" class="">Lily
                                                        Wozniak</a></h6>
                                                <small>2 day ago</small>
                                            </div>
                                            <div class="mt-3">
                                                <span class="badge badge-warning text-white">Working</span>
                                            </div>
                                        </div>
                                        <div class="media-support-body">
                                            <p class="mb-0">It is a long established fact that a reader will be
                                                distracted by the readable layout.</p>
                                        </div>
                                    </div>
                                    <hr class="mt-4 mb-4">
                                    <div class="media-support">
                                        <div class="media-support-header mb-2">
                                            <div class="media-support-user-img mr-3">
                                                <img class="rounded-circle" src="images/user/03.jpg" alt="">
                                            </div>
                                            <div class="media-support-info mt-2">
                                                <h6 class="mb-0"><a href="#" class="">Samuel
                                                        Path</a></h6>
                                                <small>2 day ago</small>
                                            </div>
                                            <div class="mt-3">
                                                <span class="badge badge-primary">Open</span>
                                            </div>
                                        </div>
                                        <div class="media-support-body">
                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry.</p>
                                        </div>
                                    </div>
                                    <hr class="mt-4 mb-4">
                                    <div class="media-support">
                                        <div class="media-support-header mb-2">
                                            <div class="media-support-user-img mr-3">
                                                <img class="rounded-circle" src="images/user/04.jpg" alt="">
                                            </div>
                                            <div class="media-support-info mt-2">
                                                <h6 class="mb-0"><a href="#" class="">Mia Mai</a>
                                                </h6>
                                                <small>2 day ago</small>
                                            </div>
                                            <div class="mt-3">
                                                <span class="badge badge-danger">Closed</span>
                                            </div>
                                        </div>
                                        <div class="media-support-body">
                                            <p class="mb-0">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its
                                                layout.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Cash flow</h4>
                                    </div>
                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle text-primary" id="dropdownMenuButton3"
                                                data-toggle="dropdown">
                                                <i class="ri-more-2-fill"></i>
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i
                                                        class="ri-eye-fill mr-2"></i>View</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ri-pencil-fill mr-2"></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ri-printer-fill mr-2"></i>Print</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ri-file-download-fill mr-2"></i>Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="bar-chart-6"></div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-body p-0">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-lg-6">
                                            <div class="p-4">
                                                <div class=" d-flex align-items-center">
                                                    <a href="#" class="iq-icon-box rounded-circle iq-bg-primary">
                                                        <i class="ri-facebook-fill"></i>
                                                    </a>
                                                    <h4 class="mb-0"><span class="counter">200</span>k<small
                                                            class="d-block font-size-14">Posts</small></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="wave-chart-7"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-body p-0">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-lg-6">
                                            <div class="p-4">
                                                <div class=" d-flex align-items-center">
                                                    <a href="#" class="iq-icon-box rounded-circle iq-bg-success">
                                                        <i class="ri-twitter-fill"></i>
                                                    </a>
                                                    <h4 class="mb-0"><span class="counter">400</span>k<small
                                                            class="d-block font-size-14">Tweets</small></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="wave-chart-8"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Activity timeline</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <div class="dropdown">
                                    <span class="dropdown-toggle text-primary" id="dropdownMenuButton4"
                                        data-toggle="dropdown">
                                        View All
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-pencil-fill mr-2"></i>Edit</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-printer-fill mr-2"></i>Print</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-file-download-fill mr-2"></i>Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <ul class="iq-timeline">
                                <li>
                                    <div class="timeline-dots"></div>
                                    <h6 class="float-left mb-1">Client Login</h6>
                                    <small class="float-right mt-1">24 November 2019</small>
                                    <div class="d-inline-block w-100">
                                        <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-dots border-success"></div>
                                    <h6 class="float-left mb-1">Scheduled Maintenance</h6>
                                    <small class="float-right mt-1">23 November 2019</small>
                                    <div class="d-inline-block w-100">
                                        <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-dots border-danger"></div>
                                    <h6 class="float-left mb-1">Dev Meetup</h6>
                                    <small class="float-right mt-1">20 November 2019</small>
                                    <div class="d-inline-block w-100">
                                        <p>Bonbon macaroon jelly beans <a href="#">gummi bears</a>gummi bears
                                            jelly lollipop apple</p>
                                        <div class="iq-media-group">
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="images/user/05.jpg"
                                                    alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="images/user/06.jpg"
                                                    alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="images/user/07.jpg"
                                                    alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="images/user/08.jpg"
                                                    alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="images/user/09.jpg"
                                                    alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="images/user/10.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-dots border-primary"></div>
                                    <h6 class="float-left mb-1">Client Call</h6>
                                    <small class="float-right mt-1">19 November 2019</small>
                                    <div class="d-inline-block w-100">
                                        <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-dots border-warning"></div>
                                    <h6 class="float-left mb-1">Mega event</h6>
                                    <small class="float-right mt-1">15 November 2019</small>
                                    <div class="d-inline-block w-100">
                                        <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="iq-card">
                        <img src="images/small/img-1.jpg" class="img-fluid w-100 rounded" alt="#">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">How to setup E-store</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <div class="dropdown">
                                    <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                        <i class="ri-settings-5-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-pencil-fill mr-2"></i>Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <span class="font-size-16">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.</span>
                            <small class="text-muted mt-3 d-inline-block w-100">Saturday, 7 December 2019</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Order Summary</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <div class="dropdown">
                                    <span class="dropdown-toggle text-primary" id="dropdownMenuButton5"
                                        data-toggle="dropdown">
                                        <i class="ri-more-2-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-pencil-fill mr-2"></i>Edit</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-printer-fill mr-2"></i>Print</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-file-download-fill mr-2"></i>Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">Package No.</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Delivery</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Progress</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#0879985</td>
                                            <td>26/12/2019</td>
                                            <td>30/12/2019</td>
                                            <td>
                                                <div class="badge badge-pill badge-success">Moving</div>
                                            </td>
                                            <td>Victoria 8007 Australia</td>
                                            <td>
                                                <div class="iq-progress-bar">
                                                    <span class="bg-success" data-percent="90"></span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#0879984</td>
                                            <td>23/12/2019</td>
                                            <td>27/12/2019</td>
                                            <td>
                                                <div class="badge badge-pill badge-warning text-white">Pending
                                                </div>
                                            </td>
                                            <td>Athens 2745 Greece</td>
                                            <td>
                                                <div class="iq-progress-bar">
                                                    <span class="bg-warning" data-percent="70"></span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#0879983</td>
                                            <td>18/12/2019</td>
                                            <td>21/12/2019</td>
                                            <td>
                                                <div class="badge badge-pill badge-danger">Canceled</div>
                                            </td>
                                            <td>Victoria 8007 Australia</td>
                                            <td>
                                                <div class="iq-progress-bar">
                                                    <span class="bg-danger" data-percent="48"></span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#0879982</td>
                                            <td>14/12/2019</td>
                                            <td>20/12/2019</td>
                                            <td>
                                                <div class="badge badge-pill badge-info">Working</div>
                                            </td>
                                            <td>Delhi 0014 India</td>
                                            <td>
                                                <div class="iq-progress-bar">
                                                    <span class="bg-info" data-percent="90"></span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#0879981</td>
                                            <td>10/12/2019</td>
                                            <td>18/12/2019</td>
                                            <td>
                                                <div class="badge badge-pill badge-success">Moving</div>
                                            </td>
                                            <td>Alabama 2741 USA</td>
                                            <td>
                                                <div class="iq-progress-bar">
                                                    <span class="bg-success" data-percent="45"></span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
@section('js')
    {{-- Chart --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil data dari controller menggunakan AJAX
            fetch('{{ route('beranda.chart') }}')
                .then(response => response.json())
                .then(data => {
                    // Data yang diterima dari controller
                    const pemasukan = data.map(item => item.total_pemasukan);
                    const pengeluaran = data.map(item => item.total_pengeluaran);
                    const bulanTahun = data.map(item => {
                        const namaBulan = new Date(item.tahun, item.bulan - 1, 1).toLocaleDateString(
                            'id-ID', {
                                month: 'long'
                            });
                        return `${namaBulan} ${item.tahun}`;
                    });

                    // Konfigurasi chart
                    const chartBeranda = {
                        chart: {
                            height: 407,
                            type: 'line',
                            zoom: {
                                enabled: false
                            },
                            toolbar: {
                                show: false
                            },
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            width: [5, 7],
                            curve: 'straight',
                            dashArray: [0, 8, 5]
                        },
                        series: [{
                                name: "Pemasukan",
                                data: pemasukan
                            },
                            {
                                name: "Pengeluaran",
                                data: pengeluaran
                            },
                        ],
                        legend: {
                            show: false
                        },
                        markers: {
                            size: 0,
                            hover: {
                                sizeOffset: 6
                            }
                        },
                        xaxis: {
                            categories: bulanTahun
                        },
                        yaxis: {
                            labels: {
                                show: false
                            }
                        },
                        tooltip: {
                            y: [{
                                    title: {
                                        formatter: function(val) {
                                            return val + " (Rp)";
                                        }
                                    }
                                },
                                {
                                    title: {
                                        formatter: function(val) {
                                            return val + " (Rp)";
                                        }
                                    }
                                }
                            ]
                        },
                        grid: {
                            borderColor: '#f1f1f1',
                        }
                    };

                    // Render chart
                    const chartBerandaInstance = new ApexCharts(document.querySelector("#chart_keuangan"),
                        chartBeranda);
                    chartBerandaInstance.render();
                });
        });
    </script>
@endsection
