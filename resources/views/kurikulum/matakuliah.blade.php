@extends('temp.v_temp')
@section('title', ('Matakuliah'))
@section('isicontent')
    <div class="container mt-5">
        <div class="card">
        <table class="table table-bordered yajra-datatable" style="background-color: white">
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
    @push('matakuliah')
    <script>
      $(document).ready(function(){
     $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
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
