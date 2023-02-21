<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

<head>
    <title>Cetak | Slip Gaji</title>
    <style>
        body {

            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;

        }

        .title {
            text-align: center;
        }
        .table span td{
            text-align: left;
        }
        h2 {
            font-weight: semibold;
            font-size: 1.6em;
            margin-bottom: 20px;
            margin-top: 40px;
            text-align: left;
            display: flex;
            align-items: center;
            word-wrap: break-word;
            padding-bottom: 0.5rem;


        }

        .table {
            width: 100%;
            margin: 0 auto;
            font-size: 1em;
            margin-bottom: 0px;
            text-align: center;
            border-collapse: collapse;
            border-spacing: 0;


        }

        .th {
            background: #ea0606;
            color: #fff;
            font-size: 14px;


        }

        td {
            font-size: 0.8em color: #34495e;
            border-bottom: 1px solid rgb(223, 223, 223);

        }

        span {
            font-size: 12px;
            margin-bottom: 0px;
            padding-bottom: -50px;
        }

        table {
            margin-bottom: -15px;
        }

        .p {
            padding-left: -3 0px;
        }
    </style>
</head>

<body>
    <table width="100%">
        <tr>
            <td width="20" align="center"><img src="{{ public_path() . '/assets/img/dlhbjm.png' }}" width="60%"></td>
            <td class="p" width="100" align="center">
                <p>PEMERINTAH KOTA BANJARMASIN <br>
                    DINAS LINGKUNGAN HIDUP
                    {{--  <br>
                        <strong>SMK NEGERI 1 SIMPANG EMPAT</strong>  --}}
                    <br>
                    <span>Jl. RE Martadinata No 1 Kertak Baru Ilir, Kec. Banjarmasin Tengah, <br>
                        Kota Banjarmasin, Kalimantan Selatan 70231
                    </span>
                </p>
            </td>

        </tr>
    </table>
    <hr>
    {{--  <h2 class="title">Laporan Data Gaji Pegawai </h2>  --}}
    <table>

                <tr><th>

                        <span class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-30">Nama Pegawai</span>

            </th>
            <th>

                        <span class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-30">: {{ $user->name }}</span>

            </th>
            </tr>

<tr><th>
    <span class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-30">NIP</span>


    </th>
    <th>
        <span class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-30">: {{ $user->nik}}</span>
    </th>
</tr>
<tr><th>
    <span class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-30">Jabatan</span>


    </th>
    <th>
        <span class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-30">: {{ $user->jabatan->nama_jabatan  }}</span>
    </th>
</tr>
<tr><th>
    <span class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-30">Bulan</span>


    </th>
    <th>
        <span class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-30">: {{ $bulan  }}</span>
    </th>
</tr>





<br>
<br>

    </table>

        <table class="table ">
            <thead>
                <tr>
                    <th class="th"
>
                        No
                    </th>
                    {{-->NIK
                    </>  --}}
                    <th class="th"
>
                        Keterangan
                    </th>
                    <th class="th"
>
                        Jumlah
                    </th>
                    {{-->
                        Jenis Kelamin</>
                    <th
                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Jabatan</th>  --}}




                </tr>

            </thead>
            <tbody>

                <tr>
                    <td>
                        <span class="text-xs font-weight-bold mb-0">1</span>
                    </td>
                    <td>
                        <span class=" font-weight-bold mb-0 text-xs">Gaji Pokok</span>
                    </td>
                    <td>
                        <span class="text-left font-weight-bold mb-0 text-xs">Rp. {{ $user->jabatan->gaji_pokok }}</span>
                    </td>
                </tr>
                <tr>

                    <td>
                        <span class="font-weight-bold mb-0 text-xs">2</span>
                    </td>
                    <td>
                        <span class="font-weight-bold mb-0 text-xs">  Tunjangan (
                            @foreach ($user->gaji->where('bulan', $bulan)  as $gaji)
                              {{$gaji->tunjangan->nama_tunjangan}},
                            @endforeach
                        )
                        </span>
                    </td>
                    <td>
                        <span class="text-left font-weight-bold mb-0 text-xs">


                            @php
                            $total = 0;
                            foreach($user->gaji->where('bulan', $bulan)  as $gaji){

                                $total += $gaji->tunjangan->jumlah_tunjangan ;
                            }
                            @endphp


                            Rp. {{$total}}
                        </span>
                    </td>
                </tr>

                <tr>
                    <td>
                        <span class="font-weight-bold mb-0 text-xs">3</span>
                    </td>
                    <td>
                        <span class="font-weight-bold mb-0 text-xs">Potongan</span>
                    </td>
                    <td>
                        <span class="text-left font-weight-bold mb-0 text-xs">
                            @php
                            $potongan = 0;
                            foreach($user->absensi->where('bulan', $bulan)  as $absensi){
                                foreach ($absensi->kehadiran as $kehadiran){

                                    $potongan += $kehadiran->jumlah*$kehadiran->potongan->jumlah_potongan ;
                                }

                            }
                            @endphp


                            Rp. {{$potongan}}
                            </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="font-weight-bold mb-0 text-xs"></span>
                    </td>
                    <td class="text-end">
                        <span class="font-weight-bold mb-0 text-xs">Total Gaji : </span>
                    </td>
                    <td>
                        <span class="text-left font-weight-bold mb-0 text-xs">Rp. {{ $user->jabatan->gaji_pokok + $total - $potongan }} </span>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>
</body>

</html>
