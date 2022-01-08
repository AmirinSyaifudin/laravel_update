@extends('admin.templates.default')

@section('content')

    <div class="box">
        <div class="box-header">
            <h2 class="box-title">TAMBAH DATA SUKU</h2>
        </div>

            <div class="box-body">
                <form action="{{ route('admin.suku.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group @error('nama_suku') has-error @enderror">
                        <label for="">NAMA SUKU</label>
                        <input type="text" name="nama_suku" class="form-control" placeholder="Masukkan suku"
                        value="{{ old('nama_suku') }}">
                        @error('nama_suku')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Tambah" class ="btn btn-primary">
                        <button type="reset" class="btn btn-warning">Ulang</button>
                        <a href="{{ route('admin.suku.index') }}" class="btn btn-danger">Kembali</a>
                    </div>

                </form>
            </div>
    </div>
@endsection


