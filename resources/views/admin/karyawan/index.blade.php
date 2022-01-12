@extends('admin.templates.default')
@section('content')

<!-- /.box-header -->
    <div class="box">
        <div class="box-header">
                <h3 class="box-title">DATA KARYAWAN</h3><br><br>
                <a href="{{ route('admin.karyawan.create') }}" class="btn btn-primary">TAMBAH DATA KARYAWAN</a>
            </div>
            <div class="box-body">

            <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width='5'>ID</th>
                            <th width='20'>NO INDUK</th>
                            <th width='20'>NAMA</th>
                            <th width='20'>FOTO</th>
                            <th width='5'>ALAMAT</th>
                            <th width='20'>TANGGAL LAHIR</th>
                            <th width='20'>TANGGAL BERGABUNG</th>
                            <th width='90'>ACTION</th>
                        </tr>
                    </thead>
                    {{-- <tbody>
                        
                    </tbody> --}}
            </table>
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

<script>
    $(function () {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.karyawan.data') }}',
            columns: [
                //{ data: 'id'},
                { data: 'DT_RowIndex', orderable: false, searchable : false}, //
                { data: 'no_induk'},
                { data: 'nama'},
                { data: 'cover'},
                { data: 'alamat'},
                { data: 'tanggal_lahir'},
                { data: 'tanggal_bergabung'},
                { data: 'action'},
            ]
        });
    });


</script>
@endpush

{{-- <script>
    $(function () {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                    url : "{{ url('admin/karyawandatatable') }}",
                    type : 'POST',
                    headers : {
                             'X-CSRF-TOKEN': "{{ csrf_token() }}"
                         },
                    dataType: 'json',
                },
                columns: [
                       //  { data: 'id', name: 'id' },
                        { data: 'DT_RowIndex', orderable: false, searchable : false},
                        { data: 'no_induk', name: 'no_induk' },
                        { data: 'nama', name: 'nama' },
                        { data: 'alamat', name: 'alamat' },
                        { data: 'tanggal_lahir', name: 'tanggal_lahir' },
                        { data: 'tanggal_bergabung', name: 'tanggal_bergabung' },
                        { data: 'action'},
                        //{data: 'action', name: 'action', orderable: false},
                    ]    
        });
    });
</script> --}}


{{-- <script>
    $(function () {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {{ route('admin.karyawan.data') }},
                        { data: 'alamat', name: 'alamat' },
                        { data: 'tanggal_lahir', name: 'tanggal_lahir' },
                        { data: 'tanggal_bergabung', name: 'tanggal_bergabung' },
                        { data: 'action'},
                        //{data: 'action', name: 'action', orderable: false},
                    ]    
        });
    });
</script> --}}



{{-- <script>
    
    $(function () {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {{ route('admin.karyawan.data') }},
                columns: [
                        { data: 'DT_RowIndex', orderable: false, searchable : false},
                        { data: 'no_induk'},
                        { data: 'nama'},
                    ]    
        });
    });
</script> --}}