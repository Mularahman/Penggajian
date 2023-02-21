@extends('layouts.app')
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

<div class="row ">
    <div class="col-lg-7 mb-lg-0 mb-4">
        <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
                <h6 class="text-capitalize">Data Pegawai</h6>
                            </div>
            <div class="card-body p-3">
                <div class="table-responsive">
                    <table  class="table align-items-center mb-0">
                        <thead>
                            <tr>


                              <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Pegawai</th>
                              <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">: {{$data->name}}</th>
                              <th class="text-secondary opacity-7"></th>
                            </tr>
                            <tr>
                              <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jabatan</th>
                              <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">: {{$data->jabatan->nama_jabatan}}</th>
                              <th class="text-secondary opacity-7"></th>
                            </tr>
                            <tr>
                              <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Masuk</th>
                              <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">: {{$data->tanggal_masuk}}</th>
                              <th class="text-secondary opacity-7"></th>
                            </tr>
                            <tr>
                              <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                              <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">: {{$data->status}}</th>
                              <th class="text-secondary opacity-7"></th>
                            </tr>
                          </thead>
                    </table>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection
