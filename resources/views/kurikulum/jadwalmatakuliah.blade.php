@extends('temp.v_temp')
@section('isicontent')
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="#">SISKA</a></li>
            <li><a href="#">Kurikulum</a></li>
            <li>Jadwal Mata Kuliah</li>
        </ul>
        <div class="card">
            <div class="card-header d-flex justify-content-space-between">
                <div class="col-6 p-0">
                    <h5>Jadwal Matakuliah</h5>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <button class="mx-1 p-1" data-bs-container="container" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Import File CSV"><i class="fa fa-file-o"></i></button>
                    <button class="mx-1 p-1" data-bs-container="container" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Add File"><i class="fa fa-plus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <table id="yajra-datatable-jadwal" class="table table-striped table-bordered dt-responsive yajra-datatable" style="background-color: white">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Matakuliah</th>
                            <th>Nama Matakuliah</th>
                            <th>Jenis Kode</th>
                            <th>SKS</th>
                            <th>Semester</th>
                            <th>Hari</th>
                            <th>Jam</th>
                            <th>Ruang</th>
                            {{-- <th>Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
             
    @push('matakuliah')
    <script>
      $(document).ready(function(){ 
     $('#yajra-datatable-jadwal').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        searching: true,
        sort: true,
        ajax: "{{ route('getjadwalmatakuliah') }}",
        columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'kd_kur'},
                {data: 'nm_mk'},
                {data: 'kelas_kuliah'},
                {data: 'sks'},
                {data: 'semester'},
                {data: 'jadwal_kuliah1'},
                {data: 'jam'},
                {data: 'kd_ruang'},
            
            ]
    });
});

</script>
    @endpush
@endsection