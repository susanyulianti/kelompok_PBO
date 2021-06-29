@extends('layouts.template')
@section('Title', 'Halaman Data Buku')
@section('Title1', "Data Buku")
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card  card-plain">
          <div class="card-header">
            <h4 class="card-title"> Form Tambah Data Buku </h4>
          </div>
          <div class="card-body">
            <form action="{{ route('book.store') }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputISBN">ISBN</label>
                    <input type="text" name="isbn" class="form-control" id="inputISBN">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputJudulBuku">Judul Buku</label>
                    <input type="text" name="judul_buku" class="form-control" id="inputJudulBuku">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputJenisBuku">Jenis Buku</label>
                    <input type="text" name="jenis_buku" class="form-control" id="inputJenisBUku">
                  </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputJumlahHalaman">Jumlah Halaman</label>
                      <input type="type" name="jumlah_halaman" class="form-control" id="inputJumlahHalaman">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputJumlahBuku">Jumlah Buku</label>
                        <input type="text" name="jumlah_buku" class="form-control" id="inputJumlahBuku">
                      </div>
                    <div class="form-group col-md-4">
                        <label for="inputTahunTerbit">Tahun Terbit</label>
                        <input type="text" name="tahun_terbit" class="form-control" id="inputTahunTerbit">
                    </div>
                  </div>
                <div class="form-group">
                    <label for="inputPenerbit">Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" id="inputPenerbit" >
                  </div>
                  <div class="form-group">
                    <label for="inputPengarang">Pengarang</label>
                    <input type="text" name="pengarang" class="form-control" id="inputPengarang" >
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
