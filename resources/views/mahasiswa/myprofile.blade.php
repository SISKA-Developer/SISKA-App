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
                <div class="row">
                    <img src="https://github.com/mdo.png" alt="profile" class="img-profile rounded-circle">
                </div>
                <br>
                
                <div class="profile-left">
                    <table class="table-left">
                        <tr>
                            <td>Nama</td>
                            <td>Rena Wijaya</td>
                        </tr>
                        <tr>
                            <td>Nim</td>
                            <td>1219012</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>Pangalengan</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>rena@gmail.com</td>
                        </tr>
                        <tr>
                            <td>No.Telp</td>
                            <td>08123456789</td>
                        </tr>
                        <tr>
                            <td>Tempat/Tgl Lahir</td>
                            <td>Bandung, 19 Januari 2001</td>
                        </tr>  
                    </table>
                </div>

                <div class="profile-right">
                <table class="table-right">
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>Laki-Laki</td>
                        </tr>
                        <tr>
                            <td>Angkatan</td>
                            <td>2019</td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td>Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td>Jenis Mahasiswa</td>
                            <td>Reguler Pagi</td>
                        </tr>
                        <tr>
                            <td>Dosen Wali</td>
                            <td>Mina Ismu Rahayu, M.T</td>
                        </tr>
                        <tr>
                            <td>Status Mahasiswa</td>
                            <td>Aktif</td>
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
        .img-profile {
            display: flex;
            justify-content: center;
            width: 40%;
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
    </style>

  
    <script>
        
    </script>

    @endsection
