@extends('layouts.template')
@section('Title', 'Halaman Data Buku')
@section('Title1', "Data Buku")
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card  card-plain">
          <div class="card-header">
            <h4 class="card-title"> Kartu Data Buku </h4>
          </div>
          <div class="card-body">
<div class="container">
    <div class="card kartu">
      <div class="row">
        <div class="col-md-4">
        <div class="foto">
          <img src="{{ asset('images') }}/{{$book->namephoto}}" alt="" width="200" height="300">
        </div>
        </div>
        <div class="col-md-8 kertas-biodata">
          <div class="biodata">
          <table width="100%" border="0">
      <tbody><tr>
          <td valign="top"><br>
            <h1>Data Buku</h1><br>
          <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
            <tbody>
                <tr>
                <td width="25%" valign="top" class="textt">ISBN</td>
                  <td width="2%">:</td>
                  <td style="color: rgb(118, 157, 29); font-weight:bold">{{ $book->isbn}}</td>
                </tr>
                <tr>
                  <td valign="top" class="textt">Judul Buku</td>
                    <td valign="top">:</td>
                    <td>{{$book->judul_buku}}</td>
                </tr>
                <tr>
                  <td valign="top" class="textt">Jenis Buku</td>
                    <td valign="top">:</td>
                    <td>{{$book->jenis_buku}}</td>
                </tr>
                <tr>
                <td class="textt">Jumlah Halaman</td>
                  <td valign="top">:</td>
                  <td>{{$book->jumlah_halaman}}</td>
                </tr>
                <tr>
                <td class="textt">Jumlah Buku</td>
                    <td>:</td>
                    <td>{{$book->jumlah_buku}}</td>
                </tr>
                <tr>
                <td class="textt">Tahun Terbit</td>
                    <td valign="top">:</td>
                    <td>{{$book->tahun_terbit}}</td>
                </tr>
                <tr>
                    <td class="textt">Penerbit</td>
                    <td valign="top">:</td>
                    <td>{{$book->penerbit}}</td>
                </tr>
                <tr>
                    <td class="textt">Pengarang</td>
                    <td valign="top">:</td>
                    <td>{{$book->pengarang}}</td>
                </tr>
          </tbody></table>
          </td>
      </tr>
      </tbody></table>
    </div>
        </div>
      </div>
    </div>
  </div>
    </div>
        </div>
      </div>
    </div>
  </div>
@endsection
