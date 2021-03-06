@extends('layouts.template')
@section('Title', "Data Transaksi")
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card  card-plain">
          <div class="card-header">
            <h3 class="card-title"> DATA PENGEMBALIAN BUKU</h3>
            <a href="#" onclick="javascript:window.print()"  class="btn btn-primary"><i class="fas fa-print"></i></a>
            {{-- <a href="{{ route('bookreturn.create') }}" class="btn btn-primary">Tambah Data</a> --}}
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table tablesorter " id="">
                <thead class=" text-primary">
                  <tr>~
                    <th>No</th>
                    <th class="text-center">Kode Transaksi</th>
                    <th class="text-center">Nama Member</th>
                    <th class="text-center">Buku</th>
                    <th class="text-center">Tanggal Pinjam</th>
                    <th class="text-center">Tanggal Dikembalikan</th>
                    <th class="text-center">Terlambat (Hari)</th>
                    <th class="text-center">Denda</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($bookreturns as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td class="text-center">{{$data->kd_transaksi}}</td>
                        <td class="text-center">{{$data->member->nm_member}}</td>
                        <td class="text-center">{{$data->book->judul_buku}}</td>
                        <td class="text-center">{{$data->tgl_peminjaman}}</td>
                        <td class="text-center">{{$data->created_at}}</td>
                        {{-- @php
                            $interval = $data->tgl_peminjaman->diff($data->created_at);
                            $days = $interval->format('%a');
                        @endphp --}}
                        <td class="text-center">{{$data->tgl_peminjaman->diffInDays($data->created_at) . " " . "Hari"}}</td>
                        <td class="text-center">@currency($data->tgl_peminjaman->diffInDays($data->created_at) * 3000)</td>
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
