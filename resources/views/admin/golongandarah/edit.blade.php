@extends('admin.templates.default')
@section('content')

<div class="box">
    <div class="box-header">
        <h2 class="box-title">EDIT DATA GOLONGAN DARAH </h2>
    </div>

        <div class="box-body">
            <form action="{{ route('admin.golongandarah.update', $golongan_darah->golongan_darah_id) }}" method="POST" enctype="multipart/form-data">
             @csrf
             @method("PUT")
             {{-- <input type="hidden" name="id_produk" value="{{ $produk->produk_id }}"> --}}
            <div class="form-group @error('nama_golongan_darah') has-error @enderror">
                <label for="">NAMA JENIS PASIEN</label>
                <!-- //value="{{ old('nama_golongan_darah')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                <input type="text" name="nama_golongan_darah" class="form-control"
                value="{{ $golongan_darah->nama_golongan_darah ?? old('nama_golongan_darah') }}">
                @error('nama_golongan_darah')
                    <span class="help-block">{{ $message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <input type="hidden" name="golongan_darah_id" value="{{$golongan_darah->golongan_darah_id}}">
                <input type="submit" value="Update" class ="btn btn-primary">
                <button type="reset" class="btn btn-warning">Ulang</button>
                <a href="{{ route('admin.golongandarah.index') }}" class="btn btn-danger">Kembali</a>
            </div>

            </form>
        </div>
</div>

@endsection



