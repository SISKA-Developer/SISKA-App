@extends('temp.v_temp')
@section('title', (''))
@section('isicontent')
<link rel="stylesheet" href="https://kit.fontawesome.com/d4d93077ce.css" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/d4d93077ce.js" crossorigin="anonymous"></script>
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

<div class="container">
    <div class="row justify-content-center">
    <ul class="breadcrumb">
        <li><a href="#">SISKA</a></li>
        <li><a href="#">Kurikulum</a></li>
        <li>Mata Kuliah</li>
    </ul>
            <div class="col-md-12">
              <a href="{{ URL::route('MatakuliahIndex') }}" class="btn btn-default"> Kurikulum </a>
              <a href="{{ URL::route('myprofile') }}" class="btn btn-default"> Mahasiswa </a>
              <a href="{{ URL::route('evaluasipembelajaranIndex') }}" class="btn btn-default"> Evaluasi </a>
                    <div class="card">
                        <div class="card-header">Semester 1</div>
                        <div class="card-body">
                            <table id="tbl_list" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Kurikulum</th>
                                    <th>Kode Mata Kuliah</th>
                                    <th>Nama Mata Kuliah</th>
                                    <th>SKS</th>
                                    <th>Jenis Mata Kuliah</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                            <thead>
                              <tr>
                                <td>1</td>
                                <td>2013</td>
                                <td>IF1101</td>
                                <td>Fisika 1</td>
                                <td>2</td>
                                <td>Teori</td>
                                <td>
                                  <i class="fa-solid fa-eye"></i>
                                  <i class="fa-solid fa-pencil"></i>
                                </td>
                              </tr>
                            </thead>

                            <thead>
                              <tr>
                                <td>2</td>
                                <td>2013</td>
                                <td>IF1102</td>
                                <td>Pengantar Teknik Informatika</td>
                                <td>2</td>
                                <td>Teori</td>
                                <td>
                                  <i class="fa-solid fa-eye"></i>
                                  <i class="fa-solid fa-pencil"></i>
                                </td>
                              </tr>
                            </thead>

                            <thead>
                              <tr>
                                <td>3</td>
                                <td>2013</td>
                                <td>KD1101</td>
                                <td>Algoritma</td>
                                <td>3</td>
                                <td>Teori</td>
                                <td>
                                  <i class="fa-solid fa-eye"></i>
                                  <i class="fa-solid fa-pencil"></i>
                                </td>
                              </tr>
                            </thead>

                            <thead>
                              <tr>
                                <td>4</td>
                                <td>2013</td>
                                <td>KD1102</td>
                                <td>Kalkulus</td>
                                <td>3</td>
                                <td>Teori</td>
                                <td>
                                  <i class="fa-solid fa-eye"></i>
                                  <i class="fa-solid fa-pencil"></i>
                                </td>
                              </tr>
                            </thead>

                            <thead>
                              <tr>
                                <td>5</td>
                                <td>2013</td>
                                <td>KD1103</td>
                                <td>Paket Aplikasi</td>
                                <td>2</td>
                                <td>Teori dan Praktek</td>
                                <td>
                                  <i class="fa-solid fa-eye"></i>
                                  <i class="fa-solid fa-pencil"></i>
                                </td>
                              </tr>
                            </thead>

                            <thead>
                              <tr>
                                <td>6</td>
                                <td>2013</td>
                                <td>KD1104</td>
                                <td>Pemrograman 1</td>
                                <td>3</td>
                                <td>Teori dan Praktek</td>
                                <td>
                                  <i class="fa-solid fa-eye"></i>
                                  <i class="fa-solid fa-pencil"></i>
                                </td>
                              </tr>
                            </thead>

                            <thead>
                              <tr>
                                <td>7</td>
                                <td>2013</td>
                                <td>KU1101</td>
                                <td>Bahasa Inggris 1</td>
                                <td>2</td>
                                <td>Teori</td>
                                <td>
                                  <i class="fa-solid fa-eye"></i>
                                  <i class="fa-solid fa-pencil"></i>
                                </td>
                              </tr>
                            </thead>

                            <thead>
                              <tr>
                                <td>8</td>
                                <td>2013</td>
                                <td>KU1102</td>
                                <td>Manajemen dan Perilaku Organisasi</td>
                                <td>2</td>
                                <td>Teori</td>
                                <td>
                                  <i class="fa-solid fa-eye"></i>
                                  <i class="fa-solid fa-pencil"></i>
                                </td>
                              </tr>
                            </thead>

                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
    @endsection
{{-- <script>
    $(function () {
      $("#table1").DataTables({
        "responsive": true,
        "autowidth": true,
        "paging": true,
      });
    });
    $('#datepicker').datepicker({
            weekStart: 1,
            daysOfWeekHighlighted: "6,0",
            autoclose: true,
            todayHighlight: true,
        });
        $('#datepicker').datepicker("setDate", new Date());
    
    </script> --}}
    @push('scripts')
    <script type="text/javascript">
    $(document).ready(function () {
       $('#table1').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url()->current() }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'nama_lengkap' },
                { data: 'email', name: 'email' },
    
            ]
        });
     });
    </script>
    @endpush