<!-- License MIT by Ahmad Fadillah -->
<!doctype html>
<html lang="en">

<head>
    <title>{{ $title }} - Administration</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Light Able admin and dashboard template offer a variety of UI elements and pages, ensuring your admin panel is both fast and effective." />
    <meta name="author" content="phoenixcoded" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ asset('dashboard') }}/assets/images/favicon.svg" type="image/x-icon" />

    <!-- data tables css -->
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/plugins/dataTables.bootstrap5.min.css" />

    <!-- [Page specific CSS] start -->
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/plugins/flatpickr.min.css" />
    <!-- map-vector css -->
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/plugins/jsvectormap.min.css" />
    <!-- [Google Font : Public Sans] icon -->
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/fonts/phosphor/duotone/style.css" />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/fonts/tabler-icons.min.css" />
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/fonts/feather.css" />
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/fonts/fontawesome.css" />
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/fonts/material.css" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/style.css" id="main-style-link" />
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/style-preset.css" />
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/uikit.css" />

    {{-- Sweetalert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>



<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr"
data-pc-theme="light">
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
@include('notification')
