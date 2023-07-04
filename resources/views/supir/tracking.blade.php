@extends('layouts.master')

@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#checkpoint1" aria-expanded="true" aria-controls="checkpoint1">
                                    Tracking Checkpoint 1
                                </button>
                            </h2>
                        </div>

                        <div id="checkpoint1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <form action="{{ route('checkpoint.store1') }}" method="post" id="cp1">
                                    @csrf
                                    <div class="form-group">
                                        <label for="tanggal_cp_1">Tanggal</label>
                                        <input type="date" class="form-control" name="tanggal_cp_1" id="tanggal_cp_1">
                                    </div>
                                    <div class="form-group">
                                        <label for="kondisi_cp_1">Kondisi barang</label>
                                        <input type="text" class="form-control" name="kondisi_cp_1" id="kondisi_cp_1">
                                    </div>
                                    <div class="form-group">
                                        <label for="status_cp_1">Status</label>
                                        <input type="text" class="form-control" name="status_cp_1" id="status_cp_1">
                                    </div>
                                    <div class="form-group">
                                        <label for="kota_cp_1">Kota</label>
                                        <input type="text" class="form-control" name="kota_cp_1" id="kota_cp_1">
                                    </div>

                                    <button class="btn btn-primary" id="btn-cp1">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- CP 2 --}}
            <div class="col-12 mb-4">
                
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#checkpoint2" aria-expanded="true" aria-controls="checkpoint2">
                                    Tracking Checkpoint 2
                                </button>
                            </h2>
                        </div>

                        <div id="checkpoint2" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <form action="{{ route('checkpoint.store2') }}" method="post" id="cp1">
                                    @csrf
                                    <div class="form-group">
                                        <label for="tanggal_cp_2">Tanggal</label>
                                        <input type="date" class="form-control" name="tanggal_cp_2" id="tanggal_cp_2">
                                    </div>
                                    <div class="form-group">
                                        <label for="kondisi_cp_2">Kondisi barang</label>
                                        <input type="text" class="form-control" name="kondisi_cp_2" id="kondisi_cp_2">
                                    </div>
                                    <div class="form-group">
                                        <label for="status_cp_2">Status</label>
                                        <input type="text" class="form-control" name="status_cp_2" id="status_cp_2">
                                    </div>
                                    <div class="form-group">
                                        <label for="kota_cp_2">Kota</label>
                                        <input type="text" class="form-control" name="kota_cp_2" id="kota_cp_2">
                                    </div>

                                    <button class="btn btn-primary" id="btn-cp1">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- CP 3 --}}
            <div class="col-12">
                
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#checkpoint3" aria-expanded="true" aria-controls="checkpoint3">
                                    Tracking Checkpoint 3
                                </button>
                            </h2>
                        </div>

                        <div id="checkpoint3" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <form action="{{ route('checkpoint.store3') }}" method="post" id="cp1">
                                    @csrf
                                    <div class="form-group">
                                        <label for="tanggal_cp_3">Tanggal</label>
                                        <input type="date" class="form-control" name="tanggal_cp_3" id="tanggal_cp_3">
                                    </div>
                                    <div class="form-group">
                                        <label for="kondisi_cp_3">Kondisi barang</label>
                                        <input type="text" class="form-control" name="kondisi_cp_3" id="kondisi_cp_3">
                                    </div>
                                    <div class="form-group">
                                        <label for="status_cp_3">Status</label>
                                        <input type="text" class="form-control" name="status_cp_3" id="status_cp_3">
                                    </div>
                                    <div class="form-group">
                                        <label for="kota_cp_3">Kota</label>
                                        <input type="text" class="form-control" name="kota_cp_3" id="kota_cp_3">
                                    </div>

                                    <button class="btn btn-primary" id="btn-cp1">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
@endsection
