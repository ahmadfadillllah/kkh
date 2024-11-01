@error('nik')
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Upps!</strong> {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@enderror
@error('password')
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Upps!</strong> {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@enderror
