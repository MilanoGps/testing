<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>umkm List</title>
    <style>
        html {
            font-size: 12px;
        }

        .table {
            border-collapse: collapse !important;
            width: 100%;
        }

        .table-bordered th,
        .table-bordered td {
            padding: 0.5rem;
            border: 1px solid black !important;
        }
    </style>
</head>

<body>
    <h1>umkm List</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Position</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($umkm as $index => $umkm)
                <tr>
                    <td allign="center">{{ $index + 1 }}</td>
                    <td>{{ $umkm->umkm }}</td>
                    <td>{{ $umkm->description }}</td>
                    <td>{{ $umkm->email }}</td>
                    <td>{{ $umkm->address }}</td>
                    <td>{{ $umkm->telephone_number }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
