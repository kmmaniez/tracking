@extends('layouts.master')

@section('konten')

<div class="container">

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1>Tracking Checkpoint 1</h1>
                    <form action="" method="post" id="cp1">
                        @csrf
                        <div class="form-group">
                            <label for="nama_sopir">Nama Sopir</label>
                            <input type="text" class="form-control" name="nama_sopir" id="nama_sopir">
                        </div>
                        <div class="form-group">
                            <label for="nomor_plat">Nomor PLAT</label>
                            <input type="text" class="form-control" name="nomor_plat" id="nomor_plat">
                        </div>
                        <div class="form-group">
                            <label for="lokasi_pickup">Loaksi Pickup Sopir</label>
                            <input type="text" class="form-control" name="lokasi_pickup" id="lokasi_pickup">
                        </div>
                        <div class="form-group">
                            <label for="tujuan_sopir">Tujuan Sopir</label>
                            <input type="text" class="form-control" name="tujuan_sopir" id="tujuan_sopir">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" class="form-control" name="status" id="status">
                        </div>
                        <div class="form-group">
                            <label for="checkpoint">Checkpoint</label>
                            <input type="text" class="form-control" name="checkpoint" id="checkpoint">
                        </div>
                        <div class="form-group">
                            <label for="total_barang">Total Barang</label>
                            <input type="text" class="form-control" name="total_barang" id="total_barang">
                        </div>
                        <div class="form-group">
                            <label for="jenis_barang">Jenis Barang</label>
                            <input type="text" class="form-control" name="jenis_barang" id="jenis_barang">
                        </div>
                        <button class="btn btn-primary" id="btn-cp1">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1>Tracking Checkpoint 2</h1>
                    <form action="" id="cp2" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="tujuan_sopir">Lokasi sekarang Sopir</label>
                            <input type="text" class="form-control" name="tujuan_sopir" id="tujuan_sopir">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" class="form-control" name="status" id="status">
                        </div>
                        <div class="form-group">
                            <label for="checkpoint">Checkpoint</label>
                            <input type="text" class="form-control" name="checkpoint" id="checkpoint">
                        </div>
                        <button class="btn btn-primary" id="btn-cp2">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1>Tracking Checkpoint 3</h1>
                    <form action="" id="cp3" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="tujuan_sopir">Sampai Tujuan</label>
                            <input type="text" class="form-control" name="tujuan_sopir" id="tujuan_sopir">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" class="form-control" name="status" id="status">
                        </div>
                        <div class="form-group">
                            <label for="checkpoint">Checkpoint</label>
                            <input type="text" class="form-control" name="checkpoint" id="checkpoint">
                        </div>
                        <div class="form-group">
                            <label for="checkpoint">Total Barang</label>
                            <input type="text" class="form-control" name="checkpoint" id="checkpoint">
                        </div>
                        <button class="btn btn-primary" id="btn-cp3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
</div>

@endsection
@push('script')
<script>
    // const Cp1 = document.getElementById('cp1');
    const Cp2 = document.querySelectorAll('#cp2 > .form-group > input');
    const Cp3 = document.querySelectorAll('#cp3 > .form-group > input');
    const btnCp2 = document.getElementById('btn-cp2');
    const btnCp3 = document.getElementById('btn-cp3');
    Cp2.forEach(element => {
        element.disabled = true
        btnCp2.disabled = true;
    });
    Cp3.forEach(element => {
        element.disabled = true
        btnCp3.disabled = true;
    });
</script>
@endpush