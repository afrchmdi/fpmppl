@extends('layout.master')

@section('content-header')
Dashboard
<small>{{Auth::user()->username}}</small>
@endsection

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3>Riwayat Akun - <b>Klaim Kehilangan</b></h3>
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
            <th>Info</th>
            <th>Klaim</th>
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
                <td class="row">
                  <div class="col-xs-12">
                      <div class="col-xs-6">
                        <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#modal-default">Barang</button>
                      </div>
                  </div>
                </td>
                <td class="row">
                  <div class="col-xs-12">
                    <div class="col-xs-4">
                      <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default4">Lihat</button>
                    </div>
                    <div class="col-xs-4">
                      <button type="button" class="btn btn-block btn-info"  data-toggle="modal" data-target="#modal-default2">Edit</button>
                    </div>
                    <div class="col-xs-4">
                      <button type="button" class="btn btn-block btn-warning"  data-toggle="modal" data-target="#modal-default3">Batal</button>
                    </div>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
          <tr>
            <th>Nama Barang</th>
            <th>Nama Penemu</th>
            <th>Lokasi</th>
            <th>Waktu</th>
            <th>Kategori</th>
            <th>Info</th>
            <th>Klaim</th>
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
    $('#datepicker').datepicker({
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
        <p class="help-block" style="margin:0">Update terakhir 11/11/2019 23:11</p>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-4"><p>Nama Barang</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7">Contoh Barang 1</div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>Nama Penemu</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7">Contoh Penemu 1</div>
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
        <h4 class="modal-title">Edit Klaim Kehilangan Barang Temuan</h4>
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
            <div class="col-xs-12"><img id="image" src="https://images.unsplash.com/photo-1556742502-ec7c0e9f34b1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1534&q=80" style="width:inherit; height:inherit" alt=""></div>
            {{-- gambar potrait --}}
            {{-- <div class="col-xs-12"><img src="https://images.unsplash.com/photo-1572119752777-3a4cf2d7a351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80" style="width:inherit; height:inherit" alt=""></div> --}}
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Batal</button>
        <a href="/riwayat.klaim.kehilangan">
          <button type="button" class="btn btn-success">Simpan</button>
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
        <h4 class="modal-title">Pembatalan Klaim Kehilangan Barang Temuan</h4>
      </div>
      <div class="modal-body">
        <p>Apakah kamu yakin membatalkan klaim kehilangan barang temuan ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Tidak</button>
        <a href="/riwayat.klaim.kehilangan">
          <button type="button" class="btn btn-success">Yakin</button>
        </a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal-default4">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informasi Klaim Kehilangan Barang Temuan</h4>
        <p class="help-block" style="margin:0">Update terakhir 12/12/2019 00:59</p>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-deskripsi">Deskripsi Klaim Penemuan</label></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7">Contoh Klaim Kehilangan Barang Temuan Kehilangan Barang Temuan Kehilangan Barang Temuan Kehilangan Barang Temuan  Barang Klaim Kehilangan Barang Temuan Kehilangan Barang Temuan Kehilangan Barang Temuan</div>
        </div>
        <div class="row">
          <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-foto">Bukti Foto Klaim</label></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-4">
            {{-- gambar landscape --}}
            <a href="https://images.unsplash.com/photo-1556742502-ec7c0e9f34b1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1534&q=80" target="_blank">
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
          <div class="col-xs-12"><img id="image" src="https://images.unsplash.com/photo-1556742502-ec7c0e9f34b1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1534&q=80" style="width:inherit; height:inherit" alt=""></div>
          {{-- gambar potrait --}}
          {{-- <div class="col-xs-12"><img src="https://images.unsplash.com/photo-1572119752777-3a4cf2d7a351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80" style="width:inherit; height:inherit" alt=""></div> --}}
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Tutup</button>
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
</script>
@endsection