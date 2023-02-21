@extends('admin.layouts.app')
@section('navbar')
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
        data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white">Data Gaji</a></li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tambah Tunjangan</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">Tambah Tunjangan</h6>
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
    <div class="row m-auto">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">



                </div>




                <div class="card-body px-2 py-2 pt-0 pb-0">
                    <div class="col px-3">
                        <a href="{{ url()->previous() }}" class="btn bg-gradient-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-arrow-left-circle-fill me-md-2" viewBox="0 0 16 16">
                                <path
                                    d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                            </svg>
                            Kembali
                        </a>
                    </div>


                    <form action="/tambah_gaji/{{$id}}" method="post">
                        @csrf

                        <div class="px-4 py-4 pt-0">

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
                            </div>
                            <div class="table-responsive p-2" style="max-height: 400px !important">
                                <table class="table align-items-center mb-0">
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
                                                Nama Pegawai
                                            </th>
                                            {{--  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Jenis Kelamin</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Jabatan</th>  --}}
                                            @foreach ($tunjangan as $p)
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    {{ $p->nama_tunjangan }}</th>
                                            @endforeach



                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>
                                                    <p class="font-weight-bold mb-0">{{ $loop->iteration }}</p>

                                                </td>
                                                <td>
                                                    <p class="font-weight-bold mb-0">{{ $item->name }}</p>
                                                    <input type="hidden" class="form-control"
                                                    style="width: 80px;" name="user_id[]" value="{{$item->id}}"
                                                    aria-label="Example text with button addon"
                                                    aria-describedby="button-addon1">
                                                </td>
                                                @foreach ($tunjangan as $p)
                                                    <td>
                                                        <div class="d-flex justify-content-center px-2 py-1">

                                                            <div class="d-flex flex-column justify-content-center">


                                                                {{--  <div class="input-group mb-3">  --}}
                                                                    <div class="form-check">

                                                                        <input type="checkbox" class="form-check-input" value="{{$p->id}}" name="tunjangan_id[]" id="customCheckDisabled"
                                                                        @foreach ($item->gaji->where('bulan', $bulan) as $gaji )
                                                                        @if ($gaji->tunjangan_id == $p->id)
                                                                        checked

                                                                        @endif
                                                                        @endforeach
                                                                        >

                                                                      </div>

                                                                {{--  </div>  --}}


                                                            </div>
                                                        </div>
                                                    </td>
                                                @endforeach



                                                {{--  <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Online</span>
                                            </td>  --}}

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>

                            <div class="modal-footer pt-3">

                                <button type="submit" class="btn bg-gradient-primary">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
