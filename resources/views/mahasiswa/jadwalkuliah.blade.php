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

    <div class="card">
        <div class="card-header">
            Jadwal Perkuliahan
        </div>
        <div class="card-body">
            <div class="statusMatkul">
                <div class="daftarMatkul" >
                    <table id="jadwalPerkuliahan" class="table table-striped table-bordered dt-responsive" style="background-color: white">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Matakuliah</th>
                                <th>Nama Matakuliah</th>
                                <th>Nama Dosen</th>
                                <th>SKS</th>
                                <th>Semester</th>
                                <th>Kelas</th>
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

@push('matakuliah')
<script>
    
    $(document).ready(function(){
        table = $('#jadwalPerkuliahan').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            searching: true,
            sort: true,   
            ajax: "{{ route('jadwalkuliahIndex') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'kd_mk'},
                {data: 'nm_mk'},
                {data: 'nm_dosen'},
                {data: 'sks'},
                {data: 'semester'},
                {data: 'jns_mhs'},
                {data: 'jadwal_kuliah1'},
                {data: 'jam'},
                {data: 'kd_ruang'},
            ]
        });
    });
    
</script>

@endpush
@endsection