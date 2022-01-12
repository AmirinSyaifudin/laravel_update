@extends('admin.templates.default')
@section('content')
<h1>PROVINSI</h1>

 <!-- /.box-header -->
 <div class="box">
        <div class="box-header">
              <h3 class="box-title">DATA PENULIS</h3><br><br>
              <button type="button" class="btn btn-primary" data-toggle="modal" 
                      data-target="#exampleModal"><a>ADD DATA PROVINSI</a>
              </button>
              <a href="" class="btn btn-primary">Export Excel</a> 
              <a href="" class="btn btn-primary">Export PDF</a>     
         </div>
         <div class="box-body">

            <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAMA PROVINSI</th>
                            <th>TANGGAL JADI PROVINSI</th>
                            <th>KETERANGAN</th>
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
                       <h5 class="modal-title" id="exampleModalLabel">ADD DATA PROVINSI</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                       </button>
                   </div>

               <div class="modal-body">                    
        
                   <form action="{{ route('admin.provinsi.store') }}" method="POST" enctype="multipart/form-data"> 
                           @csrf
                           <div class="form-group @error('nama_provinsi') has-error @enderror">
                            <label for="">nama provinsi</label>
                            <input type="text" name="nama_provinsi" class="form-control" placeholder=""
                            value="{{ old('nama_provinsi') }}">
                            @error('nama_provinsi')
                                <span class="help-block">{{ $message}}</span>
                            @enderror
                        </div>

                        <div class="form-group @error('tanggal_jadi_provinsi') has-error @enderror">
                            <label for="">tanggal jadi provinsi</label>
                            <input type="date" name="tanggal_jadi_provinsi" class="form-control" placeholder=""
                            value="{{ old('tanggal_jadi_provinsi') }}">
                            @error('tanggal_jadi_provinsi')
                                <span class="help-block">{{ $message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">KETERANGAN</label>
                            <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3">{{old('keterangan')}}</textarea>
                        </div>  

                       </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">KEMBALI</button>
                       <button type="submit" class="btn btn-primary">SIMPAN DATA</button>
                   </form>
               </div>
           </div>
       </div>




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
                "pageLength": 5,
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.provinsi.data') }}',
                columns: [
                    //{ data: 'id'},
                    { data: 'DT_RowIndex', orderable: false, searchable : false}, 
                    { data: 'nama_provinsi'},
                    { data: 'tanggal_jadi_provinsi'},
                    { data: 'keterangan'},
                    { data: 'action'}
                ]
            });
        });
    </script>
@endpush




