<div class="sidebar-wrapper">
    <div class="logo">
      <a href="javascript:void(0)" class="simple-text logo-mini">
      <i class="tim-icons icon-book-bookmark"></i>
      </a>
      <a href="javascript:void(0)" class="simple-text logo-normal">
        SMA Nusa Bangsa
      </a>
    </div>
    <ul class="nav">
      <li>
        <a href="{{ route('home') }}">
          <i class="tim-icons icon-chart-pie-36"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('member.index') }}" class="nav-link">
          <i class="tim-icons icon-single-02"></i>
          <p>Data Member</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('book.index') }}" class="nav-link">
          <i class="tim-icons icon-map-big"></i>
          <p>Data Buku</p>
        </a>
      </li>
      <li>
        <a href="{{ route('transaction.index') }}">
          <i class="tim-icons icon-notes"></i>
          <p>Data Transaksi</p>
        </a>
      </li>
      <li>
        <a href="{{ asset('dashboard') }}/examples/icons.html">
          <i class="tim-icons icon-atom"></i>
          <p>
              Data Master
            </p>
        </a>
      </li>
    </ul>
  </div>
