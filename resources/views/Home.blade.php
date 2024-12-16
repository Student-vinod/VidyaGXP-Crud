<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            width: 250px;
            background-color: #343a40;
            color: white;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 20px;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h3 class="text-center">Start Bootstrap</h3>
        <hr>
        <a href="{{route('hospital')}}">Hospital-Details</a>
        <a href="{{route('create')}}">User-Registration</a>
       <a href="{{ route('products.index') }}">User-View</a>

        <a href="#">User-Contect    </a>
        <a href="#">Charts</a>
        <a href="#">Tables</a>
         <form action="{{ route('logout')}}" method="post">
            @csrf
            <button type="submit">Logout</button>
            </form>
    </div>

    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
            <div class="container-fluid">
                <span class="navbar-brand">Hospital Management System</span>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search for...">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Primary Card</h5>
                        <a href="#" class="btn btn-light">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Warning Card</h5>
                        <a href="#" class="btn btn-light">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Success Card</h5>
                        <a href="#" class="btn btn-light">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Danger Card</h5>
                        <a href="#" class="btn btn-light">View Details</a>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
