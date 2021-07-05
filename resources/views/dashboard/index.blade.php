@extends('layouts.template')
@section('Title', "Dashboard")
@section('content')
<div class="content">
    <div class="row">
      <div class="col-12">
        <div class="card card-chart">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="img-fluid" src="{{ asset('template/assets/images/1.png') }}" alt="First slide">

    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="{{ asset('template/assets/images/2.png') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="{{ asset('template/assets/images/3.png') }}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="card card-chart">
          <div class="card-header">
            <h3 class="card-title"><i class="tim-icons icon-book-bookmark text-primary"></i> Urutan Buku yang Sering di Pinjam :</h3>
            <h4 class="card-title"><i class="tim-icons icon-book-55 text-primary"></i> 1. Laskar Pelangi</h4>
            <h4 class="card-title"><i class="tim-icons icon-book-55 text-primary"></i> 2. Coding dan Bahasa Pemrograman</h4>
            <h4 class="card-title"><i class="tim-icons icon-book-55 text-primary"></i> 3. Dear Nathan</h4>
            <h4 class="card-title"><i class="tim-icons icon-book-55 text-primary"></i> 4. Detective Conan</h4>
            <h4 class="card-title"><i class="tim-icons icon-book-55 text-primary"></i> 5. Dilan 1991</h4>
          </div>
          <div class="card-body">
            <div class="chart-area">
              
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card card-chart">
          <div class="card-header">
            <h3 class="card-title"><i class="tim-icons icon-single-02 text-info"></i> Nama Member yang paling sering Meminjam :</h3>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="CountryChart"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card card-chart">
          <div class="card-header">
            <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> Tentang Kami :</h3>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="chartLineGreen"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


