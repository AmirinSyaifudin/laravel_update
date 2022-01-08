@extends('admin.templates.default')
@section('content')
<h1> DATA EDIT PENGURANGAN</h1>

<!-- /.box-header -->
    <div class="box">
        <div class="box-header">
            <center> <h3 class="box-title" style="text-transform: uppercase;">Silahkan input data </h3><br><br> </center>
                <form action="{{ route('admin.penjumlahan.update', $jumlah->penjumlahan_id) }}" class="form-horizontal" method="POST" enctype="multipart/form-data" style="max-width:500px">
                    @csrf
                    @method("PUT")

                    <div class="form-group @error('bil_satu') has-error @enderror">
                        <label for="inputPassword3" class="col-sm-2 control-label">BILANGAN SATU</label>
                            <div class="col-sm-10">
                                <input type="text" name="bil_satu" class="form-control" id="inputPassword3" 
                                value="{{ $jumlah->bil_satu ?? old('bil_satu') }}" placeholder="">
                                    @error('bil_satu')
                                        <span class="help-block">{{ $message}}</span>
                                    @enderror
                            </div>
                    </div>

                    <div class="form-group @error('bil_dua') has-error @enderror">
                        <label for="inputPassword3" class="col-sm-2 control-label">BILANGAN DUA</label>
                            <div class="col-sm-10">
                                <input type="text" name="bil_dua" class="form-control" id="inputPassword3" 
                                value="{{ $jumlah->bil_dua ?? old('bil_dua') }}" placeholder="">
                                    @error('bil_dua')
                                        <span class="help-block">{{ $message}}</span>
                                    @enderror
                            </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <center>
                            <tr>
                                <td><input type="hidden" name="penjumlahan_id" value="{{ $jumlah->penjumlahan_id }}" class="btn btn-primary"></td>
                                <td><input type="submit" value="Update" class="btn btn-primary"></td>
                                <td><input type="reset" class="btn btn-warning"></td>
                                <a href="{{ route('admin.penjumlahan.index') }}" class="btn btn-danger"> Kembali</a>
                            </tr>
                        </center>
                        </div>
                    </div>
                </form>
            </div>
            <div class="box-body">
        </div>
    </div>


@endsection


