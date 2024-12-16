<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/sass/app.scss')
    <style>
        .card {
            border: none;
            border-radius: .25rem;
            box-shadow: 50px 50px 50px 50px rgba(0, 0, 0, 0.1);
        }

        .input-group-text img {
            height: 20px;
            width: 20px;
        }

        .input-group-text .toggle-password {
            cursor: pointer;
        }

        .btn-outline-dark {
            border-color: #343a40;
            color: #ffffff;
            background-color: #323A5A
        }

        .btn-outline-dark:hover {
            background-color: #343a40;
            color: #000000;
            background-color: #ffffff
        }

        .icon-custom {
            color: #323A5A;
        }
    </style>
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="{{ route('reset.password.post') }}" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="text-center mb-4">
                                <i class="bi bi-person-circle fs-1"></i>
                                <h4 class="fw-bold mt-2">Reset Your Password</h4>
                                <p class="text-muted">Please fill the form to reset your password</p>
                            </div>

                            <div class="mb-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-light">
                                            <img src="{{ Vite::asset('resources/images/pesan.png') }}" alt="Email Icon">
                                        </span>
                                    </div>
                                    <input type="text" name="email" id="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Enter Email" value="{{ old('email') }}">
                                </div>
                                @error('email')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-light">
                                            <img src="{{ Vite::asset('resources/images/psw.png') }}"
                                                alt="Password Icon">
                                        </span>
                                    </div>
                                    <input type="password" name="password" id="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Enter New Password">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-light">
                                            <i class="far fa-eye toggle-password"
                                                onclick="togglePassword('password')"></i>
                                        </span>
                                    </div>
                                </div>
                                @error('password')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-light">
                                            <img src="{{ Vite::asset('resources/images/psw2.png') }}"
                                                alt="Confirm Password Icon">
                                        </span>
                                    </div>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                        placeholder="Confirm New Password">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-light">
                                            <i class="far fa-eye toggle-password"
                                                onclick="togglePassword('password_confirmation')"></i>
                                        </span>
                                    </div>
                                </div>
                                @error('password_confirmation')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-lg btn-outline-dark btn-lg mt-3 fw-bold"><i
                                        class="bi bi-check-circle me-2"></i>Reset Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')

    <script>
        function togglePassword(id) {
            const passwordField = document.getElementById(id);
            const icon = passwordField.nextElementSibling.querySelector('.toggle-password');

            if (passwordField.type === "password") {
                passwordField.type = "text";
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = "password";
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>
</body>

</html>
