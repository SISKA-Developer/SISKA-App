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
    <li>Evaluasi Sarana Prasarana</li>
</ul>

<div class="card" style="background-color: white;">

  <table class="table" id="pelaksanaan_pembelajaran_kalkulus">
    <thead>
    <th scope="col"><h5 style="margin:5px">Pelaksanaan Pembelajaran</h5></th>
      <th scope="col"><label class="form-check-label m-1 p-1" for="inlineRadio5">5</label></th>
      <th scope="col"><label class="form-check-label m-1 p-1" for="inlineRadio4">4</label></th>
      <th scope="col"><label class="form-check-label m-1 p-1" for="inlineRadio3">3</label></th>
      <th scope="col"><label class="form-check-label m-1 p-1" for="inlineRadio2">2</label></th>
      <th scope="col"><label class="form-check-label m-1 p-1" for="inlineRadio1">1</label></th>
    </thead>
    <tbody>
      <tr>
      <td>
        <p class="m-1 p-1">Jenis, jumlah, kualitas dan aksebilitas sarana prasarana umum (aula, parkir, toilet, wifi)</p>
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
      {{-- ////2//// --}}
      <tr>
        <td>
          <p class="m-1 p-1">Ketersediaan dan kualitas sarana prasarana layanan akademik (Prodi, BAA, BAU)</p>
        </td>
        <td>
          <div class="form-check form-check-inline m-1 p-1">
          <input class="form-check-input" type="radio" name="p6" id="inlineRadio1" value="5">
          </div>
        </td>
        <td>
          <div class="form-check form-check-inline m-1 p-1">
          <input class="form-check-input" type="radio" name="p6" id="inlineRadio4" value="4">
          </div>
        </td>
        <td>
          <div class="form-check form-check-inline m-1 p-1">
          <input class="form-check-input" type="radio" name="p6" id="inlineRadio3" value="3">
          </div>
        </td>
        <td>
          <div class="form-check form-check-inline m-1 p-1">
          <input class="form-check-input" type="radio" name="p6" id="inlineRadio2" value="2">
          </div>
        </td>
        <td>
          <div class="form-check form-check-inline m-1 p-1">
          <input class="form-check-input" type="radio" name="p6" id="inlineRadio1" value="1">
          </div>
        </td>
        </tr>
        {{-- ////3//// --}}
      <tr>
        <td>
          <p class="m-1 p-1">Jenis, jumlah, kualitas dan aksebilitas sarana prasarana perkuliahan (ruang, meja kursi, proyektor)</p>
        </td>
        <td>
          <div class="form-check form-check-inline m-1 p-1">
          <input class="form-check-input" type="radio" name="p7" id="inlineRadio1" value="5">
          </div>
        </td>
        <td>
          <div class="form-check form-check-inline m-1 p-1">
          <input class="form-check-input" type="radio" name="p7" id="inlineRadio4" value="4">
          </div>
        </td>
        <td>
          <div class="form-check form-check-inline m-1 p-1">
          <input class="form-check-input" type="radio" name="p7" id="inlineRadio3" value="3">
          </div>
        </td>
        <td>
          <div class="form-check form-check-inline m-1 p-1">
          <input class="form-check-input" type="radio" name="p7" id="inlineRadio2" value="2">
          </div>
        </td>
        <td>
          <div class="form-check form-check-inline m-1 p-1">
          <input class="form-check-input" type="radio" name="p7" id="inlineRadio1" value="1">
          </div>
        </td>
        </tr>
        {{-- ////4//// --}}
      <tr>
        <td>
          <p class="m-1 p-1">Jenis, jumlah, kualitas dan aksebilitas sarana prasarana praktikum</p>
        </td>
        <td>
          <div class="form-check form-check-inline m-1 p-1">
          <input class="form-check-input" type="radio" name="p8" id="inlineRadio1" value="5">
          </div>
        </td>
        <td>
          <div class="form-check form-check-inline m-1 p-1">
          <input class="form-check-input" type="radio" name="p8" id="inlineRadio4" value="4">
          </div>
        </td>
        <td>
          <div class="form-check form-check-inline m-1 p-1">
          <input class="form-check-input" type="radio" name="p8" id="inlineRadio3" value="3">
          </div>
        </td>
        <td>
          <div class="form-check form-check-inline m-1 p-1">
          <input class="form-check-input" type="radio" name="p8" id="inlineRadio2" value="2">
          </div>
        </td>
        <td>
          <div class="form-check form-check-inline m-1 p-1">
          <input class="form-check-input" type="radio" name="p8" id="inlineRadio1" value="1">
          </div>
        </td>
        </tr>
        {{-- ////5//// --}}
      <tr>
        <td>
          <p class="m-1 p-1">Jenis, jumlah, kualitas dan aksebilitas sarana prasarana perpustakaan</p>
        </td>
        <td>
          <div class="form-check form-check-inline m-1 p-1">
          <input class="form-check-input" type="radio" name="p9" id="inlineRadio1" value="5">
          </div>
        </td>
        <td>
          <div class="form-check form-check-inline m-1 p-1">
          <input class="form-check-input" type="radio" name="p9" id="inlineRadio4" value="4">
          </div>
        </td>
        <td>
          <div class="form-check form-check-inline m-1 p-1">
          <input class="form-check-input" type="radio" name="p9" id="inlineRadio3" value="3">
          </div>
        </td>
        <td>
          <div class="form-check form-check-inline m-1 p-1">
          <input class="form-check-input" type="radio" name="p9" id="inlineRadio2" value="2">
          </div>
        </td>
        <td>
          <div class="form-check form-check-inline m-1 p-1">
          <input class="form-check-input" type="radio" name="p9" id="inlineRadio1" value="1">
          </div>
        </td>
        </tr>
    </tbody>
  </table>
</div>


@endsection
