@extends('admin.templates.default')
@section('content')
<h1> DATA NILAI KELULUSAN</h1>

<!-- /.box-header -->
    <div class="box">
        <div class="box-header">
            <center> <h3 class="box-title" style="text-transform: uppercase;">Silahkan input data </h3><br><br> </center>
                <form action="{{ route('admin.nilailulus.store') }}" class="form-horizontal" method="POST" enctype="multipart/form-data" style="max-width:500px">
                    @csrf

                    <div class="form-group @error('nilai') has-error @enderror">
                        <label for="inputPassword3" class="col-sm-2 control-label">nilai</label>
                            <div class="col-sm-10">
                                <input type="text" name="nilai" class="form-control" id="inputPassword3" 
                                value="{{ old('nilai') }}" placeholder="Input nilai penumpang">
                                    @error('nilai')
                                        <span class="help-block">{{ $message}}</span>
                                    @enderror
                            </div>
                    </div>

       
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <center>
                            <tr>
                                <td><input type="submit" value="Tambah" class="btn btn-primary"></td>
                                <td><input type="reset" name="batal" class="btn btn-warning" value="RESET"></td>
                            </tr>
                        </center>
                        </div>
                    </div>
                </form>
            </div>
            <div class="box-body">

            <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width='5'>ID</th>
                            <th width='5'>NILAI </th>
                            <th width='5'>KETERANGAN </th>
                            <th width='5'>INDEX PRESTASI</th>
                            <th width='5'> LULUS TAHUN </th>
                            <th width='5'> PREDIKAT</th>
                            <th width='5'> </th>
                            <th width='5'> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nilailulus as $rewel)
                        <tr>
                            <td width='5'>  {{ $loop-> index +1 }} </td>
                            <td width='20'> {{ $rewel->nilai }} </td>
                            <td width='20'> {{ $rewel->keterangan }}</td>
                            <td width='20'> {{ $rewel->index_prestasi }}</td> 
                            <td width='20'> {{ $rewel->lulus_tahun }}</td>
                            <td width='20'> {{ $rewel->predikat }}</td>
                            {{-- <td width='5'>  <a href="" class="btn btn-warning">EDIT</a></td> --}}
                            <td width='5'>  <a href="" class="btn btn-warning">EDIT</a></td>
                            <td width='5'>
                                <form action="{{ route('admin.nilailulus.destroy', $rewel->nilailulus_id) }}" method="post" style="display:inline;">
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


