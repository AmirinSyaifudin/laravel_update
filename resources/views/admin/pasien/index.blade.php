@extends('admin.templates.default')
@section('content')

<!-- /.box-header -->
    <div class="box">
            <div class="box-body">
                <h4 style="text-transform: uppercase;"> Menampilkan Data Berdasarkan Tahun & Tanggal</h4>                   
                

            <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width='20'>NO REKAM MEDIK</th>
                            <th width='5'>NAMA PASIEN</th>
                            <th width='5'> TANGGAL LAHIR</th>
                            <th width='5'>JENIS PASIEN</th>
                            <th width='5'>POLI</th>
                            <th width='5'>PEKERJAAN</th>
                            <th width='5'>PENDIDIKAN</th>
                            <th width='5'>AGAMA</th> 
                            <th width='130'> ACTION</th>
                        </tr>
                    </thead>
                  
            </table>
        </div>
    </div>

    <form action="" method="post" id="deleteForm">
        @csrf
        @method("DELETE")
        <input type="submit" value="Hapus" style="display:none">
    </form>

@endsection

@push('scripts')
<script>
    $(function () {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.pasien.data') }}',
            columns: [
                // { data: 'DT_RowIndex', orderable: false, searchable : false},
                { data: 'no_rekam_medik'},
                { data: 'nama_pasien'},
                { data: 'tanggal_lahir'},
                { data: 'nama_jenis_pasien'},
                { data: 'nama_poliklinik'},
                { data: 'nama_pekerjaan'},
                { data: 'nama_pendidikan'},
                { data: 'nama_agama'},
                { data: 'action'},
            ]
        });
    });
</script>
@endpush



