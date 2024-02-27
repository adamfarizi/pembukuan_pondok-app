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
                    <li class="active">
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
                <h5 class="mb-0">Laporan Keuangan</h5>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Main</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Laporan Keuangan</li>
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
        <!-- Card -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-4">
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
                <div class="col-md-6 col-lg-4">
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
                <div class="col-md-6 col-lg-4">
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
        {{-- Tabel Pemasukan --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Pemasukan Pondok</h4>
                            </div>
                            <div class="col text-right">
                                <button id="exportPemasukanExcel" class="btn text-white" style="background-color: #209e62;"><i
                                        class="ri-file-excel-2-fill"></i> Export</button>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="table-responsive pb-3 pt-2 px-3">
                                <table id="tablePemasukan" class="table" role="grid"
                                    aria-describedby="user-list-page-info" style="width: 100%; min-height: 500px;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tanggal Pemasukan</th>
                                            <th>Nama Santri</th>
                                            <th>Jumlah Pemasukan</th>
                                            <th>Diterima Oleh</th>
                                            <th>Jenis Pemasukan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Tabel Pengeluran --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Pengeluaran Pondok</h4>
                            </div>
                            <div class="col text-right">
                                <button id="exportPengeluaranExcel" class="btn text-white" style="background-color: #209e62"><i
                                        class="ri-file-excel-2-fill"></i> Export</button>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="table-responsive pb-3 pt-2 px-3">
                                <table id="tablePengeluaran" class="table" role="grid"
                                    aria-describedby="user-list-page-info" style="width: 100%; min-height: 500px;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tanggal Pengeluaran</th>
                                            <th>Jumlah Pengeluaran</th>
                                            <th>Deskripsi Pengeluaran</th>
                                            <th>Nama Pengeluar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    {{-- Data Tabel --}}
    <script>
        $(document).ready(function() {
            var tablePemasukan = $('#tablePemasukan').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('get_pemasukan') }}",
                    data: function(d) {
                        // Mengambil nilai bulan dari input tanggal
                        var filterBulan = $('#filterBulanPemasukan').val();
                        d.filterBulan = filterBulan;
                    }
                },
                columns: [
                    // Kolom nomor urut
                    {
                        data: null,
                        searchable: false,
                        orderable: false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    // Kolom tanggal dan jam pengeluaran
                    {
                        data: 'tanggal_pembayaran',
                        render: function(data, type, full, meta) {
                            if (data) {
                                var tanggal_pembayaran = data.split(' ');
                                var tanggal = tanggal_pembayaran[0];
                                var jam = tanggal_pembayaran[1];

                                return '<p class="mb-0">' +
                                    tanggal +
                                    '</p>' +
                                    '<p class="mb-0">Jam: ' +
                                    jam +
                                    '</p>';
                            } else {
                                return '';
                            }
                        }
                    },
                    // Kolom deskripsi pengeluaran
                    {
                        data: 'santri.nama_santri',
                        name: 'santri.nama_santri'
                    },
                    // Kolom jumlah pengeluaran
                    {
                        data: 'jumlah_pembayaran',
                        render: function(data, type, full, meta) {
                            return 'Rp. ' + data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        }
                    },
                    // Kolom nama pengeluar
                    {
                        data: 'admin.nama',
                        name: 'admin.nama'
                    },
                    // Kolom jenis pemasukkan
                    {
                        data: 'jenis_pembayaran',
                        name: 'jenis_pembayaran',
                        render: function(data, type, full, meta) {
                            if (data === 'daftar_ulang') {
                                return '<span class="badge badge-pill badge-primary">Daftar Ulang</span>';
                            } else if (data === 'iuran_bulanan') {
                                return '<span class="badge badge-pill badge-success">Iuran Bulanan</span>';
                            } else {
                                return '<span class="badge badge-pill badge-warning">Tamrin</span>';
                            }
                        }
                    },
                ],
                lengthMenu: [
                    [10, 25, 50, 100, -1], // Jumlah entries per halaman, -1 untuk Tampilkan Semua Data
                    ['10', '25', '50', '100', 'Semua']
                ]
            });

            // Membuat input bulan di samping kotak pencarian
            $('<span class="ml-4"><label>Filter: <input type="month" id="filterBulanPemasukan" class="form-control"></label></span>')
            .appendTo('#tablePemasukan_filter');
    
            // Menambahkan event listener untuk filter per bulan
            $('#filterBulanPemasukan').on('change', function() {
                tablePemasukan.ajax.reload();
            });
        });

        $(document).ready(function() {
            var tablePengeluaran = $('#tablePengeluaran').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('get_pengeluaran') }}",
                    data: function(d) {
                        // Mengambil nilai bulan dari input tanggal
                        var filterBulan = $('#filterBulanPengeluaran').val();
                        d.filterBulan = filterBulan;
                    }
                },
                columns: [
                    // Kolom nomor urut
                    {
                        data: null,
                        searchable: false,
                        orderable: false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    // Kolom tanggal dan jam pengeluaran
                    {
                        data: 'tanggal_pengeluaran',
                        render: function(data, type, full, meta) {
                            if (data) {
                                var tanggal_pengeluaran = data.split(' ');
                                var tanggal = tanggal_pengeluaran[0];
                                var jam = tanggal_pengeluaran[1];

                                return '<p class="mb-0">' +
                                    tanggal +
                                    '</p>' +
                                    '<p class="mb-0">Jam: ' +
                                    jam +
                                    '</p>';
                            } else {
                                return '';
                            }
                        }
                    },
                    // Kolom jumlah pengeluaran
                    {
                        data: 'jumlah_pengeluaran',
                        render: function(data, type, full, meta) {
                            return 'Rp. ' + data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        }
                    },
                    // Kolom deskripsi pengeluaran
                    {
                        data: 'deskripsi_pengeluaran',
                        name: 'deskripsi_pengeluaran'
                    },
                    // Kolom nama pengeluar
                    {
                        data: 'nama_pengeluar',
                        name: 'nama_pengeluar'
                    },
                ],
                lengthMenu: [
                    [10, 25, 50, 100, -1], // Jumlah entries per halaman, -1 untuk Tampilkan Semua Data
                    ['10', '25', '50', '100', 'Semua']
                ]
            });

            // Membuat input bulan di samping kotak pencarian
            $('<span class="ml-4"><label>Filter: <input type="month" id="filterBulanPengeluaran" class="form-control"></label></span>')
            .appendTo('#tablePengeluaran_filter');
    
            // Menambahkan event listener untuk filter per bulan
            $('#filterBulanPengeluaran').on('change', function() {
                tablePengeluaran.ajax.reload();
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fungsi untuk menangani ekspor Excel
            function exportToExcel(exportButtonId, tableId, fileName) {
                const exportButton = document.getElementById(exportButtonId);
                const table = document.getElementById(tableId);

                if (!table) {
                    console.error(`Table with ID '${tableId}' not found.`);
                    return;
                }

                exportButton.addEventListener('click', function() {
                    // Mengonversi seluruh tabel menjadi objek lembar kerja
                    const ws = XLSX.utils.table_to_sheet(table);

                    // Membuat buku kerja baru
                    const wb = XLSX.utils.book_new();

                    // Menambahkan lembar kerja ke buku kerja
                    XLSX.utils.book_append_sheet(wb, ws, 'Data');

                    // Menyimpan file Excel
                    XLSX.writeFile(wb, fileName);
                });
            }

            // Memanggil fungsi untuk tombol "Export to Excel" dengan parameter yang sesuai
            exportToExcel('exportPemasukanExcel', 'tablePemasukan', 'pemasukan.xlsx');
            exportToExcel('exportPengeluaranExcel', 'tablePengeluaran', 'pengeluaran.xlsx');
        });
    </script>

    {{-- Chart --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil data dari controller menggunakan AJAX
            fetch('{{ route('laporan_keuangan.chart') }}')
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
                            categories: bulanTahun,
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
