@extends('temp.v_temp')
@section('isicontent')
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="#">SISKA</a></li>
            <li><a href="#">Kurikulum</a></li>
            <li>Tujuan dan Capaian</li>
        </ul>
        <div class="card">
            <div class="card-header d-flex justify-content-space-between">
                <div class="col-6 p-0">
                    <h5>Tujuan dan Capaian Program Studi</h5>
                </div>
                {{-- <div class="col-6 d-flex justify-content-end">
                    <button class="mx-1 p-1" data-bs-container="container" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Import File CSV"><i class="fa fa-file-o"></i></button>
                    <button class="mx-1 p-1" data-bs-container="container" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Add File"><i class="fa fa-plus"></i></button>
                </div> --}}
            </div>
            <div class="card-body">
                <table id="yajra-datatable-jadwal" class="table table-striped table-bordered dt-responsive yajra-datatable" style="background-color: white">
                    <thead>
                    </thead>
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>Tujuan Program Studi Teknik Informatika</th>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>S1 Teknik Informatika berfokus pada perkembangan teknologi informasi yang menuntut tenaga ahli yang cerdas dan andal di bidangnya. Program Studi S1 Teknik Informatika mempersiapkan lulusan yang sigap menjawab tantangan global ini. Mahasiswa Program Studi S1 Teknik Informatika (S1 IT) akan mempelajari konsep ilmu computer science serta implementasi praktis software engineering.</td>
                        </tr>
                        <tr>
                            <th>No</th>
                            <th>Capaian Program Studi Teknik Informatika</th>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Lulusan Program Studi Teknik Informatika STMIK BANDUNG adalah generasi muda yang memiliki kecakapan dalam rekayasa perangkat lunak, implementasi jaringan, robotik dan multimedia, sehingga mampu dalam merancang dan mengimplementasikan solusi teknologi intormasi yang terintegrasi.</td>
                        </tr>

                        <tr>
                            <th>No</th>
                            <th>Tujuan Program Studi Sistem Informasi</th>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>S1 Sistem Informasi merupakan kombinasi dari teknologi informasi dan aktivitas orang yang menggunakan teknologi itu untuk mendukung operasi dan manajemen. Dalam arti yang sangat luas, istilah sistem informasi yang sering digunakan merujuk kepada interaksi antara orang, proses algoritmik, data, dan teknologi. Dalam pengertian ini, istilah ini digunakan untuk merujuk tidak hanya pada penggunaan organisasi teknologi informasi dan komunikasi (TIK), tetapi juga untuk cara di mana orang berinteraksi dengan teknologi ini dalam mendukung proses bisnis.</td>
                        </tr>
                        <tr>
                            <th>No</th>
                            <th>Capaian Program Studi Sistem Informasi</th>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Lulusan Program Studi Sistem Informasi STMIK BANDUNG adalah generasi muda yang memiliki kecakapan dalam rekayasa perangkat lunak, implementasi jaringan, robotik dan multimedia, sehingga mampu dalam merancang dan mengimplementasikan solusi teknologi intormasi yang terintegrasi.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection