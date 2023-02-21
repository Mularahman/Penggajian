<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cetak | Gaji</title>
    <style>
        body {

            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;

        }

        .title {
            text-align: center;
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

        th {
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
    <h2 class="title">Laporan Data Gaji Pegawai </h2>
    <table class="table" cellpadding="10">
        <tr>
            <td><span>Bulan</span></td>
            <td><span>: {{$bulan}}</span></td>
        </tr>
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama Pegawai</th>
            <th>Jabatan</th>
            <th>Tunjangan</th>
            <th>Potongan</th>
            <th>Total Gaji</th>
        </tr>

        @foreach ($data as $item)
            <tr>
                <td>
                    <span>{{ $loop->iteration }}</span>
                </td>
                <td>
                    <span>{{ $item->nik }}</span>
                </td>
                <td>
                    <span>{{ $item->name }}</span>
                </td>

                <td>
                    <span>{{ $item->jabatan->nama_jabatan }}</span>
                </td>
                <td>
                    <span>
                        @php
                            $total = 0;
                            foreach ($item->gaji->where('bulan', $bulan) as $gaji) {
                                $total += $gaji->tunjangan->jumlah_tunjangan;
                            }

                        @endphp
                        Rp. {{ $total }}
                    </span>
                </td>
                <td>
                    <span>
                        @php
                            $potongan = 0;
                            foreach ($item->absensi->where('bulan', $bulan) as $absensi) {
                                foreach ($absensi->kehadiran as $kehadiran) {
                                    $potongan += $kehadiran->jumlah * $kehadiran->potongan->jumlah_potongan;
                                }
                            }
                        @endphp
                        Rp. {{ $potongan }}
                    </span>
                </td>
                <td>
                    <span>
                        @php
                            $total = 0;
                            foreach ($item->gaji->where('bulan', $bulan) as $gaji) {
                                $total += $gaji->tunjangan->jumlah_tunjangan;
                            }
                            $potongan = 0;
                            foreach ($item->absensi->where('bulan', $bulan) as $absensi) {
                                foreach ($absensi->kehadiran as $kehadiran) {
                                    $potongan += $kehadiran->jumlah * $kehadiran->potongan->jumlah_potongan;
                                }
                            }
                        @endphp
                        Rp. {{ $item->jabatan->gaji_pokok + $total - $potongan }}
                    </span>
                </td>

                {{--  <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                    </td>  --}}

            </tr>
        @endforeach

    </table>
</body>

</html>
