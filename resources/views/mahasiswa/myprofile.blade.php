@extends('temp.v_temp')
@section('isicontent')

    <div class="container">
        <ul class="breadcrumb">
            <li><a href="#">SISKA</a></li>
            <li><a href="#">Mahasiswa</a></li>
            <li>My Profile</li>
        </ul>
        
        <div class="card">
            <div class="card-header">
                My Profile
            </div>
            <div class="card-body">
                <div class="text-center h-100" id="profile-img">
                    <!-- <img src="{{url('$images')}}" alt="profile" class="card-img-top smallimg rounded-circle"> -->
                </div>
                <br>                
                <div class="profile-left">
                    <table id="myprofile-left" class="table-left ">
                        <?php $int=0; ?>
                        <tr>
                            <td>Nama</td>
                            <td id="nm_mhs"></td>
                        </td>
                        </tr>
                        <tr>
                            <td>Nim</td>
                            <td id="nim"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td id="alamat"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td id="email"></td>
                        </tr>
                        <tr>
                            <td>No.Telp</td>
                            <td id="telp"></td>
                        </tr>
                        <tr>
                            <td>Tempat/Tgl Lahir</td>
                            <td id="ttl"></td>
                        </tr>  
                    </table>
                </div>

                <div class="profile-right">
                <table id="myprofile-right" class="table-right">
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td id="jk"></td>
                        </tr>
                        <tr>
                            <td>Angkatan</td>
                            <td id="angkatan"></td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td id="nama_jurusan"></td>
                        </tr>
                        <tr>
                            <td>Jenis Mahasiswa</td>
                            <td id="jns_mhs"></td>
                        </tr>
                        <tr>
                            <td>Dosen Wali</td>
                            <td id="dosen_wali"></td>
                        </tr>
                        <tr>
                            <td>Status Mahasiswa</td>
                            <td id="sts_mhs"></td>
                        </tr>
                    </table>
                </div>
            </div>
                <footer>
                    <a href="#" class="btn btn-primary">KTM</a>
                    <a href="#" class="btn btn-primary">Update</a>
                </footer>              
        </div>
    </div>

    <style>
        .smallimg {
            width: 200px; 
            height: 200px;
        }
        .profile-left {
            width: 50%;
            float: left;
            padding: 15px;
        }

        .table-left {
            border-collapse: collapse;
            width: 70%;
        }
        .profile-right {
            width: 50%;
            float: left;
            padding: 15px;
        }
        footer {
            margin: 30px;
        }
        p {
            margin-left: 15px;
            margin-top: 15px;
        }
    </style>

    @push('matakuliah')
    <script>
        $(document).ready(function(){

            // sessionStorage.setItem("nim", "1219010");
            var nim = "{{request()->session()->get('nim')}}";
            // console.log(nim);

            $.ajax({
                type: 'GET', //THIS NEEDS TO BE GET
                url: 'http://api.stmik-bandung.ac.id:16080/apiserver/api/mahasiswa/'+ nim,
                dataType: 'json',
                success: function (data,val) {
                    console.log(data);
                    $("#nm_mhs").append("<p>"+data.data[0].nm_mhs+"</p>");

                    $("#nim").append("<p>"+data.data[0].nim+"</p>");

                    $("#alamat").append("<p>"+data.data[0].alamat+"</p>");

                    $("#email").append("<p>"+data.data[0].email+"</p>");

                    $("#telp").append("<p>"+data.data[0].nmr_hp+"</p>");

                    $("#ttl").append("<p>"+data.data[0].tmp_lahir+", "+data.data[0].tgl_lahir+"</p>");

                    if(data.data[0].jk == "L")
                    {
                        $("#jk").append("<p> Laki-Laki </p>");
                    } else {
                        $("#jk").append("<p> Perempuan </p>");
                    }

                    $("#angkatan").append("<p>"+data.data[0].angkatan+"</p>");

                    $("#nama_jurusan").append("<p>"+data.data[0].nama_jurusan+"</p>");

                    if(data.data[0].jns_mhs == "R")
                    {
                        $("#jns_mhs").append("<p> Reguler </p>");
                    }else if(data.data[0].jns_mhs == "K"){
                        $("#jns_mhs").append("<p> Karyawan </p>");
                    }else{
                        $("#jns_mhs").append("<p> Eksekutif </p>");
                    }

                    $("#dosen_wali").append("<p>"+data.data[0].dosen_wali+"</p>");
                    
                    if(data.data[0].sts_mhs == "A")
                    {
                        $("#sts_mhs").append("<p> Aktif </p>");
                    }else{
                        $("#sts_mhs").append("<p> Tidak Aktif </p>")
                    }

                    $("#profile-img").append(
                        "<img src='/foto_profile/"+data.data[0].nim+".jpg' alt='profile' class='card-img-top smallimg rounded-circle'>")
                },error:function(){ 
                    console.log("errror",data);
                }
            });

            

        })

    </script>

    @endpush
@endsection
