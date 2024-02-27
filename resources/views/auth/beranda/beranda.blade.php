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
                    <li>
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
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <!-- Card -->
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-body pb-0">
                            <div class="rounded-circle iq-card-icon iq-bg-primary"><i class="ri-exchange-dollar-fill"></i>
                            </div>
                            <span class="float-right line-height-6">Pemasukan Pondok</span>
                            <div class="text-center mt-3">
                                <h2 class="mb-5"><span class="">Rp.
                                        {{ number_format($totalPemasukan, 0, ',', '.') }}</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-body pb-0">
                            <div class="rounded-circle iq-card-icon iq-bg-warning"><i class="ri-shopping-cart-line"></i>
                            </div>
                            <span class="float-right line-height-6">Total Pengeluaran</span>
                            <div class="text-center mt-3">
                                <h2 class="mb-5"><span class="">Rp.
                                        {{ number_format($totalPengeluaran, 0, ',', '.') }}</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-body pb-0">
                            <div class="rounded-circle iq-card-icon iq-bg-success"><i
                                    class="ri-bar-chart-grouped-line"></i></div>
                            <span class="float-right line-height-6">Total Keuangan</span>
                            <div class="text-center mt-3">
                                <h2 class="mb-5"><span class="">Rp.
                                        {{ number_format($totalKeuangan, 0, ',', '.') }}</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-body pb-0">
                            <div class="rounded-circle iq-card-icon iq-bg-danger"><i class="ri-group-line"></i>
                            </div>
                            <span class="float-right line-height-6">Total Santri</span>
                            <div class="text-center mt-3">
                                <h2 class="mb-5"><span class="me-2">{{ $totalsantri }}</span><span> santri</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                {{-- Chart Keuangan --}}
                <div class="col-lg-8">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h5 class="card-title">Pemasukan dan Pengeluaran Pondok</h5>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div id="chart_keuangan"></div>
                        </div>
                    </div>
                </div>
                {{-- Chart Santri --}}
                <div class="col-lg-4">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h5 class="card-title">Grafik Santri</h5>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div id="chart_santri"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    {{-- Chart Keuangan --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil data dari controller menggunakan AJAX
            fetch('{{ route('beranda.chartKeuangan') }}')
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
                    
                    // Memutar array bulanTahun agar data terbaru berada di awal
                    bulanTahun.reverse();
                    pemasukan.reverse();
                    pengeluaran.reverse();

                    // Konfigurasi chart
                    const chartKeuangan = {
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
                            width: [2, 3],
                            curve: 'smooth',
                            dashArray: [0, 5]
                        },
                        colors: ['#00ca00', '#007bff'],
                        series: [{
                                name: "Pemasukan",
                                type: 'area',
                                data: pemasukan,
                            },
                            {
                                name: "Pengeluaran",
                                type: 'line',
                                data: pengeluaran,
                            },
                        ],
                        fill: {
                            opacity: [0.2, 1],
                            gradient: {
                                inverseColors: false,
                                shade: 'light',
                                type: "vertical",
                                opacityFrom: 1,
                                opacityTo: 1,
                                stops: [0, 100, 100, 100]
                            }
                        },
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
                                show: true
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
                    const chartKeuanganInstance = new ApexCharts(document.querySelector("#chart_keuangan"),
                        chartKeuangan);
                    chartKeuanganInstance.render();
                });
        });
    </script>

    {{-- Chart Santri --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil data dari controller menggunakan AJAX
            fetch('{{ route('beranda.chartSantri') }}')
                .then(response => response.json())
                .then(data => {
                    // Data yang diterima dari controller
                    const totalMaleSantri = data.total_male_santri;
                    const totalFemaleSantri = data.total_female_santri;

                    // Konfigurasi chart
                    const chartSantri = {
                        chart: {
                            height: 400,
                            type: 'bar',
                            sparkline: {
                                show: false
                            },
                            toolbar: {
                                show: false
                            },
                        },
                        colors: ['#0084ff', '#FF4CEA'],
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: '30%',
                            },
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            show: false,
                            width: 5,
                            colors: ['#ffffff'],
                        },
                        series: [{
                            name: 'Laki-laki',
                            data: [totalMaleSantri]
                        }, {
                            name: 'Perempuan',
                            data: [totalFemaleSantri]
                        }],
                        fill: {
                            opacity: 1
                        },
                        xaxis: {
                            categories: ['Jumlah Santri']
                        },
                        tooltip: {
                            y: {
                                formatter: function(val) {
                                    return val + " Santri";
                                }
                            }
                        }
                    };

                    // Render chart
                    const chartSantriInstance = new ApexCharts(document.querySelector("#chart_santri"),
                        chartSantri);
                    chartSantriInstance.render();
                });
        });
    </script>
@endsection
