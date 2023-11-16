@extends('temp.v_temp')
@section('isicontent')

<div class="container">
    <ul class="breadcrumb">
        <li><a href="#">SISKA</a></li>
        <li><a href="#">Mahasiswa</a></li>
        <li>Transkrip Nilai</li>
    </ul>
@if (request()->session()->get('role') == 'Admin')
    <div class="my-2">
        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Tambah Data</button>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="text-center mt-2">Data Transkrip Nilai Mahasiswa</h3>
        </div>
        <div class="card-body">
            <table id="transkripNilai" class="display table table-striped table-bordered dt-responsive nowrap">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama Lengkap</th>
                        <th>Jurusan</th>
                        <th>Semester</th>
                        <th>Nama Matakuliah</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
    <br/>

@else
    <div class="card">
            <div class="card-header">
                Daftar Nlai Sementara
            </div>
            <div class="card-body">
                <p>*catatan : Nilai yang tertera bukan transkrip nilai resmi, hanya nilai sementara dan bukan rujukan untuk pihak ke-3 </p>
                <div class="transkrip-left table-responsive">
                    <table id="transkripMhs-left" class="table-left ">
                        <tr>
                            <td>Nama</td>
                            <td id="nm_mhs"></td>
                        </td>
                        </tr>
                        <tr>
                            <td>Nim</td>
                            <td id="nim"></td>
                        </tr>
                    </table>
                </div>

                <div class="transkrip-right table-responsive">
                    <table id="transkripMhs-right" class="table-right">
                        <tr>
                            <td>Tempat/Tgl Lahir</td>
                            <td id="ttl"></td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td id="nama_jurusan"></td>
                        </tr>
                    </table>
                </div>

                <div class="transkrip table-responsive" >
                    <table id="Nilai" class="table table-striped table-bordered dt-responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Matakuliah</th>
                                <th>Nama Matakuliah</th>
                                <th>SKS</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>

                <div class="transkrip-down table-responsive">
                    <table id="transkripMhs-down" class="table-down ">
                        <tr>
                            <td>Jumlah Mata Kuliah</td>
                            <td id="jumlah_mk"></td>
                        </td>
                        </tr>
                        <tr>
                            <td>Jumlah Kredit Kumulatif</td>
                            <td id="jumlah-Krkumulatif"></td>
                        </tr>
                        <tr>
                            <td>Indeks Prestasi Kumulatif</td>
                            <td id="ipk"></td>
                        </tr>
                    </table>
                </div>

                {{-- <div class="ttd_dosen">
                    <p>Bandung</p>
                    <p>   </p>
                    <p>Mina Ismu Rahayu, M.T.<br><span>Ka. Prodi TEKNIK INFORMATIKA</span></p>
                </div> --}}

            </div>
        </div>

</div>
@endif
@push('matakuliah')
    <script>
        $(document).ready(function(){
            var nim = sessionStorage.getItem("nim");
            console.log(nim);
            $.ajax({
                type: 'GET', //THIS NEEDS TO BE GET
                url: 'http://api.stmikbandung.test:82/api/mahasiswa/'+ nim,
                dataType: 'json',
                success: function (data,val) {
                    console.log(data);
                    $("#nm_mhs").append("<p>"+data.data.nm_mhs+"</p>");
                    $("#nim").append("<p>"+data.data.nim+"</p>");
                    $("#ttl").append("<p>"+data.data.ttl+"</p>");
                    $("#nama_jurusan").append("<p>"+data.data.jurusan+"</p>");
                },error:function(){
                    console.log("errror",data);
                }
            });
        });

            // Initialize DataTable for Nilai
            table = $('#Nilai').DataTable({
                processing: true,
                autoWidth: true,
                serverSide: true,
                responsive: true,
                searching: true,
                sort: true,
                ajax: "{{ route('transkripnilaiAPI') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'kd_mk', name: 'Kode Matakuliah'},
                    {data: 'matakuliah.nm_mk', name: 'Nama Matakuliah'},
                    {data: 'matakuliah.sks', name: 'sks'},
                    {data: 'nilai', name: 'Nilai'},

                ]
            });
            transkrip = $('#transkripNilai').DataTable({
                processing: true,
                autoWidth: true,
                serverSide: true,
                responsive: true,
                searching: true,
                sort: true,
                language: {
                    processing: '<span class="spinner-border text-primary"></span><span style="margin-left:10px;">Loading...</span>'
                    },
                ajax: "{{ route('transkripnilaiALL') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'nim'},
                    {data: null,
                    render: ((data, type, row)=>{
                    var datas = data.mahasiswa.nm_mhs;
                    return datas;})
                    },
                    {data: null,
                    render: ((data, type, row)=>{
                    var datas = data.mahasiswa.jurusan;
                    return datas;})
                    },
                    {data: null,
                    render: ((data, type, row)=>{
                    var datas = data.matakuliah.semester;
                    return datas;})
                    },
                    {data: null,
                    render: ((data, type, row)=>{
                    var datas = data.matakuliah.nm_mk;
                    return datas;})
                    },
                    // {data: 'sks'},
                    {data: 'nilai'},
                    // {data: 'catatan'},
                ]
            });
            // tablenilai.draw()
            transkrip.draw()

    </script>

    @endpush
    <style>
    .transkrip-left {
        width: 50%;
        float: left;
        padding: 15px;
    }

    .table-left {
        border-collapse: collapse;
        width: 70%;
    }
    .transkrip-right {
        width: 50%;
        float: left;
        padding: 15px;
    }
    .table-right {
        border-collapse: collapse;
        width: 70%;
    }
    .transkrip-down {
        width: 50%;
        float: left;
        padding: 15px;
    }
    .table-down {
        border-collapse: collapse;
        width: 70%;
    }
    .ttd_dosen {
        width: 50%;
        float: left;
        padding: 15px;
    }
    p {
        margin-left: 15px;
        margin-top: 15px;
    }
</style>
@endsection
