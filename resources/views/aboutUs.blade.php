<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SeeU - Sistem Informasi UMKM</title>
    <link rel="shortcut icon" href="/resources/images/Logo/mainLogo.png" type="image/svg+xml">

    @vite('resources/sass/app.scss')
    <link rel="shortcut icon" href="/resources/images/Logo/mainLogo.png" type="image/svg+xml">

    <style>
        body {
            background-color: rgb(22, 22, 22);

        }

        .itemBtn {
            width: max-content;
            border: 0px
        }
    </style>
</head>

<body>

    <div class="text-center">
        <div class="d-flex">

            <div class="leftContent p-2 gap-50 vh-100" id="leftContent">

                <div class="topContent h-100">

                    @if (Auth::check())
                        <img class="mx-auto mb-5" src="{{ Vite::asset('resources/images/Logo/logo_verti.png') }}"
                            width="200px" alt="image">
                    @else
                        <img class="mx-auto mb-5" src="" width="200px" alt="image">
                    @endif



                    <div class="w-100 mt-5 h-100">
                        <div class="d-grid">
                            <a class="btn btn-dark mb-3" style="color:rgb(70, 70, 70)" href="{{ route('home', ['id' => Auth::user()->id]) }}">Home</a>

                            <a class="btn btn-dark mb-3" style="color:rgb(70, 70, 70)"
                                href="{{ route('allUmkm') }}">UMKM</a>
                            <a class="btn  btn-warning fw-bold btnHome  mb-3" href="{{ route('about') }}">About
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

            <div class="col rightContent bg-white h-100 ">
                @include('layouts.nav')

                <div class="row justify-content-center mt-5">
                    <div class="col-md-8">
                        <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                            <div class="card-body">
                                <img src="{{ Vite::asset('resources/images/jawa_timur.png') }}" alt="image"
                                    width="500">
                                <h1 class="fas fa-h1    "></i>About Us</h1>
                                <p class="card-text">
                                    SeeU - Sistem Informasi UMKM adalah platform yang didedikasikan untuk mendukung dan
                                    mempromosikan Usaha Mikro, Kecil, dan Menengah (UMKM) di Jawa Timur. Kami
                                    berkomitmen untuk memberikan solusi teknologi yang memudahkan UMKM dalam mengelola
                                    operasional sehari-hari, meningkatkan visibilitas pasar, dan mengakses sumber daya
                                    yang lebih luas.
                                </p>
                                <h1 class="card-title"> Visi dan Misi</h1>
                                <p class="card-text">
                                    Misi kami adalah mengempower UMKM untuk tumbuh dan bersaing di era digital dengan
                                    menyediakan alat yang efektif dan efisien
                                </p>
                                <p class="card-text">
                                    Visi kami adalah menjadi penyedia layanan UMKM terdepan bagi UMKM yang ada di
                                    seluruh jawa timur agar saling terintegrasi
                                </p>

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
