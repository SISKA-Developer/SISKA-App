@extends('temp.v_temp')
@section('isicontent')

<div class="container">

    <ul class="breadcrumb">
        <li><a href="#">SISKA</a></li>
        <li><a href="#">Mahasiswa</a></li>
        <li>Pengkinian Data Induk Mahasiswa</li>
    </ul>

    <div class="row align-items-center vh-100">
        <div class="col-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    Data Induk Mahasiswa
                </div>
                <div class="card-body d-flex flex-column">
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
                                <label for="staticJK" class="col-sm-6 col-form-label">Jenis Kelamin</label>
                            <div id="jk" class="col-sm-6">
                                
                            </div>
                            </div>

                            <div class="mb-3 row">      
                                <label for="staticTTL" class="col-sm-6 col-form-label">Tempat & Tanggal Lahir</label>
                            <div id="ttl" class="col-sm-6">
                                
                            </div>
                            </div>
                            
                            <div class="mb-3 row">      
                                <label for="staticGoldar" class="col-sm-6 col-form-label">Golongan Darah</label>
                            <div id="gol_darah" class="col-sm-6">
                            
                            </div>
                            </div>

                            <div class="mb-3 row">      
                                <label for="staticStsKwn" class="col-sm-6 col-form-label">Status Kawin</label>
                            <div id="sts_kawin" class="col-sm-6">
                            
                            </div>
                            </div>

                            <div class="mb-3 row">      
                                <label for="staticNik" class="col-sm-6 col-form-label">NIK</label>
                            <div id="nmr_ktp" class="col-sm-6">
                            
                            </div>
                            </div>

                            <div class="mb-3 row">      
                                <label for="staticTelp" class="col-sm-6 col-form-label">No Hp</label>
                            <div id="nmr_hp" class="col-sm-6">
                                
                            </div>
                            </div>

                            <div class="mb-3 row">      
                                <label for="staticEmail" class="col-sm-6 col-form-label">Email</label>
                            <div id="email" class="col-sm-6">
                                
                            </div>
                            </div>

                            <div class="mb-3 row col-sm-3">
                                <button type="submit" class="btn btn-primary mb-3">Edit</button>
                            </div>

                        </form>
                    </div>       
                </div>
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
            $.ajax({
                type: 'GET', //THIS NEEDS TO BE GET
                url: 'http://api.stmik-bandung.ac.id:16080/server/public/api/mahasiswa/detail/1219010',
                dataType: 'json',
                success: function (data,val) {
                    console.log(data);
                    $("#nim").append("<h6>"+data.data.nim+"</h6>");

                    $("#nm_mhs").append("<h6>"+data.data.nm_mhs+"</h6>");

                    $("#jurusan").append("<h6>"+data.data.nama_jurusan+"</h6>");

                    $("#kelas").append("<h6>"+data.data.jns_mhs+"</h6>");

                    $("#masuk_tahun").append("<h6>"+data.data.masuk_tahun+"</h6>");

                    $("#jk").append("<h6>"+data.data.jk+"</h6>");

                    $("#ttl").append("<h6>"+data.data.tmp_lahir+", "+data.data.tgl_lahir+"</h6>");

                    if(data.data.gol_darah == null || data.data.gol_darah == 'null')
                    {
                        $("#gol_darah").append("<h6> - </h6>");
                    }else{
                        $("#gol_darah").append("<h6>"+data.data.gol_darah+"</h6>");
                    }

                    if(data.data.sts_kawin == null || data.data.sts_kawin == 'null')
                    {
                        $("#sts_kawin").append("<h6> - </h6>");
                    }else{
                        $("#sts_kawin").append("<h6>"+data.data.sts_kawin+"</h6>");
                    }
                    
                    if(data.data.nmr_ktp == null || data.data.nmr_ktp == 'null')
                    {
                        $("#nmr_ktp").append("<h6> - </h6>");
                    }else{
                        $("#nmr_ktp").append("<h6>"+data.data.nmr_ktp+"</h6>");
                    }

                    $("#nmr_hp").append("<h6>"+data.data.nmr_hp+"</h6>");

                    $("#email").append("<h6>"+data.data.email+"</h6>");

                },error:function(){ 
                    console.log("errror",data);
                }
            });
        })
    </script>

    @endpush
@endsection