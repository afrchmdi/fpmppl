@extends('layout.master')

@section('content-header')
Dashboard
<small><?="Alexander Lalala"?></small>
@endsection

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <div class="col-xs-6"><h3>Daftar Barang - <b>Temuan</b></h3></div>
        <div class="col-xs-3"></div>
        <div class="col-xs-3"><a href="#"><button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#modal-default3">Post Barang Temuan</button></a></div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nama Barang</th>
              <th>Nama Penemu</th>
              <th>Lokasi</th>
              <th>Waktu</th>
              <th>Kategori</th>
              <th>Validasi</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user as $user)
            <tr>
                <td>{{$user->nama_barang}}</td>
                <td>{{$user->nama_penemu}}</td>
                <td>{{$user->lokasi}}</td>
                <td>{{$user->waktu}}</td>
                <td>{{$user->kategori}}</td>
                <td> @if($user->validasi == 0) Belum divalidasi @elseif($user->validasi == 1) Diterima @elseif($user->validasi == 2) Ditolak @endif</td>
                <td class="row">
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Lihat</button></a>
                <a class="col-sm-6" href="#"><button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Klaim</button></a>
                </td>
            </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Nama Barang</th>
                <th>Lokasi</th>
                <th>Waktu</th>
                <th>Kategori</th>
                <th>Validasi</th>
                <th>Aksi</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
@endsection

@section('morejs')
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>

{{-- Date picker --}}
<script>
  $(function () {
    $('#datepicker2').datepicker({
      autoclose: true
    })
  })
</script>

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informasi Barang Temuan</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-4"><p>Nama Barang</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7">Contoh Barang 1</div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>Lokasi Ditemukan</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7">Contoh Lokasi 1</div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>Deskripsi Barang</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7">Contoh Deskripsi Barang Deskripsi Barang Deskripsi Barang Deskripsi Barang  Barang Deskripsi Barang Deskripsi Barang Deskripsi Barang</div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>Waktu Ditemukan</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7">Contoh Waktu</div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>Kategori</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7">Contoh Kategori 1</div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>Validasi Barang</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7">Contoh Validasi 1</div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>Foto Barang</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-4">
            {{-- gambar landscape --}}
            <a href="https://images.unsplash.com/photo-1495881674446-33314d7fb917?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" target="_blank">
              <button type="button" class="btn btn-block btn-info col">Buka di Jendela Baru</button>
            </a>
            {{-- gambar potrait --}}
            {{-- <a href="https://images.unsplash.com/photo-1572119752777-3a4cf2d7a351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80" target="_blank">
              <button type="button" class="btn btn-block btn-info col">Buka di Jendela Baru</button>
            </a> --}}
          </div>
        </div>
        <br>
        <div class="row justify-content-center">
          {{-- gambar landscape --}}
          <div class="col-xs-12"><img src="https://images.unsplash.com/photo-1495881674446-33314d7fb917?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" style="width:inherit; height:inherit" alt=""></div>
          {{-- gambar potrait --}}
          {{-- <div class="col-xs-12"><img src="https://images.unsplash.com/photo-1572119752777-3a4cf2d7a351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80" style="width:inherit; height:inherit" alt=""></div> --}}
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal-default2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Klaim Kehilangan Barang Temuan</h4>
      </div>
      <div class="modal-body">
        <form role="form" action="">
            <div class="row">
                <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-deskripsi">Deskripsi Klaim Kehilangan</label></div>
                <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                <div class="col-sm-7">
                    <textarea name="deskripsi" class="form-control validate white-text" id="Form-deskripsi" rows="15">
                    Contoh Klaim Kehilangan Barang Klaim Kehilangan Barang Klaim Kehilangan Barang Klaim Kehilangan Barang  Barang Klaim Kehilangan Barang Klaim Kehilangan Barang Klaim Kehilangan Barang
                    </textarea>
                    {{-- <input type="text-area" id="Form-deskripsi" class="form-control validate white-text" value="Contoh Deskripsi Barang Deskripsi Barang Deskripsi Barang Deskripsi Barang  Barang Deskripsi Barang Deskripsi Barang Deskripsi Barang"> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-foto">Bukti Foto Klaim</label></div>
                <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                <div class="col-sm-4">
                    {{-- gambar landscape --}}
                    <input type="file" id="Form-foto">
                    {{-- gambar potrait --}}
                    {{-- <a href="https://images.unsplash.com/photo-1572119752777-3a4cf2d7a351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80" target="_blank">
                    <button type="button" class="btn btn-block btn-info col">Buka di Jendela Baru</button>
                    </a> --}}
                </div>
            </div>    
            <br>
            <div class="row justify-content-center">
                {{-- gambar landscape --}}
                <div class="col-xs-12"><img id="image" src="/img/foto_klaim.png" style="width:inherit; height:inherit" alt=""></div>
                {{-- gambar potrait --}}
                {{-- <div class="col-xs-12"><img src="https://images.unsplash.com/photo-1572119752777-3a4cf2d7a351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80" style="width:inherit; height:inherit" alt=""></div> --}}
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Batal</button>
        <a href="/barang.temuan">
          <button type="button" class="btn btn-success">Klaim</button>
        </a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal-default3">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Posting Barang Temuan</h4>
            </div>
            <div class="modal-body">
                <form role="form" action="">
                <div class="row">
                    <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-namabarang">Nama Barang</label></div>
                    <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                    <div class="col-sm-7"><input type="text" id="Form-namabarang" class="form-control validate white-text"></div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-lokasi">Lokasi Ditemukan</label></div>
                    <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                    <div class="col-sm-7"><input type="text" id="Form-lokasi" class="form-control validate white-text"></div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-deskripsi">Deskripsi Barang</label></div>
                    <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                    <div class="col-sm-7">
                    <textarea name="deskripsi" class="form-control validate white-text" id="Form-deskripsi" rows="10"></textarea>
                    {{-- <input type="text-area" id="Form-deskripsi" class="form-control validate white-text" value="Contoh Deskripsi Barang Deskripsi Barang Deskripsi Barang Deskripsi Barang  Barang Deskripsi Barang Deskripsi Barang Deskripsi Barang"> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><label data-error="wrong" data-success="right" for="datepicker">Waktu Ditemukan</label></div>
                    <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                    <div class="col-sm-7">
                    <div class="input-group date">
                        <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepicker2">
                    </div>
                    <!-- /.input group -->
                    {{-- <input type="date" id="Form-waktu" class="form-control validate white-text" value="2019-01-23"> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><p style="font-weight:700">Kategori</p></div>
                    <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                    <div class="col-sm-7">
                    <select class="form-control">
                        <option value="Contoh Kategori 1">Contoh Kategori 1</option>
                        <option value="Contoh Kategori 2">Contoh Kategori 2</option>
                        <option value="Contoh Kategori 3">Contoh Kategori 3</option>
                        <option value="Contoh Kategori 4">Contoh Kategori 4</option>
                    </select>
                    {{-- <input type="radio" id="Form-kategori1" class="form-control validate white-text" value="Contoh Kategori 1" checked>
                    <label data-error="wrong" data-success="right" for="Form-kategori1">Contoh Kategori 1</label>
                    <input type="radio" id="Form-kategori2" class="form-control validate white-text" value="Contoh Kategori 2" checked>
                    <label data-error="wrong" data-success="right" for="Form-kategori2">Contoh Kategori 2</label>
                    <input type="radio" id="Form-kategori3" class="form-control validate white-text" value="Contoh Kategori 3" checked>
                    <label data-error="wrong" data-success="right" for="Form-kategori3">Contoh Kategori 3</label>
                    <input type="radio" id="Form-kategori4" class="form-control validate white-text" value="Contoh Kategori 4" checked>
                    <label data-error="wrong" data-success="right" for="Form-kategori4">Contoh Kategori 4</label> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><p style="font-weight:700">Validasi Barang</p></div>
                    <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                    <div class="col-sm-7">
                    <select class="form-control">
                        <option value="Contoh Validasi 1">Contoh Validasi 1</option>
                        <option value="Contoh Validasi 2">Contoh Validasi 2</option>
                    </select>
                    {{-- <input type="radio" id="Form-validasi1" class="form-control validate white-text" value="Contoh Validasi 1" checked>
                    <label data-error="wrong" data-success="right" for="Form-validasi1">Contoh Validasi 1</label>
                    <input type="radio" id="Form-validasi2" class="form-control validate white-text" value="Contoh Validasi 2" checked>
                    <label data-error="wrong" data-success="right" for="Form-validasi2">Contoh Validasi 2</label> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-foto2">Foto Barang</label></div>
                    <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
                    <div class="col-sm-4">
                    {{-- gambar landscape --}}
                    <input type="file" id="Form-foto2">
                    {{-- gambar potrait --}}
                    {{-- <a href="https://images.unsplash.com/photo-1572119752777-3a4cf2d7a351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80" target="_blank">
                        <button type="button" class="btn btn-block btn-info col">Buka di Jendela Baru</button>
                    </a> --}}
                    </div>
                </div>    
                <br>
                <div class="row justify-content-center">
                    {{-- gambar landscape --}}
                    <div class="col-xs-12"><img id="image2" src="/img/foto_barang.png" style="width:inherit; height:inherit" alt=""></div>
                    {{-- gambar potrait --}}
                    {{-- <div class="col-xs-12"><img src="https://images.unsplash.com/photo-1572119752777-3a4cf2d7a351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80" style="width:inherit; height:inherit" alt=""></div> --}}
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Batal</button>
                <a href="/barang.temuan">
                <button type="button" class="btn btn-success">Posting</button>
                </a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>
document.getElementById("Form-foto").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};

document.getElementById("Form-foto2").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image2").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
</script>
@endsection