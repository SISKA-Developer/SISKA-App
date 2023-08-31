@extends('temp.v_temp')
@section('isicontent')

<div class="container">

    <ul class="breadcrumb">
        <li><a href="#">SISKA</a></li>
        <li><a href="#">Mahasiswa</a></li>
        <li>Transkrip Nilai</li>
    </ul>

    <div class="card">
            <div class="card-header">
                Daftar Nlai Sementara
            </div>
            <div class="card-body">              
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
                    <table id="transkripMhs" class="table table-striped table-bordered dt-responsive" style="background-color: white">
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

                <div class="ttd_dosen">
                    <p>Bandung</p>
                    <p>   </p>
                    <p>Mina Ismu Rahayu, M.T.<br><span>Ka. Prodi TEKNIK INFORMATIKA</span></p>
                </div>

            </div>            
        </div>

</div>

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

@push('matakuliah')
    <script>
        $(document).ready(function(){
            
            $.ajax({
                type: 'GET', //THIS NEEDS TO BE GET
                url: 'http://api.stmik-bandung.ac.id:16080/apiserver/api/mahasiswa/1219019',
                dataType: 'json',
                success: function (data,val) {
                    console.log(data);
                    $("#nm_mhs").append("<p>"+data.data[0].nm_mhs+"</p>");
                    $("#nim").append("<p>"+data.data[0].nim+"</p>");
                    $("#ttl").append("<p>"+data.data[0].tmp_lahir+", "+data.data[0].tgl_lahir+"</p>");
                    $("#nama_jurusan").append("<p>"+data.data[0].nama_jurusan+"</p>");
                   
                },error:function(){ 
                    console.log("errror",data);
                }
            });
        })

    </script>

    @endpush
@endsection