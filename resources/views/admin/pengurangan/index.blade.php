@extends('admin.templates.default')
@section('content')
<h1> DATA PENGURANGAN</h1>

<!-- /.box-header -->
    <div class="box">
        <div class="box-header">
            <center> <h3 class="box-title" style="text-transform: uppercase;">Silahkan input data </h3><br><br> </center>
                <form action="" class="form-horizontal" method="POST" enctype="multipart/form-data" style="max-width:500px">
                    @csrf

                    <div class="form-group @error('bil_satu') has-error @enderror">
                        <label for="inputPassword3" class="col-sm-2 control-label">BILANGAN SATU</label>
                            <div class="col-sm-10">
                                <input type="text" name="bil_satu" class="form-control" id="inputPassword3" 
                                value="{{ old('bil_satu') }}" placeholder="Input bil_satu penumpang">
                                    @error('bil_satu')
                                        <span class="help-block">{{ $message}}</span>
                                    @enderror
                            </div>
                    </div>

                    <div class="form-group @error('bil_dua') has-error @enderror">
                        <label for="inputPassword3" class="col-sm-2 control-label">BILANGAN DUA</label>
                            <div class="col-sm-10">
                                <input type="text" name="bil_dua" class="form-control" id="inputPassword3" 
                                value="{{ old('bil_dua') }}" placeholder="Jenis Bis ">
                                    @error('bil_dua')
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
                            <th width='5'>BILANGAN SATU</th>
                            <th width='5'>BILANGAN DUA</th>
                            <th width='5'>JUMLAH</th>
                            <th width='5'>FUNGSI TERBILANG</th>
                            <th width='5'>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengurangan as $jarankekek)
                        <tr>
                            <td width='5'>  {{ $loop-> index +1 }} </td>
                            <td width='20'> {{ $jarankekek->bil_satu }}</td>
                            <td width='20'> {{ $jarankekek->bil_dua }}</td>
                            {{-- <td width='5'>  {{ $jarankekek->jumlah }}  </td> --}}
                            <td scope="row"> {{ ''. number_format ($jarankekek->jumlah) . "  " }} </td>
                            <td width='5'>   </td>
                            <td width='5'>  <a href="{{ route('admin.pengurangan.edit', $jarankekek->pengurangan_id) }}" class="btn btn-warning">EDIT</a></td>
                            <td width='5'>
                                <form action="{{ route('admin.pengurangan.destroy', $jarankekek->pengurangan_id) }}" method="post" style="display:inline;">
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

