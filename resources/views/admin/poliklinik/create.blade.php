@extends('admin.templates.default')

@section('content')

    <div class="box">
        <div class="box-header">
            <h2 class="box-title">TAMBAH DATA POLIKLINIK</h2>
        </div>

            <div class="box-body">
                <form action="{{ route('admin.poliklinik.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group @error('nama_poliklinik') has-error @enderror">
                        <label for="">NAMA JENIS PASIEN</label>
                        <input type="text" name="nama_poliklinik" class="form-control" placeholder="Masukkan poliklinik"
                        value="{{ old('nama_poliklinik') }}">
                        @error('nama_poliklinik')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Tambah" class ="btn btn-primary">
                        <button type="reset" class="btn btn-warning">Ulang</button>
                        <a href="{{ route('admin.poliklinik.index') }}" class="btn btn-danger">Kembali</a>
                    </div>

                </form>
            </div>
    </div>
@endsection


