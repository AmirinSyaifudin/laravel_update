@extends('admin.templates.default')
@section('content')

<div class="box">
    <div class="box-header">
        <h2 class="box-title">EDIT DATA PENDIDIKAN </h2>
    </div>

        <div class="box-body">
            <form action="{{ route('admin.pendidikan.update', $pendidikan->pendidikan_id) }}" method="POST" enctype="multipart/form-data">
             @csrf
             @method("PUT")
             {{-- <input type="hidden" name="id_produk" value="{{ $produk->produk_id }}"> --}}
            <div class="form-group @error('nama_pendidikan') has-error @enderror">
                <label for="">NAMA PENDIDIKAN</label>
                <!-- //value="{{ old('nama_pendidikan')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                <input type="text" name="nama_pendidikan" class="form-control"
                value="{{ $pendidikan->nama_pendidikan ?? old('nama_pendidikan') }}">
                @error('nama_pendidikan')
                    <span class="help-block">{{ $message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <input type="hidden" name="pendidikan_id" value="{{$pendidikan->pendidikan_id}}">
                <input type="submit" value="Update" class ="btn btn-primary">
                <button type="reset" class="btn btn-warning">Ulang</button>
                <a href="{{ route('admin.pendidikan.index') }}" class="btn btn-danger">Kembali</a>
            </div>

            </form>
        </div>
</div>

@endsection



