@extends('admin.templates.default')

@section('content')

    <div class="box">
        <div class="box-header">
            <h2 class="box-title">UPDATE DATA CUTI</h2>
        </div>

            <div class="box-body">
                <form action="{{ route('admin.cuti.update', $cuti->cuti_id) }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")

                    {{-- <div class="form-group @error('karyawan') has-error @enderror">
                        <label for="">NO INDUK</label>
                        <select name="id" id="" class="form-control select2">
                         @foreach ($karyawan as $kky)
                                <option value="{{ $kky->id}}">{{ $kky->no_induk}}</option>
                         @endforeach
                            @error('karyawan')
                                <span class="help-block">{{ $message}}</span>
                            @enderror
                        </select>
                    </div> --}}
                    
                    {{-- <div class="form-group>
                        <label for="">NAMA KARYAWAN</label>
                        <select name="karyawan_id" id="validationCustom03" class="form-control select2">
                            @foreach ($cuti as $ct)
                                    <option value="{{ $ct->karyawan_id }}">{{ $ct->nama }}</option>
                            @endforeach
                            @error('cuti')
                                <span class="help-block">{{ $message}}</span>
                            @enderror
                        </select>
                    </div> --}}
                    
                    <div class="form-group @error('keterangan') has-error @enderror">
                        <label for="">KETERANGAN</label>
                        <textarea name="keterangan" id="" row="3" class="form-control"
                        placeholder="Masukkan Deskripsi Buku">{{ $cuti->keterangan ?? old('keterangan') }}</textarea>
                        @error('keterangan')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('tanggal_cuti') has-error @enderror">
                        <label for="">TANGGAL CUTI</label>
                        <input type="date" name="tanggal_cuti" class="form-control"
                        placeholder="" value="{{ $cuti->tanggal_cuti ?? old('tanggal_cuti') }}">
                        @error('tanggal_cuti')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('tanggal_selesai_cuti') has-error @enderror">
                        <label for="">TANGGAL SELESAI CUTI</label>
                        <input type="date" name="tanggal_selesai_cuti" class="form-control"
                        placeholder="" value="{{ $cuti->tanggal_selesai_cuti ?? old('tanggal_selesai_cuti') }}">
                        @error('tanggal_selesai_cuti')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('lama_cuti') has-error @enderror">
                        <label for="">LAMA CUTI</label>
                        <input type="number" name="lama_cuti" class="form-control"
                        placeholder="Masukan Cuti " value="{{ $cuti->lama_cuti ?? old('lama_cuti') }}">
                        @error('lama_cuti')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                  
                    <div class="form-group">
                        <input type="hidden" name="cuti_id" value="{{$cuti->cuti_id}}">
                        <input type="submit" value="Update" class ="btn btn-primary">
                        <button type="reset" class="btn btn-warning">Ulang</button>
                        <a href="{{ route('admin.cuti.index') }}" class="btn btn-danger">Kembali</a>
                    </div>

                </form>
            </div>
    </div>
@endsection


