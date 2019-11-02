@extends('layout.master')

@section('content')

<div class="row">
  <div class="col-md-5 col-sm-5 col-xs-12 gutter">
    <div class="sales">
        <h2>Barang Temuan</h2>
        <div class="btn-group">
          <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span>Kategori Barang:</span>
          </button>
          <div class="dropdown-menu">
            <a href="#">Dompet</a>
            <a href="#">HP</a>
            <a href="#">Kunci</a>
            <a href="#">Surat</a>
            <a href="#">Laptop</a>
            <a href="#">Lain-lain</a>
          </div>
        </div>
    </div>
  </div>
</div>

@endsection