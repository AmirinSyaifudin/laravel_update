@extends('admin.templates.default')
@section('content')
<h1> DATA JAM SWITCH </h1>

<!-- /.box-header -->
    <div class="box">
        <div class="box-header">
            <center> <h3 class="box-title" style="text-transform: uppercase;">Silahkan input data </h3><br><br> </center>
                <form action="{{ route('admin.jamswitch.create') }}" class="form-horizontal" method="POST" enctype="multipart/form-data" style="max-width:500px">
                    @csrf

                    <div class="form-group @error('jumlah_jam_kerja') has-error @enderror">
                        <label for="inputPassword3" class="col-sm-2 control-label">JAM KERJA</label>
                            <div class="col-sm-10">
                                <input type="text" name="jumlah_jam_kerja" class="form-control" id="inputPassword3" 
                                value="{{ old('jumlah_jam_kerja') }}" placeholder="Input jumlah_jam_kerja penumpang">
                                    @error('jumlah_jam_kerja')
                                        <span class="help-block">{{ $message}}</span>
                                    @enderror
                            </div>
                    </div>

                    <tr>
                        <td>Golongan Kerja = </td>
                        <td>
                            <input type="radio" name="gol_kerja" value="A">A
                            <input type="radio" name="gol_kerja" value="B">B
                            <input type="radio" name="gol_kerja" value="C">C
                            <input type="radio" name="gol_kerja" value="D">D
                        </td>
                    </tr>

       
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
                            <th width='5'>JAM KERJA </th>
                            <th width='5'>JAM LEMBUR ANDA</th>
                            <th width='5'>GOL KERJA ANDA </th>
                            <th width='5'> GAJI ANDA </th>
                            <th width='5'> </th>
                            <th width='5'> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jamswitch as $kuwejancuk )
                        <tr>
                            <td width='5'>  {{ $loop-> index +1 }} </td>
                            <td width='20'> {{ $kuwejancuk->jumlah_jam_kerja }} </td>
                            <td width='20'> {{ $kuwejancuk->jam_lembur_anda }} </td>
                            <td width='20'> {{ $kuwejancuk->gol_kerja }} </td>
                            <td width='20'> {{ $kuwejancuk->gaji_anda }} </td>
                            <td width='20'> </td>
                            <td width='20'> </td>
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


