@extends('admin.templates.default')
@section('content')
<h1>KABUPATEN</h1>

 <!-- /.box-header -->
 <div class="box">
        <div class="box-header">
              <h3 class="box-title">DATA KOTA</h3><br><br>
              
              <a class="btn btn-success" href="javascript:void(0)" id="createNewKabupaten">Tambah Data Kabupaten</a>
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
                            <th>CODE POS</th>
                            <th>KETERANGAN</th>
                            <th width="180px">ACTION</th>
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

 
{{-- create ajax --}}
<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="kabupatenForm" name="kabupatenForm" class="form-horizontal">

                   <input type="hidden" name="kabupaten_id" id="kabupaten_id">
                   
                   <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">NAMA KABUPATEN</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="nama_kabupaten" name="nama_kabupaten" 
                            placeholder="Enter Nama Kabupaten" value="" maxlength="50" required="">
                        </div>
                    </div>   
                    
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">NAMA KOTA</label>
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
                <form id="updatekabupatenForm" name="kabupatenForm" class="form-horizontal">

                   <input type="hidden" name="kabupaten_id" id="kabupaten_id">
                   
                   <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">NAMA KOTA</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="kota" name="nama_kota" 
                            placeholder="Enter Nama Kota" value="" maxlength="50" required="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">NAMA KOTA</label>
                        <div class="col-sm-10">
                          {{-- <input name="jenis_pasien_id" class="form-control" id="inputPassword3" placeholder=""> --}}
                        
                          <select name="kota_id" id="" class="form-control select2">
                            {{-- @foreach ($provinsi as $p)
                                   <option value="{{ $p->provinsi_id}}">{{ $p->nama_provinsi}}</option>
                            @endforeach --}}
                               @error('kota')
                                   <span class="help-block">{{ $message}}</span>
                               @enderror
                           </select>
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
                               @error('provinsi')
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
                            <input type="hidden" name="id" value="" id="kabupaten_id_edit">
                            <button type="submit" class="btn btn-primary"value="create">Simpan</button>
                            <button  class="btn btn-info" id="" value="">Kembali</button>
                        </div>
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
                            ajax: '{{ route('admin.kabupaten.index') }}',
                            columns: [
                                { data: 'DT_RowIndex', orderable: false, searchable : false}, 
                                // {data: 'provinsi_id', name: 'provinsi_id'},
                                {data: 'nama_kabupaten', name: 'nama_kabupaten'},
                                {data: 'nama_kota', name: 'nama_kota'},
                                {data: 'nama_provinsi', name: 'nama_provinsi'},
                                {data: 'kode_pos', name: 'kode_pos'},
                                {data: 'keterangan', name: 'keterangan'},
                                {data: 'action', name: 'action', orderable: false, searchable: false},
                            ]
                        }); 

                        //create 
                        $('#createNewKabupaten').click(function () {
                            $('#saveBtn').val("create-kabupaten");
                            $('#kabupaten_id').val("");
                            $('#kabupatenForm').trigger("reset");
                            $('#modelHeading').val("create New Kabupaten");
                            $('#ajaxModel').modal("show");
                        });

                        //createupdate
                        $('#saveBtn').click(function (e) {
                        e.preventDefault();
                        $(this).html('Save');
                            $.ajax({
                                data: $('#kabupatenForm').serialize(),
                                url: "{{ route('admin.kabupaten.store') }}",
                                type: "POST",
                                dataType: 'json',
                                success: function (data) {
                                    $('#kabupatenForm').trigger("reset");
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
                        $('#kabupaten').val($(this).data('title'));
                        $('#keterangan-edit').val($(this).data('keterangan'));
                        $('#kabupaten_id_edit').val($(this).data('id'));
                        $('#ajaxModelEdit').modal('show');
                        return false;
                    });
                    
                
                       
            }); 
    
    </script>



  
@endpush

