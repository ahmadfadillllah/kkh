<footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
        <div class="row">
            <div class="col-sm-6 my-1">
                {{-- <p class="m-0">Copyright with &copy; by IT Team <a href="https://ahmadfadillah.my.id"
                        target="_blank"> PT. SIMS JAYA KALTIM</a></p> --}}
            </div>
            <div class="col-sm-6 ms-auto my-1">
                <ul class="list-inline footer-link mb-0 justify-content-sm-end d-flex">
                    <li class="list-inline-item"><a href="{{ route('dashboards.index') }}">v1.0.0</a></li>

                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="offcanvas border-0 pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_pc_layout">
    <div class="offcanvas-header justify-content-between">
        <h5 class="offcanvas-title">Settings</h5>
        <button type="button" class="btn btn-icon btn-link-danger" data-bs-dismiss="offcanvas" aria-label="Close"><i
                class="ti ti-x"></i></button>
    </div>
    <div class="pct-body customizer-body">
        <div class="offcanvas-body py-0">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="pc-dark">
                        <h6 class="mb-1">Theme Mode</h6>
                        <p class="text-muted text-sm">Choose light or dark mode or Auto</p>
                        <div class="row theme-color theme-layout">
                            <div class="col-4">
                                <div class="d-grid">
                                    <button class="preset-btn btn active" data-value="true"
                                        onclick="layout_change('light');">
                                        <span class="btn-label">Light</span>
                                        <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="false" onclick="layout_change('dark');">
                                        <span class="btn-label">Dark</span>
                                        <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="default"
                                        onclick="layout_change_default();" data-bs-toggle="tooltip"
                                        title="Automatically sets the theme based on user's operating system's color scheme.">
                                        <span class="btn-label">Default</span>
                                        <span class="pc-lay-icon d-flex align-items-center justify-content-center">
                                            <i class="ph-duotone ph-cpu"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <h6 class="mb-1">Sidebar Theme</h6>
                    <p class="text-muted text-sm">Choose Sidebar Theme</p>
                    <div class="row theme-color theme-sidebar-color">
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn" data-value="true"
                                    onclick="layout_sidebar_change('dark');">
                                    <span class="btn-label">Dark</span>
                                    <span
                                        class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn active" data-value="false"
                                    onclick="layout_sidebar_change('light');">
                                    <span class="btn-label">Light</span>
                                    <span
                                        class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <h6 class="mb-1">Accent color</h6>
                    <p class="text-muted text-sm">Choose your primary theme color</p>
                    <div class="theme-color preset-color">
                        <a href="#!" class="active" data-value="preset-1"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-2"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-3"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-4"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-5"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-6"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-7"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-8"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-9"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-10"><i class="ti ti-check"></i></a>
                    </div>
                </li>
                <li class="list-group-item">
                    <h6 class="mb-1">Sidebar Caption</h6>
                    <p class="text-muted text-sm">Sidebar Caption Hide/Show</p>
                    <div class="row theme-color theme-nav-caption">
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn active" data-value="true"
                                    onclick="layout_caption_change('true');">
                                    <span class="btn-label">Caption Show</span>
                                    <span
                                        class="pc-lay-icon"><span></span><span></span><span><span></span><span></span></span><span></span></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn" data-value="false"
                                    onclick="layout_caption_change('false');">
                                    <span class="btn-label">Caption Hide</span>
                                    <span
                                        class="pc-lay-icon"><span></span><span></span><span><span></span><span></span></span><span></span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="pc-rtl">
                        <h6 class="mb-1">Theme Layout</h6>
                        <p class="text-muted text-sm">LTR/RTL</p>
                        <div class="row theme-color theme-direction">
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn active" data-value="false"
                                        onclick="layout_rtl_change('false');">
                                        <span class="btn-label">LTR</span>
                                        <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="true"
                                        onclick="layout_rtl_change('true');">
                                        <span class="btn-label">RTL</span>
                                        <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item pc-box-width">
                    <div class="pc-container-width">
                        <h6 class="mb-1">Layout Width</h6>
                        <p class="text-muted text-sm">Choose Full or Container Layout</p>
                        <div class="row theme-color theme-container">
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn active" data-value="false"
                                        onclick="change_box_container('false')">
                                        <span class="btn-label">Full Width</span>
                                        <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span><span></span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="true"
                                        onclick="change_box_container('true')">
                                        <span class="btn-label">Fixed Width</span>
                                        <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span><span></span></span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-grid">
                        <button class="btn btn-light-danger" id="layoutreset">Reset Layout</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- [Page Specific JS] start -->
<script src="{{ asset('dashboard') }}/assets/js/plugins/apexcharts.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/plugins/jsvectormap.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/plugins/world.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/plugins/world-merc.js"></script>
{{-- <script src="{{ asset('dashboard') }}/assets/js/pages/dashboard-default.js"></script> --}}

<script src="{{ asset('dashboard') }}/assets/js/plugins/popper.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/plugins/simplebar.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/plugins/bootstrap.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/fonts/custom-font.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/pcoded.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/plugins/feather.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/plugins/apexcharts.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/pages/w-chart.js"></script>

<!-- datatable Js -->
<script src="{{ asset('dashboard') }}/assets/js/jquery-3.6.0.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/jquery-3.6.0.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/plugins/dataTables.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/plugins/dataTables.bootstrap5.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/plugins/flatpickr.min.js"></script>
    <script>
      // minimum setup
      flatpickr(document.querySelector('#pc-date_range_picker-1'), {
        mode: 'range'
      });
      flatpickr(document.querySelector('#pc-date_range_picker-2'), {
        mode: 'range'
      });
      flatpickr(document.querySelector('#pc-date_range_picker-3'), {
        mode: 'range',
        minDate: 'today',
        dateFormat: 'Y-m-d',
        disable: [
          function (date) {
            return !(date.getDate() % 8);
          }
        ]
      });
      flatpickr(document.querySelector('#pc-date_range_picker-4'), {
        mode: 'range',
        dateFormat: 'Y-m-d',
        defaultDate: ['2016-10-10', '2016-10-20']
      });
    </script>
<script>
    // [ DOM/jquery ]
    var total, pageTotal;
    var table = $('#dom-jqry').DataTable();
    // [ column Rendering ]
    $('#colum-render').DataTable({
        columnDefs: [{
                render: function (data, type, row) {
                    return data + ' (' + row[3] + ')';
                },
                targets: 0
            },
            {
                visible: false,
                targets: [3]
            }
        ]
    });
    // [ Multiple Table Control Elements ]
    $('#multi-table').DataTable({
        dom: '<"top"iflp<"clear">>rt<"bottom"iflp<"clear">>'
    });
    // [ Complex Headers With Column Visibility ]
    $('#complex-header').DataTable({
        columnDefs: [{
            visible: false,
            targets: -1
        }]
    });
    // [ Language file ]
    $('#lang-file').DataTable({
        language: {
            url: '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/German.json'
        }
    });
    // [ Setting Defaults ]
    $('#setting-default').DataTable();
    // [ Row Grouping ]
    var table1 = $('#row-grouping').DataTable({
        columnDefs: [{
            visible: false,
            targets: 2
        }],
        order: [
            [2, 'asc']
        ],
        displayLength: 25,
        drawCallback: function (settings) {
            var api = this.api();
            var rows = api
                .rows({
                    page: 'current'
                })
                .nodes();
            var last = null;

            api
                .column(2, {
                    page: 'current'
                })
                .data()
                .each(function (group, i) {
                    if (last !== group) {
                        $(rows)
                            .eq(i)
                            .before('<tr class="group"><td colspan="5">' + group + '</td></tr>');

                        last = group;
                    }
                });
        }
    });
    // [ Order by the grouping ]
    $('#row-grouping tbody').on('click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
            table.order([2, 'desc']).draw();
        } else {
            table.order([2, 'asc']).draw();
        }
    });
    // [ Footer callback ]
    $('#footer-callback').DataTable({
        footerCallback: function (row, data, start, end, display) {
            var api = this.api(),
                data;

            // Remove the formatting to get integer data for summation
            var intVal = function (i) {
                return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ?
                    i : 0;
            };

            // Total over all pages
            total = api
                .column(4)
                .data()
                .reduce(function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0);

            // Total over this page
            pageTotal = api
                .column(4, {
                    page: 'current'
                })
                .data()
                .reduce(function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0);

            // Update footer
            $(api.column(4).footer()).html('$' + pageTotal + ' ( $' + total + ' total)');
        }
    });
    // [ Custom Toolbar Elements ]
    $('#c-tool-ele').DataTable({
        dom: '<"toolbar">frtip'
    });
    // [ Custom Toolbar Elements ]
    $('div.toolbar').html('<b>Custom tool bar! Text/images etc.</b>');
    // [ custom callback ]
    $('#row-callback').DataTable({
        createdRow: function (row, data, index) {
            if (data[5].replace(/[\$,]/g, '') * 1 > 150000) {
                $('td', row).eq(5).addClass('highlight');
            }
        }
    });

</script>


<script>
    layout_change('light');

</script>

<script>
    layout_sidebar_change('light');

</script>

<script>
    change_box_container('false');

</script>

<script>
    layout_caption_change('true');

</script>

<script>
    layout_rtl_change('false');

</script>

<script>
    preset_change('preset-1');

</script>

<div class="offcanvas border-0 pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_pc_layout">
    <div class="offcanvas-header justify-content-between">
        <h5 class="offcanvas-title">Settings</h5>
        <button type="button" class="btn btn-icon btn-link-danger" data-bs-dismiss="offcanvas" aria-label="Close"><i
                class="ti ti-x"></i></button>
    </div>
    <div class="pct-body customizer-body">
        <div class="offcanvas-body py-0">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="pc-dark">
                        <h6 class="mb-1">Theme Mode</h6>
                        <p class="text-muted text-sm">Choose light or dark mode or Auto</p>
                        <div class="row theme-color theme-layout">
                            <div class="col-4">
                                <div class="d-grid">
                                    <button class="preset-btn btn active" data-value="true"
                                        onclick="layout_change('light');">
                                        <span class="btn-label">Light</span>
                                        <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="false"
                                        onclick="layout_change('dark');">
                                        <span class="btn-label">Dark</span>
                                        <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="default"
                                        onclick="layout_change_default();" data-bs-toggle="tooltip"
                                        title="Automatically sets the theme based on user's operating system's color scheme.">
                                        <span class="btn-label">Default</span>
                                        <span class="pc-lay-icon d-flex align-items-center justify-content-center">
                                            <i class="ph-duotone ph-cpu"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <h6 class="mb-1">Sidebar Theme</h6>
                    <p class="text-muted text-sm">Choose Sidebar Theme</p>
                    <div class="row theme-color theme-sidebar-color">
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn" data-value="true"
                                    onclick="layout_sidebar_change('dark');">
                                    <span class="btn-label">Dark</span>
                                    <span
                                        class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn active" data-value="false"
                                    onclick="layout_sidebar_change('light');">
                                    <span class="btn-label">Light</span>
                                    <span
                                        class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <h6 class="mb-1">Accent color</h6>
                    <p class="text-muted text-sm">Choose your primary theme color</p>
                    <div class="theme-color preset-color">
                        <a href="#!" class="active" data-value="preset-1"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-2"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-3"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-4"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-5"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-6"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-7"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-8"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-9"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-10"><i class="ti ti-check"></i></a>
                    </div>
                </li>
                <li class="list-group-item">
                    <h6 class="mb-1">Sidebar Caption</h6>
                    <p class="text-muted text-sm">Sidebar Caption Hide/Show</p>
                    <div class="row theme-color theme-nav-caption">
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn active" data-value="true"
                                    onclick="layout_caption_change('true');">
                                    <span class="btn-label">Caption Show</span>
                                    <span
                                        class="pc-lay-icon"><span></span><span></span><span><span></span><span></span></span><span></span></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn" data-value="false"
                                    onclick="layout_caption_change('false');">
                                    <span class="btn-label">Caption Hide</span>
                                    <span
                                        class="pc-lay-icon"><span></span><span></span><span><span></span><span></span></span><span></span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="pc-rtl">
                        <h6 class="mb-1">Theme Layout</h6>
                        <p class="text-muted text-sm">LTR/RTL</p>
                        <div class="row theme-color theme-direction">
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn active" data-value="false"
                                        onclick="layout_rtl_change('false');">
                                        <span class="btn-label">LTR</span>
                                        <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="true"
                                        onclick="layout_rtl_change('true');">
                                        <span class="btn-label">RTL</span>
                                        <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item pc-box-width">
                    <div class="pc-container-width">
                        <h6 class="mb-1">Layout Width</h6>
                        <p class="text-muted text-sm">Choose Full or Container Layout</p>
                        <div class="row theme-color theme-container">
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn active" data-value="false"
                                        onclick="change_box_container('false')">
                                        <span class="btn-label">Full Width</span>
                                        <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span><span></span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="true"
                                        onclick="change_box_container('true')">
                                        <span class="btn-label">Fixed Width</span>
                                        <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span><span></span></span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-grid">
                        <button class="btn btn-light-danger" id="layoutreset">Reset Layout</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</body>

</html>
