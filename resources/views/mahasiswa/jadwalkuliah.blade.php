@extends('temp.v_temp')
@section('isicontent')

<!-- <style>

</style> -->

<div class="container">

    <ul class="breadcrumb">
        <li><a href="#">SISKA</a></li>
        <li><a href="#">Mahasiswa</a></li>
        <li>Jadwal Matakuliah</li>
    </ul>

    <!-- <h3 style="text-align: center">Jadwal Matakuliah</h3> -->

    <div class="card">
        <div class="card-header">
            Jadwal Kuliah
        </div>
        <div class="card-body">
            <div class="statusMatkul">
                <div class="daftarMatkul" >
                    <table id="" class="table table-striped table-bordered dt-responsive" style="background-color: white">
                        <thead>
                            <tr>
                                <th>Kode Matakuliah</th>
                                <th>Nama Matakuliah</th>
                                <th>Kelas</th>
                                <th>SKS</th>
                                <th>Semester</th>
                                <th>Hari</th>
                                <th>Jam</th>
                                <th>Ruang</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection