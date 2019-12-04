@extends('layout.master')

@section('content-header')
Dashboard
{{-- <small>{{Auth::user()->nama}}</small> --}}
@endsection

@section('content')
<h3>Riwayat Akun</h3>
<div class="row">
  <div class="col-lg-6 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-purple">
      <div class="inner">
        <h3>Riwayat Akun Postingan</h3>
      </div>
      <div class="icon">
        <i class="fa fa-sticky-note-o"></i>
      </div>
      <a href="/riwayat.postingan.penemuan" class="small-box-footer">Riwayat Akun Postingan Penemuan  <i class="fa fa-arrow-circle-right"></i></a>
      <a href="/riwayat.postingan.kehilangan" class="small-box-footer">Riwayat Akun Postingan Kehilangan  <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-6 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-orange">
      <div class="inner">
        <h3>Riwayat Akun Klaim</h3>
      </div>
      <div class="icon">
        <i class="fa fa-balance-scale"></i>
      </div>
      <a href="/riwayat.klaim.penemuan" class="small-box-footer">Riwayat Akun Klaim Penemuan  <i class="fa fa-arrow-circle-right"></i></a>
      <a href="/riwayat.klaim.kehilangan" class="small-box-footer">Riwayat Akun Klaim Kehilangan  <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>
<h3>Daftar Barang</h3>
<div class="row">
  <div class="col-lg-6 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3>Daftar Temuan</h3>
      </div>
      <div class="icon">
        <i class="fa fa-mobile-phone"></i>
      </div>
      <a href="/barang.temuan" class="small-box-footer">Daftar Barang Temuan  <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-6 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3>Daftar Hilang</h3>
      </div>
      <div class="icon">
        <i class="fa fa-briefcase"></i>
      </div>
      <a href="/barang.hilang" class="small-box-footer">Daftar Barang Hilang  <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>
<h3>Laporan Klaim</h3>
<div class="row">
  <div class="col-lg-6 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-maroon">
      <div class="inner">
        <h3>Klaim Penemuan</h3>
      </div>
      <div class="icon">
        <i class="fa fa-flag-o"></i>
      </div>
      <a href="/laporan.klaim.penemuan" class="small-box-footer">Laporan Klaim Penemuan  <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-6 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-olive">
      <div class="inner">
        <h3>Klaim Kehilangan</h3>
      </div>
      <div class="icon">
        <i class="fa fa-flag"></i>
      </div>
      <a href="/laporan.klaim.kehilangan" class="small-box-footer">Laporan Klaim Kehilangan  <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>
@endsection