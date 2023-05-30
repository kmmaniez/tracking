@extends('layouts.master')

@section('konten')
<div class="container-fluid">

    <!-- Page Heading -->
    <x-admin.page-heading>Tambah {{ $title_page }}</x-admin.page-heading>

    <!-- Card -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah {{ $title_page }}</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('paket.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Customer</label>
                            <input type="text" class="form-control" name="nama" id="nama">
                            @error('nama')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon Customer</label>
                            <input type="number" class="form-control" name="telepon" id="telepon">
                            @error('telepon')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat Customer</label>
                            <input type="text" class="form-control" name="alamat" id="alamat">
                            @error('alamat')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tujuan">Tujuan Customer</label>
                            <input type="text" class="form-control" name="tujuan" id="tujuan">
                            @error('tujuan')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jenispaket">Jenis Paket Customer</label>
                            <input type="text" class="form-control" name="jenispaket" id="jenispaket">
                            @error('jenispaket')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button class="btn btn-primary">Simpan</button>
                        <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection