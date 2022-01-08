@extends('admin.templates.default')
@section('content')

<div class="box">
    <div class="box-header">
        <h2 class="box-title">EDIT DATA PEKERJAAN </h2>
    </div>

        <div class="box-body">
            <form action="{{ route('admin.pekerjaan.update', $pekerjaan->pekerjaan_id) }}" method="POST" enctype="multipart/form-data">
             @csrf
             @method("PUT")
             {{-- <input type="hidden" name="id_produk" value="{{ $produk->produk_id }}"> --}}
            <div class="form-group @error('nama_pekerjaan') has-error @enderror">
                <label for="">NAMA PEKERJAAN</label>
                <!-- //value="{{ old('nama_pekerjaan')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                <input type="text" name="nama_pekerjaan" class="form-control"
                value="{{ $pekerjaan->nama_pekerjaan ?? old('nama_pekerjaan') }}">
                @error('nama_pekerjaan')
                    <span class="help-block">{{ $message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <input type="hidden" name="pekerjaan_id" value="{{$pekerjaan->pekerjaan_id}}">
                <input type="submit" value="Update" class ="btn btn-primary">
                <button type="reset" class="btn btn-warning">Ulang</button>
                <a href="{{ route('admin.pekerjaan.index') }}" class="btn btn-danger">Kembali</a>
            </div>

            </form>
        </div>
</div>

@endsection



