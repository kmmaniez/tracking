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
                    <h6 class="m-0 font-weight-bold text-primary">Tambah {{ $title_page ?? 'Title' }}</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('kendaraan.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Kendaraan</label>
                            <input type="text" class="form-control" name="nama" id="nama">
                            @error('nama')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="plat">Nomor PLAT</label>
                            <input type="text" class="form-control" name="plat" id="plat">
                            @error('plat')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="warna">Warna Kendaraan</label>
                            <input type="text" class="form-control" name="warna" id="warna">
                            @error('warna')
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