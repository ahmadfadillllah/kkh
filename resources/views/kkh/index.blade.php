@include('layout.head', ['title' => 'KKH'])
@include('layout.sidebar')
@include('layout.header')
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <ul class="breadcrumb d-flex align-items-center mb-0">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
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
                                <h5 class="mb-1">Kesiapan Kerja Harian</h5>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                {{-- <label class="col-lg-3 col-form-label text-lg-end">Simple Input</label> --}}
                                <div class="col-lg-6 col-md-9">
                                    <input type="text" class="form-control" id="pc-date_range_picker-1" placeholder="Pilih tanggal" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Total Durasi Tidur</th>
                                        <th>Keluhan</th>
                                        <th>Keterangan</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>28-10-2024</td>
                                        <td>0721ABM</td>
                                        <td>Ahmad Ibrahim</td>
                                        <td>6 Jam 5 Menit</td>
                                        <td>Fit</td>
                                        <td>Tidur Cukup</td>
                                        <td><span class="badge bg-success">Detail</span></td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Total Durasi Tidur</th>
                                        <th>Keluhan</th>
                                        <th>Keterangan</th>
                                        <th>Opsi</th>
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
<script>
    $(document).ready(function() {
        $('#dom-jqry').DataTable({
            responsive: true
        });
    });
</script>
<script>
    // Fungsi untuk format tanggal menjadi string dalam format YYYY-MM-DD
    function formatDate(date) {
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, '0'); // Bulan dimulai dari 0
        const day = String(date.getDate()).padStart(2, '0');
        return `${year}-${month}-${day}`;
    }

    // Mendapatkan tanggal kemarin dan hari ini
    const today = new Date();
    const yesterday = new Date();
    yesterday.setDate(today.getDate() - 1); // Mengatur tanggal kemarin

    // Mengatur nilai default pada input
    const input = document.getElementById('pc-date_range_picker-1');
    input.value = `${formatDate(yesterday)} to ${formatDate(today)}`;
</script>

@include('layout.footer')


</body>

</html>
