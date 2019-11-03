@extends('layout.master')

@section('content-header')
Dashboard
<small><?="Alexander Lalala"?></small>
@endsection

@section('content')
<h3>Riwayat Akun</h3>
<div class="row">
  <div class="col-lg-6 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-purple">
      <div class="inner">
        <h3>2</h3>
        <p>Total postingan kehilangan dan penemuan telah Anda sebarkan</p>
      </div>
      <div class="icon">
        <i class="fa fa-sticky-note-o"></i>
      </div>
      <a href="/riwayat.postingan" class="small-box-footer">Selengkapnya di Riwayat Akun Postingan  <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-6 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-orange">
      <div class="inner">
        <h3>3</h3>
        <p>Total pengajuan klaim kehilangan dan penemuan</p>
      </div>
      <div class="icon">
        <i class="fa fa-balance-scale"></i>
      </div>
      <a href="/riwayat.klaim" class="small-box-footer">Selengkapnya di Riwayat Akun Klaim  <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>
<h3>Daftar Barang</h3>
<div class="row">
  <div class="col-lg-6 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3>10</h3>
        <p>Total barang yang Anda temukan</p>
      </div>
      <div class="icon">
        <i class="fa fa-mobile-phone"></i>
      </div>
      <a href="#" class="small-box-footer">Selengkapnya di Daftar Barang Temuan  <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-6 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3>5</h3>
        <p>Total barang Anda telah hilang</p>
      </div>
      <div class="icon">
        <i class="fa fa-briefcase"></i>
      </div>
      <a href="#" class="small-box-footer">Selengkapnya di Daftar Barang Hilang  <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>
<h3>Laporan Klaim</h3>
<div class="row">
  <div class="col-lg-6 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-maroon">
      <div class="inner">
        <h3>1</h3>
        <p>Orang klaim menemukan barang hilang Anda saat ini</p>
      </div>
      <div class="icon">
        <i class="fa fa-flag-o"></i>
      </div>
      <a href="#" class="small-box-footer">Selengkapnya di Laporan Klaim Penemuan  <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-6 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-olive">
      <div class="inner">
        <h3>0</h3>
        <p>Orang klaim memiliki barang temuan Anda saat ini</p>
      </div>
      <div class="icon">
        <i class="fa fa-flag"></i>
      </div>
      <a href="#" class="small-box-footer">Selengkapnya di Laporan Klaim Kehilangan  <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>
@endsection