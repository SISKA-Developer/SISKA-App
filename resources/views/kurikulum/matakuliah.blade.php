@extends('temp.v_temp')
@section('isicontent')
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="#">SISKA</a></li>
            <li><a href="#">Kurikulum</a></li>
            <li>Mata Kuliah</li>
        </ul>
        <div style="background-color: white">
            <ul class="nav nav-tabs" id="matakuliahtab" role="tablist">
                <li class="nav-item" role="presentation">
                <button class="nav-link active" id="smt1-tab" data-bs-toggle="tab" data-bs-target="#smt1tab" type="button" role="tab" aria-controls="smt1tab" aria-selected="true">Semester 1</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="smt2-tab" data-bs-toggle="tab" data-bs-target="#smt2-tab-pane" type="button" role="tab" aria-controls="smt2-tab-pane" aria-selected="false">Semester 2</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="smt3-tab" data-bs-toggle="tab" data-bs-target="#smt3-tab-pane" type="button" role="tab" aria-controls="smt3-tab-pane" aria-selected="false">Semester 3</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="smt4-tab" data-bs-toggle="tab" data-bs-target="#smt4-tab-pane" type="button" role="tab" aria-controls="smt4-tab-pane" aria-selected="false">Semester 4</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="smt5-tab" data-bs-toggle="tab" data-bs-target="#smt5-tab-pane" type="button" role="tab" aria-controls="smt5-tab-pane" aria-selected="false">Semester 5</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="smt6-tab" data-bs-toggle="tab" data-bs-target="#smt6-tab-pane" type="button" role="tab" aria-controls="smt6-tab-pane" aria-selected="false">Semester 6</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="smt7-tab" data-bs-toggle="tab" data-bs-target="#smt7-tab-pane" type="button" role="tab" aria-controls="smt7-tab-pane" aria-selected="false">Semester 7</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="smt8-tab" data-bs-toggle="tab" data-bs-target="#smt8-tab-pane" type="button" role="tab" aria-controls="smt8-tab-pane" aria-selected="false">Semester 8</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="smt1tab" role="tabpanel" aria-labelledby="smt1tab" tabindex="0">
                    <div class="card">
                        <div class="card-body">
                            <table id="yajra-datatable-smt1" class="table table-striped table-bordered dt-responsive yajra-datatable" style="background-color: white">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Kurikulum</th>
                                        <th>Kode Matakuliah</th>
                                        <th>Nama Matakuliah</th>
                                        <th>Jenis Matakuliah</th>
                                        <th>Semester</th>
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
                <div class="tab-pane fade" id="smt2-tab-pane" role="tabpanel" aria-labelledby="smt2-tab" tabindex="0">
                    <div class="card">
                        <div class="card-body">
                            <table id="yajra-datatable-smt2" class="table table-striped table-bordered dt-responsive yajra-datatable" style="background-color: white">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Kurikulum</th>
                                        <th>Kode Matakuliah</th>
                                        <th>Nama Matakuliah</th>
                                        <th>Jenis Matakuliah</th>
                                        <th>Semester</th>
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
                <div class="tab-pane fade" id="smt3-tab-pane" role="tabpanel" aria-labelledby="smt3-tab" tabindex="0">
                    <div class="card">
                        <div class="card-body">
                            <table id="yajra-datatable-smt3" class="table table-striped table-bordered dt-responsive yajra-datatable" style="background-color: white">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Kurikulum</th>
                                        <th>Kode Matakuliah</th>
                                        <th>Nama Matakuliah</th>
                                        <th>Jenis Matakuliah</th>
                                        <th>Semester</th>
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
                <div class="tab-pane fade" id="smt4-tab-pane" role="tabpanel" aria-labelledby="smt4-tab" tabindex="0">
                    <div class="card">
                        <div class="card-body">
                            <table id="yajra-datatable-smt4" class="table table-striped table-bordered dt-responsive yajra-datatable" style="background-color: white">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Kurikulum</th>
                                        <th>Kode Matakuliah</th>
                                        <th>Nama Matakuliah</th>
                                        <th>Jenis Matakuliah</th>
                                        <th>Semester</th>
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
                <div class="tab-pane fade" id="smt5-tab-pane" role="tabpanel" aria-labelledby="smt5-tab" tabindex="0">
                    <div class="card">
                        <div class="card-body">
                            <table id="yajra-datatable-smt5" class="table table-striped table-bordered dt-responsive yajra-datatable" style="background-color: white">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Kurikulum</th>
                                        <th>Kode Matakuliah</th>
                                        <th>Nama Matakuliah</th>
                                        <th>Jenis Matakuliah</th>
                                        <th>Semester</th>
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
                <div class="tab-pane fade" id="smt6-tab-pane" role="tabpanel" aria-labelledby="smt6-tab" tabindex="0">
                    <div class="card">
                        <div class="card-body">
                            <table id="yajra-datatable-smt6" class="table table-striped table-bordered dt-responsive yajra-datatable" style="background-color: white">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Kurikulum</th>
                                        <th>Kode Matakuliah</th>
                                        <th>Nama Matakuliah</th>
                                        <th>Jenis Matakuliah</th>
                                        <th>Semester</th>
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
                <div class="tab-pane fade" id="smt7-tab-pane" role="tabpanel" aria-labelledby="smt7-tab" tabindex="0">
                    <div class="card">
                        <div class="card-body">
                            <table id="yajra-datatable-smt7" class="table table-striped table-bordered dt-responsive yajra-datatable" style="background-color: white">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Kurikulum</th>
                                        <th>Kode Matakuliah</th>
                                        <th>Nama Matakuliah</th>
                                        <th>Jenis Matakuliah</th>
                                        <th>Semester</th>
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
                <div class="tab-pane fade" id="smt8-tab-pane" role="tabpanel" aria-labelledby="smt8-tab" tabindex="0">
                    <div class="card">
                        <div class="card-body">
                            <table id="yajra-datatable-smt8" class="table table-striped table-bordered dt-responsive yajra-datatable" style="background-color: white">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Kurikulum</th>
                                        <th>Kode Matakuliah</th>
                                        <th>Nama Matakuliah</th>
                                        <th>Jenis Matakuliah</th>
                                        <th>Semester</th>
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
            </div>
        </div>
        <div class="modal" tabindex="-1" id="modal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Detail Matakuliah</h5>
                  <button type="button" class="btn-close" data-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">
                  <p>Modal body text goes here.</p>
                </div>
                {{-- <div class="modal-footer">
                  <button type="button" onclick="javascript.void(0)" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div> --}}
              </div>
            </div>
          </div>
    </div>

            
    @push('matakuliah')
    <script>
      $(document).ready(function(){ 
     $('#yajra-datatable-smt1').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        searching: true,
        sort: true,   
        ajax: "{{ route('getmatakuliahsmt1') }}",
        columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'kd_kur'},
                {data: 'kd_mk'},
                {data: 'nm_mk'},
                {data: 'nm_jurusan'},
                {data: 'semester'},
                {data: 'sks'},
                {
                    data: 'mk_id', 
                    render: ((data, type, row)=>{
                        return '<button type="button" onclick="editRowData('+data+')" class="edit btn btn-success btn-sm"><i class="fa-solid fa-pencil"></i></button> <button type="button" onclick="detailRowData('+data+')" class="delete btn btn-primary btn-sm" data-toggle="modal" data-target="#modal"><i class="fa-solid fa-eye"></i></button>'
                    }),
                    // name: 'action', 
                    orderable: true, 
                    searchable: true
                },
            ]
    });
    $('#yajra-datatable-smt2').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        searching: true,
        sort: true,   
        ajax: "{{ route('getmatakuliahsmt2') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'kd_kur'},
                {data: 'kd_mk'},
                {data: 'nm_mk'},
                {data: 'nm_jurusan'},
                {data: 'semester'},
                {data: 'sks'},
                {
                    data: 'mk_id', 
                    render: ((data, type, row)=>{
                        return '<button type="button" onclick="editRowData('+data+')" class="edit btn btn-success btn-sm"><i class="fa-solid fa-pencil"></i></button> <button type="button" onclick="detailRowData('+data+')" class="delete btn btn-primary btn-sm" data-toggle="modal" data-target="#modal"><i class="fa-solid fa-eye"></i></button>'
                    }),
                    // name: 'action', 
                    orderable: true, 
                    searchable: true
                },
        ]
    });
    $('#yajra-datatable-smt3').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        searching: true,
        sort: true,   
        ajax: "{{ route('getmatakuliahsmt3') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'kd_kur'},
                {data: 'kd_mk'},
                {data: 'nm_mk'},
                {data: 'nm_jurusan'},
                {data: 'semester'},
                {data: 'sks'},
                {
                    data: 'mk_id', 
                    render: ((data, type, row)=>{
                        return '<button type="button" onclick="editRowData('+data+')" class="edit btn btn-success btn-sm"><i class="fa-solid fa-pencil"></i></button> <button type="button" onclick="detailRowData('+data+')" class="delete btn btn-primary btn-sm" data-toggle="modal" data-target="#modal"><i class="fa-solid fa-eye"></i></button>'
                    }),
                    // name: 'action', 
                    orderable: true, 
                    searchable: true
                },
        ]
    });
    $('#yajra-datatable-smt4').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        searching: true,
        sort: true,   
        ajax: "{{ route('getmatakuliahsmt4') }}",
        columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'kd_kur'},
                {data: 'kd_mk'},
                {data: 'nm_mk'},
                {data: 'nm_jurusan'},
                {data: 'semester'},
                {data: 'sks'},
                {
                    data: 'mk_id', 
                    render: ((data, type, row)=>{
                        return '<button type="button" onclick="editRowData('+data+')" class="edit btn btn-success btn-sm"><i class="fa-solid fa-pencil"></i></button> <button type="button" onclick="detailRowData('+data+')" class="delete btn btn-primary btn-sm" data-toggle="modal" data-target="#modal"><i class="fa-solid fa-eye"></i></button>'
                    }),
                    // name: 'action', 
                    orderable: true, 
                    searchable: true
                },
            ]
    });
    $('#yajra-datatable-smt5').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        searching: true,
        sort: true,   
        ajax: "{{ route('getmatakuliahsmt5') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'kd_kur'},
                {data: 'kd_mk'},
                {data: 'nm_mk'},
                {data: 'nm_jurusan'},
                {data: 'semester'},
                {data: 'sks'},
                {
                    data: 'mk_id', 
                    render: ((data, type, row)=>{
                        return '<button type="button" onclick="editRowData('+data+')" class="edit btn btn-success btn-sm"><i class="fa-solid fa-pencil"></i></button> <button type="button" onclick="detailRowData('+data+')" class="delete btn btn-primary btn-sm" data-toggle="modal" data-target="#modal"><i class="fa-solid fa-eye"></i></button>'
                    }),
                    // name: 'action', 
                    orderable: true, 
                    searchable: true
                },
        ]
    });
    $('#yajra-datatable-smt6').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        searching: true,
        sort: true,   
        ajax: "{{ route('getmatakuliahsmt6') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'kd_kur'},
                {data: 'kd_mk'},
                {data: 'nm_mk'},
                {data: 'nm_jurusan'},
                {data: 'semester'},
                {data: 'sks'},
                {
                    data: 'mk_id', 
                    render: ((data, type, row)=>{
                        return '<button type="button" onclick="editRowData('+data+')" class="edit btn btn-success btn-sm"><i class="fa-solid fa-pencil"></i></button> <button type="button" onclick="detailRowData('+data+')" class="delete btn btn-primary btn-sm" data-toggle="modal" data-target="#modal"><i class="fa-solid fa-eye"></i></button>'
                    }),
                    // name: 'action', 
                    orderable: true, 
                    searchable: true
                },
        ]
    });
    $('#yajra-datatable-smt7').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        searching: true,
        sort: true,   
        ajax: "{{ route('getmatakuliahsmt7') }}",
        columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'kd_kur'},
                {data: 'kd_mk'},
                {data: 'nm_mk'},
                {data: 'nm_jurusan'},
                {data: 'semester'},
                {data: 'sks'},
                {
                    data: 'mk_id', 
                    render: ((data, type, row)=>{
                        return '<button type="button" onclick="editRowData('+data+')" class="edit btn btn-success btn-sm"><i class="fa-solid fa-pencil"></i></button> <button type="button" onclick="detailRowData('+data+')" class="delete btn btn-primary btn-sm" data-toggle="modal" data-target="#modal"><i class="fa-solid fa-eye"></i></button>'
                    }),
                    // name: 'action', 
                    orderable: true, 
                    searchable: true
                },
            ]
    });
    $('#yajra-datatable-smt8').DataTable({
        processing: true,
        language: {
                processing: '<div class="card" style="width:100px; height:100px; background-color:white;"><span>Loading...</span></div>'
                // '<span class="spinner-grow"></span><span class="spinner-grow"></span><span class="spinner-grow"></span>',
            },
        serverSide: true,
        responsive: true,
        searching: true,
        sort: true,   
        ajax: "{{route('getmatakuliahsmt8')}}",
        //     success
        // }",
        // ajax: {

        // }
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'kd_kur'},
                {data: 'kd_mk'},
                {data: 'nm_mk'},
                {data: 'nm_jurusan'},
                {data: 'semester'},
                {data: 'sks'},
                {
                    data: 'mk_id', 
                    render: ((data, type, row)=>{
                        return '<button type="button" onclick="editRowData('+data+')" class="edit btn btn-success btn-sm"><i class="fa-solid fa-pencil"></i></button> <button type="button" onclick="detailRowData('+data+')" class="delete btn btn-primary btn-sm" data-toggle="modal" data-target="#modal"><i class="fa-solid fa-eye"></i></button>'
                    }),
                    // name: 'action', 
                    orderable: true, 
                    searchable: true
                },
        ]
    });
    
  });
        function detailRowData(mk_id) {
            console.log(mk_id);
            //ajax
        }
        function editRowData(mk_id) {
            console.log(mk_id);
            //ajax
        }
    </script>
    @endpush
@endsection
