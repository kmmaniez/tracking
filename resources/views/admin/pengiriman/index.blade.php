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
                                <th>Id Pengirim / nama cust</th>
                                <th>Plat Kendaraan</th>
                                <th>supir Kendaraan</th>
                                <th>paket</th>
                                <th>id checkpoint</th>
                                <th>tujuan</th>
                                <th>qty</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
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
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection