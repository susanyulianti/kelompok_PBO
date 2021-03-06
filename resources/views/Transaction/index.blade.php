@extends('layouts.template')
@section('Title', "Data Transaksi")
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card  card-plain">
          <div class="card-header">
            <h3 class="card-title"> DATA TRANSAKSI</h3>
            <a href="{{ route('transaction.create') }}" class="btn btn-primary">Tambah Data</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table tablesorter " id="">
                <thead class=" text-primary">
                  <tr>
                    <th>No</th>
                    <th class="text-center">Kode Transaksi</th>
                    <th class="text-center">Nama Member</th>
                    <th class="text-center">Buku</th>
                    <th class="text-center">Tanggal Pinjam</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td class="text-center">{{$data->kd_transaksi}}</td>
                        <td class="text-center">{{$data->member->nm_member}}</td>
                        <td class="text-center">{{$data->book->judul_buku}}</td>
                        <td class="text-center">{{$data->created_at}}</td>
                        <td class="td-actions text-right">
                            <form action="{{ route('bookreturn.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="temp" class="form-control" value="{{$data->id}}" id="inputKodeTransaksi">
                                <input type="hidden" name="member_id" class="form-control" value="{{$data->member_id}}" id="inputKodeTransaksi">
                                <input type="hidden" name="book_id" class="form-control" value="{{$data->book_id}}" id="inputKodeTransaksi">
                                <input type="hidden" name="tgl_peminjaman" value="{{$data->created_at}}" class="form-control" id="inputKodeTransaksi">
                                <input type="hidden" name="kd_transaksi" value="{{$data->kd_transaksi}}" class="form-control" id="inputKodeTransaksi">
                                <button type="submit" class="btn btn-danger">Pengembalian</button>
                            </form>
                          </td>
                    </tr>
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
