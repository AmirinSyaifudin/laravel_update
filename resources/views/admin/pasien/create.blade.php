@extends('admin.templates.default')

@section('content')
    <section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Jenis Pasien</h3>
              </div>
     
              <form class="form-horizontal" action="{{ route('admin.pasien.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <center><label for="exampleInputFile">Jenis Pasien</label></center>
                  </div>

                  <div class="form-group @error('jenispasien') has-error @enderror">
                    <label for="inputPassword3" class="col-sm-2 control-label">JENIS PASIEN</label>
                    <div class="col-sm-10">
                      {{-- <input name="jenis_pasien_id" class="form-control" id="inputPassword3" placeholder=""> --}}
                    
                      <select name="jenispasien_id" id="" class="form-control select2">
                        @foreach ($jenispasien as $ps)
                               <option value="{{ $ps->jenispasien_id}}">{{ $ps->nama_jenis_pasien}}</option>
                        @endforeach
                           @error('jenispasien')
                               <span class="help-block">{{ $message}}</span>
                           @enderror
                       </select>
                    </div>
                  </div>

                  <div class="form-group @error('poliklinik') has-error @enderror">
                    <label for="inputPassword3" class="col-sm-2 control-label">POLI KLINIK</label>
                    <div class="col-sm-10">
                      {{-- <input name="jenis_pasien_id" class="form-control" id="inputPassword3" placeholder=""> --}}
                    
                      <select name="poliklinik_id" id="" class="form-control select2">
                        @foreach ($poliklinik as $ps)
                               <option value="{{ $ps->poliklinik_id}}">{{ $ps->nama_poliklinik}}</option>
                        @endforeach
                           @error('poliklinik')
                               <span class="help-block">{{ $message}}</span>
                           @enderror
                       </select>
                    </div>
                  </div>

                  <div class="form-group @error('agama') has-error @enderror">
                    <label for="inputPassword3" class="col-sm-2 control-label">AGAMA</label>
                    <div class="col-sm-10">
                      {{-- <input name="jenis_pasien_id" class="form-control" id="inputPassword3" placeholder=""> --}}
                    
                      <select name="agama_id" id="" class="form-control select2">
                        @foreach ($agama as $ps)
                               <option value="{{ $ps->agama_id}}">{{ $ps->nama_agama}}</option>
                        @endforeach
                           @error('agama')
                               <span class="help-block">{{ $message}}</span>
                           @enderror
                       </select>
                    </div>
                  </div>

                  <div class="form-group @error('golongan_darah') has-error @enderror">
                    <label for="inputPassword3" class="col-sm-2 control-label">GOLONGAN DARAH</label>
                    <div class="col-sm-10">
                      {{-- <input name="jenis_pasien_id" class="form-control" id="inputPassword3" placeholder=""> --}}
                    
                      <select name="golongan_darah_id" id="" class="form-control select2">
                        @foreach ($golongan_darah as $ps)
                               <option value="{{ $ps->golongan_darah_id}}">{{ $ps->nama_golongan_darah}}</option>
                        @endforeach
                           @error('golongan_darah')
                               <span class="help-block">{{ $message}}</span>
                           @enderror
                       </select>
                    </div>
                  </div>

                  <div class="form-group @error('pekerjaan') has-error @enderror">
                    <label for="inputPassword3" class="col-sm-2 control-label">PEKERJAAN</label>
                    <div class="col-sm-10">
                      {{-- <input name="jenis_pasien_id" class="form-control" id="inputPassword3" placeholder=""> --}}
                    
                      <select name="pekerjaan_id" id="" class="form-control select2">
                        @foreach ($pekerjaan as $ps)
                               <option value="{{ $ps->pekerjaan_id}}">{{ $ps->nama_pekerjaan}}</option>
                        @endforeach
                           @error('pekerjaan')
                               <span class="help-block">{{ $message}}</span>
                           @enderror
                       </select>
                    </div>
                  </div>

                  <div class="form-group @error('pendidikan') has-error @enderror">
                    <label for="inputPassword3" class="col-sm-2 control-label">PENDIDIKAN</label>
                    <div class="col-sm-10">
                      {{-- <input name="jenis_pasien_id" class="form-control" id="inputPassword3" placeholder=""> --}}
                    
                      <select name="pendidikan_id" id="" class="form-control select2">
                        @foreach ($pendidikan as $ps)
                               <option value="{{ $ps->pendidikan_id}}">{{ $ps->nama_pendidikan}}</option>
                        @endforeach
                           @error('pendidikan')
                               <span class="help-block">{{ $message}}</span>
                           @enderror
                       </select>
                    </div>
                  </div>

                  <div class="form-group @error('status_perkawinan') has-error @enderror">
                    <label for="inputPassword3" class="col-sm-2 control-label">STATUS KAWIN</label>
                    <div class="col-sm-10">
                      {{-- <input name="jenis_pasien_id" class="form-control" id="inputPassword3" placeholder=""> --}}
                    
                      <select name="status_perkawinan_id" id="" class="form-control select2">
                        @foreach ($status_perkawinan as $ps)
                               <option value="{{ $ps->status_perkawinan_id}}">{{ $ps->nama_status_perkawinan}}</option>
                        @endforeach
                           @error('status_perkawinan')
                               <span class="help-block">{{ $message}}</span>
                           @enderror
                       </select>
                    </div>
                  </div>

                  <div class="form-group @error('suku') has-error @enderror">
                    <label for="inputPassword3" class="col-sm-2 control-label">SUKU</label>
                    <div class="col-sm-10">
                      {{-- <input name="jenis_pasien_id" class="form-control" id="inputPassword3" placeholder=""> --}}
                    
                      <select name="suku_id" id="" class="form-control select2">
                        @foreach ($suku as $ps)
                               <option value="{{ $ps->suku_id}}">{{ $ps->nama_suku}}</option>
                        @endforeach
                           @error('suku')
                               <span class="help-block">{{ $message}}</span>
                           @enderror
                       </select>
                    </div>
                  </div>


                  <div class="form-group @error('no_rekam_medik') has-error @enderror">
                    <label for="inputPassword3" class="col-sm-2 control-label">NO RM</label>
                    <div class="col-sm-10">
                      <input type="text" name="no_rekam_medik" value="{{ old('no_rekam_medik') }}" class="form-control" id="inputPassword3" placeholder="">
                        @error('no_rekam_medik')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>
                  </div>

                  <div class="form-group @error('nama_pasien') has-error @enderror">
                    <label for="inputPassword3" class="col-sm-2 control-label">NAMA </label>
                    <div class="col-sm-10">
                      <input type="text" name="nama_pasien" value="{{ old('nama_pasien') }}" class="form-control" id="inputPassword3" placeholder="">
                        @error('nama_pasien')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>
                  </div>

                  <div class="form-group @error('tanggal_lahir') has-error @enderror">
                    <label for="inputPassword3" class="col-sm-2 control-label">TANGGAL LAHIR</label>
                    <div class="col-sm-10">
                      <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" class="form-control" id="inputPassword3" placeholder="">
                      @error('tanggal_lahir')
                        <span class="help-block">{{ $message}}</span>
                      @enderror
                    </div>
                  </div>

                  {{-- <div class="form-group">
                    <center><label for="exampleInputFile">PASIEN BARU</label></center>
                  </div> --}}
                 
                  {{-- <div class="form-group @error('no_identitas') has-error @enderror">
                    <label for="inputPassword3" class="col-sm-2 control-label">NO IDENTITAS</label>
                    <div class="col-sm-10">
                      <input type="text" name="no_identitas" value="{{ old('no_identitas') }}" class="form-control" id="inputPassword3" placeholder="">
                      @error('no_identitas')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>
                  </div> --}}

                  {{-- <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">POLIKLINIK</label>
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                  </div> --}}

                  {{-- <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">NAKES</label>
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                  </div> --}}

                

                  {{-- <div class="form-group @error('alamat') has-error @enderror">
                    <label for="inputPassword3" class="col-sm-2 control-label">ALAMAT </label>
                    <div class="col-sm-10">
                      <input type="text" name="alamat" value="{{ old('alamat') }}" class="form-control" id="inputPassword3" placeholder="">
                      @error('alamat')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>
                  </div> --}}

                  {{-- <div class="form-group @error('kelurahan') has-error @enderror">
                    <label for="inputPassword3" class="col-sm-2 control-label">KELURAHAN </label>
                    <div class="col-sm-10">
                      <input type="text" name="kelurahan" value="{{ old('kelurahan') }}" class="form-control" id="inputPassword3" placeholder="">
                      @error('kelurahan')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>
                  </div> --}}

                  {{-- <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">JENIS KELAMIN</label>
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                  </div> --}}

                  {{-- <div class="form-group has-success">
                    <label for="inputSuccess" class="col-sm-2 control-label">GOL DARAH</label>
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputSuccess" placeholder="">
                    </div>
                  </div> --}}

                  {{-- <div class="form-group has-success">
                    <label for="inputSuccess" class="col-sm-2 control-label">PEKERJAAN</label>
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputSuccess" placeholder="">
                    </div>
                  </div> --}}

                  {{-- <div class="form-group has-success">
                    <label for="inputSuccess" class="col-sm-2 control-label">STATUS</label>
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputSuccess" placeholder="">
                    </div>
                  </div> --}}

                  {{-- <div class="form-group has-success">
                    <label for="inputSuccess" class="col-sm-2 control-label">PENDIDIKAN</label>
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputSuccess" placeholder="">
                    </div>
                  </div> --}}

                  {{-- <div class="form-group has-success">
                    <label for="inputSuccess" class="col-sm-2 control-label">PEKERJAAN</label>
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputSuccess" placeholder="">
                    </div>
                  </div> --}}
                  
                  {{-- <div class="form-group has-success">
                    <label for="inputSuccess" class="col-sm-2 control-label">AGAMA</label>
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputSuccess" placeholder="">
                    </div>
                  </div> --}}

                  {{-- <div class="form-group has-success">
                    <label for="inputSuccess" class="col-sm-2 control-label">SUKU</label>
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputSuccess" placeholder="">
                    </div>
                  </div> --}}

                  <div class="form-group">
                    <input type="submit" value="Tambah" class ="btn btn-primary">
                    <button type="reset" class="btn btn-warning">Ulang</button>
                    <a href="{{ route('admin.pasien.index') }}" class="btn btn-danger">Kembali</a>
                </div>
        
                </div>
              </form>
            </div>
   
          </div>
     
          {{-- <div class="col-md-6">
            <!-- Horizontal Form -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Rencara Cara Pembayaran</h3>
              </div>
       
              <form class="form-horizontal">
                <div class="box-body">

                  <div class="form-group">
                    <center><label for="exampleInputFile">CATA PEMBAYARAN</label></center>              
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Cara Bayar</label>
  
                    <div class="col-sm-10">
                        <div class="checkbox">
                            <label>
                              <input type="checkbox">
                              Bayar Sendiri
                            </label>
                          </div>
        
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">
                              Asuransi
                            </label>
                          </div>
    
                    </div>
                  </div>

                  <div class="form-group">
                    <center><label for="exampleInputFile">KELUARGA YANG BISA DIHUBUNGI</label></center>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Pasien Sendiri
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">NAMA</label>
                    <div class="col-sm-10">
                     <input type="" name="" value="" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">HUBUNGAN KELUARGA</label>
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">ALAMAT</label>
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">NO TELPON</label>
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <center><label for="exampleInputFile">PENANGGUNGJAWAB</label></center>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Data sama dengan keluarga
                        </label>
                      </div>
                    </div>
                  </div>
                
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">NAMA</label>
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">HUBUNGAN KELUARGA</label>
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">ALAMAT</label>
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">NO TELPON</label>
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <center><label for="exampleInputFile">RUJUKAN</label></center>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">PENGIRIM</label>
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">RUJUKAN</label>
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                  </div>

                </div>

                <div class="box-footer">
                  <button type="submit" class="btn btn-info">SIMPAN</button>
                  <button type="submit" class="btn btn-info pull-right">RESET</button>
                </div>
      
              </form>
            </div>
       
          </div> --}}
      
        </div>

      </section>

      @endsection


