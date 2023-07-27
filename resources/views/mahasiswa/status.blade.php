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
                    <div class="daftarMatkul table-responsive" >
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
                    <div class="statusMahasiswa table-responsive" >
                        <table id="statusMhs" class="table table-striped table-bordered dt-responsive" style="background-color: white">
                        <span id="total"></span>
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
                            <!-- <tr>
                                <td>{{date('Y')}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr> -->
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
        var table = $('#daftarMK').DataTable({
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
            ],
        });

    // statusMhs
        var test = table.columns(3).count() + 1;
        // console.log(test);
        sessionStorage.setItem('nm_mk', test)
        
        // var sks = table.columns(4).data().sum();
        // console.log(sks);
       
        // sessionStorage.setItem('sks', sks)

        var nim = sessionStorage.getItem("nim");

        $.ajax({
            type: 'GET', //THIS NEEDS TO BE GET
            url: 'http://api.stmik-bandung.ac.id:16080/server/public/api/mahasiswa/detail/'+ nim,
            dataType: 'json',
            success: function (data) {
                var datas = data.data;
                // console.log(data);
                $('#statusMhs').DataTable({
                    processing: true,
                    serverSide: true,
                    responsive: true,
                    searching: true,
                    sort: true,
                    columns: [
                        {
                            data: null, 
                            render: ((data)=>{
                                const year = new Date()
                                return year.getFullYear()
                            }),
                        },
                        {
                            data: null,
                            render: ((data)=>{
                                if(datas.masuk_tahun % 2 == 0 ){
                                    return 'Genap';
                                }else{   
                                    return 'Ganjil' 
                                }
                            }),
                        },
                        {
                            data: null, 
                            render: ((data)=>{
                                if(datas.sts_mhs == null || datas.sts_mhs == "null"){
                                    return 'Tidak Aktif';
                                }else{   
                                    return 'Aktif' 
                                }
                            }),
                        },
                        {
                            data: null, 
                            render: ((data)=>{
                                const MK = sessionStorage.getItem('nm_mk')
                                return MK
                            }),
                        },
                        {
                            data: null, 
                            // render: ((data)=>{
                            //     const SKS = sessionStorage.getItem('sks')
                            //     return SKS
                            // }),
                        }
                    ],
                    // drawCallback: function() {
                    //     var sks = table.columns(5).data().sum();
                    //     $('#total').html(sum);
                    // }
                })
            },error:function(){ 
                console.log(data);
            }
        })
    });

</script>

@endpush
@endsection