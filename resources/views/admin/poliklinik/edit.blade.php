@extends('admin.templates.default')
@section('content')

<div class="box">
    <div class="box-header">
        <h2 class="box-title">EDIT DATA POLIKLINIK </h2>
    </div>

        <div class="box-body">
            <form action="{{ route('admin.poliklinik.update', $poliklinik->poliklinik_id) }}" method="POST" enctype="multipart/form-data">
             @csrf
             @method("PUT")
             {{-- <input type="hidden" name="id_produk" value="{{ $produk->produk_id }}"> --}}
            <div class="form-group @error('nama_poliklinik') has-error @enderror">
                <label for="">NAMA POLIKLINIK</label>
                <!-- //value="{{ old('nama_poliklinik')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                <input type="text" name="nama_poliklinik" class="form-control"
                value="{{ $poliklinik->nama_poliklinik ?? old('nama_poliklinik') }}">
                @error('nama_poliklinik')
                    <span class="help-block">{{ $message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <input type="hidden" name="poliklinik_id" value="{{$poliklinik->poliklinik_id}}">
                <input type="submit" value="Update" class ="btn btn-primary">
                <button type="reset" class="btn btn-warning">Ulang</button>
                <a href="{{ route('admin.poliklinik.index') }}" class="btn btn-danger">Kembali</a>
            </div>

            </form>
        </div>
</div>

@endsection



