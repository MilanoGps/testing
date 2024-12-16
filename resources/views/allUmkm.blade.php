<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SeeU - Sistem Informasi UMKM</title>
    @vite('resources/sass/app.scss')

    <style>
        body {
            background-color: rgb(22, 22, 22);

        }

        .item {
            width: 400px;
            padding: 0px;
            overflow: hidden;
        }

        .cards {
            width: 18rem;
        }
    </style>
</head>

<body>

    <div class="text-center h-100vh">
        <div class="d-flex">

            <div class="leftContent p-2 gap-50 vh-100" id="leftContent">

                <div class="topContent h-100">

                    @if (Auth::check())
                        <img class="mx-auto mb-5" src="{{ Vite::asset('resources/images/Logo/logo_verti.png') }}"
                            width="200px" alt="image">
                    @else
                        <img class="mx-auto mb-5" src="" width="200px" alt="image">
                    @endif



                    <div class="w-100 mt-5">
                        <div class="d-grid">
                            <a class="btn btn-dark mb-3" style="color:rgb(70, 70, 70)" href="{{ route('home', ['id' => Auth::user()->id]) }}">Home</a>

                            <a class="btn btn-warning fw-bold btnHome mb-3"
                                href="{{ route('allUmkm') }}">UMKM</a>
                            <a class="btn btn-dark mb-3" style="color:rgb(70, 70, 70)" href="{{ route('about') }}">About
                                Us</a>

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

            <div class="col rightContent bg-white  ">
                @include('layouts.nav')

                <div class="h-100vh">
                        <div class="allBody h-100vh">
                    <h1 class="fw-bold my-5">All UMKM</h1>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach ($umkm as $umkms)
                            <div class="col">
                                <div class="m-auto align-items-center cards">
                                    <a class="text-decoration-none" href="{{ route('detail', ['id' => $umkms->id]) }}">

                                        <div class="card" style="width: 18rem; height:344px">
                                            <img class="card-img-top"
                                                src="{{ Storage::url('files/documentUser/profileUMKM/' . $umkms->original_photoname) }}"
                                                width="1366px" height="200px" alt="image">
                                            <div class="card-body text-center">
                                                <h5 class="card-title text-decoration-none txtMain">
                                                    {{ $umkms->umkm }}</h5>
                                                <p class="card-text mb-2 txtMain" style="height:48px">
                                                    {{ $umkms->description }}
                                                </p>
                                                <a href="{{ route('detail', ['id' => $umkms->id]) }}"
                                                    class="btn mainColor text-light fw-bold">Go
                                                    somewhere</a>

                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach



                    </div>
                </div> 
                </div>
           
            </div>

        </div>
    </div>







    </div>


    <script>
        var btnTgl1 = document.getElementById('btnTgl1');
        var btnTgl2 = document.getElementById('btnTgl2');
        var leftContent = document.getElementById('leftContent');
        var backToogle = document.getElementById('backToogle');



        btnTgl1.addEventListener("click", function() {
            leftContent.style.display = "grid";
            btnTgl1.style.transform = "scale(0)";
            backToogle.style.transform = "scale(1)";
            backToogle.style.position = "static";
            btnTgl1.style.position = "absolute";
        });

        backToogle.addEventListener("click", function() {
            leftContent.style.display = "none";
            btnTgl1.style.transform = "scale(1)";
            backToogle.style.transform = "scale(0)";
        });



        const btn2 = document.querySelector(".btn2");
        const btn3 = document.querySelector(".btn3");
        const btn4 = document.querySelector(".btn4");

        const product2 = document.querySelector(".product-list2");
        const product3 = document.querySelector(".product-list3");
        const product4 = document.querySelector(".product-list4");

        btn2.addEventListener("click", function() {
            btn2.classList.toggle("active");
            btn3.classList.remove("active");
            btn4.classList.remove("active");

            product2.style.transform = "translateX(0px)";
            product3.style.transform = "translateX(0px)";
            product4.style.transform = "translateX(0px)";
        });

        btn3.addEventListener("click", function() {
            btn3.classList.toggle("active");
            btn2.classList.remove("active");
            btn4.classList.remove("active");

            product2.style.transform = "translateX(-1170px)";
            product2.style.transition = "3s";
            product3.style.transform = "translateX(-1170px)";
            product3.style.transition = "3s";
            product4.style.transform = "translateX(-1170px)";
            product4.style.transition = "3s";
        });

        btn4.addEventListener("click", function() {
            btn4.classList.toggle("active");
            btn2.classList.remove("active");
            btn3.classList.remove("active");

            product2.style.transform = "translateX(-2330px)";
            product2.style.transition = "3s";
            product3.style.transform = "translateX(-2330px)";
            product3.style.transition = "3s";
            product4.style.transform = "translateX(-2330px)";
            product4.style.transition = "3s";
        });
    </script>


    @vite('resources/js/app.js')

    @vite('resources/js/home.js')
</body>

</html>
