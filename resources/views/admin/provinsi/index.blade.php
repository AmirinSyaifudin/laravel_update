@extends('admin.templates.default')
@section('content')
<h1>PROVINSI</h1>
 <!-- /.box-header -->
 <div class="box">
        <div class="box-header">
              <h3 class="box-title">DATA PENULIS</h3><br><br>
              {{-- <button type="button" class="btn btn-primary" data-toggle="modal" 
                      data-target="#exampleModal"><a>ADD DATA PROVINSI</a>
              </button> --}}
              <a href="" class="btn btn-primary">Export Excel</a> 
              <a href="" class="btn btn-primary">Export PDF</a> 
              <a class="btn btn-success" href="javascript:void(0)" id="createNewProvinsi"> Create New Provinsi</a>
         </div>
         <div class="box-body">
            <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAMA PROVINSI</th>
                            <th>TANGGAL</th>
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
                <form id="provinsiForm" name="provinsiForm" class="form-horizontal">

                   <input type="hidden" name="provinsi_id" id="provinsi_id">
                   
                   <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">PROVINSI</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="nama_provinsi" name="nama_provinsi" 
                            placeholder="Enter Nama Provinsi" value="" maxlength="50" required="">
                        </div>
                    </div>               

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">TANGGAL</label>
                        <div class="col-sm-12">
                            <input type="date" name="tanggal_jadi_provinsi" class="form-control" 
                            placeholder="" value=""  required="">
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
    
    {{-- CRUD ajax --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> 

<script type="text/javascript">
        $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

            // Index
                $('#dataTable').DataTable({
                "pageLength": 50,
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.provinsi.dataProvinsi') }}',
                columns: [
                        {data: 'provinsi_id', name: 'provinsi_id'},
                        {data: 'nama_provinsi', name: 'nama_provinsi'},
                        {data: 'tanggal_jadi_provinsi', name: 'tanggal_jadi_provinsi'},
                        {data: 'keterangan', name: 'keterangan'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ]
                }); 

            // create 
                $('#createNewProvinsi').click(function () {
                    $('#saveBtn').val("create-provinsi");
                    $('#provinsi_id').val('');
                    $('#provinsiForm').trigger("reset");
                    $('#modelHeading').html("Create New Provinsi");
                    $('#ajaxModel').modal('show');
                });

            //edit
                $('body').on('click', '.editProvinsi', function () {
                var provinsi_id = $(this).data('provinsi_id');
                $.get("" +'/' + provinsi_id +'/edit', function (data) {
                    $('#modelHeading').html("Edit Provinsi");
                    $('#saveBtn').val("edit-provinsi");
                    $('#ajaxModel').modal('show');
                    $('#provinsi_id').val(data.provinsi_id);
                    $('#nama_provinsi').val(data.nama_provinsi);
                    $('#tanggal_jadi_provinsi').val(data.tanggal_jadi_provinsi);
                    $('#keterangan').val(data.keterangan);
                })
            });

             //delete
             $('body').on('click', '.deleteProvinsi', function () {
            
            var provinsi_id = $(this).data("provinsi_id");
            confirm("Are You sure want to delete !");
        
            $.ajax({
                type: "DELETE",
                url: "{{ route('admin.provinsi.store') }}"+'/'+provinsi_id,
                success: function (data) {
                    table.draw();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });

            


}); 

</script>
@endpush














