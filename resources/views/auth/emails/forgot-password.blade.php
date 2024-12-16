<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
    @vite('resources/sass/app.scss')

</head>

<body>

    <div class="sectin">
        <a href="https://ibb.co.com/QXg3hXT"><img src="https://i.ibb.co.com/rvjRqvz/logo-seeu.png" alt="logo-seeu"
                border="0" width="70px" class="d-block w-10 m-auto"></a>
        <h1>Lupa Password?</h1>
        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 100%; background-color: #242542; height: 5px" />
        <p>Silahkan ganti password anda dengan klik "Reset Password" di bawah ini.</p>
        <a href="{{ route('reset.password', $token) }}">Reset Password</a>
        <p style="color: red;">Catat Password Anda</p>
    </div>

</body>

</html>
