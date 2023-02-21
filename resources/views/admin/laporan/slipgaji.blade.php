@extends('admin.layouts.app')
@section('navbar')
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
        data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Data Gaji</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Lihat Data Gaji</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">Lihat Data Gaji</h6>
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




                <div class="card-body px-2 py-2 pt-0 pb-0">
                    <div class="col px-3">
                        <a href="/laporan_slipgaji_cetak/{{$id}}/{{$bulan}}" class="btn bg-gradient-primary">
                            Download
                        </a>
                    </div>


                    <form action="/tambahabsensi/{{ $id }}" method="post">
                        @csrf

                        <div class="px-4 py-4 pt-0">
{{--
                            <div class="row">
                                <div class="col-md-6 px-3">

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group align-items-center">
                                        <p for="" class="text-end">Pilih Bulan</p>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group align-items-center">

                                        <input class="form-control" type="month" value="{{$bulan}}"
                                            name="bulan" id="example-month-input">
                                    </div>
                                </div>
                            </div>  --}}
                            <table>
                                <tr>
                                    <div class="row ">
                                        <div class="col-3">
                                            <div class="text-left">
                                                <p class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-30">Nama Pegawai</p>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="text-left">
                                                <p class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-30">: {{ $user->name }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="text-left">
                                                <p class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-30">NIP</p>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="text-left">
                                                <p class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-30">: {{ $user->nik}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="text-left">
                                                <p class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-30">Jabatan</p>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="text-left">
                                                <p class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-30">: {{ $user->jabatan->nama_jabatan  }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="text-left">
                                                <p class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-30">Bulan</p>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="text-left">
                                                <p class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-30">: {{ $bulan  }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    {{--  <div class="row">
                                        <div class="col-3">
                                            <div class="text-left">
                                                <p class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-30">Tahun</p>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="text-left">
                                                <p class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-30">: {{ $user->jabatan->nama_jabatan  }}</p>
                                            </div>
                                        </div>
                                    </div>  --}}



                                </tr>
                                <tr>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                </tr>
                            </table>
                            <div class="table-responsive p-2" style="max-height: 400px !important">
                                <table class="table table-striped align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                No
                                            </th>
                                            {{--  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NIK
                                            </th>  --}}
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Keterangan
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Jumlah
                                            </th>
                                            {{--  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Jenis Kelamin</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Jabatan</th>  --}}




                                        </tr>

                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">1</p>
                                            </td>
                                            <td>
                                                <p class=" font-weight-bold mb-0 text-xs">Gaji Pokok</p>
                                            </td>
                                            <td>
                                                <p class="font-weight-bold mb-0 text-xs">Rp. {{ $user->jabatan->gaji_pokok }}</p>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <p class="font-weight-bold mb-0 text-xs">2</p>
                                            </td>
                                            <td>
                                                <p class="font-weight-bold mb-0 text-xs">  Tunjangan (
                                                    @foreach ($user->gaji->where('bulan', $bulan)  as $gaji)
                                                      {{$gaji->tunjangan->nama_tunjangan}},
                                                    @endforeach
                                                )
                                                </p>
                                            </td>
                                            <td>
                                                <p class="font-weight-bold mb-0 text-xs">


                                                    @php
                                                    $total = 0;
                                                    foreach($user->gaji->where('bulan', $bulan)  as $gaji){

                                                        $total += $gaji->tunjangan->jumlah_tunjangan ;
                                                    }
                                                    @endphp


                                                    Rp. {{$total}}
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p class="font-weight-bold mb-0 text-xs">3</p>
                                            </td>
                                            <td>
                                                <p class="font-weight-bold mb-0 text-xs">Potongan</p>
                                            </td>
                                            <td>
                                                <p class="font-weight-bold mb-0 text-xs">
                                                    @php
                                                    $potongan = 0;
                                                    foreach($user->absensi->where('bulan', $bulan)  as $absensi){
                                                        foreach ($absensi->kehadiran as $kehadiran){

                                                            $potongan += $kehadiran->jumlah*$kehadiran->potongan->jumlah_potongan ;
                                                        }

                                                    }
                                                    @endphp


                                                    Rp. {{$potongan}}
                                                    </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="font-weight-bold mb-0 text-xs"></p>
                                            </td>
                                            <td class="text-end">
                                                <p class="font-weight-bold mb-0 text-xs">Total Gaji : </p>
                                            </td>
                                            <td>
                                                <p class="font-weight-bold mb-0 text-xs">Rp. {{ $user->jabatan->gaji_pokok + $total - $potongan }} </p>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>


                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
