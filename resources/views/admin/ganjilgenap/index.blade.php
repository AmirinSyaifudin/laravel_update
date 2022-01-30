@extends('admin.templates.default')
@section('content')
<h1> DATA GANJIL GENAP</h1>

<!-- /.box-header -->
<div class="box">
    <div class="box-header">
        <center> <h3 class="box-title" style="text-transform: uppercase;">Silahkan input data </h3><br><br> </center>
        <form action="{{ route('admin.ganjilgenap.store') }}"  method="POST" enctype="multipart/form-data" class="form-horizontal" style="max-width:500px">
            @csrf
    
            <div class="form-group" @error('napol') has-error @enderror">
                <label for="inputEmail3" class="col-sm-2 control-label">NAPOL = </label>
                    <div class="col-sm-10">
                        <input type="text" name="napol" class="form-control" id="inputEmail3" 
                        value="{{ old('napol') }}" placeholder="Silahkan masukkan Napol tanggal menggunakan spasi !!!">
                        @error('napol')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <tr>
                        <td><input type="submit" class="btn btn-primary" value="SIMPAN"></td>
                        <td><input type="reset" name="batal" class="btn btn-warning" value="Reset"></td>
                    </tr>
                </div>
            </div> 
        </form>
        </div>
        
            <div class="box-body">
                <hr>
                <center>  <h4 style="text-transform: uppercase;"> Menampilkan Data Berdasarkan Tahun & Tanggal</h4> </center>
                {{-- <h5 class="box-title">MENAMPILKAN DATA BERDASARKAN TANGGAL</h5><br><br> --}}
                <div class="form-group">
                    <div class="col-md-4 mb-3" align="center" style="color: red;">
                      <label for="validationCustom03">TANGGAL MASUK</label>
                      <input type="date" name="tanggal" class="form-control" 
                      value="
                      <?php 
                          if(isset($_POST['tanggal'])) { 
                              echo old('tanggal');
                          } else { 
                              echo date('D-d-M-Y'); } 
                       ?>
                      "
                       id="validationCustom03" placeholder="d-M-Y" required>
                        @error('')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                      <div class="invalid-feedback">
                        <h6 style="text-transform: capitalize;" style="color: red;"> Silahkan input tanggal </h6>
                      </div>
                    </div>

                    <div class="col-md-4 mb-3" align="center" style="color: red;">
                        <label for="validationCustom03">TANGGAL SELESAI</label>
                        <input type="date" name="tanggal_selesai_cuti" class="form-control" 
                        value="" id="validationCustom03" required>
                            @error('')
                                <span class="help-block">{{ $message}}</span>
                            @enderror
                        <div class="invalid-feedback">
                            <h6 style="text-transform: capitalize;" style="color: red;"> Silahkan input tanggal </h6>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <tr>
                                <td><input align="center" type="submit" name="hitung" class="btn btn-primary" value="SIMPAN"></td>
                                <td><input align="center" type="reset" name="batal" class="btn btn-warning" value="RESET"></td>
                            </tr>
                        </div>
                    </div>
                  </div>
                </div>

                <hr>

                <table id="dataTable" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width='5'>ID</th>
                                {{-- <th width='5'>TANGGAL</th> --}}
                                <th width='5'>TANGGAL MULAI</th>
                                <th width='5'>NAPOL</th>
                                <th width='5'>STATUS</th>
                                <th width='5'></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ganjilgenap as $jangkrik)
                                <tr>
                                    <td width='5'>  {{ $loop-> index +1 }} </td>
                                    {{-- <td width='5'>  {{ date('H:i:s | l-d-M-Y',strtotime($jangkrik->tanggal_mulai)) }}</td> --}}
                                    <td width='5'>  {{ date('H:i:s | l-d-M-Y',strtotime($jangkrik->created_at)) }}</td>
                                    <td width='20'> {{ $jangkrik->napol }}</td>
                                    <td width='20'> <a class="btn btn-info">{{ $jangkrik->status }}</a></td>
                                    <td width='5'>
                                        <form action="{{ route('admin.ganjilgenap.destroy', $jangkrik->ganjilgenap_id) }}" method="post" style="display:inline;">
                                            {{ csrf_field() }}
                                            {{ method_field ('delete')}}
                                            <button type="submit"  class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">DELETE</button>
                                        </form>
                                    </td>
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

