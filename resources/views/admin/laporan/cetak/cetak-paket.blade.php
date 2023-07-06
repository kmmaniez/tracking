<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<style>
    table {
        width: 100%;
        /* border: 2px solid #000; */
        /* border: 1px inset #000; */
    }

    h1,
    h3 {
        text-align: center;
    }
</style>

<body>
    <h1>Informasi Paket</h1>
    <table border="1">
        <thead style="position: sticky; top:0;">
            <tr>
                <th scope="col">Nama Customer</th>
                <th scope="col">Telepon Customer</th>
                <th scope="col">Alamat Customer</th>
                <th scope="col">Kota Tujuan</th>
                <th scope="col">Jenis Paket</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">

            @foreach ($paket as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->nama_customer }}</td>
                <td>{{ $data->telepon }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->tujuan }}</td>
                <td>{{ $data->jenis_paket }}</td>
                <td>
                    <a class="btn btn-sm btn-primary" id="btnedit" href="/laporan/paket/{{ $data->id }}/cetak"><i class="fas fa-fw fa-print"></i> Cetak data</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
