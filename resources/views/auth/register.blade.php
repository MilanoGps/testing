<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>SeeU - Sistem Informasi UMKM</title>
    <link rel="shortcut icon" href="/resources/images/Logo/mainLogo.png" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    @vite('resources/sass/app.scss')
</head>

<body class="bg-primary">

    <div class="text-center vw-auto">
        <div class="d-flex">

            <div class="col w-50 mainColor bodyCont">
                <div id="carouselExampleSlidesOnly" class="carousel slide mx-auto" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ Vite::asset('resources/images/vector/Shoppinglogin1.png') }}" alt="image"
                                width="400px" class="d-block w-10 m-auto">
                            <div class="carousel-caption capt d-none d-md-block">
                                <h5 class="fw-bold">CARI KEBUTUHAN ANDA</h5>
                                <p>Kami menyediakan tempat untuk anda menemukan apa yang dibutuhkan</p>
                            </div>

                        </div>
                        <div class="carousel-item">
                            <img src="{{ Vite::asset('resources/images/vector/Shoppinglogin2.png') }}" alt="image"
                                width="400px" class="d-block w-10 m-auto">
                            <div class="carousel-caption capt d-none d-md-block">
                                <h5 class="fw-bold">PROMOSI UMKM GRATIS?</h5>

                                <p>Mari bersama kami dan menjadi mitra seumur hidup</p>
                            </div>

                        </div>
                        <div class="carousel-item ">
                            <img src="{{ Vite::asset('resources/images/vector/Shoppinglogin3.png') }}" alt="image"
                                width="400px" class="d-block w-10 m-auto">
                            <div class="carousel-caption capt d-none d-md-block">
                                <h5 class="fw-bold">TENTUKAN KUALITAS</h5>

                                <p>Kami menyediakan fitur penilaian berdasarkan survey pelanggan</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="col w-50 text-start vh-100 bg-white">


                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" id="form">
                    @csrf
                    <input type="hidden" name="id">

                    <div class="d-grid pt-4 pb-4 bg-white">

                        <div class="col m-auto">
                            <div class="mb-3 mt-5 text-start m-auto d-flex">

                                <div class="leftTtl">
                                    <h4 class="fw-bold txtMain">Register to your account</h4>
                                    <p class="fs-sm-5">Welcome, please fullfill form to register</p>

                                </div>

                                <div class="rightTtl">
                                    <img src="{{ Vite::asset('resources/images/Logo/mainLogo-wthTxt.png') }}"
                                        alt="image" width="70px" class="d-block w-10 m-auto">
                                </div>



                            </div>



                            <div class="formContent mt-2">

                                <div class="col-md-6 mb-3 w-100">
                                    <div class="input-group">
                                        <div class="icon">
                                            <img src="{{ Vite::asset('resources/images/Icon/fullNameIcon.png') }}"
                                                alt="image" width="25">

                                        </div>

                                        <input class="form-control @error('fullName') is-invalid @enderror"
                                            type="text" name="fullName" id="fullName" value="{{ old('fullName') }}"
                                            placeholder="Enter Full Name">

                                    </div>
                                    @error('fullName')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3 w-100">
                                    <div class="input-group">
                                        <div class="icon">
                                            <img src="{{ Vite::asset('resources/images/Icon/fullNameIcon.png') }}"
                                                alt="image" width="25">

                                        </div>

                                        <input class="form-control @error('userName') is-invalid @enderror"
                                            type="text" name="userName" id="userName" value="{{ old('userName') }}"
                                            placeholder="Enter Username">



                                    </div>
                                    @error('userName')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3 w-100">
                                    <div class="input-group">
                                        <div class="icon">
                                            <img src="{{ Vite::asset('resources/images/Icon/mailIcon.png') }}"
                                            alt="image" width="25">


                                        </div>

                                        <input class="form-control @error('email') is-invalid @enderror" type="text"
                                            name="email" id="email" value="{{ old('email') }}"
                                            placeholder="Enter Email">


                                    </div>
                                    @error('email')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3 w-100">
                                    <div class="input-group">
                                        <div class="icon">
                                            <img src="{{ Vite::asset('resources/images/Icon/keyIcon.png') }}"
                                            alt="image" width="25">

                                        </div>

                                        <input class="form-control @error('password') is-invalid @enderror"
                                            type="password" name="password" id="password"
                                            value="{{ old('password') }}" placeholder="Enter Password">

                                        <div class="icon">
                                            <i class="far fa-eye" id="togglePassword" style="cursor: pointer"></i>

                                        </div>
                                    </div>
                                    @error('password')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3 w-100">
                                    <div class="input-group">
                                        <div class="icon">
                                            <img src="{{ Vite::asset('resources/images/Icon/keyIcon.png') }}"
                                            alt="image" width="25">


                                        </div>
                                        <input class="form-control @error('rePassword') is-invalid @enderror"
                                            type="password" name="rePassword" id="rePassword"
                                            value="{{ old('rePassword') }}" placeholder="Enter Confirm Password">

                                        <div class="icon">
                                            <i class="far fa-eye" id="togglePassword2" style="cursor: pointer"></i>

                                        </div>
                                    </div>
                                    @error('rePassword')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>

                                <input type="hidden" name="role" value="member">

                                <div class="col-md-6 mb-3 w-100">

                                    <div class="input-group">
                                        <div class="icon">
                                            <img src="{{ Vite::asset('resources/images/Icon/imgIcon.png') }}"
                                                alt="image" width="25">

                                        </div>
                                        <input type="file" class="form-control" name="imgFile" id="imgFile">
                                    </div>
                                    @error('imgFile')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>
                            </div>



                        </div>


                        <div class="col-md-6 d-grid m-auto">
                            <button type="submit" class="btn mainColor text-white btn-lg mt-3 fw-bold">
                                Register</button>
                        </div>
                    </div>
                </form>
            </div>



        </div>

    </div>


    @vite('resources/js/auth.js')
    @vite('resources/js/app.js')

    <style>
        @media (max-width: 769px){
            .bodyCont {
                display: none
            }
        }
    </style>

    <script>
        togglePassword2.addEventListener("click", function(e) {
            const type2 =
                rePassword.getAttribute("type") === "password" ? "text" : "password";
            rePassword.setAttribute("type", type2);

            this.classList.toggle("fa-eye-slash");
        });
    </script>

</body>

</html>
