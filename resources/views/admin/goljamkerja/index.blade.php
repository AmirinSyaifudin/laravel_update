@extends('admin.templates.default')
@section('content')
<h1> DATA HITUNG JUMLAH JAM KERJA DAN TINGKATAN KERJA </h1>

<!-- /.box-header -->
    <div class="box">
        <div class="box-header">
            <center> <h3 class="box-title" style="text-transform: uppercase;">Silahkan input data </h3><br><br> </center>
                <form action="{{ route('admin.goljamkerja.store') }}" class="form-horizontal" method="POST" enctype="multipart/form-data" style="max-width:500px">
                    @csrf
                    <div class="form-group @error('jumlah_jam_kerja') has-error @enderror">
                        <label for="inputPassword3" class="col-sm-2 control-label">JUMLAH JAM KERJA</label>
                            <div class="col-sm-10">
                                <input type="text" name="jumlah_jam_kerja" class="form-control" id="inputPassword3" 
                                value="{{ old('jumlah_jam_kerja') }}" placeholder="Input ">
                                    @error('jumlah_jam_kerja')
                                        <span class="help-block">{{ $message}}</span>
                                    @enderror
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">TINGKATAN KERJA</label>
                            <div class="col-sm-10">
                                <select name="jenis_kendaraan" class="form-control form-control-sm">
                                    <!-- <option value="">TYPE KENDARAAN</option> -->
                                    <option value="TINGKATAN_A">TINGKATAN KERJA (A)</option>
                                    <option value="TINGKATAN_B">TINGKATAN KERJA (B)</option>
                                    <option value="TINGKATAN_C">TINGKATAN KERJA (C)</option>
                                    <option value="TINGKATAN_D">TINGKATAN KERJA (D)</option>
                                    <option value="TINGKATAN_E">TINGKATAN KERJA (E)</option>
                                </select>
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
                            <th width='5'>JUMLAH JAM KERJA </th>
                            {{-- <th width='5'>TINGKATAN KERJA</th> --}}
                            <th width='5'> </th>
                            <th width='5'> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($goljamkerja as $cintakamu)
                        <tr>
                            <td width='5'> {{ $loop-> index +1 }} </td>
                            <td width='20'>{{ $cintakamu->jumlah_jam_kerja }} </td>
                            <td width='20'>{{ $cintakamu->tingkatan_kerja }}</td>
                            <td width='5'>  <a href="" class="btn btn-warning">EDIT</a></td>
                            <td width='5'>
                                <form action="" method="post" style="display:inline;">
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


