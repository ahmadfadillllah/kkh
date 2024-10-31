'use strict';
document.addEventListener('DOMContentLoaded', function () {
  setTimeout(function () {
    chartdashboard();
  }, 500);
});

// Mengakses data dari window.dashboardData
var result = window.dashboardData;

// Pastikan totalData tidak nol
if (result.totalData > 0) {
    var percentage1 = (result.totalKurangTidur / result.totalData) * 100;
    var percentage2 = (result.totalTidakAdaKeluhan / result.totalData) * 100;
    var percentage3 = (result.totalShiftPagi / result.totalData) * 100;
    var percentage4 = (result.totalShiftMalam / result.totalData) * 100;
} else {
    var percentage1 = 0;
    var percentage2 = 0;
    var percentage3 = 0;
    var percentage4 = 0;
}

// Fungsi chartdashboard() tetap sama
function chartdashboard() {
(function () {
    var options_total_earning_1 = {
        series: [percentage1], // Menggunakan persentase
        chart: {
            height: 100,
            type: 'radialBar'
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    margin: 0,
                    size: '60%',
                    background: 'transparent',
                    imageOffsetX: 0,
                    imageOffsetY: 0,
                    position: 'front'
                },
                track: {
                    background: '#1DE9B650',
                    strokeWidth: '50%'
                },
                dataLabels: {
                    show: true,
                    name: {
                        show: false
                    },
                    value: {
                        formatter: function (val) {
                            return Math.round(val) + '%'; // Menampilkan persentase
                        },
                        offsetY: 7,
                        color: '#D1001F',
                        fontSize: '20px',
                        fontWeight: '700',
                        show: true
                    }
                }
            }
        },
        colors: ['#D1001F'],
        fill: {
            type: 'solid'
        },
        stroke: {
            lineCap: 'round'
        }
    };

    var chart_total_earning_1 = new ApexCharts(document.querySelector('#total-earning-chart-1'),
        options_total_earning_1);
    chart_total_earning_1.render().catch(function (err) {
        console.error(err);
    });

    //  total earning chart 2
    var options_total_earning_2 = {
        series: [percentage2], // Menggunakan persentase
        chart: {
            height: 100,
            type: 'radialBar'
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    margin: 0,
                    size: '60%',
                    background: 'transparent',
                    imageOffsetX: 0,
                    imageOffsetY: 0,
                    position: 'front'
                },
                track: {
                    background: '#00ffff',
                    strokeWidth: '50%'
                },
                dataLabels: {
                    show: true,
                    name: {
                        show: false
                    },
                    value: {
                        formatter: function (val) {
                            return Math.round(val) + '%'; // Menampilkan persentase
                        },
                        offsetY: 7,
                        color: '#1DE9B6',
                        fontSize: '20px',
                        fontWeight: '700',
                        show: true
                    }
                }
            }
        },
        colors: ['#1DE9B6'],
        fill: {
            type: 'solid'
        },
        stroke: {
            lineCap: 'round'
        }
    };

    var chart_total_earning_2 = new ApexCharts(document.querySelector('#total-earning-chart-2'),
        options_total_earning_2);
    chart_total_earning_2.render().catch(function (err) {
        console.error(err);
    });


    //  total earning chart 3
    var options_total_earning_3 = {
        series: [percentage3], // Menggunakan persentase
        chart: {
            height: 100,
            type: 'radialBar'
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    margin: 0,
                    size: '60%',
                    background: 'transparent',
                    imageOffsetX: 0,
                    imageOffsetY: 0,
                    position: 'front'
                },
                track: {
                    background: '#1DE9B650',
                    strokeWidth: '50%'
                },
                dataLabels: {
                    show: true,
                    name: {
                        show: false
                    },
                    value: {
                        formatter: function (val) {
                            return Math.round(val) + '%'; // Menampilkan persentase
                        },
                        offsetY: 7,
                        color: '#fc6601',
                        fontSize: '20px',
                        fontWeight: '700',
                        show: true
                    }
                }
            }
        },
        colors: ['#fc6601'],
        fill: {
            type: 'solid'
        },
        stroke: {
            lineCap: 'round'
        }
    };

    var chart_total_earning_3 = new ApexCharts(document.querySelector('#total-earning-chart-3'),
        options_total_earning_3);
    chart_total_earning_3.render().catch(function (err) {
        console.error(err);
    });

    var options_total_earning_4 = {
        series: [percentage4], // Menggunakan persentase
        chart: {
            height: 100,
            type: 'radialBar'
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    margin: 0,
                    size: '60%',
                    background: 'transparent',
                    imageOffsetX: 0,
                    imageOffsetY: 0,
                    position: 'front'
                },
                track: {
                    background: '#1DE9B650',
                    strokeWidth: '50%'
                },
                dataLabels: {
                    show: true,
                    name: {
                        show: false
                    },
                    value: {
                        formatter: function (val) {
                            return Math.round(val) + '%'; // Menampilkan persentase
                        },
                        offsetY: 7,
                        color: '#A52A2A',
                        fontSize: '20px',
                        fontWeight: '700',
                        show: true
                    }
                }
            }
        },
        colors: ['#A52A2A'],
        fill: {
            type: 'solid'
        },
        stroke: {
            lineCap: 'round'
        }
    };

    var chart_total_earning_4 = new ApexCharts(document.querySelector('#total-earning-chart-4'),
        options_total_earning_4);
    chart_total_earning_4.render().catch(function (err) {
        console.error(err);
    });

    var options_performance = {
        chart: {
            height: 250,
            type: 'donut'
        },
        series: [result.totalKurangTidur, result.totalTidakAdaKeluhan],
        colors: ['#D1001F', '#1DE9B6'],
        labels: ['Kurang Tidur', 'Fit'],
        fill: {
            opacity: [1, 1, 1, 0.3]
        },
        legend: {
            show: false
        },
        plotOptions: {
            pie: {
            donut: {
                size: '65%',
                labels: {
                show: true,
                name: {
                    show: true
                },
                value: {
                    show: true
                }
                }
            }
            }
        },
        dataLabels: {
            enabled: false
        },
        responsive: [
            {
            breakpoint: 575,
            options: {
                chart: {
                height: 250
                },
                plotOptions: {
                pie: {
                    donut: {
                    size: '65%',
                    labels: {
                        show: false
                    }
                    }
                }
                }
            }
            },
            {
            breakpoint: 1182,
            options: {
                chart: {
                height: 190
                }
            }
            }
        ]
        };
        var chart_performance = new ApexCharts(document.querySelector('#performance-chart'), options_performance);
        chart_performance.render();
})();
}
