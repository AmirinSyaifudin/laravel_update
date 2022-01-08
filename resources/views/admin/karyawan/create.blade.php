@extends('admin.templates.default')

@section('content')

    <div class="box">
        <div class="box-header">
            <h2 class="box-title">ADD KARYAWAN</h2>
        </div>

            <div class="box-body">
                <form action="{{ route('admin.karyawan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group @error('no_induk') has-error @enderror">
                        <label for="">NO INDUK</label>
                        <input type="text" name="no_induk" class="form-control" placeholder="Masukkan Karyawan"
                        value="{{ old('no_induk') }}">
                        @error('no_induk')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('nama') has-error @enderror">
                        <label for="">NAMA</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Karyawan"
                        value="{{ old('nama') }}">
                        @error('nama')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">ALAMAT</label>
                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ old('alamat') }}</textarea>
                    </div>

                    <div class="form-group @error('tanggal_lahir') has-error @enderror">
                        <label for="">TANGGAL LAHIR</label>
                        <input type="date" name="tanggal_lahir" class="form-control"
                        value="{{ old('tanggal_lahir') }}">
                        @error('tanggal_lahir')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('tanggal_bergabung') has-error @enderror">
                        <label for="">TANGGAL BERGABUNG</label>
                        <input type="date" name="tanggal_bergabung" class="form-control"
                        value="{{ old('tanggal_bergabung') }}">
                        @error('tanggal_bergabung')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('foto') has-error @enderror">
                        <label for="">FOTO</label>
                        <input type="file" name="foto" class="form-control">
                        @error('foto')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <input type="submit" value="Tambah" class ="btn btn-primary">
                        <button type="reset" class="btn btn-warning">Ulang</button>
                        <a href="{{ route('admin.karyawan.index') }}" class="btn btn-danger">Kembali</a>
                    </div>

                </form>
            </div>
    </div>
@endsection


