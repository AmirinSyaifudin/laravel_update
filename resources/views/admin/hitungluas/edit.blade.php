@extends('admin.templates.default')
@section('content')
<h1> DATA EDIT FUNGSI hitungluas</h1>
<!-- /.box-header -->
    <div class="box">
        <div class="box-header">
            <center> <h3 class="box-title" style="text-transform: uppercase;">Silahkan input data EDIT </h3><br><br> </center>
            </div>
            <div class="box-body" onload="functionTimer()">
                        <center>
                        <form action="{{ route('admin.hitungluas.update', $hitungluas->hitungluas_id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal" style="max-width:500px">
                            @csrf
                            @method("PUT")
                            <div class="form-group @error('luas') has-error @enderror">
                                <label for="inputPassword3" class="col-sm-2 control-label">BILNGAN SATU</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="luas" class="form-control" id="inputPassword3" 
                                        value="{{ $hitungluas->luas ?? old('luas') }}" placeholder="">
                                            @error('luas')
                                                <span class="help-block">{{ $message}}</span>
                                            @enderror
                                    </div>
                            </div>
        
                            <div class="form-group @error('keliling') has-error @enderror">
                                <label for="inputPassword3" class="col-sm-2 control-label">BILANGAN DUA</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="keliling" class="form-control" id="inputPassword3" 
                                        value="{{ $hitungluas->keliling ?? old('keliling') }}" placeholder="Isikan keliling Barang">
                                            @error('keliling')
                                                <span class="help-block">{{ $message}}</span>
                                            @enderror
                                    </div>
                            </div>

                            <div class="form-group">
                                <input type="hidden" name="hitungluas_id" value="{{$hitungluas->hitungluas_id}}">
                                <input type="submit" value="Update" class ="btn btn-primary">
                                <button type="reset" class="btn btn-warning">Ulang</button>
                                <a href="{{ route('admin.hitungluas.index') }}" class="btn btn-danger">Kembali</a>
                            </div>
                        </form>
                        </center>
        </div>
    </div>
@endsection







