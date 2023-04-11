@extends('temp.v_temp')
@section('isicontent')
    <div class="container">
            {{ session('success') }}
            {{ session('error') }}
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
                            {{-- <div class="col-md-12 d-flex my-2 mx-0 p-0"> --}}
                                <div id="formcheck1" class="col-md-6 my-1">
                                    {{-- <div class="form-check form-check-inline">
                                        <label class="mb-2">Jurusan :</label>
                                    </div> --}}
                                    <div class="form-check form-check-inline">
                                        <input class="filter-radio1 mx-1" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Teknik Informatika">
                                        <label class="form-check-label" for="inlineRadio1">Teknik Informatika</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="filter-radio1 mx-1" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Sistem Informasi">
                                        <label class="form-check-label" for="inlineRadio2">Sistem Informasi</label>
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <label>Jenis Kelas :</label>
                                    <select class="form-control status-dropdown">
                                        <option selected>Pilih Kelas</option>
                                        <option value="R">Regular</option>
                                        <option value="K">Karyawan</option>
                                        <option value="E">Eksekutif</option>
                                    </select>
                                </div> --}}
                            {{-- </div> --}}
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
                  <button type="button" id="closetabs" class="btn-close" data-dismiss="modal" aria-label="close" onclick="closetabs()"></button>
                </div>
                    <div class="modal-body">
                          <div class="row">
                            <div class="col-7 col-sm-5">
                              Nama Matakuliah
                            </div>
                            <div class="col-1 col-sm-1">
                                :
                              </div>
                            <div class="col-4 col-sm-6" id="nm_mk">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7 col-sm-5">
                              Kode Matakuliah
                            </div>
                            <div class="col-1 col-sm-1">
                                :
                              </div>
                            <div class="col-4 col-sm-6" id="kd_mk">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7 col-sm-5">
                              Nama Jurusan
                            </div>
                            <div class="col-1 col-sm-1">
                                :
                              </div>
                            <div class="col-4 col-sm-6" id="nm_jurusan">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7 col-sm-5">
                              Kode Jurusan
                            </div>
                            <div class="col-1 col-sm-1">
                                :
                              </div>
                            <div class="col-4 col-sm-6" id="kd_jur">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7 col-sm-5">
                              Kode Kurikulum
                            </div>
                            <div class="col-1 col-sm-1">
                                :
                              </div>
                            <div class="col-4 col-sm-6" id="kd_kur">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7 col-sm-5">
                              Semester
                            </div>
                            <div class="col-1 col-sm-1">
                                :
                              </div>
                            <div class="col-4 col-sm-6" id="semester">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7 col-sm-5">
                              SKS
                            </div>
                            <div class="col-1 col-sm-1">
                                :
                              </div>
                            <div class="col-4 col-sm-6" id="sks">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                  {{-- <button type="button" onclick="javascript.void(0)" id="" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                  {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
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
                <form action="{{ url('fileSilabus') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                        @csrf
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Masukan File Silabus :</label>
                        <input class="form-control" type="file" id="link" name="link">
                        <input class="form-control" type="text" id="kode_mk" name="kode_mk" value="">
                      </div>
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Keterangan :</label>
                        <input class="form-control" type="text" id="keterangan" name="keterangan">
                      </div>
                </div>
                <div class="modal-footer">
                  <button type="button" onclick="javascript.void(0)" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" id="modalseesilabus">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @foreach($data as $item)
          <a href="{{$item->link}}" class="btn btn-primary">test</a>
            {{$item->link}}
          @endforeach
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
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
        $("body").tooltip({ selector: '[data-bs-toggle=tooltip]' });
            table = $('#yajra-datatable-smt1').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                searching: true,
                sort: true,   
                language: {
                    processing: '<span class="spinner-border text-primary"></span><span style="margin-left:10px;">Loading...</span>'
                    },      
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
                            data: 'kd_mk', 
                            render: ((data, type, row)=>{
                                var role = sessionStorage.getItem("role");
                                if(role == 'Teknik Informatika' || role == 'Sistem Informasi'){
                                    console.log('guuttt')
                                return '<div class="d-flex mx-1"><a href="/display/'+data+'" class="mx-1 edit btn btn-success btn-sm" data-bs-toggle="tooltip" title="Lihat Silabus" ><i class="fa-solid fa-eye"></i></a> <button type="button" onclick="detailRowData(`'+data+'`)" class="delete btn btn-primary btn-sm" data-bs-toggle="tooltip" title="Lihat Detail Mata Kuliah" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-eye"></i></button></div>'
                                }else{
                                    console.log('notguuttt')
                                    return '<div class="d-flex mx-1"><button type="button" onclick="editRowData(`'+data+'`)" class="mx-1 edit btn btn-success btn-sm" data-bs-toggle="tooltip" title="Tambah Silabus" data-toggle="modal" data-target="#modalsilabus"><i class="fa-solid fa-plus"></i></button> <button type="button" onclick="detailRowData(`'+data+'`)" class="delete btn btn-primary btn-sm" data-bs-toggle="tooltip" title="Lihat Detail Mata Kuliah" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-eye"></i></button></div>'
                                }
                            }),
                            name: 'action', 
                            orderable: true, 
                            searchable: true
                        },
                    ]
            });
            table.draw()
            if(role == "Teknik Informatika"|| role == "Sistem Informasi"){
                var jurusan = sessionStorage.getItem("role");
                table.column(4).search(jurusan).draw();
            }else{
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
            }
                });
        function detailRowData(data) {
            console.log(data);
            $.ajax({
                type: 'GET', //THIS NEEDS TO BE GET
                url: 'http://api.stmik-bandung.ac.id:16080/server/public/api/kurikulum/'+ data,
                dataType: 'json',
                success: function (data) {
                    var datas = data.data[0];
                    console.log(datas);
                    $("#nm_jurusan").append("<p>" + datas.nm_jurusan + "</p>");
                    $("#nm_mk").append("<p>" + datas.nm_mk + "</p>");
                    $("#kd_mk").append("<p>" + datas.kd_mk + "</p>");
                    $("#kd_jur").append("<p>" + datas.kd_jur + "</p>");
                    $("#kd_kur").append("<p>" + datas.kd_kur + "</p>");
                    $("#semester").append("<p>" + datas.semester + "</p>");
                    $("#sks").append("<p>" + datas.sks + "</p>");
                    // $.each(datas, function(index, data, val) {
                    //     $("#nama").text(datas.sks);
                    //     console.log(val);
                    //     console.log(data);
                    // $("#nama").text(datas.sks); 
                    // });
                    // $(".result").html(data);
                    // document.getElementById("nama").innerHTML = "Selamat Datang, " + data.data[0].nm_jurusan;
                //     container.html('');
                //     $.each(data, function(index, item) {
                //     container.html(''); //clears container for new data
                //     $.each(data, function(i, item) {
                //         container.append('<div class="row"><div class="ten columns"><div class="editbuttoncont"><button class="btntimestampnameedit" data-seek="' + item.timestamp_time + '">' +  new Date(item.timestamp_time * 1000).toUTCString().match(/(\d\d:\d\d:\d\d)/)[0] +' - '+ item.timestamp_name +'</button></div></div> <div class="one columns"><form action="'+ item.timestamp_id +'/deletetimestamp" method="POST">' + '{!! csrf_field() !!}' +'<input type="hidden" name="_method" value="DELETE"><button class="btntimestampdelete"><i aria-hidden="true" class="fa fa-trash buttonicon"></i></button></form></div></div>');
                // });
                //         container.append('<br>');
                //     });
                },error:function(){ 
                    console.log(data);
                }
    });
        }

        function editRowData(data) {
            console.log(data);
            $.ajax({
                type: 'GET', //THIS NEEDS TO BE GET
                url: 'http://api.stmik-bandung.ac.id:16080/server/public/api/kurikulum/'+ data,
                dataType: 'json',
                success: function (data) {
                    var datas = data.data[0];
                    console.log(datas);
                },error:function(){ 
                    console.log(data);
                }
    });
        }

        function editRowData(data) {
            var datas = data;
            console.log(data);
            //ajax
            document.getElementById("kode_mk").value = datas;
            // document.getElementById("kode_mk").value = "My value";
        }
        $('#closetabs').on('click', function(e){
            //ajax
        document.getElementById("nm_jurusan").innerHTML = ""
        document.getElementById("nm_mk").innerHTML = ""
        document.getElementById("kd_mk").innerHTML = ""
        document.getElementById("kd_jur").innerHTML = ""
        document.getElementById("kd_kur").innerHTML = ""
        document.getElementById("semester").innerHTML = ""
        document.getElementById("sks").innerHTML = ""
        })
     
        $('#smt2-tab').on('click', function(e){
            console.log("table2");
            table = $('#yajra-datatable-smt2').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                searching: true,
                sort: true,
                language: {
                    processing: '<span class="spinner-border text-primary"></span><span style="margin-left:10px;">Loading...</span>'
                    },     
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
                            data: 'kd_mk', 
                            render: ((data, type, row)=>{
                                var role = sessionStorage.getItem("role");
                                if(role == 'Teknik Informatika' || role == 'Sistem Informasi'){
                                    console.log('guuttt')
                                return '<div class="d-flex mx-1"><button type="button" onclick="editRowData(`'+data+'`)" class="mx-1 edit btn btn-success btn-sm" data-bs-toggle="tooltip" title="Lihat Silabus" data-toggle="modal" data-target="#modalseesilabus"><i class="fa-solid fa-eye"></i></button> <button type="button" onclick="detailRowData(`'+data+'`)" class="delete btn btn-primary btn-sm" data-bs-toggle="tooltip" title="Lihat Detail Mata Kuliah" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-eye"></i></button></div>'
                                }else{
                                    console.log('notguuttt')
                                    return '<div class="d-flex mx-1"><button type="button" onclick="editRowData(`'+data+'`)" class="mx-1 edit btn btn-success btn-sm" data-bs-toggle="tooltip" title="Tambah Silabus" data-toggle="modal" data-target="#modalsilabus"><i class="fa-solid fa-plus"></i></button> <button type="button" onclick="detailRowData(`'+data+'`)" class="delete btn btn-primary btn-sm" data-bs-toggle="tooltip" title="Lihat Detail Mata Kuliah" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-eye"></i></button></div>'
                                }
                            }),
                            name: 'action', 
                            orderable: true, 
                            searchable: true
                        },
                    ]
            });
            table.draw()
            if(role == "Teknik Informatika"|| role == "Sistem Informasi"){
                var jurusan = sessionStorage.getItem("role");
                table.column(4).search(jurusan).draw();
            }else{
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
                language: {
                    processing: '<span class="spinner-border text-primary"></span><span style="margin-left:10px;">Loading...</span>'
                    },    
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
                            data: 'kd_mk', 
                            render: ((data, type, row)=>{
                                var role = sessionStorage.getItem("role");
                                if(role == 'Teknik Informatika' || role == 'Sistem Informasi'){
                                    console.log('guuttt')
                                return '<div class="d-flex mx-1"><button type="button" onclick="editRowData(`'+data+'`)" class="mx-1 edit btn btn-success btn-sm" data-bs-toggle="tooltip" title="Lihat Silabus" data-toggle="modal" data-target="#modalseesilabus"><i class="fa-solid fa-eye"></i></button> <button type="button" onclick="detailRowData(`'+data+'`)" class="delete btn btn-primary btn-sm" data-bs-toggle="tooltip" title="Lihat Detail Mata Kuliah" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-eye"></i></button></div>'
                                }else{
                                    console.log('notguuttt')
                                    return '<div class="d-flex mx-1"><button type="button" onclick="editRowData(`'+data+'`)" class="mx-1 edit btn btn-success btn-sm" data-bs-toggle="tooltip" title="Tambah Silabus" data-toggle="modal" data-target="#modalsilabus"><i class="fa-solid fa-plus"></i></button> <button type="button" onclick="detailRowData(`'+data+'`)" class="delete btn btn-primary btn-sm" data-bs-toggle="tooltip" title="Lihat Detail Mata Kuliah" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-eye"></i></button></div>'
                                }
                            }),
                            name: 'action', 
                            orderable: true, 
                            searchable: true
                        },
                    ]
            });
            table.draw()
            if(role == "Teknik Informatika"|| role == "Sistem Informasi"){
                var jurusan = sessionStorage.getItem("role");
                table.column(4).search(jurusan).draw();
            }else{
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
                language: {
                    processing: '<span class="spinner-border text-primary"></span><span style="margin-left:10px;">Loading...</span>'
                    },     
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
                            data: 'kd_mk', 
                            render: ((data, type, row)=>{
                                var role = sessionStorage.getItem("role");
                                if(role == 'Teknik Informatika' || role == 'Sistem Informasi'){
                                    console.log('guuttt')
                                return '<div class="d-flex mx-1"><button type="button" onclick="editRowData(`'+data+'`)" class="mx-1 edit btn btn-success btn-sm" data-bs-toggle="tooltip" title="Lihat Silabus" data-toggle="modal" data-target="#modalseesilabus"><i class="fa-solid fa-eye"></i></button> <button type="button" onclick="detailRowData(`'+data+'`)" class="delete btn btn-primary btn-sm" data-bs-toggle="tooltip" title="Lihat Detail Mata Kuliah" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-eye"></i></button></div>'
                                }else{
                                    console.log('notguuttt')
                                    return '<div class="d-flex mx-1"><button type="button" onclick="editRowData(`'+data+'`)" class="mx-1 edit btn btn-success btn-sm" data-bs-toggle="tooltip" title="Tambah Silabus" data-toggle="modal" data-target="#modalsilabus"><i class="fa-solid fa-plus"></i></button> <button type="button" onclick="detailRowData(`'+data+'`)" class="delete btn btn-primary btn-sm" data-bs-toggle="tooltip" title="Lihat Detail Mata Kuliah" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-eye"></i></button></div>'
                                }
                            }),
                            name: 'action', 
                            orderable: true, 
                            searchable: true
                        },
                    ]
            });
            table.draw()
            if(role == "Teknik Informatika"|| role == "Sistem Informasi"){
                var jurusan = sessionStorage.getItem("role");
                table.column(4).search(jurusan).draw();
            }else{
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
                language: {
                    processing: '<span class="spinner-border text-primary"></span><span style="margin-left:10px;">Loading...</span>'
                    },     
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
                            data: 'kd_mk', 
                            render: ((data, type, row)=>{
                                var role = sessionStorage.getItem("role");
                                if(role == 'Teknik Informatika' || role == 'Sistem Informasi'){
                                    console.log('guuttt')
                                return '<div class="d-flex mx-1"><button type="button" onclick="editRowData(`'+data+'`)" class="mx-1 edit btn btn-success btn-sm" data-bs-toggle="tooltip" title="Lihat Silabus" data-toggle="modal" data-target="#modalseesilabus"><i class="fa-solid fa-eye"></i></button> <button type="button" onclick="detailRowData(`'+data+'`)" class="delete btn btn-primary btn-sm" data-bs-toggle="tooltip" title="Lihat Detail Mata Kuliah" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-eye"></i></button></div>'
                                }else{
                                    console.log('notguuttt')
                                    return '<div class="d-flex mx-1"><button type="button" onclick="editRowData(`'+data+'`)" class="mx-1 edit btn btn-success btn-sm" data-bs-toggle="tooltip" title="Tambah Silabus" data-toggle="modal" data-target="#modalsilabus"><i class="fa-solid fa-plus"></i></button> <button type="button" onclick="detailRowData(`'+data+'`)" class="delete btn btn-primary btn-sm" data-bs-toggle="tooltip" title="Lihat Detail Mata Kuliah" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-eye"></i></button></div>'
                                }
                            }),
                            name: 'action', 
                            orderable: true, 
                            searchable: true
                        },
                    ]
            });
            table.draw()
            if(role == "Teknik Informatika"|| role == "Sistem Informasi"){
                var jurusan = sessionStorage.getItem("role");
                table.column(4).search(jurusan).draw();
            }else{
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
            }
        });
        $('#smt6-tab').on('click', function(e){
            console.log("table6");
            table = $('#yajra-datatable-smt6').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                searching: true,
                sort: true,
                language: {
                    processing: '<span class="spinner-border text-primary"></span><span style="margin-left:10px;">Loading...</span>'
                    },     
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
                            data: 'kd_mk', 
                            render: ((data, type, row)=>{
                                var role = sessionStorage.getItem("role");
                                if(role == 'Teknik Informatika' || role == 'Sistem Informasi'){
                                    console.log('guuttt')
                                return '<div class="d-flex mx-1"><button type="button" onclick="editRowData(`'+data+'`)" class="mx-1 edit btn btn-success btn-sm" data-bs-toggle="tooltip" title="Lihat Silabus" data-toggle="modal" data-target="#modalseesilabus"><i class="fa-solid fa-eye"></i></button> <button type="button" onclick="detailRowData(`'+data+'`)" class="delete btn btn-primary btn-sm" data-bs-toggle="tooltip" title="Lihat Detail Mata Kuliah" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-eye"></i></button></div>'
                                }else{
                                    console.log('notguuttt')
                                    return '<div class="d-flex mx-1"><button type="button" onclick="editRowData(`'+data+'`)" class="mx-1 edit btn btn-success btn-sm" data-bs-toggle="tooltip" title="Tambah Silabus" data-toggle="modal" data-target="#modalsilabus"><i class="fa-solid fa-plus"></i></button> <button type="button" onclick="detailRowData(`'+data+'`)" class="delete btn btn-primary btn-sm" data-bs-toggle="tooltip" title="Lihat Detail Mata Kuliah" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-eye"></i></button></div>'
                                }
                            }),
                            name: 'action', 
                            orderable: true, 
                            searchable: true
                        },
                    ]
            });
            table.draw()
            if(role == "Teknik Informatika"|| role == "Sistem Informasi"){
                var jurusan = sessionStorage.getItem("role");
                table.column(4).search(jurusan).draw();
            }else{
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
                language: {
                    processing: '<span class="spinner-border text-primary"></span><span style="margin-left:10px;">Loading...</span>'
                    },     
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
                            data: 'kd_mk', 
                            render: ((data, type, row)=>{
                                var role = sessionStorage.getItem("role");
                                if(role == 'Teknik Informatika' || role == 'Sistem Informasi'){
                                    console.log('guuttt')
                                return '<div class="d-flex mx-1"><button type="button" onclick="editRowData(`'+data+'`)" class="mx-1 edit btn btn-success btn-sm" data-bs-toggle="tooltip" title="Lihat Silabus" data-toggle="modal" data-target="#modalseesilabus"><i class="fa-solid fa-eye"></i></button> <button type="button" onclick="detailRowData(`'+data+'`)" class="delete btn btn-primary btn-sm" data-bs-toggle="tooltip" title="Lihat Detail Mata Kuliah" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-eye"></i></button></div>'
                                }else{
                                    console.log('notguuttt')
                                    return '<div class="d-flex mx-1"><button type="button" onclick="editRowData(`'+data+'`)" class="mx-1 edit btn btn-success btn-sm" data-bs-toggle="tooltip" title="Tambah Silabus" data-toggle="modal" data-target="#modalsilabus"><i class="fa-solid fa-plus"></i></button> <button type="button" onclick="detailRowData(`'+data+'`)" class="delete btn btn-primary btn-sm" data-bs-toggle="tooltip" title="Lihat Detail Mata Kuliah" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-eye"></i></button></div>'
                                }
                            }),
                            name: 'action', 
                            orderable: true, 
                            searchable: true
                        },
                    ]
            });
            table.draw()
            if(role == "Teknik Informatika"|| role == "Sistem Informasi"){
                var jurusan = sessionStorage.getItem("role");
                table.column(4).search(jurusan).draw();
            }else{
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
                language: {
                    processing: '<span class="spinner-border text-primary"></span><span style="margin-left:10px;">Loading...</span>'
                    },     
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
                            data: 'kd_mk', 
                            render: ((data, type, row)=>{
                                var role = sessionStorage.getItem("role");
                                if(role == 'Teknik Informatika' || role == 'Sistem Informasi'){
                                    console.log('guuttt')
                                return '<div class="d-flex mx-1"><button type="button" onclick="editRowData(`'+data+'`)" class="mx-1 edit btn btn-success btn-sm" data-bs-toggle="tooltip" title="Lihat Silabus" data-toggle="modal" data-target="#modalseesilabus"><i class="fa-solid fa-eye"></i></button> <button type="button" onclick="detailRowData(`'+data+'`)" class="delete btn btn-primary btn-sm" data-bs-toggle="tooltip" title="Lihat Detail Mata Kuliah" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-eye"></i></button></div>'
                                }else{
                                    console.log('notguuttt')
                                    return '<div class="d-flex mx-1"><button type="button" onclick="editRowData(`'+data+'`)" class="mx-1 edit btn btn-success btn-sm" data-bs-toggle="tooltip" title="Tambah Silabus" data-toggle="modal" data-target="#modalsilabus"><i class="fa-solid fa-plus"></i></button> <button type="button" onclick="detailRowData(`'+data+'`)" class="delete btn btn-primary btn-sm" data-bs-toggle="tooltip" title="Lihat Detail Mata Kuliah" data-toggle="modal" data-target="#modaldetail"><i class="fa-solid fa-eye"></i></button></div>'
                                }
                            }),
                            name: 'action', 
                            orderable: true, 
                            searchable: true
                        },
                    ]
            });
            table.draw()
            if(role == "Teknik Informatika"|| role == "Sistem Informasi"){
                var jurusan = sessionStorage.getItem("role");
                table.column(4).search(jurusan).draw();
            }else{
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
            }
        })
    </script>
    @endpush
@endsection
