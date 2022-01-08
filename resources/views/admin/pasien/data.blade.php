@extends('admin.templates.default')
@section('content')

<!-- /.box-header -->
    <div class="box">
            <div class="box-body">
                <h4 style="text-transform: uppercase;"> Menampilkan Data Berdasarkan Tahun & Tanggal</h4>                   
                <div class="box-body">
                    {{-- <h5 class="box-title">MENAMPILKAN DATA BERDASARKAN TANGGAL</h5><br><br> --}}
                    <div class="form-group">
                        <div class="col-md-4 mb-3">
                        <label for="validationCustom03">TAHUN TANGGAL MULAI</label>
                        <input type="date" name="created_at" class="form-control" 
                        value="<?php if(isset($_POST['created_at'])) { echo old('created_at'); }else{ echo date('d-m-Y'); } ?>" id="validationCustom03" 
                        placeholder="{{ date('H:i:s | l-d-M-Y',strtotime('date')) }}" required>
                            @error('created_at')
                                <span class="help-block">{{ $message}}</span>
                            @enderror
                        <div class="invalid-feedback">
                            <h6 style="text-transform: capitalize;" style="color: red;"> Silahkan input tanggal </h6>
                        </div>
                        </div>
    
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom03">TAHUN TANGGAL AKHIR</label>
                            <input type="date" name="created_at" class="form-control" 
                            value="" id="validationCustom03" required>
                                @error('created_at')
                                    <span class="help-block">{{ $message}}</span>
                                @enderror
                            <div class="invalid-feedback">
                                <h6 style="text-transform: capitalize;" style="color: red;"> Silahkan input tanggal </h6>
                            </div>
                        </div>
    
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom03">DATE</label>
                            <input type="text"  class="form-control" 
                            id="date" placeholder="" >
                        </div>

                        <div class="form-group">
                        <div class="form-horizontal">
                            <label for="inputPassword3" class="col-sm-2 control-label">NO RM</label>
          
                            <div class="col-sm-10">
                              <input type="" name="" value="" class="form-control" id="inputPassword3" placeholder="">
                            </div>
                          </div>
                        </div>
    
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <tr>
                                    <td><input type="submit" name="hitung" class="btn btn-primary" value="SIMPAN"></td>
                                    <td><input type="reset" name="batal" class="btn btn-warning" value="RESET"></td>
                                </tr>
                            </div>
                        </div>
                    </div>
                </div>

            <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width='20'>NO RM</th>
                            <th width='20'>NAMA PASIEN</th>
                            <th width='20'>JENIS PASIEN</th>
                            <th width='5'> TANGGAL LAHIR</th>
                            <th width='5'> ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pasien as $ps)
                        <tr>
                            <td width='5'>{{ $ps->no_rekam_medik }}</td>
                            <td scope="row">{{ $ps->nama_pasien }}</td>
                            <td scope="row">{{ $ps->tanggal_lahir }}</td>
                            <td scope="row">{{ $ps->nama_jenis_pasien }}</td>
                            {{-- <td width='5'> </td> --}}
                            <td width='5'>  <a href="{{ route('admin.pasien.detail', $ps->pasien_id) }}" class="btn btn-info">DETAIL</a></td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
  
    
@endsection
@push('scripts')
    <script>
        $(function () {
            $('#dataTable').DataTable({


            });
        });
    </script>
@endpush



