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
        <div class="col-xs-6"><h3>Riwayat Akun - <b>Postingan Kehilangan</b></h3></div>
        <div class="col-xs-3"></div>
        <div class="col-xs-3"><a href="#"><button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#modal-post">Post Barang Hilang</button></a></div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Nama Barang</th>
            <th>Lokasi</th>
            <th>Waktu</th>
            <th>Kategori</th>
            <th>Validasi</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
            @foreach($datas as $key=>$user)
              <tr>
                <td>{{$user->nama_barang}}</td>
                <td>{{$user->lokasi}}</td>
                <td>{{$user->waktu}}</td>
                <td>{{$user->kategori}}</td>
                <td>@if($user->validasi == 1)Diterima @else Ditolak @endif</td>
                <td class="row">
                  <button type="button" class="btn btn-block btn-primary js-show-modal" data-id="{{$user->id}}" data-toggle="modal" data-target="#modal-show">Lihat</button>
                  @if($user->validasi != 1)
                  <button type="button" class="btn btn-block btn-info js-show-edit" data-id="{{$user->id}}" data-toggle="modal" data-target="#modal-edit">Edit</button>
                  @endif
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
  $('#datepicker').datepicker({
  autoclose: true
  })
})
</script>

<div class="modal fade" id="modal-show">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informasi Barang Hilang</h4>
        <p class="help-block" style="margin:0">Update terakhir 11/11/2019 23:11</p>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-4"><p>Nama Barang</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7" id="js-namabarang"><label class="js-namabarang"></label></div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>Lokasi Hilang</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7" id="js-lokasi"><label  class="js-lokasi"></div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>Deskripsi Barang</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7" id="js-deskripsi"><label class="js-deskripsi"></label></div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>Waktu Hilang</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7" id="js-waktu"><label class="js-waktu"></label></div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>Kategori</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7" id="js-kategori"><label class="js-kategori"></label></div>
        </div>
        <div class="row">
          <div class="col-sm-4"><p>Validasi Barang</p></div>
          <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
          <div class="col-sm-7" id="js-validasi"><label class="js-validasi"></label></div>
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

<form method="POST" class="form-horizontal" id="js-modal-edit" action="{{ route('editposthilang')}}">
    {{ csrf_field() }}
<div class="modal fade" id="modal-edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Barang Hilang</h4>
      </div>
      <div class="modal-body">
          <div class="row">
            <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-namabarang">Nama Barang</label></div>
            <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
            <div class="col-sm-7"><input type="text" id="Form-namabarang" class="form-control validate white-text" value=""></div>
          </div>
          <div class="row">
            <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-lokasi">Lokasi Hilang</label></div>
            <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
            <div class="col-sm-7"><input type="text" id="Form-lokasi" class="form-control validate white-text" value=""></div>
          </div>
          <div class="row">
            <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-deskripsi">Deskripsi Barang</label></div>
            <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
            <div class="col-sm-7">
              <textarea name="deskripsi" class="form-control validate white-text" id="Form-deskripsi" rows="10">
                Contoh Deskripsi Barang Deskripsi Barang Deskripsi Barang Deskripsi Barang  Barang Deskripsi Barang Deskripsi Barang Deskripsi Barang
              </textarea>
              {{-- <input type="text-area" id="Form-deskripsi" class="form-control validate white-text" value="Contoh Deskripsi Barang Deskripsi Barang Deskripsi Barang Deskripsi Barang  Barang Deskripsi Barang Deskripsi Barang Deskripsi Barang"> --}}
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4"><label data-error="wrong" data-success="right" for="datepicker">Waktu Hilang</label></div>
            <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
            <div class="col-sm-7">
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" id="datepicker Form-waktu" value="">
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
                <option value="" selected id="Form-kategori"></option>
                <option value="1">Kategori 1</option>
                <option value="2">Kategori 2</option>
                <option value="3">Kategori 3</option>
                <option value="4">Kategori 4</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-foto">Foto Barang</label></div>
            <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
            <div class="col-sm-4">
              {{-- gambar landscape --}}
              <input type="file" id="Form-foto" name="Form-foto">
              {{-- gambar potrait --}}
              {{-- <a href="https://images.unsplash.com/photo-1572119752777-3a4cf2d7a351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80" target="_blank">
                <button type="button" class="btn btn-block btn-info col">Buka di Jendela Baru</button>
              </a> --}}
            </div>
          </div>    
          <br>
          <div class="row justify-content-center">
            {{-- gambar landscape --}}
            <div class="col-xs-12"><img id="image" src="https://images.unsplash.com/photo-1495881674446-33314d7fb917?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" style="width:inherit; height:inherit" alt=""></div>
            {{-- gambar potrait --}}
            {{-- <div class="col-xs-12"><img src="https://images.unsplash.com/photo-1572119752777-3a4cf2d7a351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80" style="width:inherit; height:inherit" alt=""></div> --}}
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-success">Simpan</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<form method="POST" class="form-horizontal" id="js-modal-pass" action="{{ route('posthilang')}}">
  {{ csrf_field() }}
<div class="modal fade" id="modal-post">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Posting Barang Hilang</h4>
        </div>
        <div class="modal-body">
            <div class="row">
              <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-namabarang">Nama Barang</label></div>
              <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
              <div class="col-sm-7"><input type="text" id="Form-namabarang" name="Form-namabarang" class="form-control validate white-text"></div>
            </div>
            <div class="row">
              <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-lokasi">Lokasi Hilang</label></div>
              <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
              <div class="col-sm-7"><input type="text" id="Form-lokasi" name="Form-lokasi" class="form-control validate white-text"></div>
            </div>
            <div class="row">
              <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-deskripsi">Deskripsi Barang</label></div>
              <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
              <div class="col-sm-7">
                <textarea class="form-control validate white-text" id="Form-deskripsi" name="Form-deskripsi" rows="10"></textarea>
                {{-- <input type="text-area" id="Form-deskripsi" class="form-control validate white-text" value="Contoh Deskripsi Barang Deskripsi Barang Deskripsi Barang Deskripsi Barang  Barang Deskripsi Barang Deskripsi Barang Deskripsi Barang"> --}}
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4"><label data-error="wrong" data-success="right" for="datepicker">Waktu Hilang</label></div>
              <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
              <div class="col-sm-7">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="datepicker2 Form-waktu" name="Form-waktu">
                </div>
                <!-- /.input group -->
                {{-- <input type="date" id="Form-waktu" class="form-control validate white-text" value="2019-01-23"> --}}
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4"><p style="font-weight:700">Kategori</p></div>
              <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
              <div class="col-sm-7">
                <select class="form-control" id="Form-kategori" name="Form-kategori">
                  <option value="1">Kategori 1</option>
                  <option value="2">Kategori 2</option>
                  <option value="3">Kategori 3</option>
                  <option value="4">Kategori 4</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4"><label data-error="wrong" data-success="right" for="Form-foto">Foto Barang</label></div>
              <div class="col-sm-1" style="padding-right:0; padding-left:0; width:1%">:</div>
              <div class="col-sm-4">
                {{-- gambar landscape --}}
                <input type="file" id="Form-foto" name="Form-foto">
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
          <button type="submit" class="btn btn-success">Posting</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
</form>

{{-- tampilkan foto terbaru yang diupload --}}
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

document.getElementById("Form-foto").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image2").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};

 $(document).on("click", ".js-show-edit", function () {
    var id = $(this).data('id');
    console.log(id);
    $.ajax({
          url: 'editposthilang',
          method: 'get',
          data: {
            id: id,
            _token: '{{ csrf_token()}}'
          },
          success: function(response){
            if (response.message == 'success') {
              var namabarang = response.namabarang;
              var lokasi = response.lokasi;
              var deskripsi = response.deskripsi;
              var waktu = response.waktu;
              var kategori = response.kategori;
              var validasi = response.validasi;
              var foto = response.foto;

              $("#Form-namabarang").val(namabarang);
              $("#Form-namabarang").text(namabarang);
              $("#Form-lokasi").val(lokasi);
              $("#Form-lokasi").text(lokasi);
              $("#Form-deskripsi").val(deskripsi);
              $("#Form-deskripsi").text(deskripsi);
              $("#Form-waktu").val(waktu);
              $("#Form-waktu").text(waktu);
              if(kategori == 1){
                $("#Form-kategori").val("Kategori 1");
                $("#Form-kategori").text("Kategori 1");
              }
              else if(kategori == 2){
                $("#Form-kategori").val("Kategori 2");
                $("#Form-kategori").text("Kategori 2");
              }
              else if(kategori == 3){
                $("#Form-kategori").val("Kategori 3");
                $("#Form-kategori").text("Kategori 3");
              }
              else if(kategori == 4){
                $("#Form-kategori").val("Kategori 4");
                $("#Form-kategori").text("Kategori 4");
              }

            } else {
              alert('error');
            }
          }
        });


  });

 $(document).on("click", ".js-show-modal", function () {
  var id = $(this).data('id');

  $.ajax({
          url: 'showposthilang',
          method: 'post',
          data: {
            id: id,
            _token: '{{ csrf_token()}}'
          },
          success: function(response){
            if (response.message == 'success') {
              var namabarang = response.namabarang;
              var lokasi = response.lokasi;
              var deskripsi = response.deskripsi;
              var waktu = response.waktu;
              var kategori = response.kategori;
              var validasi = response.validasi;
              var foto = response.foto;
              // console.log(namabarang);
              $(".js-namabarang").text(namabarang);
              $(".js-lokasi").text(lokasi);
              $(".js-deskripsi").text(deskripsi);
              $(".js-waktu").text(waktu);
              if(validasi == 0){
                $(".js-validasi").text("Ditolak");
              }
              else{
                $(".validasi").text("Diterima");
              }
              if(kategori == 1){
                $(".js-kategori").text("Kategori 1");
              }
              else if(kategori == 2){
                $(".js-kategori").text("Kategori 2");
              }
              else if(kategori == 3){
                $(".js-kategori").text("Kategori 3");
              }
              else if(kategori == 4){
                $(".js-kategori").text("Kategori 4");
              }

            } else {
              alert('error');
            }
          }
        });

});

</script>
@endsection