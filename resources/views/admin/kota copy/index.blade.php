@extends('admin.templates.default')
@section('content')
<h1>KOTA</h1>

 <!-- /.box-header -->
 <div class="box">
        <div class="box-header">
              <h3 class="box-title">DATA KOTA</h3><br><br>
              
              <a class="btn btn-success" href="javascript:void(0)" id="createNewKota">Tambah Data Kota</a>
              <a href="" class="btn btn-primary">Export Excel</a> 
              <a href="" class="btn btn-primary">Export PDF</a>   
         </div>
         <div class="box-body">
            <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAMA KOTA</th>
                            <th>NAMA PROVINSI</th>
                            <th>CODE POS</th>
                            <th>KETERANGAN</th>
                            <th width="180px">ACTION</th>
                        </tr>
                    </thead>
                    {{-- <tbody>
                    </tbody> --}}
            </table>
        </div>
</div>

 
{{-- create ajax --}}
<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="kotaForm" name="kotaForm" class="form-horizontal">

                   <input type="hidden" name="kota_id" id="kota_id">
                   
                   <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">NAMA KOTA</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="nama_kota" name="nama_kota" 
                            placeholder="Enter Nama Kota" value="" maxlength="50" required="">
                        </div>
                    </div>   
                    
                    {{-- <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">NAMA PROVINSI</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="nama_provinsi" name="nama_provinsi" 
                            placeholder="Enter Nama Provinsi" value="" maxlength="50" required="">
                        </div>
                    </div>  --}}

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">NAMA PROVINSI</label>
                        <div class="col-sm-10">
                          {{-- <input name="jenis_pasien_id" class="form-control" id="inputPassword3" placeholder=""> --}}
                        
                          <select name="provinsi" id="provinsi" class="form-control select2">
                            {{-- @foreach ($provinsi as $p)
                                   <option value="{{ $p->provinsi_id}}">{{ $p->nama_provinsi}}</option>
                            @endforeach --}}
                               @error('jenispasien')
                                   <span class="help-block">{{ $message}}</span>
                               @enderror
                           </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">KODE POS</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="kode_pod" name="kode_pos" 
                            placeholder="Enter Nama Kota" value="" maxlength="50" required="">
                        </div>
                    </div> 

                    <div class="form-group">
                        <label class="col-sm-2 control-label">KETERANGAN</label>
                        <div class="col-sm-12">
                            <textarea id="keterangan" name="keterangan" required="" 
                            placeholder="Enter Keterangan" class="form-control"></textarea>
                        </div>
                    </div>
      
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Simpan</button>
                            <button type="submit" class="btn btn-info" id="" value="">Kembali</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


{{-- editajax  --}}
<div class="modal fade" id="ajaxModelEdit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="updatekotaForm" name="kotaForm" class="form-horizontal">

                   <input type="hidden" name="kota_id" id="kota_id">
                   
                   <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">NAMA KOTA</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="kota" name="nama_kota" 
                            placeholder="Enter Nama Kota" value="" maxlength="50" required="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">NAMA PROVINSI</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="nama_provinsi" name="nama_provinsi" 
                            placeholder="Enter Nama Provinsi" value="" maxlength="50" required="">
                        </div>
                    </div> 

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">NAMA PROVINSI</label>
                        <div class="col-sm-10">
                          {{-- <input name="jenis_pasien_id" class="form-control" id="inputPassword3" placeholder=""> --}}
                        
                          <select name="provinsi_id" id="" class="form-control select2">
                            {{-- @foreach ($provinsi as $p)
                                   <option value="{{ $p->provinsi_id}}">{{ $p->nama_provinsi}}</option>
                            @endforeach --}}
                               @error('jenispasien')
                                   <span class="help-block">{{ $message}}</span>
                               @enderror
                           </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">KODE POS</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="kode_pos" name="kode_pos" 
                            placeholder="Enter Nama Kota" value="" maxlength="50" required="">
                        </div>
                    </div>                            

                    <div class="form-group">
                        <label class="col-sm-2 control-label">KETERANGAN</label>
                        <div class="col-sm-12">
                            <textarea id="keterangan-edit" name="keterangan" required="" 
                            placeholder="Enter Keterangan" class="form-control"></textarea>
                        </div>
                    </div>
      
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            {{ method_field('PUT') }}
                            <input type="hidden" name="id" value="" id="kota_id_edit">
                            <button type="submit" class="btn btn-primary"value="create">Simpan</button>
                            <button  class="btn btn-info" id="" value="">Kembali</button>
                        </div>
                    </div>
                </form>
            </div>
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

    <script type="text/javascript">
        $(function (){
    
                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                    });
    
                        // Index
                        var table = $('#dataTable').DataTable({
                            "pageLength": 50,
                            processing: true,
                            serverSide: true,
                            ajax: '{{ route('admin.kota.index') }}',
                            columns: [
                                { data: 'DT_RowIndex', orderable: false, searchable : false}, 
                                // {data: 'provinsi_id', name: 'provinsi_id'},
                                {data: 'nama_kota', name: 'nama_kota'},
                                {data: 'nama_provinsi', name: 'nama_provinsi'},
                                {data: 'kode_pos', name: 'kode_pos'},
                                {data: 'keterangan', name: 'keterangan'},
                                {data: 'action', name: 'action', orderable: false, searchable: false},
                            ]
                        }); 

                        //create 
                        $('#createNewKota').click(function () {
                            $('#saveBtn').val("create-kota");
                            $('#kota_id').val("");
                            $('#kotaForm').trigger("reset");
                            $('#modelHeading').val("create New Kota");
                            $('#ajaxModel').modal("show");
                        });

                        //createupdate
                        $('#saveBtn').click(function (e) {
                        e.preventDefault();
                        $(this).html('Save');
                            $.ajax({
                                data: $('#kotaForm').serialize(),
                                url: "{{ route('admin.kota.store') }}",
                                type: "POST",
                                dataType: 'json',
                                success: function (data) {
                                    $('#kotaForm').trigger("reset");
                                    $('#ajaxModel').modal('hide');
                                    table.draw();
                                },
                                error: function (data) {
                                    console.log('Error:', data);
                                    $('#saveBtn').html('Save Changes');
                                }
                            });
                        });
 
                       //edit
                        $('body').on('click', '.edit', function () {
                            $('#kota').val($(this).data('title'));
                            $('#keterangan-edit').val($(this).data('keterangan'));
                            $('#kota_id_edit').val($(this).data('id'));
                            $('#ajaxModelEdit').modal('show');
                            return false;
                        });



                        //delete
                        $('body').on('click', '.deleteKota', function () {
                            var kota_id = $(this).data("kota_id");
                            confirm("Yakin data ingin di hapus !!!");
                                $.ajax({
                                    type: "DELETE",
                                    url: "{{ route('admin.kota.destroy') }}",
                                    data: {id:provinsi_id,_method:'delete'},
                                    function (data) {
                                        //table.draw();
                                        //console.log('kene');
                                        $('#dataTable').DataTable().fnDestroy();
                                        datatable();
                                    },
                                    error: function (data) {
                                        console.log('Error:', data);
                                    }
                                });
                                table.draw();
                        });
                                           
            }); 
    
    </script>



  
@endpush

