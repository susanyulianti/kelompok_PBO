@extends('layouts.template')
@section('Title', 'Halaman Data Member')
@section('Title1', "Data Member")
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card  card-plain">
          <div class="card-header">
            <h4 class="card-title"> Form Edit Data Member </h4>
          </div>
          <div class="card-body">
            @foreach ($members as $data)
            <form action="{{ route('member.update', ['member'=>$data->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PATCH')
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputKodeMember">Kode Member</label>
                    <input type="text" name="kd_member" class="form-control"  value="{{$data->kd_member}}" id="inputKodeMember">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputNamaLengkap">Nama Lengkap</label>
                    <input type="text" name="nm_member" class="form-control"  value="{{$data->nm_member}}" id="inputNamaLengkap">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputKelas">Kelas</label>
                    <input type="text" name="kelas" class="form-control"  value="{{$data->kelas}}" id="inputKelas">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputJurusan">Jurusan</label>
                    <select id="inputJurusan" name="jurusan" class="form-control" value="">
                      <option selected>{{$data->jurusan}}</option>
                      <option>IPA</option>
                      <option>IPS</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputTanggalLahir">Tanggal Lahir</label>
                      <input type="date" name="tanggal_lahir" class="form-control" value="{{$data->tanggal_lahir}}" id="inputTanggalLahir">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputGender">Jenis Kelamin</label>
                        <select id="inputGender" name="gender" class="form-control" value="">
                          <option selected>{{$data->gender}}</option>
                          <option>Laki-Laki</option>
                          <option>Perempuan</option>
                        </select>
                    </div>
                  </div>
                <div class="form-group">
                    <label for="inputNohp">No Telepon</label>
                    <input type="text" name="nohp" class="form-control" value="{{$data->nohp}}" id="inputNohp" >
                  </div>
                  <div class="form-group">
                    <label for="inputAlamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="{{$data->alamat}}" id="inputAlamat" >
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Masukan Foto Anda</label>
                    <input type="file" name="photo" class="form-control-file" value="{{$data->namephoto}}" id="exampleFormControlFile1">
              </div>
                <button type="submit" class="btn btn-primary">Update</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
@endsection
