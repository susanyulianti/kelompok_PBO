@extends('layouts.template')
@section('Title', 'Halaman Data Transaksi')
@section('Title1', "Data Transaksi")
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card  card-plain">
          <div class="card-header">
            <h4 class="card-title"> Form Tambah Data Transaksi </h4>
          </div>
          <div class="card-body">
            <form action="{{ route('transaction.store') }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputKodeTransaksi">Kode Transaksi</label>
                    <input type="text" name="kd_transaksi" class="form-control" id="inputKodeTransaksi">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputNamaLengkap">Nama Lengkap</label>
                    <input type="text" name="nm_member" class="form-control" id="inputNamaLengkap">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputKelas">Kelas</label>
                    <input type="text" name="kelas" class="form-control" id="inputKelas">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputJurusan">Jurusan</label>
                    <select id="inputJurusan" name="jurusan" class="form-control">
                      <option selected>Choose...</option>
                      <option>IPA</option>
                      <option>IPS</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputTanggalLahir">Tanggal Lahir</label>
                      <input type="date" name="tanggal_lahir" class="form-control" id="inputTanggalLahir">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputJenisKelamin">Jenis Kelamin</label>
                      <select id="inputJenisKelamin" name="gender" class="form-control">
                        <option selected>Choose...</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>
                  </div>
                <div class="form-group">
                    <label for="inputNohp">No Telepon</label>
                    <input type="text" name="nohp" class="form-control" id="inputNohp" >
                  </div>
                  <div class="form-group">
                    <label for="inputAlamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputAlamat" >
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Masukan Foto Anda</label>
                    <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1">
              </div>
                <button type="submit" class="btn btn-primary">Create</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
