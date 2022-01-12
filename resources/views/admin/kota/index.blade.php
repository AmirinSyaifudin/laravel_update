@extends('admin.templates.default')
@section('content')
<h1>KOTA</h1>

 <!-- /.box-header -->
 <div class="box">
        <div class="box-header">
              <h3 class="box-title">DATA KOTA</h3><br><br>
              <a href="" class="btn btn-primary">ADD KOTA</a>
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
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.kota.data') }}',
                columns: [
                    //{ data: 'id'},
                    { data: 'DT_RowIndex', orderable: false, searchable : false}, 
                    { data: 'nama_kota'},
                    { data: 'nama_provinsi'},
                    { data: 'kode_pos'},
                    { data: 'keterangan'},
                    { data: 'action'}
                ]
            });
        });
    </script>
@endpush
