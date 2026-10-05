<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #f5f7fb, #e9eef5);
            min-height: 100vh;
        }

        .login-box {
            max-width: 420px;
            margin: auto;
        }

        .card {
            border: none;
            border-radius: 20px;
        }

        .card-body {
            padding: 40px;
        }

        .login-title {
            font-weight: 700;
            margin-bottom: 25px;
        }

        .form-control {
            height: 50px;
            border-radius: 12px;
        }

        .btn-login {
            height: 50px;
            border-radius: 12px;
            font-weight: 600;
        }

        .logo-box {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row min-vh-100 align-items-center justify-content-center">
            <div class="col-md-5">

                <div class="login-box">

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card shadow-lg">
                        <div class="card-body">

                            <h4 class="text-center login-title">Admin Login</h4>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" name="email" class="form-control"
                                        value="{{ old('email') }}" required autofocus>

                                    @error('email')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" required>

                                    @error('password')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>


                                <div class="mb-4 form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>


                                <div class="d-grid">
                                    <button class="btn btn-primary btn-login" type="submit">
                                        Login
                                    </button>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</body>

</html>
