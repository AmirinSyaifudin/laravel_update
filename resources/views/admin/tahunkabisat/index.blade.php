@extends('admin.templates.default')
@section('content')
<h1> DATA TAHUN KABISAT</h1>

<!-- /.box-header -->
    <div class="box">
        <div class="box-header">
            <center> <h3 class="box-title" style="text-transform: uppercase;">Silahkan input data </h3><br><br> </center>
                <form action="{{ route('admin.tahunkabisat.store') }}" class="form-horizontal" method="POST" enctype="multipart/form-data" style="max-width:500px">
                    @csrf

                    <div class="form-group @error('tahun') has-error @enderror">
                        <label for="inputPassword3" class="col-sm-2 control-label">tahun PESERTA</label>
                            <div class="col-sm-10">
                                <input type="text" name="tahun" class="form-control" id="inputPassword3" 
                                value="{{ old('tahun') }}" placeholder="Input tahun penumpang">
                                    @error('tahun')
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
                            <th width='5'>TAHUN LAHIR</th>
                            <th width='5'>KETERANGAN</th>
                            <th width='5'> </th>
                            <th width='5'> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tahunkabisat as $sayangkamu)
                        <tr>
                            <td width='5'>  {{ $loop-> index +1 }} </td>
                            <td width='20'>{{ $sayangkamu->tahun }} </td>
                            <td width='20'>{{ $sayangkamu->keterangan }}</td>
                            <td width='5'>  <a href="" class="btn btn-warning">EDIT</a></td>
                            <td width='5'>
                                <form action="{{ route('admin.tahunkabisat.destroy', $sayangkamu->tahunkabisat_id) }}" method="post" style="display:inline;">
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


