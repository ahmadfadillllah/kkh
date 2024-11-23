@include('layout.head', ['title' => 'KKH'])
@include('layout.sidebar')
@include('layout.header')
<style>
    .table-responsive {
        overflow-x: auto; /* Tambahkan scroll horizontal jika perlu */
    }
    body{
        page-break-after: always;
    }
    @media print {
            @page {
                size: A4 landscape;
                margin: 20mm;
            }

            body {
                margin: 0;
                padding: 0;
            }

            .container {
                page-break-after: always;
            }

            /* .container:last-child {
                page-break-after: auto;
            } */
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
                            <li class="breadcrumb-item"><a href="javascript: void(0)">KKH</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <div class="d-flex gap-2">
                            <a href="{{ route('kkh.download', 'all') }}" class="btn btn-shadow btn-success"><i
                                    class="fas fa-cloud-download-alt"></i> <span>Bundle All Shift</span></a>
                            <a href="{{ route('kkh.download', 'siang') }}" class="btn btn-shadow btn-primary"><i
                                    class="fas fa-cloud-download-alt"></i> <span>Bundle Shift Siang</span></a>
                            <a href="{{ route('kkh.download', 'malam') }}" class="btn btn-shadow btn-secondary"><i
                                    class="fas fa-cloud-download-alt"></i> <span>Bundle Shift Malam</span></a>
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
                                        <th>Tanggal Kirim</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Departemen</th>
                                        <th>Total Durasi Tidur</th>
                                        <th>Keluhan</th>
                                        <th>Keterangan</th>
                                        <th>Shift</th>
                                        <th>Jam Bangun</th>
                                        <th>Jam Sampai</th>
                                        <th>Jam Tidur</th>
                                        <th>Status Approve</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($combinedData as $nik => $data)
                                        <tr>
                                            <td>
                                                @if ($data['status'] != 'Approved')
                                                    <input type="checkbox" name="select[]" class="rowCheckbox" value="{{ $nik }}">
                                                @endif
                                            </td>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data['kkhData']['tanggalKirim'] ?? 'Not Found' }}</td>
                                            <td>{{ $nik ?? 'Not Found' }}</td>
                                            <td>{{ $data['user']['name'] ?? 'Not Found' }}</td>
                                            <td>{{ $data['user']['department'] ?? 'Not Found' }}</td>
                                            <td>{{ $data['totalDurasiTidur'] ?? 'Not Found' }}</td>
                                            <td>{{ $data['kkhData']['keluhan'] ?? 'Not Found' }}</td>
                                            <td>
                                                @if ($data['keterangan'] === 'Cukup')
                                                    <span class="badge rounded-pill text-bg-secondary">{{ $data['keterangan'] }}</span>
                                                @else
                                                    <span class="badge rounded-pill text-bg-danger">{{ $data['keterangan'] }}</span>
                                                @endif
                                            </td>
                                            <td>{{ $data['kkhData']['shift'] ?? 'Not Found' }}</td>
                                            <td>{{ $data['kkhData']['jamBangun'] ?? 'Not Found' }}</td>
                                            <td>{{ $data['kkhData']['jamSampai'] ?? 'Not Found' }}</td>
                                            <td>{{ $data['kkhData']['jamTidur'] ?? 'Not Found' }}</td>
                                            <td>
<<<<<<< HEAD
                                                <a href="{{ route('kkh.show', $nik) }}" class="badge bg-info">Histori</a>
=======
                                                @if ($data['status'] === 'Approved')
                                                    <span class="badge rounded-pill text-bg-success">{{ $data['status'] }}</span>
                                                @else
                                                    <span class="badge rounded-pill text-bg-dark">{{ $data['status'] }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('kkh.show', $nik) }}" class="badge bg-info">Detail</a>
>>>>>>> 4b83f1490fb4630680377c5e285584bdf40cafcc
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Pilih</th>
                                        <th>No</th>
                                        <th>Tanggal Kirim</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Departemen</th>
                                        <th>Total Durasi Tidur</th>
                                        <th>Keluhan</th>
                                        <th>Keterangan</th>
                                        <th>Shift</th>
                                        <th>Jam Bangun</th>
                                        <th>Jam Sampai</th>
                                        <th>Jam Tidur</th>
                                        <th>Status Approve</th>
                                        <th>Opsi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        @if (Auth::user()->departemen != 'Admin')
                            <div style="display: flex; justify-content: flex-end; margin-top: 10px;">
                                <button type="button" class="btn btn-shadow btn-success" id="verifikasiBtn">
                                    <i class="fas fa-cloud-upload-alt"></i> <span>Verifikasi</span>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>

    function formatDate(date) {
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const day = String(date.getDate()).padStart(2, '0');
        return `${year}-${month}-${day}`;
    }

    const today = new Date();
    const yesterday = new Date();
    yesterday.setDate(today.getDate() - 1);

    const input = document.getElementById('pc-date_range_picker-1');
    input.value = `${formatDate(yesterday)} to ${formatDate(today)}`;
</script>

@include('layout.footer')
<script>
    document.getElementById('selectAll').addEventListener('change', function() {
        const checkboxes = document.querySelectorAll('.rowCheckbox');
        checkboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
        });
    });

    document.getElementById('selectAllFooter').addEventListener('change', function() {
        const checkboxes = document.querySelectorAll('.rowCheckbox');
        checkboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
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
                    const selectedData = Array.from(checkboxes).map(cb => {
                        const row = cb.closest('tr');
                        const nik = cb.value;

                        return {
                            nik: nik,
                            tanggalKirim: row.cells[2].textContent.trim(),
                            nama: row.cells[4].textContent.trim(),
                            departemen: row.cells[5].textContent.trim(),
                            totalDurasiTidur: row.cells[6].textContent.trim(),
                            keluhan: row.cells[7].textContent.trim(),
                            keterangan: row.cells[8].textContent.trim(),
                            shift: row.cells[9].textContent.trim(),
                            jamBangun: row.cells[10].textContent.trim(),
                            jamSampai: row.cells[11].textContent.trim(),
                            jamTidur: row.cells[12].textContent.trim(),
                        };
                    });

                    console.log('Data yang dipilih:', selectedData);

                    // Mengirim data ke route POST
                    fetch('{{ route("kkh.verification") }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({ selectedData: selectedData })
                    })
                    .then(response => {
                        if (!response.ok) {
                            return response.text().then(text => { throw new Error(text); });
                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log('Response:', data);
                        Swal.fire('Success', data.message, 'success');

                        // Reload DataTable jika menggunakan DataTables
                        if (typeof $('#example').DataTable === 'function') {
                            $('#example').DataTable().ajax.reload(null, false);
                        }

                        location.reload();
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        Swal.fire('Error', 'Terjadi kesalahan saat menyimpan data!', 'error');
                    });
                }
            });
        }
    });
</script>





</body>

</html>
