@extends('admin.templates.default')
@section('content')

<!-- /.box-header -->
    <div class="box">
        <div class="box-header">
                <h3 class="box-title">DATA CUTI</h3><br><br>
                <a href="{{ route('admin.cuti.create') }}" class="btn btn-primary">TAMBAH DATA CUTI</a>
            </div>
            <div class="box-body">
            <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width='1'>ID</th>
                            <th width='10'>NAMA</th>
                            <th width='5'>KETERANGAN</th>
                            <th width='5'>TANGGAL CUTI</th>
                            <th width='5'>TANGGAL SELESAI CUTI</th>
                            <th width='1'>LAMA</th>
                            <th width='1'>SISA</th>
                            <th width='120'> </th>
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
            ajax: '{{ route('admin.cuti.data') }}',
            columns: [
                //{ data: 'id'},
                { data: 'DT_RowIndex', orderable: false, searchable : false}, 
                { data: 'nama'},
                { data: 'keterangan'},
                { data: 'tanggal_cuti'},
                { data: 'tanggal_selesai_cuti'},
                { data: 'lama_cuti'},
                { data: 'sisa_cuti'},
                { data: 'action'},
            ]
        });
    });
</script>
@endpush

