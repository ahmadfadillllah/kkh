<html>

<head>
    <title>Kesiapan Kerja Harian (KKH)</title>
    <style>
        @media print {
            @page {
                size: A4 landscape;
                margin: 20mm;
            }

            body {
                margin: 0;
                padding: 0;
            }

            /* .container {
                page-break-after: always;
            } */

            .container:last-child {
                page-break-after: auto;
            }
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            border: 1px solid #000;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #000;
            padding-bottom: 10px;
        }

        .header img {
            width: 100px;
        }

        .title {
            text-align: center;
            margin: 20px 0;
            font-size: 18px;
            font-weight: bold;
        }

        .info table {
            margin-bottom: 20px;
            width: 100%;
            font-size: 14px;
        }

        .info td {
            padding: 4px 8px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
            font-size: 14px;
        }

        .table th {
            background-color: #d3d3d3;
        }

        .signature-table {
            width: 100%;
            border-collapse: collapse;
        }

        .signature-table th,
        .signature-table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
            font-size: 14px;
        }

        .signature-table th {
            background-color: #d3d3d3;
        }
    </style>
</head>

<body>
    @foreach ($combinedData as $nik => $data)
        <div class="container">
            <div class="header">
                <img src="https://storage.googleapis.com/a1aa/image/hV7O4vooLnY7N5bfUN6pzIzzOfYFfLqSzrU4RH9yJshkmbinA.jpg" alt="LOGO DISINI" />
            </div>
            <div class="title">KESIAPAN KERJA HARIAN (KKH)</div>
            <div class="info">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ $data['user']['name'] }}</td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td>{{ $nik }}</td>
                    </tr>
                    <tr>
                        <td>Departemen</td>
                        <td>:</td>
                        <td>{{ $data['user']['department'] }}</td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td>{{ \Carbon\Carbon::parse($data['kkhData']['tanggalKirim'])->translatedFormat('d F Y H:i') }}</td>
                    </tr>
                </table>
            </div>
            <table class="table">
                <tr>
                    <th rowspan="2">Jam Pulang (Sampai Dirumah)</th>
                    <th colspan="3">Jam Tidur</th>
                    <th rowspan="2">Keluhan Fisik / Mental</th>
                    <th colspan="2">Verifikasi</th>
                </tr>
                <tr>
                    <th>Mulai</th>
                    <th>Bangun</th>
                    <th>Total</th>
                    <th>Nama</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>{{ $data['kkhData']['jamBangun'] }}</td>
                    <td>{{ $data['kkhData']['jamTidur'] }}</td>
                    <td>{{ $data['kkhData']['jamBangun'] }}</td>
                    <td>{{ $data['totalDurasiTidur'] }}</td>
                    <td>{{ $data['keterangan'] }}</td>
                    <td>Rohayah</td>
                    <td>Wali</td>
                </tr>
            </table>
            <table class="signature-table">
                <tr>
                    <th>Diperiksa Oleh</th>
                    <th>Nama</th>
                    <th>Tanda Tangan</th>
                    <th>Tanggal</th>
                </tr>
                <tr>
                    <td>Supervisor / Superintendent</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Personil Safety</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    @endforeach
</body>

</html>
