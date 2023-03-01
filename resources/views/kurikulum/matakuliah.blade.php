@extends('temp.v_temp')
@section('isicontent')
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="#">SISKA</a></li>
            <li><a href="#">Kurikulum</a></li>
            <li>Mata Kuliah</li>
        </ul>
        <div class="card">
            <div class="card-header">
                <h5>Semester 1</h5>
            </div>
            <div class="card-body">
        <table class="table table-striped table-bordered dt-responsive nowrap yajra-datatable" style="background-color: white">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Kurikulum</th>
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>Jenis Matakuliah</th>
                    <th>SKS</th>
                    <th>Action</th>
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
     $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: "{{ route('getmatakuliah') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'kode_kurikulum'},
            {data: 'kode_matkul'},
            {data: 'nama_matkul'},
            {data: 'jenis_matkul'},
            {data: 'sks'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
    
  });
    </script>
    @endpush
@endsection
