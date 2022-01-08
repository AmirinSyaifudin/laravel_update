@extends('admin.templates.default')
@section('content')

<div class="box">
    <div class="box-header">
        <h2 class="box-title">EDIT DATA AGAMA </h2>
    </div>

        <div class="box-body">
            <form action="{{ route('admin.agama.update', $agama->agama_id) }}" method="POST" enctype="multipart/form-data">
             @csrf
             @method("PUT")
             {{-- <input type="hidden" name="id_produk" value="{{ $produk->produk_id }}"> --}}
            <div class="form-group @error('nama_agama') has-error @enderror">
                <label for="">NAMA AGAMA</label>
                <!-- //value="{{ old('nama_agama')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                <input type="text" name="nama_agama" class="form-control"
                value="{{ $agama->nama_agama ?? old('nama_agama') }}">
                @error('nama_agama')
                    <span class="help-block">{{ $message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <input type="hidden" name="agama_id" value="{{$agama->agama_id}}">
                <input type="submit" value="Update" class ="btn btn-primary">
                <button type="reset" class="btn btn-warning">Ulang</button>
                <a href="{{ route('admin.agama.index') }}" class="btn btn-danger">Kembali</a>
            </div>

            </form>
        </div>
</div>

@endsection



