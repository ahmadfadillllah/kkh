@include('layout.head', ['title' => 'Dashboards'])
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
        {{-- <div class="col-xxl-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5>Reports</h5>
                    <i class="ph-duotone ph-info f-20 ms-1" data-bs-toggle="tooltip" data-bs-title="Reports"></i>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <p class="mb-1">Kurang Tidur</p>
                                <div class="d-flex align-items-center flex-wrap">
                                    <h5 class="mb-0 me-1">{{ $result['totalKurangTidur'] }} / {{ $result['totalData'] }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <div id="total-earning-chart-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <p class="mb-1">Fit</p>
                                <div class="d-flex align-items-center flex-wrap">
                                    <h5 class="mb-0 me-1">{{ $result['totalTidakAdaKeluhan'] }} /
                                        {{ $result['totalData'] }}</h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <div id="total-earning-chart-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <p class="mb-1">Shift Pagi</p>
                                <div class="d-flex align-items-center flex-wrap">
                                    <h5 class="mb-0 me-1">{{ $result['totalShiftPagi'] }} / {{ $result['totalData'] }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <div id="total-earning-chart-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <p class="mb-1">Shift Malam</p>
                                <div class="d-flex align-items-center flex-wrap">
                                    <h5 class="mb-0 me-1">{{ $result['totalShiftMalam'] }} / {{ $result['totalData'] }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <div id="total-earning-chart-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body">
                            <h5>Daftar Karyawan Fatique</h5>
                            <div class="dt-responsive">
                                <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Departemen</th>
                                            {{-- <th>Keterangan</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($combinedData as $nik => $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ isset($data['kkhData']['tanggalKirim']) ? \Carbon\Carbon::parse($data['kkhData']['tanggalKirim'])->translatedFormat('d F Y H:i') : 'Not Found' }}</td>
                                                <td>{{ $nik ?? 'Not Found' }}</td>
                                                <td>{{ $data['user']['name'] ?? 'Not Found' }}</td>
                                                <td>{{ $data['user']['department'] ?? 'Not Found' }}</td>
                                                {{-- <td>
                                                    @if ($data['keterangan'] === 'Cukup')
                                                        <span class="badge rounded-pill text-bg-secondary">Cukup</span>
                                                    @else
                                                        <span class="badge rounded-pill text-bg-danger">Kurang Tidur</span>
                                                    @endif
                                                </td> --}}
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
                                            {{-- <th>Keterangan</th> --}}
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                        </div>
                        <div id="performance-chart"></div>
                        <div class="text-center">
                            <div>
                                <a href="{{ route('kkh.index') }}" class="btn btn-primary mb-3">View data</a>
                            </div>
                            <div class="d-inline-flex align-items-center m-1">
                                <p class="mb-0"><i class="ph-duotone ph-circle text-primary f-12"></i> Kurang Tidur
                                </p>
                                <span class="badge bg-light-secondary ms-1">{{ $result['totalKurangTidur'] }}</span>
                            </div>
                            <div class="d-inline-flex align-items-center m-1">
                                <p class="mb-0"><i class="ph-duotone ph-circle text-secondary f-12"></i> Fit
                                </p>
                                <span class="badge bg-light-danger ms-1">{{ $result['totalTidakAdaKeluhan'] }}</span>
                            </div>
                            {{-- <div class="d-inline-flex align-items-center m-1">
                                <p class="mb-0"><i class="ph-duotone ph-circle text-primary f-12"></i> Shift
                                </p>
                                <span class="badge bg-light-secondary ms-1">56</span>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<script>
    window.dashboardData = {
        totalKurangTidur: {{ $result['totalKurangTidur'] }},
        totalTidakAdaKeluhan: {{ $result['totalTidakAdaKeluhan'] }},
        totalShiftPagi: {{ $result['totalShiftPagi'] }},
        totalShiftMalam: {{ $result['totalShiftMalam'] }},
        totalData: {{ $result['totalData'] }}
    };
</script>

@include('layout.footer')
</body>

</html>
