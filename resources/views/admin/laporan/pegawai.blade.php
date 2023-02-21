@extends('admin.layouts.app')
@section('navbar')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
data-scroll="false">
<div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white"
                    href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Data Pegawai</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Data Pegawai</h6>
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
                <div class="row">
                    <div class="col">
                        <!-- Button trigger modal -->
                        <a  class="btn bg-gradient-primary" href="/laporan_pegawai_cetak">
                        Download
                        </a>
                    </div>
                    <div class="col">
                        <form action="/laporan_pegawai" method="get">
                            <div class="input-group">
                                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="search" placeholder="Type here...">
                            </div>
                        </form>

                    </div>
                </div>


            </div>
            @if (session()->has('success'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text"><strong>{{session('success')}}</strong>
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
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NIP
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Pegawai
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Jenis Kelamin</th>
                                <th
                                    class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Jabatan</th>
                                <th
                                    class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Tanggal Masuk</th>
                                <th
                                    class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Status</th>



                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>
                                    <p class=" text-xs font-weight-bold mb-0">{{$loop->iteration}}</p>

                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{$item->nik}}</p>

                                </td>
                                <td>



                                            <p class="text-xs font-weight-bold mb-0">{{$item->name}}</p>


                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{$item->jenis_kelamin}}</p>

                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{$item->jabatan->nama_jabatan}}</p>

                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{$item->tanggal_masuk}}</p>

                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{$item->status}}</p>

                                </td>

                                {{--  <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-success">Online</span>
                                </td>  --}}

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pegawai</h5>
    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <form action="/tambahpegawai" method="post">
    @csrf

        <label for="example-text-input" class="form-control-label">NIP</label>
        <div class="input-group mb-3">

            <input type="number" class="form-control "  name="nik" placeholder="Enter NIP" aria-label="Example text with button addon" aria-describedby="button-addon1">

        </div>

        <label for="example-text-input" class="form-control-label">Username</label>
        <div class="input-group mb-3">

            <input type="text" class="form-control "  name="name" placeholder="Enter Username" aria-label="Example text with button addon" aria-describedby="button-addon1">

        </div>
        <label for="example-text-input" class="form-control-label">Password</label>
        <div class="input-group mb-3">


            <input class="form-control" type="password" name="password" placeholder="Enter Password" aria-label="Example text with button addon" aria-describedby="button-addon1">
        </div>



        <div class="form-group">
              <label for="example-text-input" class="form-control-label">Jenis Kelamin</label>

            <select  class="form-control" name="jenis_kelamin">
                <option value="">--- Pilih Jenis Kelamin ---</option>
                {{--  @foreach($pemilik as $pemilik2)  --}}
                    <option value="Laki-laki">Laki - laki</option>
                    <option value="Perempuan">Perempuan</option>
                {{--  @endforeach  --}}
            </select>
          </div>


          <div class="form-group">

              <label for="example-text-input" class="form-control-label">Jabatan</label>

          <select  class="form-control" name="jabatan">
              <option value="">--- Pilih Jabatan ---</option>
              @foreach($jabatan as $j)
                  <option value="{{$j->id}}">{{$j->nama_jabatan}}</option>

              @endforeach
          </select>
        </div>

        <label for="example-text-input" class="form-control-label">Tanggal Masuk</label>
        <div class="input-group mb-3">


            <input  class="form-control " type="date" name="tanggal_masuk" placeholder="Enter Email" aria-label="Example text with button addon" aria-describedby="button-addon1">
        </div>

        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Status</label>

          <select  class="form-control" name="status">
              <option value="">--- Pilih Status ---</option>
              {{--  @foreach($pemilik as $pemilik2)  --}}
                  <option value="Karyawan Tetap">Karyawan Tetap</option>
                  <option value="Karyawan Tidak Tetap">Karyawan Tidak Tetap</option>
              {{--  @endforeach  --}}
          </select>
        </div>




    <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn bg-gradient-primary">Submit</button>
      </div>
    </form>
  </div>

</div>
</div>
</div>

@endsection
