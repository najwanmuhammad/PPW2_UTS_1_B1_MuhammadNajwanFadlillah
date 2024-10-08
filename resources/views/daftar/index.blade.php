<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemain MU</title>
</head>
<body>
    <table border="1" class="table table_stripped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Pemain</th>
                <th>Nomor Punggung</th>
                <th>Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($daftar_pemain as $Daftar )
            <tr>
                <td>{{$Daftar->id}}</td>
                <td>{{$Daftar->nama_pemain}}</td>
                <td>{{$Daftar->nomor_punggung}}</td>
                <td>{{$Daftar->posisi}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
