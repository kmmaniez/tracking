@extends('layouts.master')

@section('konten')
<div class="container-fluid">

    <!-- Page Heading -->
    <x-admin.page-heading>Edit {{ $title_page }}</x-admin.page-heading>

    <!-- Card -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit {{ $title_page }}</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('paket.update', $paket->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama Customer</label>
                            <input type="text" class="form-control" name="nama" value="{{ old('nama', $paket->nama_customer) }}" id="nama">
                            @error('nama')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon Customer</label>
                            <input type="number" class="form-control" name="telepon" value="{{ old('telepon', $paket->telepon) }}" id="telepon">
                            @error('telepon')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat Customer</label>
                            <input type="text" class="form-control" name="alamat" value="{{ old('alamat', $paket->alamat) }}" id="alamat">
                            @error('alamat')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tujuan">Tujuan Customer</label>
                            <input type="text" class="form-control" name="tujuan" value="{{ old('tujuan', $paket->tujuan) }}" id="tujuan">
                            @error('tujuan')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jenispaket">Jenis Paket Customer</label>
                            <input type="text" class="form-control" name="jenispaket" value="{{ old('jenispaket', $paket->jenis_paket) }}" id="jenispaket">
                            @error('jenispaket')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button class="btn btn-primary">Update</button>
                        <a href="{{ route('paket.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection