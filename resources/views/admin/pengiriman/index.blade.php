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
                <a href="{{ route('pengiriman.create') }}" class="btn btn-md btn-primary mb-4" id="create-product"><i class="fas fa-fw fa-user-plus"></i> Add {{ $title_page ?? 'Title' }}</a>

                <div class="table-responsive">
                    <table class="table table-bordered" id="productDataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Nama Customer</th>
                                <th>Plat Kendaraan</th>
                                <th>Supir Kendaraan</th>
                                <th>Resi Paket</th>
                                <th>Checkpoint ID</th>
                                <th>Tujuan</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- <tr>
                                <td>1</td>
                                <td>26</td>
                                <td>L 150 ML</td>
                                <td>Sodiq</td>
                                <td>Skincare</td>
                                <td>22</td>
                                <td>Jakarta</td>
                                <td>20</td>
                                <td>
                                    <form action="" method="post">
                                        <a class="btn btn-sm btn-outline-success" id="btnedit" href="/">Kirim ke sopir</a>
                                        <a class="btn btn-sm btn-primary" id="btnedit" href="/">Edit</a>
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr> --}}
                            @foreach ($listpengiriman as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->plat }}</td>
                                <td>{{ $data->sopirs->nama }}</td>
                                <td>{{ $data->idpaket }}</td>
                                <td>{{ $data->id_cp }}</td>
                                <td>{{ $data->tujuan }}</td>
                                <td>{{ $data->quantity }}</td>
                                <td>
                                    <form action="{{ route('pengiriman.destroy', $data->id) }}" method="post">
                                        <a class="btn btn-sm btn-outline-success" id="btnedit" href="/">Kirim ke sopir</a>
                                        <a class="btn btn-sm btn-primary" id="btnedit" href="/">Edit</a>
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