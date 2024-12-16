<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SeeU - Sistem Informasi UMKM</title>
    <link rel="shortcut icon" href="/resources/images/Logo/mainLogo.png" type="image/svg+xml">
    @vite('resources/sass/app.scss')

    <style>
        body {
            background-color: rgb(22, 22, 22);

        }
    </style>
</head>

<body>


    <div class="text-center">
        <div class="d-flex">
            <div class="leftContent p-2 gap-50 vh-100" id="leftContent">

                <div class="topContent h-100">

                    <img class="mx-auto mb-5" src="{{ Vite::asset('resources/images/Logo/logo_verti.png') }}"
                        width="200px" alt="image">

                    <div class="w-100 mt-5 h-100">
                        <div class="d-grid">
                            <a class="btn btn-warning  fw-bold mb-3" href="{{ route('admin.index') }}">Home</a>

                            <a class="btn btn-dark  mb-3" href="{{ route('dataUmkm') }}"
                                style="color:rgb(70, 70, 70)">UMKM</a>
                            <a class="btn btn-dark  mb-3" href="{{ route('dataUser') }}"
                                style="color:rgb(70, 70, 70)">User</a>
                            <a class="btn btn-dark  mb-3" style="color:rgb(70, 70, 70)">About Us</a>

                        </div>


                    </div>
                </div>

                <div class="bottomContent">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-danger w-100 fw-bold btnReg border-0" type="submit">Logout</button>
                    </form>
                </div>

            </div>
            <div class="col rightContent bg-white">
                @include('layouts.nav')
                <div class="container mt-4 bg-white">

                    <div class="categoryBody mb-5 mt-5">
                        <div class="container text-center mb-5">
                            <div class="row">
                                <div class="col">
                                    <div class="content  bg-dark text-white rounded">
                                        <h3 class=" py-2 w-100 rounded fw-bold">Culinary</h3>
                                        <h5 class="fw-bold">{{ $culinary->count() }}</h5>
                                    </div>

                                </div>
                                <div class="col">
                                    <div class="content  bg-dark text-white rounded">
                                        <h3 class="py-2 w-100 rounded fw-bold">Fashion</h3>
                                        <h5 class="fw-bold">{{ $fashion->count() }}</h5>

                                    </div>

                                </div>
                                <div class="col">
                                    <div class="content  bg-dark text-white rounded">
                                        <h3 class=" py-2 w-100 rounded  fw-bold">Service</h3>
                                        <h5 class="fw-bold">{{ $service->count() }}</h5>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="p-6 m-20 bg-white rounded shadow">
                            {!! $chart->container() !!}
                        </div>

                        <script src="{{ $chart->cdn() }}"></script>

                        {{ $chart->script() }}

                    </div>

                </div>
            </div>
        </div>
    </div>

<style>
    .rightContent.active {
        padding-left: 0px;
    }

    .rightContent.active #apexcharts9prxoflk {
        width: 500px;
    }
</style>
    <script>
        var btnTgl1 = document.getElementById('btnTgl1');
        var btnTgl2 = document.getElementById('btnTgl2');
        var leftContent = document.getElementById('leftContent');
        var backToogle = document.getElementById('backToogle');
        var rightContent = document.querySelector('.rightContent');



        btnTgl1.addEventListener("click", function() {
            leftContent.style.display = "grid";
            btnTgl1.style.transform = "scale(0)";
            backToogle.style.transform = "scale(1)";
            backToogle.style.position = "static";
            btnTgl1.style.position = "absolute";
            rightContent.classList.add('active');
        });

        backToogle.addEventListener("click", function() {
            leftContent.style.display = "none";
            btnTgl1.style.transform = "scale(1)";
            backToogle.style.transform = "scale(0)";
        });
    </script>
    @stack('scripts')




    @vite('resources/js/app.js')

</body>

</html>
