@include('layout.head', ['title' => 'Login'])
<div class="auth-main v1">
    <div class="auth-wrapper">
        <div class="auth-form">
            <div class="card my-5">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ asset('dashboard') }}/assets/images/authentication/img-auth-login.png" alt="images"
                            class="img-fluid mb-3" />
                        <h4 class="f-w-500 mb-1">Selamat datang...</h4>
                        <p class="mb-3">Login menggunakan akunmu</p>
                    </div>
                    <form action="{{ route('auth.login_post') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="NIK" name="nik" />
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="floatingInput1" placeholder="Password" name="password" />
                        </div>
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@include('layout.theme')

<!-- [Page Specific JS] start -->
<script src="{{ asset('dashboard') }}/assets/js/plugins/apexcharts.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/plugins/jsvectormap.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/plugins/world.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/plugins/world-merc.js"></script>

<script src="{{ asset('dashboard') }}/assets/js/plugins/popper.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/plugins/simplebar.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/plugins/bootstrap.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/fonts/custom-font.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/pcoded.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/plugins/feather.min.js"></script>
<!-- datatable Js -->
<script src="{{ asset('dashboard') }}/assets/js/jquery-3.6.0.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/jquery-3.6.0.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/plugins/dataTables.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/plugins/dataTables.bootstrap5.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/plugins/flatpickr.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/script-tambahan.js"></script>


</body>

</html>
