<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <title>Blog Image</title>
        <style>
            .list-group-item a{
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div class="container my-5">
            @if (session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>            
            @endif
            <div class="row">
                <div class="col-md-4">
                    <div class="list-group">
                        <div class="list-group-item">
                            <a href="/gallery">Image</a>
                        </div>
                        <div class="list-group-item">
                            <a href="/gallery/create">Upload Image</a>
                        </div>
                        <div class="list-group-item">
                            <a href="galery">Return to Galery Page</a>
                        </div>
                        <div class="list-group-item">
                            <a href="dashboard">Back to The Dashboard</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
    