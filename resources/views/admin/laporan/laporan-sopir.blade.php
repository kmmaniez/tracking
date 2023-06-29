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
                    <table class="table " id="#" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Sopir</th>
                                <th>Telepon Sopir</th>
                                <th>Merk Handphone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($sopir as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->telepon }}</td>
                                <td>{{ $data->merkhp }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" id="btnedit" href="{{ route('sopir.edit', $data->id) }}"><i class="fas fa-fw fa-print"></i> Cetak data</a>
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
        
    </script>
@endpush