@extends('layouts.master')

@section('konten')

<div class="container">

    <div class="card">
        <div class="card-body">
            <h1>Sopir</h1>
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Sopir</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="form-group">
                    <label for="telepon">Telepon Sopir</label>
                    <input type="number" class="form-control" name="telepon" id="telepon">
                </div>
                <div class="form-group">
                    <label for="merkhp">Merk HP</label>
                    <input type="text" class="form-control" name="merkhp" id="merkhp">
                </div>
                <button class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
    

</div>


@endsection