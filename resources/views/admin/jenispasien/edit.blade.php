@extends('admin.templates.default')
@section('content')

<div class="box">
    <div class="box-header">
        <h2 class="box-title">EDIT DATA JENIS PASIEN </h2>
    </div>

        <div class="box-body">
            <form action="{{ route('admin.jenispasien.update', $jenispasien->jenispasien_id) }}" method="POST" enctype="multipart/form-data">
             @csrf
             @method("PUT")
             {{-- <input type="hidden" name="id_produk" value="{{ $produk->produk_id }}"> --}}
            <div class="form-group @error('nama_jenis_pasien') has-error @enderror">
                <label for="">NAMA JENIS PASIEN</label>
                <!-- //value="{{ old('nama_jenis_pasien')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                <input type="text" name="nama_jenis_pasien" class="form-control"
                value="{{ $jenispasien->nama_jenis_pasien ?? old('nama_jenis_pasien') }}">
                @error('nama_jenis_pasien')
                    <span class="help-block">{{ $message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <input type="hidden" name="jenispasien_id" value="{{$jenispasien->jenispasien_id}}">
                <input type="submit" value="Update" class ="btn btn-primary">
                <button type="reset" class="btn btn-warning">Ulang</button>
                <a href="{{ route('admin.jenispasien.index') }}" class="btn btn-danger">Kembali</a>
            </div>

            </form>
        </div>
</div>

@endsection



