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
    <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>150</h3>
  
                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
</div>

@endsection