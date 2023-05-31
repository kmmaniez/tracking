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
                    <form action="{{ route('paket.simpansopir', $paket->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="pilihsopir">Pilih Sopir</label>
                            <select name="pilihsopir" class="form-control" id="pilihsopir">
                                <option value="" selected style="display: none">-- PILIH SOPIR --</option>
                                @foreach ($listsopir as $sopir)
                                <option value="{{ $sopir->id }}">{{ $sopir->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Customer</label>
                            <input type="text" class="form-control" name="nama" value="{{ $paket->nama_customer }}" id="nama" readonly>
                            @error('nama')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon Customer</label>
                            <input type="number" class="form-control" name="telepon" value="{{ $paket->telepon }}" id="telepon" readonly>
                            @error('telepon')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat Customer</label>
                            <input type="text" class="form-control" name="alamat" value="{{ $paket->alamat}}" id="alamat" readonly>
                            @error('alamat')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tujuan">Tujuan Customer</label>
                            <input type="text" class="form-control" name="tujuan" value="{{ $paket->tujuan }}" id="tujuan" readonly>
                            @error('tujuan')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jenispaket">Jenis Paket Customer</label>
                            <input type="text" class="form-control" name="jenispaket" value="{{ $paket->jenis_paket }}" id="jenispaket" readonly>
                            @error('jenispaket')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button class="btn btn-primary">Kirim ke sopir</button>
                        <a href="{{ route('paket.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection