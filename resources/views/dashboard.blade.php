@extends('layouts.master')

@section('konten')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>
        <!-- Content Row -->
        <div class="row">

            @if (Auth::user()->roles[0]->id === 1)
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-bottom-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">Total Supir</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalsupir ?? 0 }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-bottom-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">Total Paket</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalpaket ?? 0 }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-gift fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-bottom-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">Total Kendaraan
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalkendaraan ?? 0 }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-truck fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <!-- Categories -->
                {{-- <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-bottom-primary shadow py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">Pilih Sopir</div>
                                    <div>
                                        <select class="form-control" name="pilihsopir" id="pilihsopir">
                                            @foreach ($sopir as $data)
                                            <option value="" style="display: none;">---- Pilih Sopir ----</option>
                                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-md-6 mb-4">
                    <div class="card border-bottom-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="text-lg font-weight-bold text-primary text-uppercase mb-2">Sopir : Andre</div>
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quasi aut fugiat, ex atque
                                    aspernatur in! Animi aut eveniet asperiores. Nam necessitatibus, excepturi esse,
                                    mollitia velit iure recusandae unde, ducimus perferendis sed sapiente. Est suscipit
                                    officia aspernatur reprehenderit dolore dolores! Esse voluptas doloremque quas porro?
                                    Voluptate error laudantium veritatis aperiam similique dicta in itaque, alias assumenda,
                                    obcaecati tenetur? Beatae nulla adipisci, labore ipsam officia ipsum sint architecto
                                    quaerat asperiores quidem eius ex molestias aperiam cupiditate iste porro aliquid
                                    eveniet nihil dolorum rem. Accusantium consectetur quo ad sunt error optio dolor in
                                    corrupti labore quod dolorem id fugit omnis rem deserunt illum corporis sapiente
                                    repellat voluptatum, quae eaque adipisci vel! Sit, quidem, iure harum cumque assumenda
                                    culpa similique exercitationem nulla et magni officia eos quibusdam qui nobis quos.
                                    Dolorum molestias deleniti minus placeat recusandae voluptatem, magni cumque
                                    exercitationem fuga, ipsum facilis soluta est. Dolore unde exercitationem id quam
                                    reiciendis cum? Rem!</p>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">List {{ $title_page ?? 'Title' }}</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="productDataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Checkpoint</th>
                                            <th>Kota Tujuan</th>
                                            <th>Checkpoint 1</th>
                                            <th>Checkpoint 2</th>
                                            <th>Checkpoint 3</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($checkpoints as $data)
                                        <tr>
                                            <td>{{ $data->id_cp }}</td>
                                            <td>{{ $data->kota_tujuan }}</td>
                                            <td>{{ $data->cp1 }}</td>
                                            <td>{{ $data->cp2 }}</td>
                                            <td>{{ $data->cp3 }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">List {{ $title_page ?? 'Title' }}</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="productDataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Nama Customer</th>
                                            <th>Plat Kendaraan</th>
                                            <th>Supir Kendaraan</th>
                                            <th>Resi Paket</th>
                                            <th>Checkpoint ID</th>
                                            <th>Tujuan</th>
                                            <th>Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($listpengiriman as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->plat }}</td>
                                            <td>{{ $data->sopirs->nama }}</td>
                                            <td>{{ $data->idpaket }}</td>
                                            <td>{{ $data->id_cp }}</td>
                                            <td>{{ $data->tujuan }}</td>
                                            <td>{{ $data->quantity }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
        @if (Auth::user()->roles[0]->id === 1)
            <div class="card shadow" style="width: 600px; height:600px;">
                <div class="card-body">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        @endif
    @endsection
    {{-- ini di inputan supir cuma tgl,jam,kondisi,status, --}}
    @push('script')
        @if (Auth::user()->roles[0]->id === 1)
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            const ctx = document.getElementById('myChart');

            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Sopir', 'Paket', 'Kendaraan'],
                    datasets: [{
                        label: '# of Votes',
                        data: [{{ $totalsupir }}, {{ $totalpaket }}, {{ $totalkendaraan }}],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
        @endif
    @endpush
