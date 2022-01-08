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
              <!-- /.box-header -->
              <!-- form start -->

              <form class="form-horizontal">
                <div class="box-body">
                  <div class="form-group">
                    {{-- <label for="exampleInputFile">File input</label> --}}
                    <center><label for="exampleInputFile">Jenis Pasien</label></center>
                    {{-- <input type="file" id="exampleInputFile">
  
                    <p class="help-block">Example block-level help text here.</p> --}}
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">JENIS PASIEN</label>
  
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">NO RM</label>
  
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">TANGGAL KUNJUNGAN</label>
  
                    <div class="col-sm-10">
                      <input type="date" name="" value="" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <center><label for="exampleInputFile">PASIEN BARU</label></center>
                  </div>
                 
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">NO IDENTITAS</label>
  
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">POLIKLINIK</label>
  
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">NAKES</label>
  
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">NAMA</label>
  
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
                    <label for="inputPassword3" class="col-sm-2 control-label">KELURAHAN</label>
  
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">JENIS KELAMIN</label>
  
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                  </div>

                  <div class="form-group has-success">
                    <label for="inputSuccess" class="col-sm-2 control-label">GOL DARAH</label>
  
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputSuccess" placeholder="">
                    </div>
                  </div>

                  <div class="form-group has-success">
                    <label for="inputSuccess" class="col-sm-2 control-label">PEKERJAAN</label>
  
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputSuccess" placeholder="">
                    </div>
                  </div>

                  <div class="form-group has-success">
                    <label for="inputSuccess" class="col-sm-2 control-label">STATUS</label>
  
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputSuccess" placeholder="">
                    </div>
                  </div>

                  <div class="form-group has-success">
                    <label for="inputSuccess" class="col-sm-2 control-label">PENDIDIKAN</label>
  
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputSuccess" placeholder="">
                    </div>
                  </div>

                  <div class="form-group has-success">
                    <label for="inputSuccess" class="col-sm-2 control-label">PEKERJAAN</label>
  
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputSuccess" placeholder="">
                    </div>
                  </div>
                  
                  <div class="form-group has-success">
                    <label for="inputSuccess" class="col-sm-2 control-label">AGAMA</label>
  
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputSuccess" placeholder="">
                    </div>
                  </div>

                  <div class="form-group has-success">
                    <label for="inputSuccess" class="col-sm-2 control-label">SUKU</label>
  
                    <div class="col-sm-10">
                      <input type="" name="" value="" class="form-control" id="inputSuccess" placeholder="">
                    </div>
                  </div>

                </div>

                <!-- /.box-body -->
                {{-- <div class="box-footer">
                  <button type="submit" class="btn btn-primary">SIMPAN</button>
                  <button type="submit" class="btn btn-info pull-right">RESET</button>
                </div> --}}
                <!-- /.box-footer -->
              </form>

          
            </div>
   
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- Horizontal Form -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Rencara Cara Pembayaran</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="box-body">

                  <div class="form-group">
                    {{-- <label for="exampleInputFile">File input</label> --}}
                    <center><label for="exampleInputFile">CATA PEMBAYARAN</label></center>
                    {{-- <input type="file" id="exampleInputFile">
  
                    <p class="help-block">Example block-level help text here.</p> --}}
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
                    {{-- <label for="exampleInputFile">File input</label> --}}
                    <center><label for="exampleInputFile">RUJUKAN</label></center>
                    {{-- <input type="file" id="exampleInputFile">
  
                    <p class="help-block">Example block-level help text here.</p> --}}
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

                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-info">SIMPAN</button>
                  <button type="submit" class="btn btn-info pull-right">RESET</button>
                </div>
                <!-- /.box-footer -->
              </form>
            </div>
            <!-- /.box -->
            <!-- general form elements disabled -->
          
            <!-- /.box -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </section>




      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Select2</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Minimal</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option selected="selected" data-select2-id="3">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-i65x-container"><span class="select2-selection__rendered" id="select2-i65x-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Disabled</label>
                <select class="form-control select2 select2-hidden-accessible" disabled="" style="width: 100%;" data-select2-id="4" tabindex="-1" aria-hidden="true">
                  <option selected="selected" data-select2-id="6">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="ltr" data-select2-id="5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-labelledby="select2-v4dy-container"><span class="select2-selection__rendered" id="select2-v4dy-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label>Multiple</label>
                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
                  <option>Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="8" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Select a State" style="width: 593.333px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Disabled Result</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="9" tabindex="-1" aria-hidden="true">
                  <option selected="selected" data-select2-id="11">Alabama</option>
                  <option>Alaska</option>
                  <option disabled="disabled">California (disabled)</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="10" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ky17-container"><span class="select2-selection__rendered" id="select2-ky17-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
          the plugin.
        </div>
      </div>

      @endsection


