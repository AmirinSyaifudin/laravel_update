@extends('admin.templates.default')
@section('content')

<!-- /.box-header -->
    <div class="box">
        <div class="box-header">
                <h3 class="box-title">DATA AGAMA</h3><br><br>
                <a href="{{ route('admin.agama.create') }}" class="btn btn-primary">TAMBAH DATA KARYAWAN</a>
            </div>
            <div class="box-body">

            <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width='5'>ID</th>
                            <th width='20'>NAMA AGAMA</th>
                            <th width='20'> </th>
                            <th width='5'> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agama as $ag )
                        <tr>
                            <td width='5'>  {{ $loop-> index +1 }} </td>
                            <td width='20'> {{ $ag->nama_agama  }}  </td>
                            <td width='5'>  <a href="{{ route('admin.agama.edit', $ag->agama_id) }}" class="btn btn-warning">EDIT</a></td>
                            <td width='5'>
                                <form action="{{ route('admin.agama.destroy', $ag->agama_id) }}" method="post" style="display:inline;">
                                    {{ csrf_field() }}
                                    {{ method_field ('delete')}}
                                    <button type="submit"  class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">DELETE</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
  
    
@endsection
@push('scripts')
    <script>
        $(function () {
            $('#dataTable').DataTable({


            });
        });
    </script>
@endpush



