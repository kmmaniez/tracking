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
                <a href="{{ route('sopir.create') }}" class="btn btn-md btn-primary mb-4" id="create-product"><i class="fas fa-fw fa-user-plus"></i> Add {{ $title_page ?? 'Title' }}</a>

                <div class="table-responsive">
                    <table class="table table-bordered" id="productDataTable" width="100%" cellspacing="0">
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
                            @foreach ($sopir as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->telepon }}</td>
                                <td>{{ $data->merkhp }}</td>
                                <td>
                                    <form action="{{ route('sopir.destroy', $data->id) }}" method="post">
                                        <a class="btn btn-sm btn-primary" id="btnedit" href="{{ route('sopir.edit', $data->id) }}">Edit</a>
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </form>
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