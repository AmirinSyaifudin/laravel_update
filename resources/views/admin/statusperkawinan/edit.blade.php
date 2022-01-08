@extends('admin.templates.default')
@section('content')

<div class="box">
    <div class="box-header">
        <h2 class="box-title">EDIT DATA STATUS PERKAWINAN </h2>
    </div>

        <div class="box-body">
            <form action="{{ route('admin.statusperkawinan.update', $status_perkawinan->status_perkawinan_id) }}" method="POST" enctype="multipart/form-data">
             @csrf
             @method("PUT")
             {{-- <input type="hidden" name="id_produk" value="{{ $produk->produk_id }}"> --}}
            <div class="form-group @error('nama_status_perkawinan') has-error @enderror">
                <label for="">NAMA JENIS PASIEN</label>
                <!-- //value="{{ old('nama_status_perkawinan')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                <input type="text" name="nama_status_perkawinan" class="form-control"
                value="{{ $status_perkawinan->nama_status_perkawinan ?? old('nama_status_perkawinan') }}">
                @error('nama_status_perkawinan')
                    <span class="help-block">{{ $message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <input type="hidden" name="status_perkawinan_id" value="{{$status_perkawinan->status_perkawinan_id}}">
                <input type="submit" value="Update" class ="btn btn-primary">
                <button type="reset" class="btn btn-warning">Ulang</button>
                <a href="{{ route('admin.statusperkawinan.index') }}" class="btn btn-danger">Kembali</a>
            </div>

            </form>
        </div>
</div>

@endsection



