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
    <h1>Informasi Tracking</h1>
    <table border="1">
        <thead style="position: sticky; top:0;">
            <tr>
                <th scope="col">Checkpoint 1</th>
                <th scope="col">Checkpoint 2</th>
                <th scope="col">Checkpoint 3</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <td>
                    SOPIR <strong>checkpoint Tanggal {{ $result['tanggal_cp_1'] }}</strong><br>
                    Kondisi : {{ $result['kondisi_cp_1'] }}<br>
                    Status : <i>{{ $result['status_cp_1'] }}</i><br>
                    <strong>Kota : {{ $result['kota_cp_1'] }}</strong><br>
                </td>
                <td>
                    @if (!empty($result['tanggal_cp_2']))
                        SOPIR <strong>checkpoint Tanggal {{ $result['tanggal_cp_2'] ?? '' }}</strong><br>
                        Kondisi : {{ $result['kondisi_cp_2'] ?? ''}}<br>
                        Status : <i>{{ $result['status_cp_2'] ?? ''}}</i><br>
                        <strong>Kota : {{ $result['kota_cp_2'] ?? ''}}</strong><br>
                    @endif
                </td>
                <td>
                    @if (!empty($result['tanggal_cp_3']))
                        SOPIR <strong>checkpoint Tanggal {{ $result['tanggal_cp_3'] ?? '' }}</strong><br>
                        Kondisi : {{ $result['kondisi_cp_3'] ?? '' }}<br>
                        Status : <i>{{ $result['status_cp_3'] ?? '' }}</i><br>
                        <strong>Kota : {{ $result['kota_cp_3'] ?? '' }}</strong><br>
                    @endif
                </td>
            </tr>

        </tbody>
    </table>
</body>

</html>
