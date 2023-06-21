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
                <div class="table-responsive">
                    <table class="table table-bordered" id="productDataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID checkpoint</th>
                                <th>kota tujuan</th>
                                <th>Checkpoint 1</th>
                                <th>Checkpoint 2</th>
                                <th>Checkpoint 3</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>22</td>
                                <td>Jakarta</td>
                                <td>Surabaya</td>
                                <td>Semarang</td>
                                <td>Jakarta</td>
                            </tr>
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