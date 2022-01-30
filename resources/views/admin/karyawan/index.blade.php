@extends('admin.templates.default')
@section('content')
<h1>DATA AJAX KARYAWAN</h1>
<!-- /.box-header -->
    <div class="box">
        <div class="box-header">
                <h3 class="box-title">DATA KARYAWAN AJAX</h3><br><br>
                {{-- <a href="{{ route('admin.karyawan.create') }}" class="btn btn-primary">TAMBAH DATA KARYAWAN</a>
             --}}
                <a class="btn btn-success" href="javascript:void(0)" id="createNewKaryawan">ADD DATA KARYAWAN</a>
                <a href="" class="btn btn-primary">EXPORT EXCEL</a>
                <a href="" class="btn btn-primary">EXPORT PDF</a>
            </div>
            <div class="box-body">

            <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width='5'>ID</th>
                            <th width='20'>NO INDUK</th>
                            <th >NAMA</th>
                            <th width='20'>FOTO</th>
                            <th >ALAMAT</th>
                            <th >TANGGAL LAHIR</th>
                            <th >TANGGAL BERGABUNG</th>
                            <th width='150px'>ACTION</th>
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
                <form id="karyawanForm" name="karyawanForm" class="form-horizontal">

                   <input type="hidden" name="karyawan_id" id="karyawan_id">

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">NO INDUK</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="no_induk" name="no_induk" 
                            placeholder="Enter No Induk" value="" maxlength="50" required="">
                        </div>
                    </div>  
                    
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">NAMA KARYAWAN</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="nama" name="nama" 
                            placeholder="Enter Nama Provinsi" value="" maxlength="50" required="">
                        </div>
                    </div> 
                    
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">UPLOAD FOTO</label>
                        <div class="col-sm-12">
                            <input type="file" name="foto" class="form-control" 
                            placeholder="" value=""  required="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">ALAMAT</label>
                        <div class="col-sm-12">
                            <textarea id="alamat" name="alamat" required="" 
                            placeholder="Enter Keterangan" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">TANGGAL LAHIR</label>
                        <div class="col-sm-12">
                            <input type="date" name="tanggal_lahir" class="form-control" 
                            placeholder="" value=""  required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">TANGGAL BERGABUNG</label>
                        <div class="col-sm-12">
                            <input type="date" name="tanggal_bergabung" class="form-control" 
                            placeholder="" value=""  required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" class="btn btn-primary" id="saveBtn" value="create">SIMPAN</button>
                            <button type="submit" class="btn btn-info" id="" value="">KEMBALI</button>
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
                <form id="updateprovinsiForm" name="provinsiForm" class="form-horizontal">

                   <input type="hidden" name="karyawan_id" id="karyawan_id">
                   
                   <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">NO INDUK</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="no_induk" name="no_induk" 
                        placeholder="Enter No Induk" value="" maxlength="50" required="">
                    </div>
                </div>  
                
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">NAMA KARYAWAN</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="nama" name="nama" 
                        placeholder="Enter Nama Provinsi" value="" maxlength="50" required="">
                    </div>
                </div> 
                
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">UPLOAD FOTO</label>
                    <div class="col-sm-12">
                        <input type="file" name="foto" class="form-control" 
                        placeholder="" value=""  required="">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">ALAMAT</label>
                    <div class="col-sm-12">
                        <textarea id="alamat" name="alamat" required="" 
                        placeholder="Enter Keterangan" class="form-control"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">TANGGAL LAHIR</label>
                    <div class="col-sm-12">
                        <input type="date" name="tanggal_lahir" class="form-control" 
                        placeholder="" value=""  required="">
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">TANGGAL BERGABUNG</label>
                    <div class="col-sm-12">
                        <input type="date" name="tanggal_bergabung" class="form-control" 
                        placeholder="" value=""  required="">
                    </div>
                </div>
      
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            {{ method_field('PUT') }}
                            <input type="hidden" name="id" value="" id="provinsi_id_edit">
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
                        ajax: '{{ route('admin.karyawan.index') }}',
                        columns: [
                            { data: 'DT_RowIndex', orderable: false, searchable : false}, 
                            {data: 'no_induk', name: 'no_induk'},
                            {data: 'nama', name: 'nama'},
                            {data: 'cover', name: 'cover'},
                            {data: 'alamat', name: 'alamat'},
                            {data: 'tanggal_lahir', name: 'tanggal_lahir'},
                            {data: 'tanggal_bergabung', name: 'tanggal_bergabung'},
                            {data: 'action', name: 'action', orderable: false, searchable: false},
                        ]
                    }); 
            
                    // create 
                    $('#createNewKaryawan').click(function () {
                        $('#saveBtn').val("create-karyawan");
                        $('#karyawan_id').val('');
                        $('#karyawanForm').trigger("reset");
                        $('#modelHeading').html("Create New Karyawan");
                        $('#ajaxModel').modal('show');
                    });
                  
                      //createupdate
                      $('#saveBtn').click(function (e) {
                        e.preventDefault();
                        $(this).html('Save');
                            $.ajax({
                                data: $('#karyawanForm').serialize(),
                                url: "{{ route('admin.karyawan.store') }}",
                                type: "POST",
                                dataType: 'json',
                                success: function (data) {
                                    $('#karyawanForm').trigger("reset");
                                    $('#ajaxModel').modal('hide');
                                    table.draw();
                                },
                                error: function (data) {
                                    console.log('Error:', data);
                                    $('#saveBtn').html('Save Changes');
                                }
                            });
                    });
                   
                    // edit
                    $('body').on('click', '.edit', function () {
                        $('#karyawan').val($(this).data('title'));
                        $('#tanggal_lahir').val($(this).data('date'));
                        $('#alamat-edit').val($(this).data('alamat'));
                        $('#karyawan_id_edit').val($(this).data('id'));
                        $('#ajaxModelEdit').modal('show');
                        return false;
                    });

                    //updateprovinsiForm
                    $('#updatekaryawanForm').submit(function (e) {
                        e.preventDefault();
                        //$(this).html('Save');
                            $.ajax({
                                data: $('#updatekaryawanForm').serialize(),
                                url: "{{ route('admin.karyawan.update') }}",
                                type: "POST",
                                dataType: 'json',
                                success: function (data) {
                                    $('#ajaxModelEdit').modal('hide');
                                    // $('#dataTable').DataTable().fnDestroy();
                                    //table.ajax.reload();
                                    table.draw();
                                },
                                error: function (data) {
                                    console.log('Error:', data);
                                    $('#updateForm').html('Save Changes');
                                }
                            });
                    });


                      //delete
                      $('body').on('click', '.deleteKaryawan', function () {
                        var karyawan_id = $(this).data("karyawan_id");
                        confirm("Yakin data ingin di hapus !!!");
                            $.ajax({
                                type: "DELETE",
                                url: "{{ route('admin.karyawan.destroy') }}",
                                data: {id:karyawan_id,_method:'delete'},
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
