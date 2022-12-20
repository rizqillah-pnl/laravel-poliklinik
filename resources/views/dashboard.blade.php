@extends('layout.main')
@section('content')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <h3>Dashboard</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-6 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon purple">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Jumlah Pasien</h6>
                                        <h6 class="font-extrabold mb-0">112</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon blue">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Jumlah Kunjungan</h6>
                                        <h6 class="font-extrabold mb-0">18</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon green">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Jumlah Obat</h6>
                                        <h6 class="font-extrabold mb-0">80</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            {{-- profil --}}
            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body py-4 px-6">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="assets/images/faces/1.jpg" alt="Face 1">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">{{ auth()->user()->nama }}</h5>
                                <h6 class="text-muted mb-0">{{ auth()->user()->nip }}</h6>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </section>

        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h2>Data Pengunjung Hari Ini</h2>
                </div>
                <div class="card-body mt-3 ">
                    <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns" >
                        <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle"
                            style="width:100%">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>nama</th>
                                        <th>umur</th>
                                        <th>jk</th>
                                        <th>penyakit</th>
                                        <th>alergi</th>
                                        <th>penanggung jawab</th>
                                        <th >action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Graiden</td>
                                        <td>20</td>
                                        <td>pria</td>
                                        <td>lambung</td>
                                        <td>udang</td>
                                        <td>Dr.budi</td>
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
                                        <td>Graiden</td>
                                        <td>20</td>
                                        <td>pria</td>
                                        <td>lambung</td>
                                        <td>udang</td>
                                        <td>Dr.budi</td>
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
                                        <td>Saiden</td>
                                        <td>20</td>
                                        <td>pria</td>
                                        <td>lambung</td>
                                        <td>udang</td>
                                        <td>Dr.budi</td>
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
            </div>

        </section>
    </div>
@endsection
