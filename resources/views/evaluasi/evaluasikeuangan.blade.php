@extends('temp.v_temp')
{{-- @section('title', ('Evaluasi Sarana dan Prasarana')) --}}
@section('isicontent')

<style>
ul.breadcrumb {
  padding: 10px 16px;
  list-style: none;
  background-color: transparent;
}
ul.breadcrumb li {
  display: inline;
  font-size: 18px;
}
ul.breadcrumb li+li:before {
  padding: 8px;
  color: black;
  content: "/\00a0";
}
ul.breadcrumb li a {
  color: #0275d8;
  text-decoration: none;
}
ul.breadcrumb li a:hover {
  color: #01447e;
  text-decoration: underline;
}
</style>

<ul class="breadcrumb">
    <li><a href="#">SISKA</a></li>
    <li><a href="#">Evaluasi</a></li>
    <li>Evaluasi Pengelolaan Keuangan</li>
</ul>

<div class="card" style="background-color: white;">
  <form action="{{ route('evaluasi.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input id="nama_tabel" type="text" name="nama_tabel" value="keuangan" hidden>
      <table class="table" id="pelaksanaan_pembelajaran_sarana">
        <thead>
        <th scope="col"><h5 style="margin:5px">Pengelolaan Keuangan</h5></th>
          <th scope="col"><label class="form-check-label m-1 p-1" for="inlineRadio5">5</label></th>
          <th scope="col"><label class="form-check-label m-1 p-1" for="inlineRadio4">4</label></th>
          <th scope="col"><label class="form-check-label m-1 p-1" for="inlineRadio3">3</label></th>
          <th scope="col"><label class="form-check-label m-1 p-1" for="inlineRadio2">2</label></th>
          <th scope="col"><label class="form-check-label m-1 p-1" for="inlineRadio1">1</label></th>
        </thead>
        <tbody>
          <tr>
          <td>
            <p class="m-1 p-1">Ketersediaan dan kualitas sarana prasarana layanan keuangan berupa loket, sistem layanan keuangan</p>
          </td>
          <td>
            <div class="form-check form-check-inline m-1 p-1">
            <input class="form-check-input" type="radio" name="p1" id="inlineRadio1" value="5">
            </div>
          </td>
          <td>
            <div class="form-check form-check-inline m-1 p-1">
            <input class="form-check-input" type="radio" name="p1" id="inlineRadio4" value="4">
            </div>
          </td>
          <td>
            <div class="form-check form-check-inline m-1 p-1">
            <input class="form-check-input" type="radio" name="p1" id="inlineRadio3" value="3">
            </div>
          </td>
          <td>
            <div class="form-check form-check-inline m-1 p-1">
            <input class="form-check-input" type="radio" name="p1" id="inlineRadio2" value="2">
            </div>
          </td>
          <td>
            <div class="form-check form-check-inline m-1 p-1">
            <input class="form-check-input" type="radio" name="p1" id="inlineRadio1" value="1">
            </div>
          </td>
          </tr>
          {{-- ////2//// --}}
          <tr>
            <td>
              <p class="m-1 p-1">Kenyamanan dalam layanan urusan atau permasalahan terkait dengan keuangan</p>
            </td>
            <td>
              <div class="form-check form-check-inline m-1 p-1">
              <input class="form-check-input" type="radio" name="p2" id="inlineRadio1" value="5">
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline m-1 p-1">
              <input class="form-check-input" type="radio" name="p2" id="inlineRadio4" value="4">
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline m-1 p-1">
              <input class="form-check-input" type="radio" name="p2" id="inlineRadio3" value="3">
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline m-1 p-1">
              <input class="form-check-input" type="radio" name="p2" id="inlineRadio2" value="2">
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline m-1 p-1">
              <input class="form-check-input" type="radio" name="p2" id="inlineRadio1" value="1">
              </div>
            </td>
            </tr>
            {{-- ////3//// --}}
          <tr>
            <td>
              <p class="m-1 p-1">Daya Tanggap dalam kemauan, kesiapan, kesigapan membantu permasalahan sivitas akademika dalam layanan keuangan</p>
            </td>
            <td>
              <div class="form-check form-check-inline m-1 p-1">
              <input class="form-check-input" type="radio" name="p3" id="inlineRadio1" value="5">
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline m-1 p-1">
              <input class="form-check-input" type="radio" name="p3" id="inlineRadio4" value="4">
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline m-1 p-1">
              <input class="form-check-input" type="radio" name="p3" id="inlineRadio3" value="3">
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline m-1 p-1">
              <input class="form-check-input" type="radio" name="p3" id="inlineRadio2" value="2">
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline m-1 p-1">
              <input class="form-check-input" type="radio" name="p3" id="inlineRadio1" value="1">
              </div>
            </td>
            </tr>
            {{-- ////4//// --}}
          <tr>
            <td>
              <p class="m-1 p-1">Kepedulian dan ketersediaan untuk memberi perhatian tulus kepada sivitas akademika dalam layanan keuangan</p>
            </td>
            <td>
              <div class="form-check form-check-inline m-1 p-1">
              <input class="form-check-input" type="radio" name="p4" id="inlineRadio1" value="5">
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline m-1 p-1">
              <input class="form-check-input" type="radio" name="p4" id="inlineRadio4" value="4">
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline m-1 p-1">
              <input class="form-check-input" type="radio" name="p4" id="inlineRadio3" value="3">
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline m-1 p-1">
              <input class="form-check-input" type="radio" name="p4" id="inlineRadio2" value="2">
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline m-1 p-1">
              <input class="form-check-input" type="radio" name="p4" id="inlineRadio1" value="1">
              </div>
            </td>
            </tr>
            {{-- ////5//// --}}
          <tr>
            <td>
              <p class="m-1 p-1">Jenis, jumlah, kualitas dan aksebilitas sarana prasarana Keuangan</p>
            </td>
            <td>
              <div class="form-check form-check-inline m-1 p-1">
              <input class="form-check-input" type="radio" name="p5" id="inlineRadio1" value="5">
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline m-1 p-1">
              <input class="form-check-input" type="radio" name="p5" id="inlineRadio4" value="4">
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline m-1 p-1">
              <input class="form-check-input" type="radio" name="p5" id="inlineRadio3" value="3">
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline m-1 p-1">
              <input class="form-check-input" type="radio" name="p5" id="inlineRadio2" value="2">
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline m-1 p-1">
              <input class="form-check-input" type="radio" name="p5" id="inlineRadio1" value="1">
              </div>
            </td>
            </tr>
        </tbody>
      </table>
  </div>
      <div class="card" style="background-color: white;">
        <div class="card-header" style="background-color: white;">Catatan</div>
          <div class="card-body">
            <input class="form-control" id="catatan" type="text" name="catatan" >
          </div>
      </div>
        <div class="d-flex justify-content-center">
          <div class="m-1 p-1">
          <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
          </div>
          <div class="m-1 p-1">
          <button type="reset" class="btn btn-md btn-warning">RESET</button>
          </div>
        </div>
    </form>


@endsection