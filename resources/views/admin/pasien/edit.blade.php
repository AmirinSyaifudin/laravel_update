@extends('admin.templates.default')

@section('content')
    <section class="content">
        <div class="row">
          <!-- left column -->
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">EDIT DATA PASIEN</h3>
    
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>G FF TFYG </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i>IY TFTYF </button>
              </div>
            </div>
            <!-- /.box-header -->

            <form class="" action="" method="" enctype=""> 
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
              <div class="form-group center">
                <input type="submit" value="Tambah" class ="btn btn-primary">
                <button type="reset" class="btn btn-warning">Ulang</button>
                <a href="" class="btn btn-danger">Kembali</a>
            </div>
            </div>
            </form>
            <!-- /.box-body -->
            <div class="box-footer">
              Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
              the plugin.
            </div>
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </section>
      @endsection


