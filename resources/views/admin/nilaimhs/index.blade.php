@extends('admin.templates.default')
@section('content')
<h1> DATA NILAI MAHASISWA</h1>

<!-- /.box-header -->
    <div class="box">
        <div class="box-header">
            <center> <h3 class="box-title" style="text-transform: uppercase;">Silahkan input data </h3><br><br> </center>
                <form action="{{ route('admin.nilaimhs.store') }}" class="form-horizontal" method="POST" enctype="multipart/form-data" style="max-width:500px">
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

                    <div class="form-group @error('mata_kuliah') has-error @enderror">
                        <label for="inputPassword3" class="col-sm-2 control-label">mata_kuliah</label>
                            <div class="col-sm-10">
                                <input type="text" name="mata_kuliah" class="form-control" id="inputPassword3" 
                                value="{{ old('mata_kuliah') }}" placeholder="Input mata_kuliah penumpang">
                                    @error('mata_kuliah')
                                        <span class="help-block">{{ $message}}</span>
                                    @enderror
                            </div>
                    </div>

                    <div class="form-group @error('nilai_absen') has-error @enderror">
                        <label for="inputPassword3" class="col-sm-2 control-label">nilai_absen</label>
                            <div class="col-sm-10">
                                <input type="text" name="nilai_absen" class="form-control" id="inputPassword3" 
                                value="{{ old('nilai_absen') }}" placeholder="Input nilai_absen penumpang">
                                    @error('nilai_absen')
                                        <span class="help-block">{{ $message}}</span>
                                    @enderror
                            </div>
                    </div>

                    <div class="form-group @error('nilai_tugas') has-error @enderror">
                        <label for="inputPassword3" class="col-sm-2 control-label">nilai_tugas</label>
                            <div class="col-sm-10">
                                <input type="text" name="nilai_tugas" class="form-control" id="inputPassword3" 
                                value="{{ old('nilai_tugas') }}" placeholder="Input nilai_tugas penumpang">
                                    @error('nilai_tugas')
                                        <span class="help-block">{{ $message}}</span>
                                    @enderror
                            </div>
                    </div>

                    <div class="form-group @error('nilai_uts') has-error @enderror">
                        <label for="inputPassword3" class="col-sm-2 control-label">nilai_uts</label>
                            <div class="col-sm-10">
                                <input type="text" name="nilai_uts" class="form-control" id="inputPassword3" 
                                value="{{ old('nilai_uts') }}" placeholder="Input nilai_uts penumpang">
                                    @error('nilai_uts')
                                        <span class="help-block">{{ $message}}</span>
                                    @enderror
                            </div>
                    </div>

                    <div class="form-group @error('nilai_uas') has-error @enderror">
                        <label for="inputPassword3" class="col-sm-2 control-label">nilai_uas</label>
                            <div class="col-sm-10">
                                <input type="text" name="nilai_uas" class="form-control" id="inputPassword3" 
                                value="{{ old('nilai_uas') }}" placeholder="Input nilai_uas penumpang">
                                    @error('nilai_uas')
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
                            <th width='5'>MATA KULIAH</th>
                            <th width='5'>NILAI ABSEN</th>
                            <th width='5'>NILAI TUGAS</th>
                            <th width='5'>NILAI UTS</th>
                            <th width='5'>NILAI UAS</th>
                            <th width='5'>NILAI AKHIR</th>
                            <th width='5'>GRADE</th>
                            <th width='5'> </th>
                            <th width='5'> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nilaimhs as $gatel)
                        <tr>
                            <td width='5'>  {{ $loop-> index +1 }} </td>
                            <td width='20'> {{ $gatel->nama }} </td>
                            <td width='20'> {{ $gatel->mata_kuliah }}</td>
                            <td width='20'> {{ $gatel->nilai_absen }}</td>
                            <td width='20'> {{ $gatel->nilai_tugas }}</td>
                            <td width='20'> {{ $gatel->nilai_uts }}</td> 
                            <td width='20'> {{ $gatel->nilai_uas }}</td>
                            <td width='20'>  {{ $gatel->nilai_akhir }}</td>
                            <td width='20'> {{ $gatel->grade }}</td>
                            {{-- <td width='5'>  <a href="{{ route('admin.bis.edit', $bs->bis_id) }}" class="btn btn-warning">EDIT</a></td> --}}
                            <td width='5'>  <a href="" class="btn btn-warning">EDIT</a></td>
                            <td width='5'>
                                <form action="{{ route('admin.nilaimhs.destroy', $gatel->nilaimhs_id) }}" method="post" style="display:inline;">
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


