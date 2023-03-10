@extends('temp.v_temp')
@section('isicontent')

<div class="container">

    <ul class="breadcrumb">
        <li><a href="#">SISKA</a></li>
        <li><a href="#">Mahasiswa</a></li>
        <li>Status</li>
    </ul>

    <div class="card">
            <div class="card-header">
                Daftar Kuliah Semester 1 2022-2023
            </div>
            <div class="card-body">
                <div class="statusMatkul">
                    <div class="daftarMatkul" >
                        <table id="" class="table table-striped table-bordered dt-responsive" style="background-color: white">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Matakuliah</th>
                                    <th>Nama Matakuliah</th>
                                    <th>Kelas</th>
                                    <th>SKS</th>
                                    <th>Kehadiran</th>
                                    <th>Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card-header">
                Status Kuliah
            </div>
            <div class="card-body">
                <div class="statusPendaftaran">
                    <div class="statusMahasiswa" >
                        <table id="" class="table table-striped table-bordered dt-responsive" style="background-color: white">
                            <thead>
                                <tr>
                                    <th>Tahun</th>
                                    <th>Semester</th>
                                    <th>Status</th>
                                    <th>Mata Kuliah</th>
                                    <th>SKS</th>
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