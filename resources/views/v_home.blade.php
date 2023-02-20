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

<div class="container">
    <div class="row justify-content-center">
    <ul class="breadcrumb">
        <li><a href="#">SISKA</a></li>
        <li><a href="#">Kurikulum</a></li>
        <li>Mata Kuliah</li>
    </ul>
            <div class="col-md-12">
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