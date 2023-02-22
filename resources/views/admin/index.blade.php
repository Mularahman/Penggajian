@extends('admin.layouts.app')
@section('navbar')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
data-scroll="false">
<div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white"
                    href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">

            </div>
        </div>
        <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">

                <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">

                    <span class="d-sm-inline d-none me-sm-2">Hi, {{auth()->user()->name}}</span>
                    <i class="fa fa-user me-sm-1"></i>

                </a>

            </li>

            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">

                <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line bg-white"></i>
                        <i class="sidenav-toggler-line bg-white"></i>
                        <i class="sidenav-toggler-line bg-white"></i>
                    </div>
                </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-white p-0">
                    <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                </a>
            </li>

        </ul>

    </div>
</div>
</nav>
@endsection
@section('content')
<div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Data Pegawai</p>
                            <h5 class="font-weight-bolder">
                                {{Count($data)}}
                            </h5>

                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div
                            class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                            <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Data Jabatan</p>
                            <h5 class="font-weight-bolder">
                                {{Count($jabatan)}}
                            </h5>

                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div
                            class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                            <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Tunjangan</p>
                            <h5 class="font-weight-bolder">
                                {{Count($absensi)}}
                            </h5>

                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div
                            class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                            <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Potongan</p>
                            <h5 class="font-weight-bolder">
                               {{Count($gaji)}}
                            </h5>

                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div
                            class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                            <i class="ni ni-scissors text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-lg-7 mb-lg-0 mb-4">
        <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
                <h6 class="text-capitalize">Misi</h6>

            </div>
            <div class="card-body p-3 text-center">
                   <p><span>1. </span> Mencegah, Mengendalikan dan Pemulihan Pencemaran Air, Udara, dan Tanah Serta Mendukung Terpeliharanya Kelestarian Fungsi lingkungan Hidup.</li>
                   </p>

                   <p><span>2. </span> Mengembangkan Sistem data dan Informasi Kondisi Lingkungan Hidup.</li>
                   </p>

                   <p><span>3. </span> Menciptakan Kota Banjarmasin yang Bersih, Indah dan Nyaman Serta Terbangunnya Taman-Taman Kota dan Ruang Terbuka Hijau.</li>
                   </p>

                   <p><span>4. </span> Pengembangkan Kapasitas Sumberdaya Manusia yang Berwawasan Lingkungan. </li>
                   </p>

                </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="card mb-3">
            <div class="card-header pb-0 pt-3 bg-transparent">
                <h6 class="text-capitalize">Misi</h6>

            </div>
            <div class="card-body p-3 text-center">
             <span>"Terwujudnya Pembangunan Yang Berkelanjutan Dan Berwawasan Lingkungan Hidup Menuju Banjarmasin Bersih, Indah Dan Nyaman"</span>
            </div>
          </div>
    </div>
</div>

@endsection
