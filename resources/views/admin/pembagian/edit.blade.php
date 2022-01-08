@extends('admin.templates.default')
@section('content')
<h1> DATA EDIT FUNGSI pembagian</h1>
<!-- /.box-header -->
    <div class="box">
        <div class="box-header">
            <center> <h3 class="box-title" style="text-transform: uppercase;">Silahkan input data EDIT </h3><br><br> </center>
            </div>
            <div class="box-body" onload="functionTimer()">
                        <center>
                        <form action="{{ route('admin.pembagian.update', $pembagian->pembagian_id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal" style="max-width:500px">
                            @csrf
                            @method("PUT")
                            <div class="form-group @error('bil_satu') has-error @enderror">
                                <label for="inputPassword3" class="col-sm-2 control-label">BILNGAN SATU</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="bil_satu" class="form-control" id="inputPassword3" 
                                        value="{{ $pembagian->bil_satu ?? old('bil_satu') }}" placeholder="">
                                            @error('bil_satu')
                                                <span class="help-block">{{ $message}}</span>
                                            @enderror
                                    </div>
                            </div>
        
                            <div class="form-group @error('bil_dua') has-error @enderror">
                                <label for="inputPassword3" class="col-sm-2 control-label">BILANGAN DUA</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="bil_dua" class="form-control" id="inputPassword3" 
                                        value="{{ $pembagian->bil_dua ?? old('bil_dua') }}" placeholder="Isikan bil_dua Barang">
                                            @error('bil_dua')
                                                <span class="help-block">{{ $message}}</span>
                                            @enderror
                                    </div>
                            </div>


                            <div class="form-group">
                                <input type="hidden" name="pembagian_id" value="{{$pembagian->pembagian_id}}">
                                <input type="submit" value="Update" class ="btn btn-primary">
                                <button type="reset" class="btn btn-warning">Ulang</button>
                                <a href="{{ route('admin.pembagian.index') }}" class="btn btn-danger">Kembali</a>
                            </div>
                        </form>
                        </center>
        </div>
    </div>
@endsection







