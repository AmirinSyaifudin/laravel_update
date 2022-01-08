@extends('admin.templates.default')
@section('content')

<!-- /.box-header -->
    <div class="box">
        <div class="box-header">
                <h3 class="box-title">DATA GOLONGAN DARAH</h3><br><br>
                <a href="{{ route('admin.golongandarah.create') }}" class="btn btn-primary">TAMBAH DATA KARYAWAN</a>
            </div>
            <div class="box-body">

            <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width='5'>ID</th>
                            <th width='20'>NAMA GOLONGAN DARAH</th>
                            <th width='20'> </th>
                            <th width='5'> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($golongan_darah as $walangsanget )
                        <tr>
                            <td width='5'>  {{ $loop-> index +1 }} </td>
                            <td width='20'> {{ $walangsanget->nama_golongan_darah  }}  </td>
                            <td width='5'>  <a href="{{ route('admin.golongandarah.edit', $walangsanget->golongan_darah_id) }}" class="btn btn-warning">EDIT</a></td>
                            <td width='5'>
                                <form action="{{ route('admin.golongandarah.destroy', $walangsanget->golongan_darah_id) }}" method="post" style="display:inline;">
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



