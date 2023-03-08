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

<div class="card" style="background-color: white;">
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
</ul>

<h5 style="margin:5px">Kegiatan Awal Pembelajaran</h5>

<div class="tab-content" id="myTabContent">
  <!-- kalkulus content -->
  <div class="tab-pane fade show active" id="kalkulus-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
    <div>
      Dosen menjelaskan silabus awal perkuliahan
    </div>
    <div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
        <label class="form-check-label" for="inlineRadio1">1</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
        <label class="form-check-label" for="inlineRadio2">2</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
        <label class="form-check-label" for="inlineRadio3">3</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
        <label class="form-check-label" for="inlineRadio3">4</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
        <label class="form-check-label" for="inlineRadio3">5</label>
      </div>
    </div>

  </div>

  <!-- fisika content -->
  <div class="tab-pane fade" id="fisika-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
  ...
  </div>

  <!-- algoritma content -->
  <div class="tab-pane fade" id="algoritma-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
  ...
  </div>
</div>
</div>

@endsection
