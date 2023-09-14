@extends('temp.v_temp')
@section('isicontent')

<div class="container">

    <ul class="breadcrumb">
        <li><a href="#">SISKA</a></li>
        <li><a href="#">Mahasiswa</a></li>
        <li>Status Keuangan</li>
    </ul>

    <div class="card col-sm-8">
        <div class="card-header">
            Data Mahasiswa
        </div>
        <div class="card-body">
            <div class="dataMhs">   
                <form>

                    <div class="mb-3 row">      
                        <label for="staticNim" class="col-sm-6 col-form-label">NIM</label>
                        <div class="col-sm-6"
                        id="nim">
                            
                        </div>
                    </div>

                        <div class="mb-3 row">      
                        <label for="staticNama" class="col-sm-6 col-form-label">Nama Lengkap</label>
                        <div id="nm_mhs" class="col-sm-6">
                            
                        </div>
                    </div>

                    <div class="mb-3 row">      
                        <label for="staticJurusan" class="col-sm-6 col-form-label">Jurusan</label>
                        <div id="jurusan" class="col-sm-6">
                            
                        </div>
                    </div>

                    <div class="mb-3 row">      
                        <label for="staticKelas" class="col-sm-6 col-form-label">Kelas</label>
                        <div id="kelas" class="col-sm-6">
                            
                        </div>
                    </div>

                    <div class="mb-3 row">      
                        <label for="staticThnMsk" class="col-sm-6 col-form-label">Tahun Masuk</label>
                        <div id="masuk_tahun" class="col-sm-6">
                        
                        </div>
                    </div>

                    <div class="mb-3 row">      
                        <label for="staticDosenWali" class="col-sm-6 col-form-label">Dosen Wali</label>
                        <div id="dosen_wali" class="col-sm-6">
                        
                        </div>
                    </div>

                    <!-- <div class="mb-3 row">      
                        <label for="staticBeasiswa" class="col-sm-6 col-form-label">Beasiswa</label>
                        <div id="beasiswa" class="col-sm-6">
                        
                        </div>
                    </div> -->

                </form>
            </div>       
        </div>
    </div>
    
    <div class="card col-sm-12">
        <div class="card-header">
            Keuangan
        </div>
        <div class="card-body">
            <div class="stsKeuangan">   

            </div>
        </div>
    </div>

</div>

<style>
    h6 {
        margin-left: 15px;
        margin-top: 10px;
    }
</style>

@push('matakuliah')
    <script>
        $(document).ready(function(){

            var nim = sessionStorage.getItem("nim");
            // console.log(nim);

            $.ajax({
                type: 'GET', //THIS NEEDS TO BE GET
                url: 'http://api.stmik-bandung.ac.id:16080/apiserver/api/mahasiswa/detail/'+ nim,
                dataType: 'json',
                success: function (data,val) {
                    console.log(data);
                    $("#nim").append("<h6>"+data.data.nim+"</h6>");

                    $("#nm_mhs").append("<h6>"+data.data.nm_mhs+"</h6>");

                    $("#jurusan").append("<h6>"+data.data.nama_jurusan+"</h6>");

                    if(data.data.jns_mhs == "R")
                    {
                        $("#kelas").append("<h6> Reguler </h6>");
                    }else if(data.data.jns_mhs == "K"){
                        $("#kelas").append("<h6> Karyawan </h6>");
                    }else{
                        $("#kelas").append("<h6> Eksekutif </h6>");
                    }

                    $("#masuk_tahun").append("<h6>"+data.data.masuk_tahun+"</h6>");

                    $("#dosen_wali").append("<h6>"+data.data.dosen_wali+"</h6>");

                },error:function(){ 
                    console.log("errror",data);
                }
            });
        })
    </script>

    @endpush
@endsection