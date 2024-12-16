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
        <div class="d-flex duration-500">

            <div class="leftContent p-2 gap-50 vh-100" id="leftContent">

                <div class="topContent h-100">

                    <img class="mx-auto mb-5" src="{{ Vite::asset('resources/images/Logo/logo_verti.png') }}"
                        width="200px" alt="image">


                    <div class="w-100 mt-5 h-100">
                        <div class="d-grid">
                            <a class="btn btn-warning fw-bold btnHome mb-3" href="{{ route('home' , ['id' => Auth::user()->id]) }}">Home</a>

                            <a class="btn btn-dark mb-3" style="color:rgb(70, 70, 70)"
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

            <div class="col rightContent bg-white vh-100 ">
                @include('layouts.nav')

                <div class="heroSection bg-white">
                    <div id="carouselExampleSlidesOnly" class="carousel mt-0 mb-0 slide mx-auto"
                        data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ Vite::asset('resources/images/1.png') }}" alt="image"
                                    class="d-block w-100 m-auto">


                            </div>
                            <div class="carousel-item">
                                <img src="{{ Vite::asset('resources/images/2.png') }}" alt="image"
                                    class="d-block w-100 m-auto">


                            </div>
                            <div class="carousel-item ">
                                <img src="{{ Vite::asset('resources/images/3.png') }}" alt="image"
                                    class="d-block w-100 m-auto">


                            </div>
                        </div>

                    </div>
                </div>


                <div class="umkmList bg-white">
                    <div class="container bg-white">
                        <div class="row mb-0">
                            <div class="topUmkmList mt-5">

                                <h1 class="fw-bold">UMKM</h1>

                            </div>

                        </div>

                        <div class="categoryBody mb-5 mt-5">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col">
                                        <button
                                            class="filter-btn active btn2 border-0 py-2 w-100 rounded fw-bold">Culinary</button>
                                    </div>
                                    <div class="col">
                                        <button
                                            class="filter-btn btn3 border-0 py-2 w-100 rounded fw-bold">Fashion</button>
                                    </div>
                                    <div class="col">
                                        <button
                                            class="filter-btn btn4 border-0 py-2 w-100 rounded  fw-bold">Service</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item-body pb-5 d-flex">
                            <div class="sub-body1">
                                <div class="text-center item2">
                                    <div class="row product-list2 w-100">
                                    @if ($umkm->isEmpty())
                                        <p>Kosong</p>
                                    @endif

                                        @foreach ($umkm as $umkms)
                                                <div class="col items" style="flex:0">
                                                    <a class="text-decoration-none"
                                                        href="{{ route('detail', ['id' => $umkms->id]) }}">

                                                        <div class="card" style="width: 18rem; height:344px">
                                                            <img class="card-img-top" src="{{ Storage::url('files/documentUser/profileUMKM/' . $umkms->original_photoname) }}"
                                                                width="1366px" height="200px" alt="image">
                                                            <div class="card-body ">
                                                                <h5 class="card-title text-decoration-none txtMain">
                                                                    {{ $umkms->umkm }}</h5>
                                                                <p class="card-text mb-2 txtMain" style="height:48px">
                                                                    {{ $umkms->description }}
                                                                </p>
                                                                <a href=""
                                                                    class="btn mainColor text-light fw-bold">Go
                                                                    somewhere</a>

                                                            </div>
                                                        </div>
                                                    </a>

                                                </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>


                            <div class="sub-body2">
                                <div class="text-center item3">
                                    <div class="row product-list3">
                                        @if ($fashion->isEmpty())
                                            <p>Kosong</p>
                                        @endif
                                        @foreach ($fashion->take(6) as $umkms)
                                                <div class="col items">
                                                    <a class="text-decoration-none"
                                                        href="{{ route('detail', ['id' => $umkms->id]) }}">

                                                        <div class="card" style="width: 18rem; height:344px">
                                                            <img class="card-img-top" src="{{ Storage::url('files/documentUser/profileUMKM/' . $umkms->original_photoname) }}"
                                                                width="1366px" height="200px" alt="image">
                                                            <div class="card-body ">
                                                                <h5 class="card-title text-decoration-none txtMain">
                                                                    {{ $umkms->umkm }}</h5>
                                                                <p class="card-text mb-2 txtMain" style="height:48px">
                                                                    {{ $umkms->description }}
                                                                </p>
                                                                <a href=""
                                                                    class="btn mainColor text-light fw-bold">Go
                                                                    somewhere</a>

                                                            </div>
                                                        </div>
                                                    </a>

                                                </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>


                            <div class="sub-body3">
                                <div class="text-center item4">
                                    <div class="row product-list4">


                                        @if ($service->isEmpty())
                                            <p class="w-full">Kosong</p>
                                        @endif
                                        
                                        @foreach ($service->take(3) as $umkms)
                                                <div class="col items">
                                                    <a class="text-decoration-none"
                                                        href="{{ route('detail', ['id' => $umkms->id]) }}">

                                                        <div class="card" style="width: 18rem; height:344px">
                                                            <img class="card-img-top" src="{{ Storage::url('files/documentUser/profileUMKM/' . $umkms->original_photoname) }}"
                                                                width="1366px" height="200px" alt="image">
                                                            <div class="card-body ">
                                                                <h5 class="card-title text-decoration-none txtMain">
                                                                    {{ $umkms->umkm }}</h5>
                                                                <p class="card-text mb-2 txtMain" style="height:48px">
                                                                    {{ $umkms->description }}
                                                                </p>
                                                                <a href=""
                                                                    class="btn mainColor text-light fw-bold">Go
                                                                    somewhere</a>

                                                            </div>
                                                        </div>
                                                    </a>

                                                </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>


                        </div>



                    </div>
                </div>


                <section class="py-5 bg-light">
                    <div class="container">
                        <div class="row  align-items-center">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <h1 class="display-3 fw-bold">Anyone, anywhere, can Create <span
                                        class="txtMain">UMKM</span></h1>
                                <p class="lead my-4 ">Buat UMKM terbaik mu untuk memperluas pasar dan jualanmu lebih
                                    laris</p><a class="btn btn-lg mainColor text-light fw-bold"
                                    href="{{ route('owner', ['id' => Auth::user()->id]) }}">Go to
                                    owner page</a>
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid" src="{{ Vite::asset('resources/images/adImage.jpg') }}"
                                    alt="image">
                            </div>
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
                                <p>International clients that are satisfied</p>
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
                                <p>Years of expertise in website design</p>
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
                                <p>Users believe our code snippets</p>
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
                                <p>Great efforts to take Designing Next Level</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Footer -->
                <footer class="text-center text-lg-start text-white p-4" style="background-color: #344C64">
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
                                        <a href="#!" class="text-white">Culinary</a>
                                    </p>
                                    <p>
                                        <a href="#!" class="text-white">Fashion</a>
                                    </p>
                                    <p>
                                        <a href="#!" class="text-white">Service</a>
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
                                        <a href="#!" class="text-white">Contact</a>
                                    </p>
                                    <p>
                                        <a href="{{ route('login') }}" class="text-white">Login</a>
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
                    <a class="text-white" href="https://www.agungjayamandiri.com/"
                        style="text-decoration: none;">SEEU - Si UMKM</a>
                </div>
            </div>

        </div>
    </div>



    <div class="d-grid gap-2 text-start">
        <div class="modal fade" id="createUMKM" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('umkm.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah UMKM</h5>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="umkm" class="form-label">UMKM</label>
                                <input class="form-control @error('umkm') is-invalid @enderror" type="text"
                                    name="umkm" id="umkm" value="{{ old('umkm') }}"
                                    placeholder="Enter UMKM">
                                @error('umkm')
                                    <div class="text-danger">
                                        <small>{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description" class="form-label">Description</label>
                                <input class="form-control @error('description') is-invalid @enderror" type="text"
                                    name="description" id="description" value="{{ old('description') }}"
                                    placeholder="Enter Description">
                                @error('description')
                                    <div class="text-danger">
                                        <small>{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" type="text"
                                    name="email" id="email" value="{{ old('email') }}"
                                    placeholder="Enter Email">
                                @error('email')
                                    <div class="text-danger">
                                        <small>{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <input class="form-control @error('address') is-invalid @enderror" type="text"
                                    name="address" id="address" value="{{ old('address') }}"
                                    placeholder="Enter Address">
                                @error('address')
                                    <div class="text-danger">
                                        <small>{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="telNum" class="form-label">Telephone Number</label>
                                <input class="form-control @error('telNum') is-invalid @enderror" type="text"
                                    name="telNum" id="telNum" value="{{ old('telNum') }}"
                                    placeholder="Enter Telephone Number">
                                @error('telNum')
                                    <div class="text-danger">
                                        <small>{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="category" class="form-label">category</label>
                                <select name="category" id="category" class="form-select">
                                    @foreach ($category as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <div class="text-danger">
                                        <small>{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="cv" class="form-label">
                                    Surat Izin Mendirikan Usaha
                                </label>
                                <input type="file" class="form-control" name="usahaDoc" id="usahaDoc">
                            </div>

                            <div class="col-md-6 mb-3 w-100">

                                <div class="input-group">
                                    <div class="icon">
                                        <img src="{{ Vite::asset('resources/images/Icon/imgIcon.png') }}"
                                            alt="image" width="25">

                                    </div>
                                    <input type="file" class="form-control" name="imgPhoto" id="imgPhoto">
                                </div>
                                @error('imgPhoto')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
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

    @include('sweetalert::alert')

    @vite('resources/js/app.js')

    @vite('resources/js/home.js')
</body>

</html>
