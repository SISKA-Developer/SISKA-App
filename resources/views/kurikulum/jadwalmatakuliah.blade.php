@extends('temp.v_temp')
@section('isicontent')
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="#">SISKA</a></li>
            <li><a href="#">Kurikulum</a></li>
            <li>Jadwal Mata Kuliah</li>
        </ul>
        {{-- @if (request()->session()->get('role') == 'Admin')
        <div class="my-2">
            <a href="/tambahjadwal" class="btn btn-primary mx-2">Tambah Jadwal</a>
            </div>
        @endif --}}

        <div class="card">
            <div class="card-header d-flex justify-content-space-between">
                <div class="col-6 p-0">
                    <h5>Jadwal Matakuliah</h5>
                </div>
                {{-- <div class="col-6 d-flex justify-content-end">
                    <button class="mx-1 p-1" data-bs-container="container" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Import File CSV"><i class="fa fa-file-o"></i></button>
                    <button class="mx-1 p-1" data-bs-container="container" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Add File"><i class="fa fa-plus"></i></button>
                </div> --}}
            </div>
            <div class="card-body">
                <table id="yajra-datatable-jadwal" class="table table-striped table-bordered dt-responsive yajra-datatable" style="background-color: white">
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
                            {{-- <th>Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
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
                        <div class="col-4 col-sm-6">
                            <input type="text" name="nm_mk" value="" id="nm_mk">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7 col-sm-5">
                          Kode Matakuliah
                        </div>
                        <div class="col-1 col-sm-1">
                            :
                          </div>
                        <div class="col-4 col-sm-6">
                            <input type="text" name="kd_mk" value="" id="kd_mk">
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
                          Nama Jurusan Dalam Bahasa Internasional
                        </div>
                        <div class="col-1 col-sm-1">
                            :
                          </div>
                        <div class="col-4 col-sm-6" id="nm_intl">
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

    @push('matakuliah')
    <script>
      $(document).ready(function(){
     var table = $('#yajra-datatable-jadwal').DataTable({
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
                table.column(9).visible(false);
                // var nim = ""
                // table.column(9).search(nim).draw();
                table.draw()

});
function ubahjadwal(dataId) {
    console.log(dataId);
    $.ajax({
        type: 'GET',
        url: `http://api.stmikbandung.test:82/api/jadwal/${dataId}`,
        dataType: 'json',
        success: function (response) {
            var data = response.data;
            console.log(data);

            // Map field names to corresponding HTML element IDs
            const fieldMappings = {
                'kd_mk': 'kd_mk',
                'hari': 'hari',
                'masuk': 'masuk',
                'selesai': 'selesai',
                'nama_dosen': 'nama_dosen',
                'kelas': 'kelas',
                'ruangan': 'ruangan',
            };

            // Loop through the fieldMappings and update the HTML elements
            Object.keys(fieldMappings).forEach(field => {
                const elementId = fieldMappings[field];
                const value = data[field] || '-';
                $(`#${elementId}`).append(`<p>${value}</p>`);
            });
        },
        error: function (error) {
            console.log(error);
        }
    });
}


</script>
    @endpush
@endsection
