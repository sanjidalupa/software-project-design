<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
        <form class="p-4 p-md-5 border rounded-3 bg-light" method="POST" action="{{ route('auth.login.submit') }}">
            @csrf
            <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-floating mb-2">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary mb-2" type="submit">Login</button>
            <p class="mt-3 text-center">
                Don't have an account? <a href="{{ route('auth.register') }}">Register</a>
            </p>
            {{-- <button class="w-100 btn btn-link" type="button">Reset Password</button> --}}
            <hr>
            {{-- <button type="button" class="btn btn-danger w-100 mb-2">Sign in with Google</button>
            <button type="button" class="btn btn-primary w-100">Sign in with Facebook</button> --}}
            <p class="mt-5 mb-3 text-muted text-center">&copy; 2024</p>
        </form>
    </div>
</body>
</html>
