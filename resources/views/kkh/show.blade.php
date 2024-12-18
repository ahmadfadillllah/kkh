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
                            <li class="breadcrumb-item"><a href="javascript: void(0)">KKH Detail</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-shadow btn-secondary"><i
                                    class="fas fa-cloud-download-alt"></i> <span>Bundle All Shift</span></button>
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
                        <div class="table-responsive">
                            <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>Pilih</th>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Departemen</th>
                                        <th>Total Durasi Tidur</th>
                                        <th>Keluhan</th>
                                        <th>Keterangan</th>
                                        <th>Shift</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($combinedData as $nik => $data)
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="select[]" class="rowCheckbox" value="{{ $nik }}">
                                            </td>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ isset($data['kkhData']['tanggalKirim']) ? \Carbon\Carbon::parse($data['kkhData']['tanggalKirim'])->translatedFormat('d F Y H:i') : 'Not Found' }}</td>
                                            <td>{{ $nik ?? 'Not Found' }}</td>
                                            <td>{{ $data['user']['name'] ?? 'Not Found' }}</td>
                                            <td>{{ $data['user']['department'] ?? 'Not Found' }}</td>
                                            <td>{{ $data['totalDurasiTidur'] ?? 'Not Found' }}</td>
                                            <td>{{ $data['kkhData']['keluhan'] ?? 'Not Found' }}</td>
                                            <td>
                                                @if ($data['keterangan'] === 'Cukup')
                                                    <span class="badge rounded-pill text-bg-secondary">Cukup</span>
                                                @else
                                                    <span class="badge rounded-pill text-bg-danger">Kurang Tidur</span>
                                                @endif
                                            </td>
                                            <td>{{ $data['kkhData']['shift'] ?? 'Not Found' }}</td>
                                            <td>
                                                <a href="#" class="badge bg-info">Download KKH</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Pilih</th>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Departemen</th>
                                        <th>Total Durasi Tidur</th>
                                        <th>Keluhan</th>
                                        <th>Keterangan</th>
                                        <th>Shift</th>
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
    function formatDate(date) {
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, '0'); // Bulan dimulai dari 0
        const day = String(date.getDate()).padStart(2, '0');
        return `${year}-${month}-${day}`;
    }

    const today = new Date();
    const yesterday = new Date();
    yesterday.setDate(today.getDate() - 1); // Mengatur tanggal kemarin

    const input = document.getElementById('pc-date_range_picker-1');
    input.value = `${formatDate(yesterday)} to ${formatDate(today)}`;
</script>

@include('layout.footer')
<script>
    document.getElementById('selectAll').addEventListener('change', function() {
        const checkboxes = document.querySelectorAll('.rowCheckbox');
        checkboxes.forEach(checkbox => {
            checkbox.checked = this.checked; // Set checkbox sesuai status "Pilih Semua"
        });
    });

    document.getElementById('selectAllFooter').addEventListener('change', function() {
        const checkboxes = document.querySelectorAll('.rowCheckbox');
        checkboxes.forEach(checkbox => {
            checkbox.checked = this.checked; // Set checkbox sesuai status "Pilih Semua"
        });
    });
</script>

<script>
    document.getElementById('verifikasiBtn').addEventListener('click', function() {
        const checkboxes = document.querySelectorAll('.rowCheckbox:checked');
        if (checkboxes.length === 0) {
            Swal.fire({
                icon: 'warning',
                title: 'Peringatan',
                text: 'Silakan pilih setidaknya satu data sebelum verifikasi!',
            });
        } else {
            Swal.fire({
                title: 'Konfirmasi Verifikasi',
                text: 'Apakah Anda yakin ingin memverifikasi data yang dipilih?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Verifikasi!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    console.log('Data yang dipilih:', Array.from(checkboxes).map(cb => cb.value));
                    Swal.fire('Data telah diverifikasi!', '', 'success');
                }
            });
        }
    });
</script>

</body>

</html>
