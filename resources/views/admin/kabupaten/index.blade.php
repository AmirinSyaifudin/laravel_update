@extends('admin.templates.default')
@section('content')
<h1>KABUPATEN</h1>

 <!-- /.box-header -->
 <div class="box">
        <div class="box-header">
              <h3 class="box-title">DATA KABUPATEN</h3><br><br>
              <h3 class="box-title">DATA KABUPATEN</h3><br><br>
              <button type="button" class="btn btn-primary" data-toggle="modal" 
                      data-target="#exampleModal"><a>ADD DATA KABUPATEN</a>
              </button>
              <a href="" class="btn btn-primary">Export Excel</a> 
              <a href="" class="btn btn-primary">Export PDF</a>
         </div>
         <div class="box-body">

            <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAMA KABUPATEN</th>
                            <th>NAMA KOTA</th>
                            <th>NAMA PROVINSI</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    {{-- <tbody>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                        </tr>
                    </tbody> --}}
            </table>
        </div>
</div>

 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
         <div class="modal-content">
              <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">ADD DATA KOTA</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                   </button>
               </div>
         

           <div class="modal-body">                    
    
               <form action="{{ route('admin.kota.create') }}" method="POST" enctype="multipart/form-data"> 
                       @csrf

                       <div class="form-group @error('nama_kota') has-error @enderror">
                            <label for="">NAMA KABUPATEN</label>
                            <input type="text" name="nama_kota" class="form-control" placeholder=""
                            value="{{ old('nama_kota') }}">
                            @error('nama_kota')
                                <span class="help-block">{{ $message}}</span>
                            @enderror
                        </div>

                       <div class="form-group>
                            <label for="">NAMA PROVINSI</label>
                            <select name="provinsi_id" id="validationCustom03" class="form-control select2">
                               
                                @error('provinsi')
                                    <span class="help-block">{{ $message}}</span>
                                @enderror
                            </select>
                        </div>

                        <div class="form-group>
                            <label for="">NAMA KOTA</label>
                            <select name="provinsi_id" id="validationCustom03" class="form-control select2">
                               
                                @error('provinsi')
                                    <span class="help-block">{{ $message}}</span>
                                @enderror
                            </select>
                        </div>    

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">KETERANGAN</label>
                            <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3">{{old('keterangan')}}</textarea>
                        </div>  

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">KEMBALI</button>
                            <button type="submit" class="btn btn-primary">SIMPAN DATA</button>
                        </div>
                </form>
                
           </div>
       </div>
   </div>
 </div>

 

<form action="" method="post" id="deleteForm">
    @csrf
    @method("DELETE")
    <input type="submit" value="Hapus" style="display:none">
</form>


@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endpush


@push('scripts')

<script src="{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

    
    <script src="{{ asset('/assets/plugins/bs.notify.min.js')}}"></script>
    @include('admin.templates.partials.alerts')
    <!-- //jquery -->
    <script>
        $(function () {
            $('#dataTable').DataTable({
                "pageLength": 50,
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.kabupaten.dataKabupaten') }}',
                columns: [
                    //{ data: 'id'},
                    { data: 'DT_RowIndex', orderable: false, searchable : false}, 
                    { data: 'nama_kabupaten'},
                    { data: 'nama_kota'},
                    { data: 'nama_provinsi'},
                    { data: 'action'}
                ]
            });
        });
    </script>
@endpush
