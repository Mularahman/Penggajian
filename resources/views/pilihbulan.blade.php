@extends('layouts.app')
@section('navbar')
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
        data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Filter Data Gaji</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">Filter Data Gaji</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">

                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">

                        <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">

                            <span class="d-sm-inline d-none me-sm-2">Hi, {{ auth()->user()->name }}</span>
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
    <div class="row m-auto">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                </div>
                <div class="card-body  pt-0 ">
                    <div class="row justify-content-md-center ">
                        <div class="col-6  align-items-center text-center">
                            <p for="example-month-input"
                                class=" text-uppercase text-secondary  font-weight-bolder opacity-30">Filter Data Gaji
                                Pegawai</p>


                            <form action="/slipgajii_pegawai" method="post">
                                @csrf

                                <div class="form-group">

                                    <input class="form-control" type="month" name="bulan" value="{{ date('Y') . '-' . date('m') }}"
                                        id="example-month-input">
                                </div>
                                <div class="form-group">

                                    <select  class="form-control" name="pegawai" disabled>
                                        <option value="{{$user->id}}">{{$user->name}}</option>

                                    </select>
                                </div>


                                <!-- Button trigger modal -->
                                <button type="submit" class="btn bg-gradient-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="fas fa-eye me-md-1"></i> Tampilkan Data
                            </button>
                        </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
