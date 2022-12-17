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
              <div class="card-body py-4-5 px-3">
                <div class="row">
                  <div class="col-md-4">
                    <div class="stats-icon purple">
                      <i class="iconly-boldProfile"></i>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <h6 class="text-muted font-semibold">Jumlah Pasien</h6>
                    <h6 class="mb-0 font-extrabold">112</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-4 col-md-6">
            <div class="card">
              <div class="card-body py-4-5 px-3">
                <div class="row">
                  <div class="col-md-4">
                    <div class="stats-icon blue">
                      <i class="iconly-boldProfile"></i>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <h6 class="text-muted font-semibold">Jumlah Kunjungan</h6>
                    <h6 class="mb-0 font-extrabold">18</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-4 col-md-6">
            <div class="card">
              <div class="card-body py-4-5 px-3">
                <div class="row">
                  <div class="col-md-4">
                    <div class="stats-icon green">
                      <i class="iconly-boldAdd-User"></i>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <h6 class="text-muted font-semibold">Jumlah Obat</h6>
                    <h6 class="mb-0 font-extrabold">80</h6>
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
                <h5 class="font-bold">Dr.Budi</h5>
                <h6 class="text-muted mb-0">121212121234</h6>
              </div>
            </div>
          </div>
        </div>


      </div>

    </section>

    <section class="section">
      <div class="card">
        <div class="card-header">
          Data Pengunjung Hari Ini
        </div>
        <div class="card-body">
          <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
            <script>
              $(document).ready(function() {
                $('#table1').DataTable();
              });
            </script>
            <div class="dataTable-container">
              <table class="table-striped dataTable-table table" id="table1">
                <thead>
                  <th data-sortable="" style="width: 1.0098%;">
                    No
                  </th>
                  <th data-sortable="" style="width: 12.0098%;">
                    Name
                  </th>
                  <th data-sortable="" style="width: 7.2369%;">
                    Umur
                  </th>
                  <th data-sortable="" style="width: 7.0768%;">
                    JK
                  </th>
                  <th data-sortable="" style="width: 9.0752%;">
                    keluhan
                  </th>
                  <th data-sortable="" style="width: 8.0752%;">
                    Alergi
                  </th>
                  <th data-sortable="" style="width: 12.0752%;">
                    Penanggung Jawab
                  </th>
                  <th data-sortable="" style="width: 8.6013%;">
                    Status
                  </th>
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
                      <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>
                      <span class="badge bg-danger"><i class="bi bi-trash">
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
                      <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>
                      <span class="badge bg-danger"><i class="bi bi-trash">
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
                      <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>
                      <span class="badge bg-danger"><i class="bi bi-trash">
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Graiden</td>
                    <td>20</td>
                    <td>pria</td>
                    <td>lambung</td>
                    <td>udang</td>
                    <td>Dr.budi</td>
                    <td>
                      <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>
                      <span class="badge bg-danger"><i class="bi bi-trash">
                    </td>
                  </tr>

                  <tr>
                    <td>5</td>
                    <td>Graiden</td>
                    <td>20</td>
                    <td>pria</td>
                    <td>lambung</td>
                    <td>udang</td>
                    <td>Dr.budi</td>
                    <td>
                      <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>
                      <span class="badge bg-danger"><i class="bi bi-trash">
                    </td>
                  </tr>

                  <tr>
                    <td>6</td>
                    <td>Saiden</td>
                    <td>20</td>
                    <td>pria</td>
                    <td>lambung</td>
                    <td>udang</td>
                    <td>Dr.budi</td>
                    <td>
                      <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>
                      <span class="badge bg-danger"><i class="bi bi-trash">
                    </td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Graiden</td>
                    <td>20</td>
                    <td>pria</td>
                    <td>lambung</td>
                    <td>udang</td>
                    <td>Dr.budi</td>
                    <td>
                      <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>
                      <span class="badge bg-danger"><i class="bi bi-trash">
                    </td>
                  </tr>

                  <tr>
                    <td>8</td>
                    <td>Graiden</td>
                    <td>20</td>
                    <td>pria</td>
                    <td>lambung</td>
                    <td>udang</td>
                    <td>Dr.budi</td>
                    <td>
                      <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>
                      <span class="badge bg-danger"><i class="bi bi-trash">
                    </td>
                  </tr>

                  <tr>
                    <td>9</td>
                    <td>Saiden</td>
                    <td>20</td>
                    <td>pria</td>
                    <td>lambung</td>
                    <td>udang</td>
                    <td>Dr.budi</td>
                    <td>
                      <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>
                      <span class="badge bg-danger"><i class="bi bi-trash">
                    </td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Graiden</td>
                    <td>20</td>
                    <td>pria</td>
                    <td>lambung</td>
                    <td>udang</td>
                    <td>Dr.budi</td>
                    <td>
                      <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>
                      <span class="badge bg-danger"><i class="bi bi-trash">
                    </td>
                  </tr>

                  <tr>
                    <td>11</td>
                    <td>Graiden</td>
                    <td>20</td>
                    <td>pria</td>
                    <td>lambung</td>
                    <td>udang</td>
                    <td>Dr.budi</td>
                    <td>
                      <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>
                      <span class="badge bg-danger"><i class="bi bi-trash">
                    </td>
                  </tr>

                  <tr>
                    <td>12</td>
                    <td>Saiden</td>
                    <td>20</td>
                    <td>pria</td>
                    <td>lambung</td>
                    <td>udang</td>
                    <td>Dr.budi</td>
                    <td>
                      <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>
                      <span class="badge bg-danger"><i class="bi bi-trash">
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          {{-- <div class="dataTable-bottom">
                <div class="dataTable-info">Showing 1 to 5 of 26 entries</div>
                <ul class="pagination pagination-primary float-end dataTable-pagination">
                    <li class="page-item pager">
                        <a href="#" class="page-link" data-page="1">‹</a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link" data-page="1">1</a>
                    </li><li class="page-item">
                        <a href="#" class="page-link" data-page="2">2</a>
                    </li><li class="page-item">
                        <a href="#" class="page-link" data-page="3">3</a>
                    </li><li class="page-item">
                        <a href="#" class="page-link" data-page="4">4</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link" data-page="5">5</a>
                    </li><li class="page-item">
                        <a href="#" class="page-link" data-page="6">6</a>
                    </li><li class="page-item pager">
                        <a href="#" class="page-link" data-page="2">›</a>
                    </li>
                </ul>
            </div> --}}
        </div>
      </div>
  </div>

  </section>
  </div>
@endsection
