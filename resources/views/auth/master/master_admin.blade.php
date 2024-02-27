@extends('auth/app_auth')
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
                    <li>
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
                        <a href="{{ route('pengeluaran') }}" class="iq-waves-effect"><i
                                class="ri-message-line"></i><span>Pengeluaran</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('laporan_keuangan') }}" class="iq-waves-effect"><i
                                class="ri-calendar-2-line"></i><span>Laporan
                                Keuangan</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('santri') }}" class="iq-waves-effect"><i
                                class="ri-user-line"></i><span>Santri</span>
                        </a>
                    </li>
                    {{-- Tambahan Menu --}}
                    <li class="iq-menu-title">
                        <i class="ri-separator"></i><span>Master</span>
                    </li>
                    <li class="active">
                        <a href="{{ route('master_admin') }}" class="iq-waves-effect"><i
                                class="ri-profile-line"></i><span>Master Admin</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('master_guest') }}" class="iq-waves-effect"><i
                                class="ri-pencil-ruler-line"></i><span>Master Guest</span>
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
                <h5 class="mb-0">{{ $title }}</h5>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/master_admin') }}">Master</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Master Admin</li>
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
                                                    <img class="avatar-40 rounded" src="{{ asset('images/user/01.jpg') }}"
                                                        alt="">
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
                                                    <img class="avatar-40 rounded"
                                                        src="{{ asset('images/user/02.jpg') }}" alt="">
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
                                                    <img class="avatar-40" src="{{ asset('images/small/jpg.svg') }}"
                                                        alt="">
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
                                src="{{ asset('images/local/user-1.png') }}" class="img-fluid rounded"
                                alt="user"></a>
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
                                        <a class="iq-bg-danger iq-sign-btn btn-block" href="{{ url('/logout') }}"
                                            role="button">Keluar<i class="ri-login-box-line ml-2"></i></a>
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
    <div id="content-page" class="content-page">
        <div class="container-fluid col-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card iq-mb-3 text-white bg-secondary">
                        <div class="card-body">
                            <h4 class="card-title text-white">Informasi</h4>
                            <blockquote class="blockquote mb-0">
                                <p class="font-size-14">
                                    Data master adalah informasi penting yang mengelola nominal daftar ulang, nominal
                                    tamrin, dan berbagai jenis pembayaran iuran bulanan. Ini mencakup biaya pendaftaran atau
                                    perpanjangan keanggotaan (daftar ulang), kontribusi reguler (tamrin), dan jenis-jenis
                                    pembayaran iuran bulanan. Pengelolaan data master yang efisien dan akurat penting untuk menjaga
                                    konsistensi dan keberlangsungan sistem atau organisasi.
                                </p>
                                <footer class="blockquote-footer text-white font-size-12">Developer</footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Alert -->
        <div class="container-fluid">
            @if (session('success'))
                <div id="success-alert" class="alert text-white bg-success" role="alert">
                    <div class="iq-alert-icon">
                        <i class="ri-checkbox-circle-line"></i>
                    </div>
                    <div class="iq-alert-text"><b>Berhasil !</b> {{ session('success') }}</div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
            @endif
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <div id="error-alert" class="alert text-white bg-danger" role="alert">
                        <div class="iq-alert-icon">
                            <i class="ri-information-line"></i>
                        </div>
                        <div class="iq-alert-text"><b>Gagal ! </b> {{ $err }}</div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="ri-close-line"></i>
                        </button>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="d-flex">
            {{-- Daftar Ulang --}}
            <div class="container-fluid col-6">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Daftar Ulang</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <form action="{{ url('/master/master_admin') }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label for="daftar_ulang">Nominal</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="daftar_ulang">Rp.</span>
                                            </div>
                                            <input type="number" class="form-control" id="daftar_ulang"
                                                name="daftar_ulang" value="{{ $daftar_ulang }}" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Tamrin --}}
            <div class="container-fluid col-6">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Tamrin</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <form action="{{ url('/master/master_admin') }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label for="daftar_ulang">Nominal</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="tamrin">Rp.</span>
                                            </div>
                                            <input type="number" class="form-control" id="tamrin" name="tamrin"
                                                value="{{ $tamrin }}" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Iuran Bulanan --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Iuran Bulanan</h4>
                            </div>
                            <div class="text-right">
                                <button type="button" class="btn btn-primary mt-1" data-toggle="modal"
                                    data-target="#exampleModalCenter">
                                    Tambah Jenis Iuran
                                </button>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form action="{{ url('/master/master_admin') }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="jenis_iuran">Jenis Iuran <span class="text-danger">*</span></label>
                                        <select class="form-control" name="jenis_iuran" id="jenis_iuran">
                                            @foreach ($jenis_iurans as $j)
                                                <option value="{{ $j->id }}" data-nominal="{{ $j->pembayaran_jenis_iuran }}">{{ $j->jenis_iuran }}</option>
                                            @endforeach
                                        </select>
                                    </div>                                    
                                    <div class="form-group col-6">
                                        <label for="daftar_ulang">Nominal</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="tamrin">Rp.</span>
                                            </div>
                                            <input type="number" class="form-control" id="pembayaran_jenis_iuran" name="pembayaran_jenis_iuran" value="{{ $jenis_iurans[0]->pembayaran_jenis_iuran }}" required>
                                        </div>
                                    </div>
                                </div>                                
                                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Iuran Bulanan -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Jenis Iuran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/master/master_admin') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="jenis_iuran">Jenis Iuran <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="jenis_iuran" name="jenis_iuran"
                                value="" required>
                        </div>
                        <div class="form-group">
                            <label for="pembayaran_jenis_iuran">Nominal Jenis Iuran <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="pembayaran_jenis_iuran" name="pembayaran_jenis_iuran"
                                value="" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        document.getElementById('jenis_iuran').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var nominal = selectedOption.getAttribute('data-nominal');
            document.getElementById('pembayaran_jenis_iuran').value = nominal;
        });
    </script>
    <script>
        // Autoclose success alert after 3000 milliseconds (3 seconds)
        setTimeout(function() {
            $("#success-alert").alert('close');
        }, 3000);

        // Autoclose error alert after 5000 milliseconds (5 seconds)
        setTimeout(function() {
            $("#error-alert").alert('close');
        }, 5000);
    </script>
@endsection
