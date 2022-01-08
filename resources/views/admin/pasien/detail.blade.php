@extends('admin.templates.default')
@section('content')
<section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> INFORMASI DETAIL DATA PASIEN
          <small class="pull-right">Date: 2/10/2014</small>
        </h2>
      </div>
      <!-- /.col -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="{{ route('admin.pasien.index') }}" target="_blank" class="btn btn-info"><i class=""></i> KEMBALI</a>
          <a onclick="window.print()" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> PRINT DATA PASIEN</a>
          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Cetak Kartu</a>
          <a href="{{ route('admin.pasien.edit', $pasien->pasien_id) }}" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Edit Pasien</a>
          <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> KEMBALI</button>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> EDIT DATA PASIEN</button>
        </div>
      </div>

    </div>

    <div class="row">   
      <!-- /.col -->
      <div class="col-xs-12">
        <p class="lead">JENIS PASIEN : {{ $pasien->jenispasien_id }}</p>

        <div class="table-responsive">
          <table class="table">
            <tbody><tr>
              <th style="width:50%">NIP </th>
              <td>$250.30</td>
            </tr>
            <tr>
              <th>NO REKAM MEDIK</th>
              <td>{{ $pasien->no_rekam_medik }}</td>
            </tr>
            <tr>
              <th>POLI KLINIK</th>
              <td>{{ $pasien->nama_poliklinik }}</td>
            </tr>
            <tr>
              <th>NAMA PASIEN</th>
              <td>{{ $pasien->nama_pasien }}</td>
            </tr>
            <tr>
              <th>JENIS KELAMIN</th>
              <td>$265.24</td>
            </tr>
            <tr>
              <th>GOLONGAN DARAH</th>
              <td>{{ $pasien->nama_golongan_darah }}</td>
            </tr>
            <tr>
              <th>AGAMA</th>
              <td>{{ $pasien->nama_agama }}</td>
            </tr>
            <tr>
              <th>STATUS NIKAN</th>
              <td>{{ $pasien->nama_status_perkawinan }}</td>
            </tr>
            <tr>
              <th>PENDIDIKAN</th>
              <td>{{ $pasien->nama_pendidikan }}</td>
            </tr>
            <tr>
              <th>PEKERJAAN</th>
              <td>{{ $pasien->nama_pekerjaan }}</td>
            </tr>
            <tr>
              <th>SUKU</th>
              <td>{{ $pasien->nama_suku }}</td>
            </tr>
       
          </tbody>
        </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
  </section>
@endsection
