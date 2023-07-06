@extends('layouts.master')

@section('konten')
    <div class="container-fluid">

        <!-- Page Heading -->
        <x-admin.page-heading>{{ $title_page ?? 'Title' }}</x-admin.page-heading>

        <!-- Card -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data {{ $title_page ?? 'Title' }}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="productDataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Checkpoint 1</th>
                                <th>Checkpoint 2</th>
                                <th>Checkpoint 3</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($result as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        SOPIR <strong>checkpoint Tanggal {{ $item['tanggal_cp_1'] }}</strong><br>
                                        Kondisi : {{ $item['kondisi_cp_1'] }}<br>
                                        Status : <i>{{ $item['status_cp_1'] }}</i><br>
                                        <strong>Kota : {{ $item['kota_cp_1'] }}</strong><br>
                                    </td>
                                    <td>
                                        @if (!empty($item['tanggal_cp_2']))
                                            SOPIR <strong>checkpoint Tanggal {{ $item['tanggal_cp_2'] ?? '' }}</strong><br>
                                            Kondisi : {{ $item['kondisi_cp_2'] ?? ''}}<br>
                                            Status : <i>{{ $item['status_cp_2'] ?? ''}}</i><br>
                                            <strong>Kota : {{ $item['kota_cp_2'] ?? ''}}</strong><br>
                                        @endif
                                    </td>
                                    <td>
                                        @if (!empty($item['tanggal_cp_3']))
                                            SOPIR <strong>checkpoint Tanggal {{ $item['tanggal_cp_3'] ?? '' }}</strong><br>
                                            Kondisi : {{ $item['kondisi_cp_3'] ?? '' }}<br>
                                            Status : <i>{{ $item['status_cp_3'] ?? '' }}</i><br>
                                            <strong>Kota : {{ $item['kota_cp_3'] ?? '' }}</strong><br>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" id="btnedit" href="/laporan/tracking/{{ $loop->iteration - 1 }}/cetak"><i class="fas fa-fw fa-print"></i> Cetak data</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
@endsection

@push('script')
<script>
    const btnEdit = document.querySelector('#btnedit');

</script>
@endpush