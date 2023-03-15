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
                            <div id="formcheck1">
                            <div class="form-check form-check-inline">
                                <input class="filter-radio1 mx-1" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Teknik Informatika">
                                <label class="form-check-label" for="inlineRadio1">Teknik Informatika</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="filter-radio1 mx-1" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Sistem Informasi">
                                <label class="form-check-label" for="inlineRadio2">Sistem Informasi</label>
                              </div>
                            </div>
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
                            <div id="formcheck2">
                            <div class="form-check form-check-inline">
                                <input class="filter-radio2 mx-1" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Teknik Informatika">
                                <label class="form-check-label" for="inlineRadio1">Teknik Informatika</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="filter-radio2 mx-1" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Sistem Informasi">
                                <label class="form-check-label" for="inlineRadio2">Sistem Informasi</label>
                              </div>
                            </div>
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
                            <div id="formcheck3">
                            <div class="form-check form-check-inline">
                                <input class="filter-radio3 mx-1" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Teknik Informatika">
                                <label class="form-check-label" for="inlineRadio1">Teknik Informatika</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="filter-radio3 mx-1" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Sistem Informasi">
                                <label class="form-check-label" for="inlineRadio2">Sistem Informasi</label>
                              </div>
                            </div>
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
                            <div id="formcheck4">
                            <div class="form-check form-check-inline">
                                <input class="filter-radio4 mx-1" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Teknik Informatika">
                                <label class="form-check-label" for="inlineRadio1">Teknik Informatika</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="filter-radio4 mx-1" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Sistem Informasi">
                                <label class="form-check-label" for="inlineRadio2">Sistem Informasi</label>
                              </div>
                            </div>
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
                            <div id="formcheck5">
                            <div class="form-check form-check-inline">
                                <input class="filter-radio5 mx-1" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Teknik Informatika">
                                <label class="form-check-label" for="inlineRadio1">Teknik Informatika</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="filter-radio5 mx-1" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Sistem Informasi">
                                <label class="form-check-label" for="inlineRadio2">Sistem Informasi</label>
                              </div>
                            </div>
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
                            <div id="formcheck6">
                            <div class="form-check form-check-inline">
                                <input class="filter-radio6 mx-1" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Teknik Informatika">
                                <label class="form-check-label" for="inlineRadio1">Teknik Informatika</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="filter-radio6 mx-1" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Sistem Informasi">
                                <label class="form-check-label" for="inlineRadio2">Sistem Informasi</label>
                              </div>
                            </div>
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
                            <div id="formcheck7">
                            <div class="form-check form-check-inline">
                                <input class="filter-radio7 mx-1" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Teknik Informatika">
                                <label class="form-check-label" for="inlineRadio1">Teknik Informatika</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="filter-radio7 mx-1" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Sistem Informasi">
                                <label class="form-check-label" for="inlineRadio2">Sistem Informasi</label>
                              </div>
                            </div>
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
                            <div id="formcheck8">
                            <div class="form-check form-check-inline">
                                <input class="filter-radio8 mx-1" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Teknik Informatika">
                                <label class="form-check-label" for="inlineRadio1">Teknik Informatika</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="filter-radio8 mx-1" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Sistem Informasi">
                                <label class="form-check-label" for="inlineRadio2">Sistem Informasi</label>
                              </div>
                            </div>
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
        <div class="modal" tabindex="-1" id="modaldetail">
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
          <div class="modal" tabindex="-1" id="modalsilabus">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Tambah File Silabus</h5>
                  <button type="button" class="btn-close" data-dismiss="modal" aria-label="close"></button>
                </div>
                {{-- <form action="/upload/proses" method="POST" enctype="multipart/form-data"> --}}
                <div class="modal-body">
                        {{-- {{ csrf_field() }} --}}
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Masukan File Silabus :</label>
                        <input class="form-control" type="file" id="formFile">
                      </div>
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Masukan File Silabus :</label>
                        <input class="form-control" type="text" id="formtext">
                      </div>
                </div>
                <div class="modal-footer">
                  <button type="button" onclick="javascript.void(0)" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            {{-- </form> --}}
        </div>
    </div>
</div>

</div>

            
    @push('matakuliah')
    <script>
        var role = sessionStorage.getItem("role");
        var x1 = document.getElementById("formcheck1")
        var x2 = document.getElementById("formcheck2")
        var x3 = document.getElementById("formcheck3")
        var x4 = document.getElementById("formcheck4")
        var x5 = document.getElementById("formcheck5")
        var x6 = document.getElementById("formcheck6")
        var x7 = document.getElementById("formcheck7")
        var x8 = document.getElementById("formcheck8")
        if(role == "Teknik Informatika" || role == "Sistem Informasi"){
            console.log("guttt")
            x1.style.visibility = "hidden";
            x2.style.visibility = "hidden";   
            x3.style.visibility = "hidden";   
            x4.style.visibility = "hidden";   
            x5.style.visibility = "hidden";   
            x6.style.visibility = "hidden";   
            x7.style.visibility = "hidden";   
            x8.style.visibility = "hidden";   
        }else{
            console.log("notguutt")
            x1.style.visibility = "visible";   
            x2.style.visibility = "visible";   
            x3.style.visibility = "visible";   
            x4.style.visibility = "visible";   
            x5.style.visibility = "visible";   
            x6.style.visibility = "visible";   
            x7.style.visibility = "visible";   
            x8.style.visibility = "visible";   
        }
      $(document).ready(function(){
            table = $('#yajra-datatable-smt1').DataTable({
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
                                return '<div class="d-flex mx-1"><button type="button" onclick="editRowData('+data+')" class="mx-1 edit btn btn-success btn-sm" data-toggle="modal" data-target="#modalsilabus"><i class="fa-solid fa-plus"></i></button> <button type="button" onclick="detailRowData('+data+')" class="delete btn btn-primary btn-sm" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-eye"></i></button></div>'
                            }),
                            // name: 'action', 
                            orderable: true, 
                            searchable: true
                        },
                    ]
            });
            table.draw()
            if(role == "Admin"|| role == "admin"){
                $('.filter-radio1').on('change', function(e){
                var searchTerms = "";
                $.each($('.filter-radio1'), function(i,elem){
                    if($(elem).prop('checked')){
                    searchTerms = $(this).val();
                }
                })
                    console.log(searchTerms);
                    table.column(4).search(searchTerms).draw();
                })
            }else{
                var jurusan = sessionStorage.getItem("role");
                table.column(4).search(jurusan).draw();
            }
                })
        function detailRowData(mk_id) {
            console.log(mk_id);
            //ajax
        }
        function editRowData(mk_id) {
            console.log(mk_id);
            //ajax
        }
     
        $('#smt2-tab').on('click', function(e){
            console.log("table2");
            table = $('#yajra-datatable-smt2').DataTable({
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
                                return '<div class="d-flex mx-1"><button type="button" onclick="editRowData('+data+')" class="mx-1 edit btn btn-success btn-sm" data-toggle="modal" data-target="#modalsilabus"><i class="fa-solid fa-plus"></i></button> <button type="button" onclick="detailRowData('+data+')" class="delete btn btn-primary btn-sm" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-eye"></i></button></div>'
                            }),
                            // name: 'action', 
                            orderable: true, 
                            searchable: true
                        },
                    ]
            });
            table.draw()
            if(role == "Admin"|| role == "admin"){
                $('.filter-radio2').on('change', function(e){
                var searchTerms = "";
                $.each($('.filter-radio2'), function(i,elem){
                    if($(elem).prop('checked')){
                    searchTerms = $(this).val();
                }
                })
                    console.log(searchTerms);
                    table.column(4).search(searchTerms).draw();
                })
            }else{
                var jurusan = sessionStorage.getItem("role");
                table.column(4).search(jurusan).draw();
            }
        });
        $('#smt3-tab').on('click', function(e){
            console.log("table3");
            table = $('#yajra-datatable-smt3').DataTable({
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
                                return '<div class="d-flex mx-1"><button type="button" onclick="editRowData('+data+')" class="mx-1 edit btn btn-success btn-sm" data-toggle="modal" data-target="#modalsilabus"><i class="fa-solid fa-plus"></i></button> <button type="button" onclick="detailRowData('+data+')" class="delete btn btn-primary btn-sm" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-eye"></i></button></div>'
                            }),
                            // name: 'action', 
                            orderable: true, 
                            searchable: true
                        },
                    ]
            });
            table.draw()
            if(role == "Admin"|| role == "admin"){
                $('.filter-radio3').on('change', function(e){
                var searchTerms = "";
                $.each($('.filter-radio3'), function(i,elem){
                    if($(elem).prop('checked')){
                    searchTerms = $(this).val();
                }
                })
                    console.log(searchTerms);
                    table.column(4).search(searchTerms).draw();
                })
            }else{
                var jurusan = sessionStorage.getItem("role");
                table.column(4).search(jurusan).draw();
            }

        });
        $('#smt4-tab').on('click', function(e){
            console.log("table4");
            table = $('#yajra-datatable-smt4').DataTable({
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
                                return '<div class="d-flex mx-1"><button type="button" onclick="editRowData('+data+')" class="mx-1 edit btn btn-success btn-sm" data-toggle="modal" data-target="#modalsilabus"><i class="fa-solid fa-plus"></i></button> <button type="button" onclick="detailRowData('+data+')" class="delete btn btn-primary btn-sm" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-eye"></i></button></div>'
                            }),
                            // name: 'action', 
                            orderable: true, 
                            searchable: true
                        },
                    ]
            });
            table.draw()
            if(role == "Admin"|| role == "admin"){
                $('.filter-radio4').on('change', function(e){
                var searchTerms = "";
                $.each($('.filter-radio4'), function(i,elem){
                    if($(elem).prop('checked')){
                    searchTerms = $(this).val();
                }
                })
                    console.log(searchTerms);
                    table.column(4).search(searchTerms).draw();
                })
            }else{
                var jurusan = sessionStorage.getItem("role");
                table.column(4).search(jurusan).draw();
            }
        });
        $('#smt5-tab').on('click', function(e){
            console.log("table5");
            table = $('#yajra-datatable-smt5').DataTable({
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
                                return '<div class="d-flex mx-1"><button type="button" onclick="editRowData('+data+')" class="mx-1 edit btn btn-success btn-sm" data-toggle="modal" data-target="#modalsilabus"><i class="fa-solid fa-plus"></i></button> <button type="button" onclick="detailRowData('+data+')" class="delete btn btn-primary btn-sm" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-eye"></i></button></div>'
                            }),
                            // name: 'action', 
                            orderable: true, 
                            searchable: true
                        },
                    ]
            });
            table.draw()
            if(role == "Admin"|| role == "admin"){
                $('.filter-radio5').on('change', function(e){
                var searchTerms = "";
                $.each($('.filter-radio5'), function(i,elem){
                    if($(elem).prop('checked')){
                    searchTerms = $(this).val();
                }
                })
                    console.log(searchTerms);
                    table.column(4).search(searchTerms).draw();
                })
            }else{
                var jurusan = sessionStorage.getItem("role");
                table.column(4).search(jurusan).draw();
            }        });
        $('#smt6-tab').on('click', function(e){
            console.log("table6");
            table = $('#yajra-datatable-smt6').DataTable({
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
                                return '<div class="d-flex mx-1"><button type="button" onclick="editRowData('+data+')" class="mx-1 edit btn btn-success btn-sm" data-toggle="modal" data-target="#modalsilabus"><i class="fa-solid fa-plus"></i></button> <button type="button" onclick="detailRowData('+data+')" class="delete btn btn-primary btn-sm" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-eye"></i></button></div>'
                            }),
                            // name: 'action', 
                            orderable: true, 
                            searchable: true
                        },
                    ]
            });
            table.draw()
            if(role == "Admin"|| role == "admin"){
                $('.filter-radio6').on('change', function(e){
                var searchTerms = "";
                $.each($('.filter-radio6'), function(i,elem){
                    if($(elem).prop('checked')){
                    searchTerms = $(this).val();
                }
                })
                    console.log(searchTerms);
                    table.column(4).search(searchTerms).draw();
                })
            }else{
                var jurusan = sessionStorage.getItem("role");
                table.column(4).search(jurusan).draw();
            }
        });
        $('#smt7-tab').on('click', function(e){
            console.log("table7");
            table = $('#yajra-datatable-smt7').DataTable({
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
                                return '<div class="d-flex mx-1"><button type="button" onclick="editRowData('+data+')" class="mx-1 edit btn btn-success btn-sm" data-toggle="modal" data-target="#modalsilabus"><i class="fa-solid fa-plus"></i></button> <button type="button" onclick="detailRowData('+data+')" class="delete btn btn-primary btn-sm" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-eye"></i></button></div>'
                            }),
                            // name: 'action', 
                            orderable: true, 
                            searchable: true
                        },
                    ]
            });
            table.draw()
            if(role == "Admin"|| role == "admin"){
                $('.filter-radio7').on('change', function(e){
                var searchTerms = "";
                $.each($('.filter-radio7'), function(i,elem){
                    if($(elem).prop('checked')){
                    searchTerms = $(this).val();
                }
                })
                    console.log(searchTerms);
                    table.column(4).search(searchTerms).draw();
                })
            }else{
                var jurusan = sessionStorage.getItem("role");
                table.column(4).search(jurusan).draw();
            }
        });
        $('#smt8-tab').on('click', function(e){
            console.log("table8");
            table = $('#yajra-datatable-smt8').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                searching: true,
                sort: true,   
                ajax: "{{ route('getmatakuliahsmt8') }}",
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
                                return '<div class="d-flex mx-1"><button type="button" onclick="editRowData('+data+')" class="mx-1 edit btn btn-success btn-sm" data-toggle="modal" data-target="#modalsilabus"><i class="fa-solid fa-plus"></i></button> <button type="button" onclick="detailRowData('+data+')" class="delete btn btn-primary btn-sm" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-eye"></i></button></div>'
                            }),
                            // name: 'action', 
                            orderable: true, 
                            searchable: true
                        },
                    ]
            });
            table.draw()
            if(role == "Admin"|| role == "admin"){
                $('.filter-radio8').on('change', function(e){
                var searchTerms = "";
                $.each($('.filter-radio8'), function(i,elem){
                    if($(elem).prop('checked')){
                    searchTerms = $(this).val();
                }
                })
                    console.log(searchTerms);
                    table.column(4).search(searchTerms).draw();
                })
            }else{
                var jurusan = sessionStorage.getItem("role");
                table.column(4).search(jurusan).draw();
            }
        })
    </script>
    @endpush
@endsection
