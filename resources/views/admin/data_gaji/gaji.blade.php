@extends('admin.layouts.app')
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
                <div class="card-header">
                </div>
                <div class="card-body  pt-0 ">
                    <div class="row">
                        <div class="col-6">
                            <p for="example-month-input"
                                class=" text-uppercase text-secondary  font-weight-bolder opacity-30">Filter Data Gaji
                                Pegawai</p>
                        </div>
                        <div class="col">

                            <form action="" method="post">
                                @csrf

                                <div class="form-group">

                                    <input class="form-control" type="month" value="{{ date('Y') . '-' . date('m') }}"
                                        id="example-month-input">
                                </div>
                            </form>
                        </div>
                        <div class="col">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="fas fa-eye me-md-1"></i> Tampilkan Data
                            </button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-auto">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col">
                            {{--  <!-- Button trigger modal -->
                        <a  class="btn bg-gradient-primary"   href="/tambah_absensi">
                        Tambah Data
                        </a>  --}}
                        </div>
                        <div class="col">


                        </div>
                    </div>


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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NIK
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Nama Pegawai
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Jabatan</th>

                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Gaji Pokok</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Tj. Transport</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Uang Makan</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Potongan</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Total Gaji</th>

                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $item)
                                    <tr>

                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $loop->iteration }}</p>

                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->nik }}</p>

                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->name }}</p>

                                        </td>


                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->jabatan->nama_jabatan }}</p>

                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->jabatan->gaji_pokok }}</p>

                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->jabatan->tj_transport }}</p>

                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->jabatan->uang_makan }}</p>

                                        </td>



                                        @foreach ($item->absensi as $kehadiran)
                                            @foreach ($kehadiran->kehadiran as $hadir)



                                                <td class="align-middle text-center text-sm">
                                                    <span
                                                        class="badge badge-sm bg-gradient-danger">

                                                        {{ $hadir->sum('jumlah') * $hadir->potongan->sum('jumlah_potongan') }} </span>
                                                </td>

                                            @endforeach
                                        @endforeach
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">Online</span>
                                        </td>
                                        <td class="align-middle text-center  justify-content-center d-flex">
                                            <!-- Button trigger modal -->
                                            <a class="btn bg-gradient-primary me-md-1"
                                                href="/lihat_gaji/{{ $item->id }}">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            {{--  <!-- Button trigger modal -->
                                            <button type="button" class="btn bg-gradient-info me-md-1"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal1{{ $item->id }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z" />
                                                </svg>
                                            </button>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn bg-gradient-danger me-md-1"
                                                data-bs-toggle="modal"
                                                data-bs-target="#exampleModal2{{ $item->id }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                </svg>
                                            </button>




                                            <div class="modal fade" id="exampleModal1{{ $item->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                @include('admin.data_absensi.edit')
                                                <div class="modal fade" id="exampleModal2{{ $item->id }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    @include('admin.data_absensi.hapus')  --}}
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
