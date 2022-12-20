@extends('layout.main')

@section('content')
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>
<div class="page-heading">
    <h3>Pasien</h3>
    <hr style="margin-top: -2px;">
</div>
        {{-- message --}}

        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h2>Data Pengunjung Hari Ini</h2>
                </div>
                <div class="card-body mt-3">
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

    <footer>

    </footer>
</div>
@endsection
