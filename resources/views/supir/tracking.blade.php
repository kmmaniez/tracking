@extends('layouts.master')

@section('konten')
    <div class="container">
<h1>supri</h1>
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
                                <form action="" method="post" id="cp1">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nomor_plat">Tanggal</label>
                                        <input type="text" class="form-control" name="nomor_plat" id="nomor_plat">
                                    </div>
                                    <div class="form-group">
                                        <label for="nomor_plat">Kondisi barang</label>
                                        <input type="text" class="form-control" name="nomor_plat" id="nomor_plat">
                                    </div>
                                    <div class="form-group">
                                        <label for="nomor_plat">Status</label>
                                        <input type="text" class="form-control" name="nomor_plat" id="nomor_plat">
                                    </div>

                                    <button class="btn btn-primary" id="btn-cp1">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                <form action="" method="post" id="cp1">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nomor_plat">Tanggal</label>
                                        <input type="text" class="form-control" name="nomor_plat" id="nomor_plat">
                                    </div>
                                    <div class="form-group">
                                        <label for="nomor_plat">Kondisi barang</label>
                                        <input type="text" class="form-control" name="nomor_plat" id="nomor_plat">
                                    </div>
                                    <div class="form-group">
                                        <label for="nomor_plat">Status</label>
                                        <input type="text" class="form-control" name="nomor_plat" id="nomor_plat">
                                    </div>

                                    <button class="btn btn-primary" id="btn-cp1">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                <form action="" method="post" id="cp1">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nomor_plat">Tanggal</label>
                                        <input type="text" class="form-control" name="nomor_plat" id="nomor_plat">
                                    </div>
                                    <div class="form-group">
                                        <label for="nomor_plat">Kondisi barang</label>
                                        <input type="text" class="form-control" name="nomor_plat" id="nomor_plat">
                                    </div>
                                    <div class="form-group">
                                        <label for="nomor_plat">Status</label>
                                        <input type="text" class="form-control" name="nomor_plat" id="nomor_plat">
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
@push('script')
    <script>
        // const Cp1 = document.getElementById('cp1');
        const Cp2 = document.querySelectorAll('#cp2 > .form-group > input');
        const Cp3 = document.querySelectorAll('#cp3 > .form-group > input');
        const btnCp2 = document.getElementById('btn-cp2');
        const btnCp3 = document.getElementById('btn-cp3');
        // Cp2.forEach(element => {
        //     element.disabled = true
        //     btnCp2.disabled = true;
        // });
        // Cp3.forEach(element => {
        //     element.disabled = true
        //     btnCp3.disabled = true;
        // });
    </script>
@endpush
