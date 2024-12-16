<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SeeU - Sistem Informasi UMKM</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
        }

        .card {
            border: none;
            border-radius: .25rem;
            margin-top: 18vh;
            box-shadow: 50px 50px 50px 50px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            background-color: #ffffff;
        }

        h1 {
            color: #323A5A;
            text-align: center;
        }

        label {
            font-weight: bold;
            color: #495057;
        }

        .content-text {
            font-size: 0.875rem;
            color: #343a40;
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

        .img-fluid {
            width: 100%;
            height: auto;
        }

        .container-custom {
            padding: 0 15px;
        }

        @media (min-width: 768px) {
            .col-md-6-custom {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-md-6-custom-content {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .container-custom {
                padding: 0 30px;
            }
        }

        .mb-5-custom {
            margin-bottom: 3rem;
        }

        .btn-center {
            display: flex;
            justify-content: center;
        }

        .fixed-image {
            width: 880px;
            height: 500px;
        }
    </style>
</head>

<body>

    @foreach ($umkm as $umkm)
        @if ($idUmkm == $umkm->id)
            <div class="container-fluid container-custom my-5">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-6-custom">
                          
                            <img   src="{{ Storage::url('files/documentUser/profileUMKM/' . $umkm->original_photoname) }}"
                                class="img-fluid rounded-start fixed-image" alt="UMKM Image">
                        </div>

                        <div class="col-md-6-custom-content">
                            <div class="card-body mt-4">
                                <h1 class="mb-4"> Detail UMKM</h1>
                                <ul class="list-unstyled mb-3 row m-auto text-center">
                                    <li class="mb-3 col">
                                        <label for="umkm" class="form-label">Nama UMKM</label>
                                        <h5 class="content-text">{{ $umkm->umkm }}</h5>
                                    </li>
                                    <li class="mb-5-custom col">
                                        <label for="description" class="form-label">Description</label>
                                        <h5 class="content-text">{{ $umkm->description }}</h5>
                                    </li>
                                </ul>
                                <div class="container text-center">
                                    <div class="row align-items-start">
                                        <div class="col-md-4 mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <h5 class="content-text">{{ $umkm->email }}</h5>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="address" class="form-label">Address</label>
                                            <h5 class="content-text">{{ $umkm->address }}</h5>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="category" class="form-label">Category</label>
                                            <h5 class="content-text">{{ $umkm->category->name }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid btn-center mt-5">
                                    <a href="{{ route('home', ['id' => Auth::user()->id]) }} }}"
                                        class="btn btn-outline-dark btn-lg mt-3 fw-bold w-100">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach

    @vite('resources/js/app.js')
</body>

</html>
