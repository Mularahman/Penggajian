@extends('layouts.app')
@section('navbar')
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
        data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Data Gaji</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">Data Gaji</h6>
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
                <div class="card-header pb-0">



                </div>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text"><strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                @endif


                <div class="card-body px-2 py-2 pt-0 pb-2">
                    <div class="table-responsive p-2" style="max-height: 400px !important">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Bulan
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Tunjangan
                                    </th>
                                    <th
                                        class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Potongan</th>



                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Total Gaji</th>



                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $item)
                                    <tr>

                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $loop->iteration }}</p>

                                        </td>

                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">


                                                {{$item->bulan}}



                                            </p>

                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">

                                                @php
                                                $total = 0;
                                                foreach($item->user->gaji  as $gaji){

                                                    $total += $gaji->tunjangan->jumlah_tunjangan ;
                                                }



                                                @endphp
                                                Rp. {{ $total }}



                                            </p>

                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">


                                                @php

                                                $potongan = 0;

                                                    foreach ($item->kehadiran as $kehadiran){

                                                        $potongan += $kehadiran->jumlah*$kehadiran->potongan->jumlah_potongan ;
                                                    }


                                                @endphp
                                                Rp. {{ $potongan }}



                                            </p>

                                        </td>





                                        {{--  @foreach ($item->absensi as $kehadiran)
                                            @foreach ($kehadiran->kehadiran as $hadir)



                                                <td class="align-middle text-center text-sm">
                                                    <span
                                                        class="badge badge-sm bg-gradient-danger">

                                                        {{ $hadir->sum('jumlah') * $hadir->potongan->sum('jumlah_potongan') }} </span>
                                                </td>

                                            @endforeach
                                        @endforeach  --}}
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">

                                                @php
                                                $total = 0;
                                                foreach($item->user->gaji  as $gaji){

                                                    $total += $gaji->tunjangan->jumlah_tunjangan ;
                                                }
                                                $potongan = 0;

                                                    foreach ($item->kehadiran as $kehadiran){

                                                        $potongan += $kehadiran->jumlah*$kehadiran->potongan->jumlah_potongan ;
                                                    }


                                                @endphp
                                                Rp. {{ $item->user->jabatan->gaji_pokok + $total - $potongan }}
                                            </span>
                                        </td>

                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
