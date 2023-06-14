@extends('layouts.master')

@section('konten')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ Auth::user()->name ?? null }}</h1>
        </div>
        <!-- Content Row -->
        <div class="row">

            <!-- Categories -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-bottom-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg  font-weight-bold text-primary text-uppercase mb-1">Pilih SOpir</div>
                                <div>
                                    <select class="form-control" name="" id="">
                                        <option value="">Farid</option>
                                        <option value="">Eak</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- muncul paket sesuai paket yg dipilih --}}
        </div>

    </div>
@endsection
