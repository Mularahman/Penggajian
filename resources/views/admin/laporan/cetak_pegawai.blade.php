<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cetak | Pegawai</title>
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
            padding-bottom: 1rem;


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
            padding-left: -3        0px;
        }
    </style>
</head>

<body>
    <table width="100%">
        <tr>
            <td width="20" align="center"><img src="{{ public_path() . '/assets/img/dlhbjm.png' }}"
                    width="60%"></td>
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
    <h2 class="title">Laporan Data Pegawai</h2>
    <table class="table" cellpadding="10">

        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama Pegawai</th>
            <th>Jenis Kelamin</th>
            <th>Jabatan</th>
            <th>Tanggal Masuk</th>
            <th>Status</th>
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
                    <span>{{ $item->jenis_kelamin }}</span>
                </td>
                <td>
                    <span>{{ $item->jabatan->nama_jabatan }}</span>
                </td>
                <td>
                    <span>{{ $item->tanggal_masuk }}</span>
                </td>
                <td>
                    <span>{{ $item->status }}</span>
                </td>

                {{--  <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                    </td>  --}}

            </tr>
        @endforeach

    </table>
</body>

</html>
