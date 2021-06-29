@extends('layouts.template')
@section('Title', 'Halaman Data Buku')
@section('Title1', "Data Buku")
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card  card-plain">
          <div class="card-header">
            <h4 class="card-title"> Form Edit Data Buku </h4>
          </div>
          <div class="card-body">
            @foreach ($books as $data)
            <form action="{{ route('book.update', ['book'=>$data->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PATCH')
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputISBN">ISBN</label>
                    <input type="text" name="isbn" class="form-control"  value="{{$data->isbn}}" id="inputISBN">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputJudulBuku">Judul Buku</label>
                    <input type="text" name="judul_buku" class="form-control" value="{{$data->judul_buku}}" id="inputJudulBuku">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputJenisBuku">Jenis Buku</label>
                    <input type="text" name="jenis_buku" class="form-control" value="{{$data->jenis_buku}}" id="inputJenisBuku">
                  </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputJumlahHalaman">Jumlah Halaman</label>
                      <input type="text" name="jumlah_halaman" class="form-control" value="{{$data->jumlah_halaman}}" id="inputJumlahHalaman">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputJumlahBuku">Jumlah Buku</label>
                        <input type="text" name="jumlah_buku" class="form-control" value="{{$data->jumlah_buku}}" id="inputJumlahBuku">
                      </div>
                    <div class="form-group col-md-6">
                        <label for="inputTahunTerbit">Tahun Terbit</label>
                        <input type="text" name="tahun_terbit" class="form-control" value="{{$data->tahun_terbit}}" id="inputTahunTerbit">
                    </div>
                  </div>
                <div class="form-group">
                    <label for="inputPenerbit">Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" value="{{$data->penerbit}}" id="inputPenerbit" >
                  </div>
                  <div class="form-group">
                    <label for="inputPengarang">Pengarang</label>
                    <input type="text" name="pengarang" class="form-control" value="{{$data->pengarang}}" id="inputPengarang" >
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
  @endforeach
@endsection
