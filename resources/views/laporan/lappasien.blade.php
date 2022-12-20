@extends('layout.main')
@section('content')
    <div class="container">
        <h2 class="heade" style="color: #4b4f58;">Laporan Pasien</h2>
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
                            <form class="form-inline" method="get" action="{{ url('/lappasien') }}">
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
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-dark mt-2 text-white">Cetak</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <table id="tableBtnPDF" class="table table-bordered table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Pasien</th>
                                        <th>Umur</th>
                                        <th>JK</th>
                                        <th>Keluhan</th>
                                        <th>Alergi</th>
                                        <th>Penanggung Jawab</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Tiara Dinar</td>
                                        <td>20</td>
                                        <td>P</td>
                                        <td>Sakit Hati</td>
                                        <td>Janji Palsu</td>
                                        <td>Rauzatul</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#modalHapus">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Tiara Dinar</td>
                                        <td>20</td>
                                        <td>P</td>
                                        <td>Sakit Hati</td>
                                        <td>Janji Palsu</td>
                                        <td>Rauzatul</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#modalHapus">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                     </tr>
                                </tbody>
                            </table>
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
