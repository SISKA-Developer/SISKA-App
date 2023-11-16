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
            <div class="statusMatkul ">
                <div class="daftarMatkul table-responsive" >
                    <table id="jadwalPerkuliahan" class="table table-striped table-bordered dt-responsive" style="background-color: white">
                        <thead>
                            <tr>
                                <th>No</th>
                            <th>Kode Matakuliah</th>
                            <th>Nama Matakuliah</th>
                            <th>Nama Dosen</th>
                            <th>SKS</th>
                            <th>Semester</th>
                            <th>Hari</th>
                            <th>Jam</th>
                            <th>Kelas</th>
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
        language: {
                    processing: '<span class="spinner-border text-primary"></span><span style="margin-left:10px;">Loading...</span>'
                    },
        ajax: "{{ route('getjadwalmatakuliah') }}",
        columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'kd_mk'},
                {data: null,
                    render: ((data, type, row)=>{
                    var datas = data.matakuliah.nm_mk;
                    return datas;})
                },
                {data: 'nama_dosen'},
                {data: null,
                    render: ((data, type, row)=>{
                    var datas = data.matakuliah.sks;
                    return datas;})
                },
                {data: null,
                    render: ((data, type, row)=>{
                    var datas = data.matakuliah.semester;
                    return datas;})
                },
                {data: 'hari'},
                {data: null,
                    render: ((data, type, row)=>{
                    var masuk = data.masuk;
                    var selesai = data.selesai;
                    return masuk + " - " + selesai;
                }),},
                // {data: 'kelas'},
                {data: null,
                    render: ((data, type, row)=>{
                    var data = data.kelas;
                    if (data == 'R'){
                        return '<span class="badge badge-primary">Reguler</span>';
                    }
                }),},
                // {data: 'selesai'},
                {data: 'ruangan'},
                // {data: null,
                //     render: ((data, type, row)=>{
                //     var data = data.kd_mk;
                //     return '<div class="d-flex mx-1"></a> <button type="button" onclick="ubahjadwal(`'+data+'`)" class="delete btn btn-primary btn-sm" data-bs-toggle="tooltip" title="Ubah Jadwal Matakuliah" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-pencil"></i></button></div>'
                // }),},
            ]
        });
    });

</script>

@endpush
@endsection
