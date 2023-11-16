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
    <li>Evaluasi (admin)</li>
</ul>

<div class="card" style="background-color: white;" class="m-1 p-1">
    <div class="card-header">
        <h3>EVALUASI PEMBELAJARAN</h3>
        <div class="card-body">
            <table id="evaluasiadmin" class="table tabel table-striped table-bordered dt-responsive yajra-datatable" style="background-color: white">
                <thead class="tabel">
                    <tr>
                        <th>No</th>
                        <th>Kode Matakuliah - Nama Matakuliah</th>
                        <th>Score</th>
                        {{-- <th>Catatan</th> --}}
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
  </div>

  <div class="card" style="background-color: white;" class="m-1 p-1">
    <div class="card-header">
        <h3>EVALUASI SARANA DAN PRASARANA</h3>
        <div class="card-body">
            <p>* catatan :</p>
            <p>Pertanyaan 1 : Jenis, jumlah, kualitas dan aksebilitas sarana prasarana umum (aula, parkir, toilet, wifi)</p>
            <p>Pertanyaan 2 : Ketersediaan dan kualitas sarana prasarana layanan akademik (Prodi, BAA, BAU)</p>
            <p>Pertanyaan 3 : Jenis, jumlah, kualitas dan aksebilitas sarana prasarana perkuliahan (ruang, meja kursi, proyektor)</p>
            <p>Pertanyaan 4 : Jenis, jumlah, kualitas dan aksebilitas sarana prasarana praktikum</p>
            <p>Pertanyaan 5 : Jenis, jumlah, kualitas dan aksebilitas sarana prasarana perpustakaan</p>

            <table id="evaluasisaranaadmin" class="table tabel table-striped table-bordered dt-responsive yajra-datatable" style="background-color: white">
                <thead class="tabel">
                    <tr>
                        <th>No</th>
                        <th>Pertanyaan 1</th>
                        <th>Pertanyaan 2</th>
                        <th>Pertanyaan 3</th>
                        <th>Pertanyaan 4</th>
                        <th>Pertanyaan 5</th>
                        <th>Score</th>
                        {{-- <th>Catatan</th> --}}
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
  </div>
  <div class="card" style="background-color: white;" class="m-1 p-1">
    <div class="card-header">
        <h3>EVALUASI PENGELOLAAN KEUANGAN</h3>
        <div class="card-body">
            <p>* catatan :</p>
            <p>Pertanyaan 1 : Ketersediaan dan kualitas sarana prasarana layanan keuangan berupa loket, sistem layanan keuangan</p>
            <p>Pertanyaan 2 : Kenyamanan dalam layanan urusan atau permasalahan terkait dengan keuangan</p>
            <p>Pertanyaan 3 : Daya Tanggap dalam kemauan, kesiapan, kesigapan membantu permasalahan sivitas akademika dalam layanan keuangan</p>
            <p>Pertanyaan 4 : Kepedulian dan ketersediaan untuk memberi perhatian tulus kepada sivitas akademika dalam layanan keuangan</p>
            <p>Pertanyaan 5 : Jenis, jumlah, kualitas dan aksebilitas sarana prasarana keuangan</p>

            <table id="evaluasikeuanganadmin" class="table tabel table-striped table-bordered dt-responsive yajra-datatable" style="background-color: white">
                <thead class="tabel">
                    <tr>
                        <th>No</th>
                        <th>Pertanyaan 1</th>
                        <th>Pertanyaan 2</th>
                        <th>Pertanyaan 3</th>
                        <th>Pertanyaan 4</th>
                        <th>Pertanyaan 5</th>
                        <th>Score</th>
                        {{-- <th>Catatan</th> --}}
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
  </div>
    @push('matakuliah')
    <script>
         $(document).ready(function(){
            tablepembelajaran = $('#evaluasiadmin').DataTable({
                processing: true,
                autoWidth: true,
                serverSide: true,
                responsive: true,
                searching: true,
                sort: true,
                language: {
                    processing: '<span class="spinner-border text-primary"></span><span style="margin-left:10px;">Loading...</span>'
                    },
                ajax: "{{ route('evaluasiadminapi') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'mk_id',
                    render: function(data, type, row) {
                        return data;
                    }},
                    // {data: 'total_nilai'},
                    {data: null,
                    render: ((data, type, row)=>{
                    var masuk = data.total_nilai;
                    return masuk / 9;
                }),},
                    // {data: 'catatan'},
                ]
            });
            tablepembelajaran.draw()
                });
                tablesarana = $('#evaluasisaranaadmin').DataTable({
                processing: true,
                autoWidth: true,
                serverSide: true,
                responsive: true,
                searching: true,
                sort: true,
                language: {
                    processing: '<span class="spinner-border text-primary"></span><span style="margin-left:10px;">Loading...</span>'
                    },
                ajax: "{{ route('evaluasisaranaadmin') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'p1'},
                    {data: 'p2'},
                    {data: 'p3'},
                    {data: 'p4'},
                    {data: 'p5'},
                    {data: 'total_nilai'},
                ]
            });
            tablesarana.draw()

            tablekeuangan = $('#evaluasikeuanganadmin').DataTable({
                processing: true,
                autoWidth: true,
                serverSide: true,
                responsive: true,
                searching: true,
                sort: true,
                language: {
                    processing: '<span class="spinner-border text-primary"></span><span style="margin-left:10px;">Loading...</span>'
                    },
                ajax: "{{ route('evaluasikeuanganadmin') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'p1'},
                    {data: 'p2'},
                    {data: 'p3'},
                    {data: 'p4'},
                    {data: 'p5'},
                    {data: 'total_nilai'},
                ]
            });
            tablekeuangan.draw()

    </script>
    @endpush
@endsection
