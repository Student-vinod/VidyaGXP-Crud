<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            max-width: 500px;
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .login-container h3 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        <script>
            // Clear form fields on successful login
            document.querySelector('form').reset();
        </script>
        @endif
        
        <h3>Login</h3>
        <form action="{{ route('Auth')}}" method="Post">
            @csrf
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Email address</label>
                <input type="email" name="email" id="form2Example1" class="form-control" />
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Password</label>
                <input type="password" name="password" id="form2Example2" class="form-control" />
            </div>

            <!-- Remember me and Forgot password -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                    </div>
                </div>
                <div class="col text-end">
                    <a href="#!">Forgot password?</a>
                </div>
            </div>

            <!-- Submit button -->
            <div class="d-flex justify-content-center">
                <button type="Submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>
            </div>

            <!-- Register and social media buttons -->
            <div class="text-center">
                <p>Not a member? <a href="{{route('Registration')}}">Registration</a></p>
                <p>or sign up with:</p>
                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                </button>
                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                </button>
                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                </button>
                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                </button>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.5.0/mdb.min.js"></script>
</body>
</html>
