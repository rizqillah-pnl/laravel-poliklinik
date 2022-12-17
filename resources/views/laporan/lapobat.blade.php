@extends('layout.main')
@section('content')
    <div class="container">
        <h2 class="heade" style="color: #4b4f58;">Laporan Obat</h2>
                <hr style="margin-top: -2px;">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <label for="inputPilih" class="form-label">Jenis Laporan</label>
                        <select id="inputpilih" class="form-select">
                            <option>Harian</option>
                            <option>Mingguan</option>
                            <option>Bulanan</option>
                            <option>Tahunan</option>
                        </select>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-5">
                        <div class="mb-3">
                            <label for="inputdate" class="form-label">Pilih Tanggal</label>
                            <input type="date" id="inputdate" class="form-control"
                                style="border: 1px solid #ddd !important" placeholder="Disabled input">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="mb-3">
                            <label for="inputdate" class="form-label">Pilih Tanggal</label>
                            <input type="date" id="inputdate" class="form-control"
                                style="border: 1px solid #ddd !important" placeholder="Disabled input">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary mt-4">Tampilkan</button>
                    </div>
                </div>
                <div class="row py-2 mt-5">
                    <div class="col-md-10">
                        <h5>Data Harian</h5>
                        <p class="mt-2">Menampilkan Data dari Tanggal<strong> 23/07/2022</strong> samapai <strong> 30/07/2022</strong></p>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-dark mt-2 text-white" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Cetak</button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
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
                        <div class="card-body">
                            <table class="table table-striped text-center" id="table1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Obat</th>
                                        <th>Dosis</th>
                                        <th>Stok</th>
                                        <th>Jenis Obat</th>
                                        <th>Kadaluarsa</th>
                                        <th>Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Promag</td>
                                        <td>500 mg</td>
                                        <td>20</td>
                                        <td>Tablet</td>
                                        <td>23/11/2025</td>
                                        <td>Rp.20.000</td>
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
                                        <td>2</td>
                                        <td>Antasida</td>
                                        <td>500 cc</td>
                                        <td>20</td>
                                        <td>Cair</td>
                                        <td>11/12/2025</td>
                                        <td>Rp.20.000</td>
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
                                            <td>3</td>
                                            <td>Paracetamol</td>
                                            <td>500 mg</td>
                                            <td>10</td>
                                            <td>Tablet</td>
                                            <td>23/05/2024</td>
                                            <td>Rp.10.000</td>
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
