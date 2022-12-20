@extends('layout.main')
@section('content')
    <div class="container">
        <h2 class="heade" style="color: #4b4f58;">Laporan Obat</h2>
        <hr style="margin-top: -2px;">
        <div class="container">
            <div class="card p-3">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-10">
                            <label for="inputPilih" class="form-label">Jenis Laporan</label>
                            <select id="inputpilih" class="form-select">
                                <option value="Harian">Harian</option>
                                <option>Mingguan</option>
                                <option>Bulanan</option>
                                <option>Tahunan</option>
                            </select>
                        </div>
                    </div>
                    <form class="form-inline" method="get" action="{{ url('/lapobat') }}">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label for="inputdate" class="form-label">Tanggal Awal</label>
                                    <input type="date" id="inputdate" class="form-control"
                                        style="border: 1px solid #ddd !important" placeholder="Disabled input"
                                        value="{{ date('Y-m-d') }}" name="tgl_awal">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label for="inputdate" class="form-label">Tanggal Akhir</label>
                                    <input type="date" id="inputdate" class="form-control"
                                        style="border: 1px solid #ddd !important" placeholder="Disabled input"
                                        value="{{ date('Y-m-d') }}" name="tgl_akhir">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary mt-4">Tampilkan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row py-2 mt-5">
                <div class="col-md-10">
                    <h5>Data Mingguan</h5>
                    <p class="mt-2">{{ $title }}</p>
                </div>
            </div>
            <div class="col-md-2">
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Data Obat Masuk</h3>
                    </div>
                    <div class="card-body mt-3">
                        <table id="tableBtnPDF" class="table responsive nowrap table-bordered table-striped align-middle"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>nama</th>
                                    <th>jenis</th>
                                    <th>tanggal kadaluarsa</th>
                                    <th>tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($obats as $obat)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $obat->nama }}</td>
                                        <td>{{ $obat->jenis }}</td>
                                        <td>{{ $obat->tanggal_kadaluarsa }}</td>
                                        <td>{{ date('d F Y H:i:s', strtotime($obat->created_at)) }}</td>
                                        <td>
                                            <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>
                                            <span class="badge bg-danger"><i class="bi bi-trash">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="char">
        <canvas id="myChart" width="600" height="400"></canvas>
        <script type="text/javascript" src="resources/js/chart.js"></script>
    </div>
    </div>
    </div>
    </div>
@endsection
