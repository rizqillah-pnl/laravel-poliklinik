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
                <div class="card shadow mb-4">
                    <a href="#Identitas" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="Identitas">
                      <h6 class="m-0 font-weight-bold text-black">Identitas Pasien</h6></a>
                    <div class="collapse show" id="Identitas">
                    <div class="card-body">
                        <form class="user" action="">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="Nama_Lengkap">Nama Lengkap</label>
                                    <input type="text" class="form-control " name="Nama_Lengkap"  readonly>
                                </div>
                              <div class="col-sm-6">
                                <label for="Tanggal_Lahir">Umur</label>
                                <input type="text" class="form-control " name="Umur"  readonly>
                              </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="Alamat">Alamat</label>
                                    <input type="text" class="form-control " name="Alamat"   readonly>
                                </div>
                                <div class="col-sm-6">
                                    <label for="jk">Jenis Kelamin</label>
                                    <input type="text" class="form-control " name="jk"  readonly>
                                  </div>
                                </div>

                            <div class="form-group row">
                              <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="no_bpjs">Status</label>
                                    <input type="text" class="form-control " name="no_bpjs" readonly>
                              </div>
                              <div class="col-sm-6">
                                <label for="no_handphone">No. Handphone</label>
                                <input type="text" class="form-control " name="no_handphone"   readonly>
                              </div>
                            </div>
                        </form>
                    </div>
                    </div>
        </div>

        <div class="card shadow mb-4">
            <a href="#tambahrm" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="tambahrm">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Rekam Medis</h6> </a>
            <div class="collapse show" id="tambahrm">
            <div class="card-body">
            <div class="row">
            </div>
                <input type="hidden" name="idpasien" value="">
                <input type="hidden" name="id" value="">
                    <div class="form-group row col-sm-12">
                        <label for="dokter">Keluhan Utama</label>
                        <select class="form-control " name="keluhan_utama">
                        </select>
                    </div>
                    <div class="form-group row col-sm-12">
                        <label for="keluhan-utama">Anamnesis</label>
                        <input type="text" class="form-control " name="anamnesis" value="" required>
                    </div>
                    <div class="form-group row col-sm-12  ">
                        <label for="anamnesis">Alergi Obat</label>
                        <textarea type="date" class="form-control " name="alergi_obat" ></textarea>
                    </div>

                    <div class="form-group row col-sm-12 ">
                        <label for="anamnesis">Diagnosis</label>
                        <input type="text" class="form-control " name="diagnosis" value="" required>
                    </div>

                    <div class="form-group row col-sm-12 ">
                        <label for="reseplist">Resep</label>
                    </div>

                    <div class="form-group row">
                        <div class="form-group row col-sm-7">
                        <select num="" class="form-control " name="reseplist" id="reseplist" >
                            <option value="" selected disabled>Pilih satu</option>
                        </select>
                      </div>
                        <div class="col-sm-3">
                            <a href="javascript:;" onclick="addresep()" type="button" name="addresep" id="addresep" class="btn btn-primary">Tambahkan</a>
                        </div>
                    </div>

                    <div class="form-group row">
                    <div class="col-sm-2">

                        <a href= "/pasien" class="btn btn-danger btn-block" name="simpan">
                             <i class="fas fa-arrow-left fa-fw"></i> kembali
                        </a>

                    </div>
                    <div class="col-sm-2 ">
                        <button type="submit" class="btn btn-primary btn-block" name="simpan" value="simpan_edit" >
                             <i class="fas fa-save fa-fw"></i> Simpan
                        </button>
                    </div>
                </form>

            </div>
            </div>

</div>
<script>

        </div>
    </section>
</div>

<footer>

</footer>
</div>
@endsection
