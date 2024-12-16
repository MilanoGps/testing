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
    @if (Auth::check())
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
                                <a class="btn btn-warning fw-bold btnHome mb-3" href="{{ route('home' , ['id' => Auth::user()->id]) }}">Home</a>

                                <a class="btn btn-dark mb-3" style="color:rgb(70, 70, 70)"
                                    href="{{ route('home' , ['id' => Auth::user()->id]) }}">UMKM</a>
                                <a class="btn btn-dark mb-3" style="color:rgb(70, 70, 70)"
                                    href="{{ route('about') }}">About Us</a>

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

                    <div class="umkmList bg-white">
                        <div class="container bg-white">
                            <div class="row mb-0">
                                <div class="topUmkmList mt-5">

                                    <h1 class="fw-bold">UMKM</h1>
                                    <div class="col-lg-3 col-xl-2">

                                        <button type="button" class="btn mainColor text-light fw-bold"
                                            data-bs-toggle="modal" data-bs-target="#createUMKM">
                                            <i class="bi bi-plus-circle me-1"></i>Create UMKM
                                        </button>
                                        </ul>
                                    </div>
                                </div>

                            </div>


                            <div class="item-body mt-5 pb-5 d-flex">
                                <div class="sub-body1">
                                    <div class="text-center item2">
                                        <div class="row product-list2 w-100">

                                            @if ($umkm->isEmpty())
                                                <p>Kosong</p>
                                            @endif
                                            @foreach ($umkm as $umkms)
                                                    <div class="col items mb-5 style="flex:0"">
                                                        <a class="text-decoration-none"
                                                            href="{{ route('detail', ['id' => $umkms->id]) }}">

                                                            <div class="card d-flex" style="width: 18rem; height:344px">
                                                                <img class="card-img-top"
                                                                    src="{{ Storage::url('files/documentUser/profileUMKM/' . $umkms->original_photoname) }}"
                                                                    width="1366px" height="200px" alt="image">
                                                                <div class="card-body ">
                                                                    <h5 class="card-title text-decoration-none txtMain">
                                                                        {{ $umkms->umkm }}</h5>
                                                                    <p class="card-text mb-2 txtMain"
                                                                        style="height:48px">
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
                            <input type="hidden" name="id" value="{{ Auth::user()->id }}">
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
                                    <input class="form-control @error('description') is-invalid @enderror"
                                        type="text" name="description" id="description"
                                        value="{{ old('description') }}" placeholder="Enter Description">
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
                                    <label for="category" class="form-label">Category</label>
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
                                    <label for="cv" class="form-label">
                                        Profil Usaha
                                    </label>
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
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    @endif


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
