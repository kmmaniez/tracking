@extends('layouts.master')

@section('konten')
<div class="container-fluid">

    <!-- Page Heading -->
    <x-admin.page-heading>Tambah {{ $title_page ?? 'Data' }}</x-admin.page-heading>

    <!-- Card -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah {{ $title_page ?? 'Data' }}</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('pengiriman.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Customer</label>
                            <input type="text" class="form-control" name="nama" id="nama">
                            @error('nama')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="plat">Plat Kendaraan</label>
                            <input type="text" class="form-control" name="plat" id="plat">
                            @error('plat')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="sopir">Nama Supir</label>
                            <select name="sopir" id="sopir" class="form-control">
                                @foreach ($sopir as $data)
                                <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                    
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="paket">ID Paket</label>
                            <input type="text" class="form-control" name="paket" id="paket">
                            @error('paket')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="checkpointid">ID CHECKPOINT</label>
                            <select name="checkpointid" id="checkpointid" class="form-control">
                                @foreach ($checkpointID as $data)
                                <option value="{{ $data->id_cp }}">{{ $data->id_cp }} | Tujuan {{ $data->kota_tujuan }}</option>
                                    
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tujuan">Tujuan</label>
                            <input type="text" class="form-control" name="tujuan" id="tujuan">
                            @error('tujuan')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="text" class="form-control" name="quantity" id="quantity">
                            @error('quantity')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button class="btn btn-primary">Simpan</button>
                        <a href="{{ route('paket.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection