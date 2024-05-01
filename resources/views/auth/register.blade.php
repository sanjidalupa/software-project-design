<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .vh-100 {
            height: 100vh;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center vh-100">
    <div class="w-100" style="max-width: 500px;">
        <form class="p-4 p-md-5 border rounded-3 bg-light" action="{{ route('auth.register.submit') }}" method="POST">
            <h1 class="h3 mb-3 fw-normal text-center">Please register</h1>
            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @csrf
            <div class="form-floating mb-2">.
                <input type="text" class="form-control" id="floatingFullName" placeholder="Full Name" name="name">
                <label for="floatingFullName">Full Name</label>
            </div>
            <div class="form-floating mb-2">
                <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com" name="email">
                <label for="floatingEmail">Email address</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingConfirmPassword" placeholder="Confirm Password" name="password_confirmation">
                <label for="floatingConfirmPassword">Confirm Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            <p class="mt-3 text-center">
                Already have an account? <a href="{{ route('login') }}">Login</a>
            </p>
            <p class="mt-4 mb-3 text-muted text-center">&copy; 2024</p>
        </form>
    </div>
</body>
</html>
