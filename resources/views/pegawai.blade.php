<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Data Pegawai</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
        </tr>   

        @foreach ($data as $i => $p)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->umur }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
