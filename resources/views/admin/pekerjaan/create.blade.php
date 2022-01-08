@extends('admin.templates.default')

@section('content')

    <div class="box">
        <div class="box-header">
            <h2 class="box-title">TAMBAH DATA PEKERJAAN</h2>
        </div>

            <div class="box-body">
                <form action="{{ route('admin.pekerjaan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group @error('nama_pekerjaan') has-error @enderror">
                        <label for="">NAMA PEKERJAAN</label>
                        <input type="text" name="nama_pekerjaan" class="form-control" placeholder="Masukkan pekerjaan"
                        value="{{ old('nama_pekerjaan') }}">
                        @error('nama_pekerjaan')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Tambah" class ="btn btn-primary">
                        <button type="reset" class="btn btn-warning">Ulang</button>
                        <a href="{{ route('admin.pekerjaan.index') }}" class="btn btn-danger">Kembali</a>
                    </div>

                </form>
            </div>
    </div>
@endsection


