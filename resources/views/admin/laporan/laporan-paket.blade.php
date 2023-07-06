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
                {{-- <a href="http://" class="btn btn-primary mb-3">Cetak Semua {{ $title_page ?? '' }}</a> --}}
                <div class="table-responsive">
                    <table class="table " id="productDataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Customer</th>
                                <th>Telepon Customer</th>
                                <th>Alamat Customer</th>
                                <th>Kota Tujuan</th>
                                <th>Jenis Paket</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($paket as $data)
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
                            @empty
                            <tr>
                                <td>No data</td>
                            </tr>
                            @endforelse
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
