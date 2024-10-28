@include('layout.head', ['title' => 'KKH'])
@include('layout.sidebar')
@include('layout.header')
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                        </ul>
                    </div>
                    {{-- <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Home</h2>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>DOM/Jquery</h5>
                        <small>Events assigned to the table can be exceptionally useful for user interaction,
                            however you must be aware that DataTables
                            will add and remove rows from the DOM.</small>
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

@include('layout.footer')


</body>
</html>
