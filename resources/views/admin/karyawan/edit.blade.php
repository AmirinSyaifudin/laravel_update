@extends('admin.templates.default')

@section('content')

    <div class="box">
        <div class="box-header">
            <h2 class="box-title">UPDATE DATA KARYAWAN</h2>
        </div>

            <div class="box-body">
                <form action="{{ route('admin.karyawan.update', $karyawan->karyawan_id) }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")

                    <div class="form-group @error('no_induk') has-error @enderror">
                        <label for="">NO INDUK</label>
                        <!-- //value="{{ old('no_induk')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                        <input type="text" name="no_induk" class="form-control" placeholder="Masukkan Karyawan"
                        value="{{ $karyawan->no_induk ?? old('no_induk') }}">
                        @error('no_induk')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('nama') has-error @enderror">
                        <label for="">NAMA</label>
                        <!-- //value="{{ old('nama')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Karyawan"
                        value="{{ $karyawan->nama ?? old('nama') }}">
                        @error('nama')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('alamat') has-error @enderror">
                        <label for="">ALAMAT</label>
                        <textarea name="alamat" id="" row="3" class="form-control"
                        placeholder="Masukkan ">{{ $karyawan->alamat ?? old('alamat') }}</textarea>
                        @error('alamat')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('tanggal_lahir') has-error @enderror">
                        <label for="">TANGGAL LAHIR</label>
                        <!-- //value="{{ old('tanggal_lahir')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                        <input type="date" name="tanggal_lahir" class="form-control" 
                        placeholder="Masukkan Jumlah"
                        value="{{ $karyawan->tanggal_lahir ?? old('tanggal_lahir') }}">
                        @error('tanggal_lahir')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('tanggal_bergabung') has-error @enderror">
                        <label for="">TANGGAL BERGABUNG</label>
                        <!-- //value="{{ old('tanggal_bergabung')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                        <input type="date" name="tanggal_bergabung" class="form-control" placeholder="Masukkan Jumlah"
                        value="{{ $karyawan->tanggal_bergabung ?? old('tanggal_bergabung') }}">
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
                        <input type="hidden" name="karyawan_id" value="{{$karyawan->karyawan_id}}">
                        <input type="submit" value="Update" class ="btn btn-primary">
                        <button type="reset" class="btn btn-warning">Ulang</button>
                        <a href="{{ route('admin.karyawan.index') }}" class="btn btn-danger">Kembali</a>
                    </div>

                </form>
            </div>
    </div>
@endsection


