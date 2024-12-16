<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/sass/app.scss')
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .d-grid {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
            border-radius: 10px;
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.1);

        }

        .formContent {
            display: flex;
            flex-direction: column;
        }

        .input-group {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .icon {
            margin-right: 10px;
        }

        .btn {
            width: 100%;
        }
    </style>
</head>

<body>
    <form action="{{ route('forgot.password.post') }}" method="POST">
        @csrf
        <div class="d-grid">

            <div class="col m-auto">
                <div class="mb-3 text-start m-auto">
                    <i class="bi-person-circle fs-1"></i>
                    <h4 class="fw-bold">Log in to your account</h4>
                    <p class="fs-sm-5">Welcome back, please fullfill form to Login</p>
                </div>

                <div class="formContent mt-5">

                    <div class="col-md-6 mb-3 w-100">
                        <div class="input-group">
                            <div class="icon">
                                <img src="{{ Vite::asset('resources/images/email_outline.png') }}" alt="image"
                                    width="30">
                            </div>

                            <input class="form-control @error('email') is-invalid @enderror" type="text"
                                name="email" id="email" value="{{ old('email') }}" placeholder="Enter Email">
                        </div>
                        @error('email')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>

                </div>

                <div class="col-md-6 d-grid m-auto w-100">
                    <button type="submit" class="btn mainColor text-white btn-lg mt-3"><i
                            class="bi-check-circle me-2"></i>
                        Log in</button>
                </div>

            </div>

        </div>
    </form>
</body>

</html>
