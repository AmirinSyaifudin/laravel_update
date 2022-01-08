@extends('admin.templates.default')
@section('content')
<h1> DATA HITUNG BERAT BADAN & TINGGI BADAN IDEAL </h1>

<!-- /.box-header -->
    <div class="box">
        <div class="box-header">
            <center> <h3 class="box-title" style="text-transform: uppercase;">Silahkan input data </h3><br><br> </center>
                <form action="{{ route('admin.hitungbb.store') }}" class="form-horizontal" method="POST" enctype="multipart/form-data" style="max-width:500px">
                    @csrf

                    <div class="form-group @error('berat_badan') has-error @enderror">
                        <label for="inputPassword3" class="col-sm-2 control-label">BERAT BADAN</label>
                            <div class="col-sm-10">
                                <input type="text" name="berat_badan" class="form-control" id="inputPassword3" 
                                value="{{ old('berat_badan') }}" placeholder="Input berat badan">
                                    @error('berat_badan')
                                        <span class="help-block">{{ $message}}</span>
                                    @enderror
                            </div>
                    </div>

                    <div class="form-group @error('tinggi_badan') has-error @enderror">
                        <label for="inputPassword3" class="col-sm-2 control-label">TINGGI BADAN</label>
                            <div class="col-sm-10">
                                <input type="text" name="tinggi_badan" class="form-control" id="inputPassword3" 
                                value="{{ old('tinggi_badan') }}" placeholder="Input tinggi badan">
                                    @error('tinggi_badan')
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
                            <th width='5'>BERAT BADAN </th>
                            <th width='5'>TINGGI BADAN</th>
                            <th width='5'>KETERANGAN IDELA </th>
                            <th width='5'> </th>
                            <th width='5'> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hitungbb as $bucin)
                        <tr>
                            <td width='5'>  {{ $loop-> index +1 }} </td>
                            <td width='20'>{{ $bucin->berat_badan }} </td>
                            <td width='20'>{{ $bucin->tinggi_badan }} </td>
                            <td width='20'>{{ $bucin->keterangan }}</td>
                            <td width='5'>  <a href="" class="btn btn-warning">EDIT</a></td>
                            <td width='5'>
                                <form action="{{ route('admin.hitungbb.destroy', $bucin->hitungbb_id ) }}" method="post" style="display:inline;">
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


