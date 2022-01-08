@extends('admin.templates.default')
@section('content')

<!-- /.box-header -->
    <div class="box">
        <div class="box-header">
                <h3 class="box-title">DATA PENDIDIKAN </h3><br><br>
                <a href="{{ route('admin.pendidikan.create') }}" class="btn btn-primary">TAMBAH DATA KARYAWAN</a>
            </div>
            <div class="box-body">

            <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width='5'>ID</th>
                            <th width='20'>NAMA PENDIDIKAN</th>
                            <th width='20'> </th>
                            <th width='5'> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pendidikan as $kuda )
                        <tr>
                            <td width='5'>  {{ $loop-> index +1 }} </td>
                            <td width='20'> {{ $kuda->nama_pendidikan  }}  </td>
                            <td width='5'>  <a href="{{ route('admin.pendidikan.edit', $kuda->pendidikan_id) }}" class="btn btn-warning">EDIT</a></td>
                            <td width='5'>
                                <form action="{{ route('admin.pendidikan.destroy', $kuda->pendidikan_id) }}" method="post" style="display:inline;">
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



