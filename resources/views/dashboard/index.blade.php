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
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <p class="mb-1">Kurang Tidur</p>
                                <div class="d-flex align-items-center flex-wrap">
                                    <h5 class="mb-0 me-1">50 / 2000</h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <div id="total-earning-chart-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <p class="mb-1">Fit</p>
                                <div class="d-flex align-items-center flex-wrap">
                                    <h5 class="mb-0 me-1">50 / 2000</h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <div id="total-earning-chart-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <p class="mb-1">Shift</p>
                                <div class="d-flex align-items-center flex-wrap">
                                    <h5 class="mb-0 me-1">50 / 2000</h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <div id="total-earning-chart-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <ul class="list-inline me-auto mb-3 mb-sm-0">
                                <li class="list-inline-item"> Visitor </li>
                                <li class="list-inline-item">
                                    <button id="chart-line" class="avtar avtar-s btn btn-light-secondary">
                                        <i class="ph-duotone ph-chart-line f-18"></i>
                                    </button>
                                </li>
                                <li class="list-inline-item">
                                    <button id="chart-bar" class="avtar avtar-s btn btn-light-secondary">
                                        <i class="ph-duotone ph-chart-bar f-18"></i>
                                    </button>
                                </li>
                                <li class="list-inline-item">
                                    <button id="chart-area" class="avtar avtar-s btn btn-light-secondary">
                                        <i class="ph-duotone ph-wave-sine f-18"></i>
                                    </button>
                                </li>
                            </ul>
                            <div class="d-flex align-items-center">
                                <h3><span class="badge bg-success">823</span> / <span class="badge bg-info">1256</span></h3>
                                {{-- <h3 class="mb-0 me-1">1256</h3> --}}
                            </div>
                        </div>
                        <div id="reports-chart"></div>
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
                                <button class="btn btn-primary mb-3">View details</button>
                            </div>
                            <div class="d-inline-flex align-items-center m-1">
                                <p class="mb-0"><i class="ph-duotone ph-circle text-primary f-12"></i> Kurang Tidur
                                </p>
                                <span class="badge bg-light-secondary ms-1">56</span>
                            </div>
                            <div class="d-inline-flex align-items-center m-1">
                                <p class="mb-0"><i class="ph-duotone ph-circle text-secondary f-12"></i> Fit
                                </p>
                                <span class="badge bg-light-danger ms-1">34</span>
                            </div>
                            <div class="d-inline-flex align-items-center m-1">
                                <p class="mb-0"><i class="ph-duotone ph-circle text-primary f-12"></i> Shift
                                </p>
                                <span class="badge bg-light-secondary ms-1">56</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

@include('layout.footer')


</body>
</html>
