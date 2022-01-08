@extends('admin.templates.default')
@section('content')

<div class="box">
    <div class="box-header">
        <h2 class="box-title">EDIT DATA SUKU </h2>
    </div>

        <div class="box-body">
            <form action="{{ route('admin.suku.update', $suku->suku_id) }}" method="POST" enctype="multipart/form-data">
             @csrf
             @method("PUT")
             {{-- <input type="hidden" name="id_produk" value="{{ $produk->produk_id }}"> --}}
            <div class="form-group @error('nama_suku') has-error @enderror">
                <label for="">NAMA SUKU</label>
                <!-- //value="{{ old('nama_suku')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                <input type="text" name="nama_suku" class="form-control"
                value="{{ $suku->nama_suku ?? old('nama_suku') }}">
                @error('nama_suku')
                    <span class="help-block">{{ $message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <input type="hidden" name="suku_id" value="{{$suku->suku_id}}">
                <input type="submit" value="Update" class ="btn btn-primary">
                <button type="reset" class="btn btn-warning">Ulang</button>
                <a href="{{ route('admin.suku.index') }}" class="btn btn-danger">Kembali</a>
            </div>

            </form>
        </div>
</div>

@endsection



