<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
    <style>
        body {
            background-image: url('img/ella-olsson-mmnKI8kMxpc-unsplash.jpg');
            overflow: hidden;
        }
    </style>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
        <div class="container">
            <a class="nav-link active fst-italic fw-bolder" aria-current="page" href="#">WELCOME TO THE DASHBOARD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <form action="{{ route('logout') }}" method="POST" class="d-flex">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    <style>
        .card-body {
            background-image: url('img/sanket-shah-SVA7TyHxojY-unsplash.jpg');
        }
    </style>
    <div class="container">
        <h1 class="mb-4">Welcome, {{ Auth::user()->name }}</h1>

       
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title fw-bolder text-light">Tasty Food</h5>
                        <p class="card-text fst-italic fw-bolder text-light">Cek Disini untuk Melihat Project!!!</p>
                        <a href="home" class="btn btn-secondary">View</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title fw-bolder text-light">Cyberlabs</h5>
                        <p class="card-text fst-italic text-light">Cek disini untuk Melihat Website Cyberlabs!!!</p>
                        <a href="https://cyberlabs.co.id/" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title fw-bolder text-light">Crud</h5>
                        <p class="card-text fst-italic fw-bolder text-light">Cek untuk Melihat Bagian Crud!!! </p>
                        <a href="posts" class="btn btn-success">View</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
