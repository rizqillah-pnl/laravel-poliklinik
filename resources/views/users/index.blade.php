@extends('layout.main')
@section('content')
    <div class="container">
        <h2 class="heade" style="color: #4b4f58;">Data Users</h2>
        <hr style="margin-top: -2px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Data Users</h3>
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
                                <tr>
                                    <td>1</td>
                                    <td>Lorem.</td>
                                    <td>Lorem, ipsum dolor.</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                </tr>
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
@endsection
