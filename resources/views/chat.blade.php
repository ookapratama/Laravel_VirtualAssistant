<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-secondary-subtle">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">
                <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo"
                    width="30" height="24" class="d-inline-block align-text-top me-2">
                {{ $title }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    {{-- <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a> --}}
                </div>
            </div>
        </div>
    </nav>

    <form action="">
        <div class="container-md mx-auto mt-5 p-3">
            <div class="mb-3 input-group input-group-lg rounded-pill">
                <input type="text" class="form-control  py-3" id="exampleFormControlInput1"
                    placeholder="Silahkan masukkan pahlawan yang ingin anda cari...">
                <button style="letter-spacing: 3px;" class="btn btn-primary " type="button"
                    id="button-addon2">Kirim</button>
                {{-- <button class="btn btn-primary" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                    <span role="status">Loading...</span>
                </button> --}}
            </div>

            <div class="result text-white text-justify">
                <p style="text-align: justify;" class="fs-5 lh-lg">
                    Result . . . . . .
                </p>
                <div class="d-flex justify-content-center">
                    <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
