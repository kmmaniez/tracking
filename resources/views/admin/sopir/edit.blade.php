@extends('layouts.master')

@section('konten')
    <div class="container-fluid">

        <!-- Page Heading -->
        <x-admin.page-heading>{{ $title_page ?? 'Title' }}</x-admin.page-heading>

        <!-- Card -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">{{ $title_page ?? 'Title' }}</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sopir.update', $sopir->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama">Nama Sopir</label>
                                <input type="text" class="form-control" name="nama" value="{{ old('nama', $sopir->nama) }}" id="nama">
                            </div>
                            <div class="form-group">
                                <label for="telepon">Telepon Sopir</label>
                                <input type="number" class="form-control" name="telepon" value="{{ old('telepon', $sopir->telepon) }}" id="telepon">
                            </div>
                            <div class="form-group">
                                <label for="merkhp">Merk HP</label>
                                <input type="text" class="form-control" name="merkhp" value="{{ old('merkhp', $sopir->merkhp) }}" id="merkhp">
                            </div>
                            <button class="btn btn-primary">Update</button>
                            <a href="{{ route('sopir.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
