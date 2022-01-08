@extends('admin.templates.default')

@section('content')

    <div class="box">
        <div class="box-header">
            <h2 class="box-title">TAMBAH DATA GOLONGAN DARAH</h2>
        </div>

            <div class="box-body">
                <form action="{{ route('admin.golongandarah.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group @error('nama_golongan_darah') has-error @enderror">
                        <label for="">NAMA JENIS PASIEN</label>
                        <input type="text" name="nama_golongan_darah" class="form-control" placeholder="Masukkan golongan_darah"
                        value="{{ old('nama_golongan_darah') }}">
                        @error('nama_golongan_darah')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Tambah" class ="btn btn-primary">
                        <button type="reset" class="btn btn-warning">Ulang</button>
                        <a href="{{ route('admin.golongandarah.index') }}" class="btn btn-danger">Kembali</a>
                    </div>

                </form>
            </div>
    </div>
@endsection


