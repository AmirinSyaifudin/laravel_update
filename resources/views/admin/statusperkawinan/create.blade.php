@extends('admin.templates.default')

@section('content')

    <div class="box">
        <div class="box-header">
            <h2 class="box-title">TAMBAH DATA STATUS PERKAWINAN</h2>
        </div>

            <div class="box-body">
                <form action="{{ route('admin.statusperkawinan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group @error('nama_status_perkawinan') has-error @enderror">
                        <label for="">NAMA JENIS PASIEN</label>
                        <input type="text" name="nama_status_perkawinan" class="form-control" placeholder="Masukkan statusperkawinan"
                        value="{{ old('nama_status_perkawinan') }}">
                        @error('nama_status_perkawinan')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Tambah" class ="btn btn-primary">
                        <button type="reset" class="btn btn-warning">Ulang</button>
                        <a href="{{ route('admin.statusperkawinan.index') }}" class="btn btn-danger">Kembali</a>
                    </div>

                </form>
            </div>
    </div>
@endsection


