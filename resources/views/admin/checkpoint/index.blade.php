@extends('layouts.master')

@section('konten')
    <div class="container-fluid">

        <!-- Page Heading -->
        <x-admin.page-heading>{{ $title_page ?? 'Title' }}</x-admin.page-heading>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List {{ $title_page ?? 'Title' }}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="productDataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Checkpoint 1</th>
                                <th>Checkpoint 2</th>
                                <th>Checkpoint 3</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- <tr>
                                <td>1</td>
                                <td>Surabaya  <br> SOPIR checkpoint Tanggal 20-02-2023</td>
                                <td>Semarang</td>
                                <td>Jakarta</td>
                            </tr> --}}
                            @foreach ($checkpointone as $cp1)
                            <tr>
                                <td>1</td>
                                <td>SOPIR checkpoint Tanggal {{ $cp1->tanggal_cp_1 }}</td>
                                <td>
                                @foreach ($checkpointtwo as $cp2)
                                    SOPIR checkpoint Tanggal {{ $cp2->tanggal_cp_2 }}
                                @endforeach
                                </td>
                                <td>
                                @foreach ($checkpointthree as $cp3)
                                    SOPIR checkpoint Tanggal {{ $cp3->tanggal_cp_3 }}
                                @endforeach
                                </td>
                            </tr>
                            
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('script')
<script>
    const btnEdit = document.querySelector('#btnedit');

</script>
@endpush