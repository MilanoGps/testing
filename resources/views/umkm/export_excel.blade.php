<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>UMKM</th>
            <th>Description</th>
            <th>Email</th>
            <th>Address</th>
            <th>Position</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($umkm as $index => $umkm)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $umkm->umkm }}</td>
                <td>{{ $umkm->description }}</td>
                <td>{{ $umkm->email }}</td>
                <td>{{ $umkm->address }}</td>
                <td>{{ $umkm->telephone_number }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
