@include('layout.head', ['title' => 'KKH'])
@include('layout.sidebar')
@include('layout.header')
<style>
    .table-responsive {
        overflow-x: auto; /* Tambahkan scroll horizontal jika perlu */
    }

    #dom-jqry {
        width: 100%; /* Pastikan tabel menggunakan 100% dari container */
    }

    #dom-jqry th, #dom-jqry td {
        padding: 8px;
        font-size: 14px;
    }

    /* Responsive styles */
    @media (max-width: 768px) {
        #dom-jqry th, #dom-jqry td {
            font-size: 12px; /* Mengurangi ukuran font di perangkat kecil */
        }
    }
</style>



<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <ul class="breadcrumb d-flex align-items-center mb-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Verifikasi</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-shadow btn-success"><i
                                    class="fas fa-cloud-download-alt"></i> <span>Bundle All Shift</span></button>
                            <button type="button" class="btn btn-shadow btn-primary"><i
                                    class="fas fa-cloud-download-alt"></i> <span>Bundle Shift Siang</span></button>
                            <button type="button" class="btn btn-shadow btn-secondary"><i
                                    class="fas fa-cloud-download-alt"></i> <span>Bundle Shift Malam</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h5 class="mb-1">Verified KKH</h5>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                <div class="col-lg-6 col-md-9">
                                    <input type="text" class="form-control" id="pc-date_range_picker-1" placeholder="Pilih tanggal" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Departemen</th>
                                        <th>Jam Bangun</th>
                                        <th>Jam Sampai</th>
                                        <th>Jam Tidur</th>
                                        <th>Total Durasi Tidur</th>
                                        <th>Shift</th>
                                        <th>Keluhan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($verif as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->tanggalKirim }}</td>
                                            <td>{{ $data->nik }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->departemen }}</td>
                                            <td>{{ $data->jamBangun }}</td>
                                            <td>{{ $data->jamSampai }}</td>
                                            <td>{{ $data->jamTidur }}</td>
                                            <td>{{ $data->totalDurasiTidur }}</td>
                                            <td>{{ $data->shift }}</td>
                                            <td>{{ $data->keluhan }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Departemen</th>
                                        <th>Jam Bangun</th>
                                        <th>Jam Sampai</th>
                                        <th>Jam Tidur</th>
                                        <th>Total Durasi Tidur</th>
                                        <th>Shift</th>
                                        <th>Keluhan</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@include('layout.footer')


</body>

</html>
