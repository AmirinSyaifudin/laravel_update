@extends('admin.templates.default')

@section('content')

    <div class="box">
        <div class="box-header">
            <h2 class="box-title">TAMBAH DATA AGAMA</h2>
        </div>

            <div class="box-body">
                <form action="{{ route('admin.agama.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group @error('nama_agama') has-error @enderror">
                        <label for="">NAMA AGAMA</label>
                        <input type="text" name="nama_agama" class="form-control" placeholder="Masukkan agama"
                        value="{{ old('nama_agama') }}">
                        @error('nama_agama')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Tambah" class ="btn btn-primary">
                        <button type="reset" class="btn btn-warning">Ulang</button>
                        <a href="{{ route('admin.agama.index') }}" class="btn btn-danger">Kembali</a>
                    </div>

                </form>
            </div>
    </div>
@endsection


