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
                    <table id="myprofile-left" class="table-left ">
                        <?php $int=0; ?>
                        <tr>
                            <td>Nama</td>
                            <td>{{$asd}}</td>
                        </tr>
                        <tr>
                            <td>Nim</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                        </tr>
                        <tr>
                            <td>No.Telp</td>
                        </tr>
                        <tr>
                            <td>Tempat/Tgl Lahir</td>
                        </tr>  
                    </table>
                </div>

                <div class="profile-right">
                <table id="myprofile-right" class="table-right">
                        <tr>
                            <td>Jenis Kelamin</td>
                        </tr>
                        <tr>
                            <td>Angkatan</td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                        </tr>
                        <tr>
                            <td>Jenis Mahasiswa</td>
                        </tr>
                        <tr>
                            <td>Dosen Wali</td>
                        </tr>
                        <tr>
                            <td>Status Mahasiswa</td>
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

    @push('mahasiswa')
    <!-- <script>
        $(document).ready(function(){
            table = $('#myprofile-left').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                searching: true,
                sort: true,   
                ajax: "{{ route('myprofile') }}",
                columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                        {data: 'nm_mhs'},
                        {data: 'nim'},
                        {data: 'tgl_lahir'},
                        // {
                        //     data: 'mk_id', 
                        //     render: ((data, type, row)=>{
                        //         return '<div class="d-flex mx-1"><button type="button" onclick="editRowData('+data+')" class="mx-1 edit btn btn-success btn-sm" data-toggle="modal" data-target="#modalsilabus"><i class="fa-solid fa-plus"></i></button> <button type="button" onclick="detailRowData('+data+')" class="delete btn btn-primary btn-sm" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-eye"></i></button></div>'
                        //     }),
                        //     // name: 'action', 
                        //     orderable: true, 
                        //     searchable: true
                        // },
                    ]
            });
        })
    </script> -->

    @endpush
@endsection
