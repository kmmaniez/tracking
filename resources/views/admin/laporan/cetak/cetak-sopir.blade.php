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
    <h1>Data Diri Sopir</h1>
    <table border="1">
        <thead style="position: sticky; top:0;">
            <tr>
                <th scope="col">Nama Sopir</th>
                <th scope="col">Telepon</th>
                <th scope="col">Merk Handphone</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">

            @foreach ($sopir as $data)
                <tr>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->telepon }}</td>
                    <td>{{ $data->merkhp }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
