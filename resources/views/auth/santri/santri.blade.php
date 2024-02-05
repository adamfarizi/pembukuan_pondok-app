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
                        <a href="{{ route('pengeluaran') }}" class="iq-waves-effect"><i class="ri-message-line"></i><span>Pengeluaran</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('laporan_keuangan') }}" class="iq-waves-effect"><i class="ri-calendar-2-line"></i><span>Laporan
                                Keuangan</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ route('santri') }}" class="iq-waves-effect"><i class="ri-user-line"></i><span>Santri</span>
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
                <h5 class="mb-0">Santri</h5>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Main</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Santri</li>
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
        {{-- Tabel --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Data Santri</h4>
                            </div>
                            <div class="text-right">
                                <button type="button" class="btn btn-primary mt-1" data-toggle="modal"
                                    data-target="#exampleModalCenter">
                                    Tambah Santri
                                </button>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="d-flex justify-content-between">
                                <div class="text-left d-flex">
                                    <p class="align-self-center mr-2">Show</p>
                                    <form action="{{ route('santri') }}" method="get">
                                        @csrf
                                        <select name="perPage_santri" id="perPage_santri"
                                            class="form-control form-control-sm mb-3" onchange="this.form.submit()">
                                            <option value="10" {{ $perPage_santri == 10 ? 'selected' : '' }}>10
                                            </option>
                                            <option value="50" {{ $perPage_santri == 50 ? 'selected' : '' }}>50
                                            </option>
                                            <option value="100" {{ $perPage_santri == 100 ? 'selected' : '' }}>100
                                            </option>
                                            <option value="{{ $santris->total() }}"
                                                {{ $perPage_santri == $santris->total() ? 'selected' : '' }}>
                                                Semua
                                            </option>
                                        </select>
                                    </form>
                                    <p class="align-self-center ml-2">data</p>
                                </div>
                                <div class="text-right">
                                    <div id="user_list_datatable_info" class="dataTables_filter">
                                        <form class="position-relative d-flex" method="GET"
                                            action="{{ route('santri') }}">
                                            {{-- <div class="form-group mb-0 mr-3">
                                                <input type="date" name="search_tanggal" class="form-control"
                                                    id="santri_search" onchange="this.form.submit()"
                                                    value="{{ request('search_tanggal') }}">
                                            </div> --}}
                                            <div class="form-group mb-0">
                                                <input type="search" name="search_all" class="form-control"
                                                    id="santri_search" placeholder="Search"
                                                    aria-controls="user-list-table" value="{{ request('search_all') }}">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive mb-3" style="min-height: 380px; max-height: 380px;">
                                <table id="user-list-table" class="table" role="grid"
                                    aria-describedby="user-list-page-info">
                                    <thead class="sticky-top bg-white z-index-1">
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Santri</th>
                                            <th>Tempat, Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>No. HP</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($santris as $santri)
                                            <tr>
                                                <td>{{ ($santris->currentPage() - 1) * $santris->perPage() + $loop->index + 1 }}</td>
                                                <td>{{ $santri->nama_santri }}</td>
                                                <td>{{ $santri->tempat_tanggal_lahir_santri }}</td>
                                                <td>{{ $santri->alamat_santri }}</td>
                                                <td>{{ $santri->no_hp_santri }}</td>
                                                <td>{{ $santri->jenis_kelamin_santri }}</td>
                                                <td>{{ $santri->status_santri }}</td>
                                                <td class="text-center">
                                                    <div class="d-flex align-items-center list-user-action">
                                                        <a data-placement="top" title="Info" href="#" data-target="#infoModal" data-toggle="modal"
                                                            data-id="{{ $santri->id_santri }}">
                                                            <i class="ri-information-line"></i>
                                                        </a>
                                                        <a data-placement="top" title="Edit" href="{{ url('/santri/'. $santri->id_santri) }}">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                        <a data-placement="top" title="Delete" href="#" data-target="#deleteModal" data-toggle="modal"
                                                            data-id="{{ $santri->id_santri }}">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="8" class="text-center">
                                                    <p class="mt-3">Tidak ada data Santri</p>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                    
                                </table>
                            </div>
                            {{-- Pagination --}}
                            <div class="row justify-content-between">
                                <div id="user-list-page-info" class="col-md-6 d-flex">
                                    <p>Show {{ $santris->firstItem() }} to {{ $santris->lastItem() }} of
                                        {{ $santris->total() }} data</p>
                                </div>
                                <div class="col text-right">
                                    <ul class="pagination pagination-primary justify-content-end">
                                        @if ($santris->onFirstPage())
                                            <li class="page-item disabled">
                                                <span class="page-link" tabindex="-1"
                                                    aria-label="Previous">Previous</span>
                                            </li>
                                        @else
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $santris->previousPageUrl() }}"
                                                    aria-label="Previous">Previous</a>
                                            </li>
                                        @endif

                                        @foreach ($santris->getUrlRange(1, $santris->lastPage()) as $page => $url)
                                            <li
                                                class="page-item {{ $page == $santris->currentPage() ? 'active' : '' }}">
                                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                            </li>
                                        @endforeach

                                        @if ($santris->hasMorePages())
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $santris->nextPageUrl() }}"
                                                    aria-label="Next">Next</a>
                                            </li>
                                        @else
                                            <li class="page-item disabled">
                                                <span class="page-link" tabindex="-1" aria-label="Next">Next</span>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data Pembayaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/santri/create') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama_pengeluar">Nama Pengeluar <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nama_pengeluar" name="nama_pengeluar"
                                value="" required>
                        </div>
                        <div class="form-group">
                            <label for="jumlah_santri">Jumlah Santri <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="jumlah_santri" name="jumlah_santri"
                                value="" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi_santri">Example textarea</label>
                            <textarea class="form-control" id="deskripsi_santri" name="deskripsi_santri" rows="4" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

    <!-- Info Modal -->
    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Data Santri</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-dark" id="dynamicContent">
                    <p><strong>Nama Santri : </strong>{{ $santri->nama_santri }}</p>
                    <p><strong>Tempat, Tanggal Lahir : </strong>{{ $santri->tempat_tanggal_lahir_santri }}</p>
                    <p><strong>Jenis Kelamin : </strong>{{ $santri->jenis_kelamin_santri }}</p>
                    <p><strong>Alamat : </strong>{{ $santri->alamat_santri }}</p>
                    <p><strong>No HP : </strong>{{ $santri->no_hp_santri }}</p>
                    <p><strong>Email : </strong>{{ $santri->email_santri }}</p>
                    <p><strong>Status Santri : </strong>{{ $santri->status_santri }}</p>
                    <p><strong>Nama Wali Santri : </strong>{{ $santri->nama_wali_santri }}</p>
                    <p><strong>No HP Wali Santri : </strong>{{ $santri->no_hp_wali_santri }}</p>
                    <p><strong>KTP Santri : </strong>{{ $santri->ktp_santri }}</p>
                    <p><strong>KK Santri : </strong>{{ $santri->kk_santri }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Delete -->
    {{-- <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <form id="deleteForm" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body text-center">
                        <img src="{{ asset('images/local/danger.png') }}" width="80px" alt="">                        
                        <h3 class="mt-4">Anda yakin ingin hapus data ini?</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
@endsection
@section('js')
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

    {{-- Script Modal Info --}}
    <script>
        $(document).ready(function () {
            // Menangani klik pada tombol Info
            $('a[data-toggle="modal"]').on('click', function () {
                var id_santri = $(this).data('id');
                
                // Assuming you have a route to fetch Santri data by ID
                $.ajax({
                    url: '/santri/' + id_santri + '/info',
                    method: 'GET',
                    success: function (data) {
                        // Update the content of the modal with dynamic data
                        $('#dynamicContent').html(data);
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>    

    {{-- Script Modal Delete --}}
    <script>
        $(document).ready(function() {
            // Menangani klik pada tombol Delete
            $('a[data-target="#deleteModal"]').on('click', function() {
                var id_santri = $(this).data('id');
                $('#deleteForm').attr('action', '/santri/delete/' + id_santri);
            });
        });
    </script>
@endsection
