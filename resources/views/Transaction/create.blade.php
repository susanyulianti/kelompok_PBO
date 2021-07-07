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
                    <label for="inputJurusan">Member</label>
                    <select id="inputJurusan" name="member_id" class="form-control">
                        <option selected>Choose...</option>
                        @foreach ($members as $data)
                        <option value="{{$data->id}}">{{$data->nm_member}}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputJurusan">Book</label>
                    <select id="inputJurusan" name="book_id" class="form-control">
                        <option selected>Choose...</option>
                        @foreach ($books as $data)
                        <option value="{{$data->id}}">{{$data->judul_buku}}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
