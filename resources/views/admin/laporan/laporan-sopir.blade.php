@extends('layouts.master')

@section('konten')
    <div class="container-fluid">

        <!-- Page Heading -->
        <x-admin.page-heading>{{ $title_page ?? 'Title' }}</x-admin.page-heading>

        <!-- Card -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List {{ $title_page ?? 'Title' }}</h6>
            </div>
            <div class="card-body">
                <a href="http://" class="btn btn-primary mb-3">Cetak Semua {{ $title_page ?? '' }}</a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="#" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Sopir</th>
                                <th>Telepon Sopir</th>
                                <th>Merk Handphone</th>
                            </tr>
                        </thead>
                        <tbody>
                            
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