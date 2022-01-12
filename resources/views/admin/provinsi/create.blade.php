@extends('admin.templates.default')
@section('content')
    <div class="box">
        <div class="box-header">
            <h2 class="box-title">ADDA AUTHOR</h2>
        </div>

            <div class="box-body">
                <form action="{{ route('admin.provinsi.store') }}" method="POST">
                @csrf
                    <div class="form-group @error('nama_provinsi') has-error @enderror">
                        <label for="">NAMA PROVINSI</label>
                        <!-- //value="{{ old('nama_provinsi')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                        <input type="text" name="nama_provinsi" class="form-control" placeholder="Masukkan Nama Penulis" value="{{ old('nama_provinsi') }}"> 
                        @error('nama_provinsi')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('tanggal_jadi_provinsi') has-error @enderror">
                        <label for="">TANGGAL JADI PROVINSI</label>
                        <!-- //value="{{ old('tanggal_jadi_provinsi')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                        <input type="text" name="tanggal_jadi_provinsi" class="form-control" placeholder="Masukkan Nama Penulis" value="{{ old('tanggal_jadi_provinsi') }}"> 
                        @error('tanggal_jadi_provinsi')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('keterangan') has-error @enderror">
                        <label for="">KETERANGAN</label>
                        <!-- //value="{{ old('keterangan')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                        <input type="text" name="keterangan" class="form-control" placeholder="Masukkan Nama Penulis" value="{{ old('keterangan') }}"> 
                        @error('keterangan')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Tambah" class ="btn btn-primary">
                    </div>
                </form>
            </div>
    </div>
@endsection