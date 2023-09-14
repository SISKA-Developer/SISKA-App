@extends('temp.v_temp')
@section('title', (''))
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
    <li>Evaluasi Pembelajaran</li>
</ul>

{{-- <div class="card" style="background-color: white;">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="kalkulus-tab" data-bs-toggle="tab" data-bs-target="#kalkulus-tab-pane" type="button" role="tab" aria-controls="kalkulus-tab-pane" aria-selected="true">Kalkulus</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="fisika-tab" data-bs-toggle="tab" data-bs-target="#fisika-tab-pane" type="button" role="tab" aria-controls="fisika-tab-pane" aria-selected="false">Fisika 1</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="algoritma-tab" data-bs-toggle="tab" data-bs-target="#algoritma-tab-pane" type="button" role="tab" aria-controls="algoritma-tab-pane" aria-selected="false">Algoritma</button>
  </li>
</ul> --}}

{{-- <div class="tab-content" id="myTabContent"> --}}
  <!-- kalkulus content -->
  {{-- <div class="tab-pane fade show active" id="kalkulus-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0"> --}}


<div class="card" style="background-color: white;">
    <form action="{{ route('evaluasi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input id="nama_tabel" type="text" name="nama_tabel" value="pembelajaran" hidden>
    <label for="mk_id" class="m-1 p-1">Nama Matkul yang akan dinilai</label>
    <select class="form-select" aria-label="mk_id" name="mk_id">
        <option selected>--Pilih Matakuliah--</option>
        @foreach ($datas as $item)
        <option value="{{$item['kd_mk']}}">{{$item['kd_mk']}} - {{$item['nm_mk']}} - {{$item['nm_jurusan']}}</option>
        @endforeach
      </select>
  <table class="table" id="kegiatan_pembelajaran">
    <thead>
    <th scope="col"><h5 style="margin:5px">Kegiatan Awal Pembelajaran</h5></th>
      <th scope="col"><label class="form-check-label m-1 p-1" for="inlineRadio5">5</label></th>
      <th scope="col"><label class="form-check-label m-1 p-1" for="inlineRadio4">4</label></th>
      <th scope="col"><label class="form-check-label m-1 p-1" for="inlineRadio3">3</label></th>
      <th scope="col"><label class="form-check-label m-1 p-1" for="inlineRadio2">2</label></th>
      <th scope="col"><label class="form-check-label m-1 p-1" for="inlineRadio1">1</label></th>
    </thead>
    <tbody>
      <tr>
      <td>
        <p class="m-1 p-1">Dosen menjelaskan silabus awal perkuliahan</p>
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
          <p class="m-1 p-1">Dosen menyampaikan informasi tentang tujuan pembelajaran yang akan dicapai</p>
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
          <p class="m-1 p-1">Dosen menginformasikan kompetensi yang harus dicapai mahasiswa</p>
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
          <p class="m-1 p-1">Dosen menyampaikan sumber referensi yang digunakan dalam perkuliahan</p>
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
    </tbody>
  </table>
  <table class="table" id="pelaksanaan_pembelajaran">
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
        <p class="m-1 p-1">Dosen memasuki kelas dengan mengucapkan salam</p>
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
          <p class="m-1 p-1">Dosen memberikan motivasi belajar kepada mahasiswa</p>
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
          <p class="m-1 p-1">Dosen membangkitkan minat belajar mahasiswa untuk mengikuti perkuliahan</p>
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
          <p class="m-1 p-1">Dosen mengupayakan terjadinya interaksi belajar mahasiswa secara intensif</p>
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
          <p class="m-1 p-1">Dosen memeberikan jawaban atas pertanyaan pertanyaan mahasiswa</p>
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