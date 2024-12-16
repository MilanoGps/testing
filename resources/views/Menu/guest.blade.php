<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SeeU - Sistem Informasi UMKM</title>
    <link rel="shortcut icon" href="/resources/images/Logo/mainLogo.png" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    @vite('resources/sass/app.scss')
    <style>
        .carousel {
            margin-top: 0;
        }

        .custom-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .btn.mainColor:hover {
            background-color: #000000;
            color: #323A5A;
        }
    </style>
</head>

<body>

    <div class="text-center">

        <div class="col rightContent vh-100">
            @php
                $currentRouteName = Route::currentRouteName();
            @endphp
            <nav class="navbar navbar-expand-md navbar-dark mainColor fixed-top">
                <div class="container">
                    <a href="" class="navbar-brand mb-0 h1"> <img
                            src="{{ Vite::asset('resources/images/Logo/mainLogo-light-txt.png') }}" width="100px"
                            alt="image" class="d-block w-10 m-auto">
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse  justify-content-between" id="navbarSupportedContent">
                        <hr class="d-md-none text-white-50">
                        <ul class="navbar-nav flex-row flex-wrap">
                        </ul>
                        <hr class="d-md-none text-white-50">

                        @if ($currentRouteName == 'guest')
                            <div class="d-flex gap-3">
                                <a id="profileButton" class="btn btn-outline-light my-2 ms-md-auto"
                                    href="{{ route('login') }}">Login</a>
                                <a id="profileButton" class="btn btn-outline-light my-2 ms-md-auto"
                                    href="{{ route('register') }}">Register</a>
                            </div>
                        @else
                            <a id="profileButton" class="btn btn-outline-light my-2 ms-md-auto"><i
                                    class="bi-person-circle me-1"></i>Welcome,

                                @if (Auth::check())
                                    {{ Auth::user()->userName }}!
                                @else
                                    Guest!
                                @endif
                            </a>
                        @endif


                    </div>
                </div>
            </nav>
            {{-- header --}}
            <div id="carouselExampleInterval" class="carousel slide mt-5" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="{{ Vite::asset('resources/images/vector/1.png') }}" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ Vite::asset('resources/images/vector/2.png') }}" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ Vite::asset('resources/images/vector/3.png') }}" class="d-block w-100"
                            alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            {{-- hero --}}
            <div class="p-4">
                <h3 class="section-heading text-uppercase">Kategori</h3>
                <hr class="mb-4 mt-0 d-inline-block" style="width: 80px; background-color: #000000; height: 5px" />
                <div class="card-group">
                    <div class="card">
                        <img src="{{ Vite::asset('resources/images/vector/Bebek-Wachid-Hasyim.jpg') }}"
                            class="card-img-top custom-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bebek Wachid Hasyim</h5>
                            <p class="card-text">Buka - Setiap Hari (16:00 - 22:00) </p>
                            <p class="card-text"><a
                                    href="https://www.google.com/maps/dir//Jl.+Raya+Jemursari+No.17,+Jemur+Wonosari,+Kec.+Wonocolo,+Surabaya,+Jawa+Timur+60237/@-7.327293,112.6508592,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x2dd7fb6a031a447f:0x812c67c328523581!2m2!1d112.7332573!2d-7.3273259?entry=ttu">Jl.
                                    Jemur Andayani No. 17,
                                    Wonocolo, Surabaya</a></p>
                            <p class="card-text"><small class="text-body-secondary">Culinary</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ Vite::asset('resources/images/vector/Prima-Hijab.jpg') }}"
                            class="card-img-top custom-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Prima Hijab Surabaya</h5>
                            <p class="card-text">Buka - Setiap Hari (10:00 - 22:00) </p>
                            <p class="card-text"><a
                                    href="https://www.google.com/maps/dir//prima+hijab+surabaya+google+map/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x2dd7fbac53d1d591:0xc8bb8515cf7f721e?sa=X&ved=1t:3061&ictx=111">Jl.
                                    Ngagel Jaya Sel.
                                    No.141-3, Kec. Gubeng, Surabaya</a></p>
                            <p class="card-text"><small class="text-body-secondary">Fashion</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ Vite::asset('resources/images/vector/Pijat.jpg') }}"
                            class="card-img-top custom-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Akira Reflexology</h5>
                            <p class="card-text">Buka - Setiap Hari (10:00 - 22:00) </p>
                            <p class="card-text"><a
                                    href="https://www.google.com/maps?rlz=1C1UEAD_enID988ID988&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIGCAEQRRg7MgYIAhBFGD3SAQg0MjYzajBqN6gCALACAA&um=1&ie=UTF-8&fb=1&gl=id&sa=X&geocode=Kbnstj2iKdYtMW_e3v67n8TJ&daddr=Ruko+Puri+Niaga+A-10+Araya,+Pandanwangi,+Kec.+Blimbing,+Kota+Malang,+Jawa+Timur+65126">Pandanwangi,
                                    Pakis, Malang</a></p>
                            <p class="card-text"><small class="text-body-secondary">Service</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- about 1 --}}
            <section id="aboutus" class="py-5 bg-light">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <h1 class="display-3 fw-bold">Semua Berawal Dari <span class="txtMain">SeeU</span></h1>
                            <p class="lead my-4">Bersama kami membangun UMKM Jawa Timur</p><a
                                class="btn btn-lg mainColor text-light fw-bold" href="{{ route('register') }}">Daftar
                                Sekarang</a>
                        </div>
                        <div class="col-lg-6"><img alt="" class="img-fluid"
                                src="{{ Vite::asset('resources/images/vector/Shoppinglogin2.png') }}"></div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-3 col-sm-6 mb-3 mb-md-0">
                            <div class="mb-3">
                                {{-- ikon mudah --}}
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="60"
                                    height="60">
                                    <path
                                        d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 18.5-10.5 34.6-25.9 42.6C497 275.4 504 288.9 504 304c0 23.4-16.8 42.9-38.9 47.1c4.4 7.3 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z" />
                                </svg>
                            </div>
                            <h4>Mudah</h4>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3 mb-md-0">
                            <div class="mb-3">
                                {{-- ikon efisien --}}
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="60"
                                    height="60">
                                    <path
                                        d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 352h8.2c32.3-39.1 81.1-64 135.8-64c5.4 0 10.7 .2 16 .7V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM320 352H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H360.2C335.1 449.6 320 410.5 320 368c0-5.4 .2-10.7 .7-16l-.7 0zm320 16a144 144 0 1 0 -288 0 144 144 0 1 0 288 0zM496 288c8.8 0 16 7.2 16 16v48h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H496c-8.8 0-16-7.2-16-16V304c0-8.8 7.2-16 16-16z" />
                                </svg>
                            </div>
                            <h4>Efisien</h4>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3 mb-md-0">
                            <div class="mb-3">
                                {{-- ikon aman --}}
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="60"
                                    height="60">
                                    <path
                                        d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                                </svg>
                            </div>
                            <h4>Aman</h4>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="mb-3">
                                {{-- ikon trusted --}}
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="60"
                                    height="60">
                                    <path
                                        d="M323.4 85.2l-96.8 78.4c-16.1 13-19.2 36.4-7 53.1c12.9 17.8 38 21.3 55.3 7.8l99.3-77.2c7-5.4 17-4.2 22.5 2.8s4.2 17-2.8 22.5l-20.9 16.2L512 316.8V128h-.7l-3.9-2.5L434.8 79c-15.3-9.8-33.2-15-51.4-15c-21.8 0-43 7.5-60 21.2zm22.8 124.4l-51.7 40.2C263 274.4 217.3 268 193.7 235.6c-22.2-30.5-16.6-73.1 12.7-96.8l83.2-67.3c-11.6-4.9-24.1-7.4-36.8-7.4C234 64 215.7 69.6 200 80l-72 48V352h28.2l91.4 83.4c19.6 17.9 49.9 16.5 67.8-3.1c5.5-6.1 9.2-13.2 11.1-20.6l17 15.6c19.5 17.9 49.9 16.6 67.8-2.9c4.5-4.9 7.8-10.6 9.9-16.5c19.4 13 45.8 10.3 62.1-7.5c17.9-19.5 16.6-49.9-2.9-67.8l-134.2-123zM16 128c-8.8 0-16 7.2-16 16V352c0 17.7 14.3 32 32 32H64c17.7 0 32-14.3 32-32V128H16zM48 320a16 16 0 1 1 0 32 16 16 0 1 1 0-32zM544 128V352c0 17.7 14.3 32 32 32h32c17.7 0 32-14.3 32-32V144c0-8.8-7.2-16-16-16H544zm32 208a16 16 0 1 1 32 0 16 16 0 1 1 -32 0z" />
                                </svg>
                            </div>
                            <h4>Terpercaya</h4>
                        </div>
                    </div>
                </div>
            </section>

            {{-- about 2 --}}
            <section class="py-3 py-md-5">
                <div class="container">
                    <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                        <div class="col-12 col-lg-6 col-xl-5">
                            <img class="img-fluid rounded" src="{{ Vite::asset('resources/images/Seeeu.webp') }}"
                                alt="About 1">
                        </div>
                        <div class="col-12 col-lg-6 col-xl-7">
                            <div class="row justify-content-xl-center">
                                <div class="col-12 col-xl-11">
                                    <h2 class="mb-3">Kenapa Harus Kami?</h2>
                                    <p class="mb-5">Website UMKM yang menyediakan layanan untuk mengembangkan UMKM
                                        Anda.</p>
                                    <div class="row gy-4 gy-md-0 gx-xxl-5X">
                                        <div class="col-12 col-md-6">
                                            <div class="d-flex">
                                                <div class="me-4 text-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        width="32" height="32">
                                                        <path
                                                            d="M256 48C141.1 48 48 141.1 48 256v40c0 13.3-10.7 24-24 24s-24-10.7-24-24V256C0 114.6 114.6 0 256 0S512 114.6 512 256V400.1c0 48.6-39.4 88-88.1 88L313.6 488c-8.3 14.3-23.8 24-41.6 24H240c-26.5 0-48-21.5-48-48s21.5-48 48-48h32c17.8 0 33.3 9.7 41.6 24l110.4 .1c22.1 0 40-17.9 40-40V256c0-114.9-93.1-208-208-208zM144 208h16c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H144c-35.3 0-64-28.7-64-64V272c0-35.3 28.7-64 64-64zm224 0c35.3 0 64 28.7 64 64v48c0 35.3-28.7 64-64 64H352c-17.7 0-32-14.3-32-32V240c0-17.7 14.3-32 32-32h16z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h2 class="h4 mb-3">Konsultasi 24 Jam</h2>
                                                    <p class="text-secondary mb-0">Anda mengalami masalah? kami siap
                                                        membantu</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="d-flex">
                                                <div class="me-4 text-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        width="32" height="32">
                                                        <path
                                                            d="M4.1 38.2C1.4 34.2 0 29.4 0 24.6C0 11 11 0 24.6 0H133.9c11.2 0 21.7 5.9 27.4 15.5l68.5 114.1c-48.2 6.1-91.3 28.6-123.4 61.9L4.1 38.2zm503.7 0L405.6 191.5c-32.1-33.3-75.2-55.8-123.4-61.9L350.7 15.5C356.5 5.9 366.9 0 378.1 0H487.4C501 0 512 11 512 24.6c0 4.8-1.4 9.6-4.1 13.6zM80 336a176 176 0 1 1 352 0A176 176 0 1 1 80 336zm184.4-94.9c-3.4-7-13.3-7-16.8 0l-22.4 45.4c-1.4 2.8-4 4.7-7 5.1L168 298.9c-7.7 1.1-10.7 10.5-5.2 16l36.3 35.4c2.2 2.2 3.2 5.2 2.7 8.3l-8.6 49.9c-1.3 7.6 6.7 13.5 13.6 9.9l44.8-23.6c2.7-1.4 6-1.4 8.7 0l44.8 23.6c6.9 3.6 14.9-2.2 13.6-9.9l-8.6-49.9c-.5-3 .5-6.1 2.7-8.3l36.3-35.4c5.6-5.4 2.5-14.8-5.2-16l-50.1-7.3c-3-.4-5.7-2.4-7-5.1l-22.4-45.4z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h2 class="h4 mb-3">Gratis Seumur Hidup</h2>
                                                    <p class="text-secondary mb-0">Unggah UMKM tidak akan dikenakan
                                                        biaya apapun</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- footer --}}
            <footer id="footer" class="text-center text-lg-start text-white p-4"
                style="background-color: #344C64">
                <section class="">
                    <div class="container text-center text-md-start ">
                        <div class="row mt-3">
                            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                <h6 class="text-uppercase fw-bold">SEEU - Si UMKM</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #ffffff; height: 2px" />
                                <p>UMKM Berbasis Website yang Menampung Seluruh Data UMKM di Wilayah Jawa Timur
                                </p>
                            </div>
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                <h6 class="text-uppercase fw-bold">Category</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #ffffff; height: 2px" />
                                <p>
                                    <a class="text-white">Culinary</a>
                                </p>
                                <p>
                                    <a class="text-white">Fashion</a>
                                </p>
                                <p>
                                    <a class="text-white">Service</a>
                                </p>
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                <h6 class="text-uppercase fw-bold">Useful links</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #ffffff; height: 2px" />
                                <p>
                                    <a href="#!" class="text-white">About Us</a>
                                </p>
                                <p>
                                    <a href="{{ route('login') }}" class="text-white">Login</a>
                                </p>
                                <p>
                                    <a href="{{ route('register') }}" class="text-white">Register</a>
                                </p>
                            </div>
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                <h6 class="text-uppercase fw-bold">Contact</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #ffffff; height: 2px" />
                                <p><i class="fas fa-home mr-3"></i> Jl. Ketintang Baru No. 66</p>
                                <p><i class="fas fa-envelope mr-3"></i> seeu@gmail.com</p>
                                <p><i class="fas fa-phone mr-3"></i> + 62 888 888 88</p>
                            </div>
                        </div>
                    </div>
                </section>

            </footer>
            <div class="text-center p-3 text-white" style="background-color: rgb(35, 30, 56)">
                © 2020 Copyright :
                <a class="text-white" href="https://www.agungjayamandiri.com/" style="text-decoration: none;">SEEU -
                    Si UMKM</a>
            </div>
        </div>

    </div>
    </div>
    </div>

    @vite('resources/js/app.js')
</body>

</html>
