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
                Daftar Kuliah
            </div>
            <div class="card-body">
                <div class="statusMatkul">
                    <div class="daftarMatkul" >
                        <table id="daftarMK" class="table table-striped table-bordered dt-responsive" style="background-color: white">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Matakuliah</th>
                                    <th>Nama Matakuliah</th>
                                    <th>Ruang</th>
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


        <div class="card">
            <div class="card-header">
                Status Kuliah
            </div>
            <div class="card-body">
                <div class="statusPendaftaran">
                    <div class="statusMahasiswa" >
                        <table id="statusMhs" class="table table-striped table-bordered dt-responsive" style="background-color: white">
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

<!-- <style>

</style> -->

@push('matakuliah')
<script>
    // daftarMk
    $(document).ready(function(){
        table = $('#daftarMK').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            searching: true,
            sort: true,   
            ajax: "{{ route('statusIndex') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'kd_mk'},
                {data: 'nm_mk'},
                {data: 'kd_ruang'},
                {data: 'sks'},
            ]
        });
    });

    // statusMhs
    
    
</script>

@endpush
@endsection