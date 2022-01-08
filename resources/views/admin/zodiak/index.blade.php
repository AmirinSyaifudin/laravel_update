@extends('admin.templates.default')
@section('content')
<h1> DATA ZDK</h1>

<!-- /.box-header -->
    <div class="box">
        <div class="box-header">
            <center> <h3 class="box-title" style="text-transform: uppercase;">SILAHKAN INPUT DATA</h3><br><br> </center>
                <form action="{{ route('admin.zodiak.store') }}" class="form-horizontal" method="POST" enctype="multipart/form-data" style="max-width:500px">
                    @csrf

                    <div class="form-group @error('nama') has-error @enderror">
                        <label for="inputPassword3" class="col-sm-2 control-label">NAMA</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" id="inputPassword3" 
                                value="{{ old('nama') }}" placeholder="Input nama penumpang">
                                    @error('nama')
                                        <span class="help-block">{{ $message}}</span>
                                    @enderror
                            </div>
                    </div>

                    <div class="form-group @error('tanggal_lahir') has-error @enderror">
                        <label for="inputPassword3" class="col-sm-2 control-label">TANGGAL LAHIR</label>
                            <div class="col-sm-10">
                                <input type="date" name="tanggal_lahir" class="form-control" id="inputPassword3" 
                                value="{{ old('tanggal_lahir') }}" placeholder="Input tanggal_lahir penumpang">
                                    @error('tanggal_lahir')
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
                            <th width='5'>NAMA</th>
                            <th width='5'>TANGGAL LAHIR</th>
                            <th width='5'>KETERANGAN</th>
                            <th width='5'> </th>
                            <th width='5'> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($zodiak as $gatel)
                        <tr>
                            <td width='5'>  {{ $loop-> index +1 }} </td>
                            <td width='20'> {{ $gatel->nama }} </td>
                            <td width='20'> {{ $gatel->tanggal_lahir }} </td>
                            <td width='20'> {{ $gatel->keterangan }}</td> 
                            {{-- <td width='5'>  <a href="{{ route('admin.bis.edit', $bs->bis_id) }}" class="btn btn-warning">EDIT</a></td> --}}
                            <td width='5'>  <a href="" class="btn btn-warning">EDIT</a></td>
                            <td width='5'>
                                <form action="{{ route('admin.zodiak.destroy', $gatel->zodiak_id) }}" method="post" style="display:inline;">
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


