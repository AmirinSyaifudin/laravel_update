@extends('admin.templates.default')

@section('content')

    <div class="box">
        <div class="box-header">
            <h2 class="box-title">TAMBAH DATA JENIS PASIEN</h2>
        </div>

            <div class="box-body">
                <form action="{{ route('admin.jenispasien.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group @error('nama_jenis_pasien') has-error @enderror">
                        <label for="">NAMA JENIS PASIEN</label>
                        <input type="text" name="nama_jenis_pasien" class="form-control" placeholder="Masukkan jenispasien"
                        value="{{ old('nama_jenis_pasien') }}">
                        @error('nama_jenis_pasien')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Tambah" class ="btn btn-primary">
                        <button type="reset" class="btn btn-warning">Ulang</button>
                        <a href="{{ route('admin.jenispasien.index') }}" class="btn btn-danger">Kembali</a>
                    </div>

                </form>
            </div>
    </div>
@endsection


