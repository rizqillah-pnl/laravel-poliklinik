@extends('layout.main')
@section('content')
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Obat</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Nama Obat</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            placeholder="Nama Obat" name="fname-column">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Dosis</label>
                                        <input type="text" id="last-name-column" class="form-control"
                                            placeholder="Dosis" name="lname-column">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="city-column">Stok</label>
                                        <input type="text" id="city-column" class="form-control" placeholder="Stok"
                                            name="city-column">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Jenis Obat</label>
                                        <input type="text" id="company-column" class="form-control"
                                            name="company-column" placeholder="Jenis Obat">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">Kadaluarsa</label>
                                        <input type="email" id="email-id-column" class="form-control"
                                            name="email-id-column" placeholder="Kadaluarsa">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">Harga</label>
                                        <input type="email" id="email-id-column" class="form-control"
                                            name="email-id-column" placeholder="Harga">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection