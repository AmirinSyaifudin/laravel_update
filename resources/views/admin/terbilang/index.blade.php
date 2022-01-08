@extends('admin.templates.default')
@section('content')
<h1> DATA FUNGSI TERBILANG</h1>

<!-- /.box-header -->
    <div class="box" onload="functionTimer()">
        <div class="box-header">
            <center> <h3 class="box-title" style="text-transform: uppercase;">Silahkan input data </h3><br><br> </center>

            </div>
            <div class="box-body" onload="functionTimer()">
                        <center>
                        <form action="{{ route('admin.terbilang.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal" style="max-width:500px">
                            @csrf
            
                            <div class="form-group @error('code_barang') has-error @enderror">
                                <label for="inputEmail3" class="col-sm-2 control-label">KODE BARANG OTOMATIS</label>
                                    <div class="col-sm-10">
                                        <input type="" name="code_barang" class="form-control" id="inputEmail3"
                                        value="{{ $nomer }}" readonly>
                                            @error('nama')
                                                <span class="help-block">{{ $message}}</span>
                                            @enderror
                                    </div>
                            </div>
        
                            <div class="form-group @error('nama_barang') has-error @enderror">
                                <label for="inputPassword3" class="col-sm-2 control-label">NAMA BARANG</label>
                                    <div class="col-sm-10">
                                        <input type="" name="nama_barang" class="form-control" id="inputPassword3" 
                                        value="{{ old('nama_barang') }}" placeholder="">
                                            @error('nama_barang')
                                                <span class="help-block">{{ $message}}</span>
                                            @enderror
                                    </div>
                            </div>


                            <div class="form-group @error('qty') has-error @enderror">
                                <label for="inputPassword3" class="col-sm-2 control-label">QUANTITY</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="qty" class="form-control" id="inputPassword3" 
                                        value="{{ old('qty') }}" placeholder="">
                                            @error('qty')
                                                <span class="help-block">{{ $message}}</span>
                                            @enderror
                                    </div>
                            </div>
        
                            <div class="form-group @error('harga') has-error @enderror">
                                <label for="inputPassword3" class="col-sm-2 control-label">HARGA</label>
                                    <div class="col-sm-10">
                                        <input type="" name="harga" class="form-control" id="inputPassword3" 
                                        value="{{ old('harga') }}" placeholder="">
                                            @error('harga')
                                                <span class="help-block">{{ $message}}</span>
                                            @enderror
                                    </div>
                            </div>

                            {{-- <div class="form-group">
                                <label>Date and time range:</label>
                
                                <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                  </div>
                                  <input type="text" class="form-control pull-right" id="reservationtime">
                                </div>
                                <!-- /.input group -->
                              </div>


                              <div class="form-group">
                                <label>Date range button:</label>
                
                                <div class="input-group">
                                  <button type="button" class="btn btn-default pull-right" id="daterange-btn">
                                    <span>
                                      <i class="fa fa-calendar"></i> Date range picker
                                    </span>
                                    <i class="fa fa-caret-down"></i>
                                  </button>
                                </div>
                              </div>
                              

                              <div class="box box-solid bg-green-gradient">
                                <div class="box-header ui-sortable-handle" style="cursor: move;">
                                  <i class="fa fa-calendar"></i>
                    
                                  <h3 class="box-title">Calendar</h3>
                                  <!-- tools box -->
                                  <div class="pull-right box-tools">
                                    <!-- button with a dropdown -->
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-bars"></i></button>
                                      <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Add new event</a></li>
                                        <li><a href="#">Clear events</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">View calendar</a></li>
                                      </ul>
                                    </div>
                                    <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                  </div>
                                  <!-- /. tools -->
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body no-padding">
                                  <!--The calendar -->
                                  <div id="calendar" style="width: 100%"><div class="datepicker datepicker-inline"><div class="datepicker-days" style=""><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">September 2021</th><th class="next">»</th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td class="old day" data-date="1630195200000">29</td><td class="old day" data-date="1630281600000">30</td><td class="old day" data-date="1630368000000">31</td><td class="day" data-date="1630454400000">1</td><td class="day" data-date="1630540800000">2</td><td class="day" data-date="1630627200000">3</td><td class="day" data-date="1630713600000">4</td></tr><tr><td class="day" data-date="1630800000000">5</td><td class="day" data-date="1630886400000">6</td><td class="day" data-date="1630972800000">7</td><td class="day" data-date="1631059200000">8</td><td class="day" data-date="1631145600000">9</td><td class="day" data-date="1631232000000">10</td><td class="day" data-date="1631318400000">11</td></tr><tr><td class="day" data-date="1631404800000">12</td><td class="day" data-date="1631491200000">13</td><td class="day" data-date="1631577600000">14</td><td class="day" data-date="1631664000000">15</td><td class="day" data-date="1631750400000">16</td><td class="day" data-date="1631836800000">17</td><td class="day" data-date="1631923200000">18</td></tr><tr><td class="day" data-date="1632009600000">19</td><td class="day" data-date="1632096000000">20</td><td class="day" data-date="1632182400000">21</td><td class="day" data-date="1632268800000">22</td><td class="day" data-date="1632355200000">23</td><td class="day" data-date="1632441600000">24</td><td class="day" data-date="1632528000000">25</td></tr><tr><td class="day" data-date="1632614400000">26</td><td class="day" data-date="1632700800000">27</td><td class="day" data-date="1632787200000">28</td><td class="day" data-date="1632873600000">29</td><td class="day" data-date="1632960000000">30</td><td class="new day" data-date="1633046400000">1</td><td class="new day" data-date="1633132800000">2</td></tr><tr><td class="new day" data-date="1633219200000">3</td><td class="new day" data-date="1633305600000">4</td><td class="new day" data-date="1633392000000">5</td><td class="new day" data-date="1633478400000">6</td><td class="new day" data-date="1633564800000">7</td><td class="new day" data-date="1633651200000">8</td><td class="new day" data-date="1633737600000">9</td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2021</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month">Mar</span><span class="month">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month">Aug</span><span class="month focused">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2020-2029</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2019</span><span class="year">2020</span><span class="year focused">2021</span><span class="year">2022</span><span class="year">2023</span><span class="year">2024</span><span class="year">2025</span><span class="year">2026</span><span class="year">2027</span><span class="year">2028</span><span class="year">2029</span><span class="year new">2030</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2000-2090</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="decade old">1990</span><span class="decade">2000</span><span class="decade">2010</span><span class="decade focused">2020</span><span class="decade">2030</span><span class="decade">2040</span><span class="decade">2050</span><span class="decade">2060</span><span class="decade">2070</span><span class="decade">2080</span><span class="decade">2090</span><span class="decade new">2100</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-centuries" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2000-2900</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="century old">1900</span><span class="century focused">2000</span><span class="century">2100</span><span class="century">2200</span><span class="century">2300</span><span class="century">2400</span><span class="century">2500</span><span class="century">2600</span><span class="century">2700</span><span class="century">2800</span><span class="century">2900</span><span class="century new">3000</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div></div></div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer text-black">
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <!-- Progress bars -->
                                      <div class="clearfix">
                                        <span class="pull-left">Task #1</span>
                                        <small class="pull-right">90%</small>
                                      </div>
                                      <div class="progress xs">
                                        <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                                      </div>
                    
                                      <div class="clearfix">
                                        <span class="pull-left">Task #2</span>
                                        <small class="pull-right">70%</small>
                                      </div>
                                      <div class="progress xs">
                                        <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                                      </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-6">
                                      <div class="clearfix">
                                        <span class="pull-left">Task #3</span>
                                        <small class="pull-right">60%</small>
                                      </div>
                                      <div class="progress xs">
                                        <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                                      </div>
                    
                                      <div class="clearfix">
                                        <span class="pull-left">Task #4</span>
                                        <small class="pull-right">40%</small>
                                      </div>
                                      <div class="progress xs">
                                        <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                                      </div>
                                    </div>
                                    <!-- /.col -->
                                  </div>
                                  <!-- /.row -->
                                </div>
                              </div>




                              //


                              <div class="col-md-6">
                                <div class="box box-primary">
                                  <div class="box-header">
                                    <h3 class="box-title">Date picker</h3>
                                  </div>
                                  <div class="box-body">
                                    <!-- Date -->
                                    <div class="form-group">
                                      <label>Date:</label>
                      
                                      <div class="input-group date">
                                        <div class="input-group-addon">
                                          <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker">
                                      </div>
                                      <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                      
                                    <!-- Date range -->
                                    <div class="form-group">
                                      <label>Date range:</label>
                      
                                      <div class="input-group">
                                        <div class="input-group-addon">
                                          <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="reservation">
                                      </div>
                                      <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                      
                                    <!-- Date and time range -->
                                    <div class="form-group">
                                      <label>Date and time range:</label>
                      
                                      <div class="input-group">
                                        <div class="input-group-addon">
                                          <i class="fa fa-clock-o"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="reservationtime">
                                      </div>
                                      <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                      
                                    <!-- Date and time range -->
                                    <div class="form-group">
                                      <label>Date range button:</label>
                      
                                      <div class="input-group">
                                        <button type="button" class="btn btn-default pull-right" id="daterange-btn">
                                          <span>
                                            <i class="fa fa-calendar"></i> Date range picker
                                          </span>
                                          <i class="fa fa-caret-down"></i>
                                        </button>
                                      </div>
                                    </div>
                                    <!-- /.form group -->
                      
                                  </div>
                                  <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                      
                                <!-- iCheck -->
                                <div class="box box-success">
                                  <div class="box-header">
                                    <h3 class="box-title">iCheck - Checkbox &amp; Radio Inputs</h3>
                                  </div>
                                  <div class="box-body">
                                    <!-- Minimal style -->
                      
                                    <!-- checkbox -->
                                    <div class="form-group">
                                      <label>
                                        <div class="icheckbox_minimal-blue checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                      </label>
                                      <label>
                                        <div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                      </label>
                                      <label>
                                        <div class="icheckbox_minimal-blue disabled" aria-checked="false" aria-disabled="true" style="position: relative;"><input type="checkbox" class="minimal" disabled="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        Minimal skin checkbox
                                      </label>
                                    </div>
                      
                                    <!-- radio -->
                                    <div class="form-group">
                                      <label>
                                        <div class="iradio_minimal-blue checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="r1" class="minimal" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                      </label>
                                      <label>
                                        <div class="iradio_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="r1" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                      </label>
                                      <label>
                                        <div class="iradio_minimal-blue disabled" aria-checked="false" aria-disabled="true" style="position: relative;"><input type="radio" name="r1" class="minimal" disabled="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        Minimal skin radio
                                      </label>
                                    </div>
                      
                                    <!-- Minimal red style -->
                      
                                    <!-- checkbox -->
                                    <div class="form-group">
                                      <label>
                                        <div class="icheckbox_minimal-red checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal-red" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                      </label>
                                      <label>
                                        <div class="icheckbox_minimal-red" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal-red" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                      </label>
                                      <label>
                                        <div class="icheckbox_minimal-red disabled" aria-checked="false" aria-disabled="true" style="position: relative;"><input type="checkbox" class="minimal-red" disabled="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        Minimal red skin checkbox
                                      </label>
                                    </div>
                      
                                    <!-- radio -->
                                    <div class="form-group">
                                      <label>
                                        <div class="iradio_minimal-red checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="r2" class="minimal-red" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                      </label>
                                      <label>
                                        <div class="iradio_minimal-red" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="r2" class="minimal-red" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                      </label>
                                      <label>
                                        <div class="iradio_minimal-red disabled" aria-checked="false" aria-disabled="true" style="position: relative;"><input type="radio" name="r2" class="minimal-red" disabled="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        Minimal red skin radio
                                      </label>
                                    </div>
                      
                                    <!-- Minimal red style -->
                      
                                    <!-- checkbox -->
                                    <div class="form-group">
                                      <label>
                                        <div class="icheckbox_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                      </label>
                                      <label>
                                        <div class="icheckbox_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                      </label>
                                      <label>
                                        <div class="icheckbox_flat-green disabled" aria-checked="false" aria-disabled="true" style="position: relative;"><input type="checkbox" class="flat-red" disabled="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        Flat green skin checkbox
                                      </label>
                                    </div>
                      
                                    <!-- radio -->
                                    <div class="form-group">
                                      <label>
                                        <div class="iradio_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="r3" class="flat-red" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                      </label>
                                      <label>
                                        <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="r3" class="flat-red" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                      </label>
                                      <label>
                                        <div class="iradio_flat-green disabled" aria-checked="false" aria-disabled="true" style="position: relative;"><input type="radio" name="r3" class="flat-red" disabled="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        Flat green skin radio
                                      </label>
                                    </div>
                                  </div>
                                  <!-- /.box-body -->
                                  <div class="box-footer">
                                    Many more skins available. <a href="http://fronteed.com/iCheck/">Documentation</a>
                                  </div>
                                </div>
                                <!-- /.box -->
                              </div>





                              //

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <tr>
                                        <td><input type="submit" value="Tambah" class="btn btn-primary"></td>
                                        <td><input type="reset" name="batal" class="btn btn-warning" value="RESET"></td>
                                    </tr>
                                </div>
                            </div>
                        </form>
                        </center>

                        <hr>
                     
            <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            {{-- <th width='5'>ID</th> --}}
                            <th width='5'>KODE BARANG</th>
                            <th width='5'>NAMA BARANG</th>
                            <th width='5'>QTY</th>
                            <th width='5'>HARGA</th>
                            <th width='5'>TOTAL</th>
                            <th width='5'>TANGGAL TRANSAKSI</th>
                            <th width='5'>TERBILANG</th>
                            {{-- <th width='5'> </th> --}}
                            <th width='5'></th>
                            <th width='5'></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($terbilang as $tb)
                            <tr>
                                {{-- <button type="button" class="btn btn-block btn-primary btn-sm">Primary</button> --}}
                                {{-- <td width='5'>  {{ $loop-> index +1 }} </td> --}}
                                <td width='20'> {{ $tb->code_barang }}</td>
                                <td width='20'> {{ $tb->nama_barang }}</td>
                                <td width='5'>  {{" ".format_uang($tb->qty)}} </td>
                                <td scope="row"> {{"Rp. ".format_uang($tb->harga)}} </td>
                                {{-- <td width='5'>  {{ $tb->total }} </td> --}}
                                {{-- <td scope="row"> {{ ''. number_format ($tb->total) . "  " }} </td> --}}
                                <td scope="row"> {{"Rp. ".format_uang($tb->total)}} </td>
                                {{-- <td scope="center" class="btn btn-info">{{ terbilang($tb->total)}} </td> --}}
                                <td scope="row"> {{ tanggal_indonesia($tb->created_at)}} </td>
                                <td width='5'>  <a class="btn btn-block btn-primary btn-sm"> {{ terbilang($tb->total)}} </a></td>
                                {{-- <td width='5'>  {{ $tb->created_at }} </td> --}}
                                {{-- <td width='5'>  {{ date('H:i:s | l-d-M-Y',strtotime($tb->created_at)) }}</td> --}}
                                {{-- <td width='5'>  <a href="{{ route('admin.terbilang.detail', $tb->terbilang_id) }}" class="btn btn-info">DETAIL</a></td> --}}
                                <td width='5'>  <a href="{{ route('admin.terbilang.edit', $tb->terbilang_id) }}" class="btn btn-warning">EDIT</a></td>
                                <td width='5'>
                                    <form action="{{ route('admin.terbilang.destroy', $tb->terbilang_id) }}" method="post" style="display:inline;">
                                        {{ csrf_field() }}
                                        {{ method_field ('delete')}}
                                        <button type="submit"  class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
<script>
    $( function() {
    $( "#date" ).datepicker({
        dateFormat: "yy-mm-dd"
    });
    } );
</script>

{{-- code jam beserta detik  --}}
<script type=text/javascript>
    function functionTimer() {
        setInterval(function() {
            myTimer()
        }, 1000);
    }

    function myTimer() {
        var d = new Date();
        var t = d.toLocaleTimeString();
        document.getElementById("demo").innerHTML = t;
    }
</script>

@endsection



@push('scripts')
    <script>
        $(function () {
            $('#dataTable').DataTable({






            });
        });
    </script>
@endpush



                  {{-- <div class="form-group @error('tanggal') has-error @enderror">
                                <label for="inputPassword3" class="col-sm-2 control-label">TANGGAL TRANSAKSI</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="tanggal" class="form-control" id="inputPassword3" 
                                        value="
                                        <?php 
                                            if(isset($_POST['tanggal'])) { 
                                                echo old('tanggal');
                                            } else { 
                                                echo date('D-d-M-Y'); } 
                                        ?>
                                        "
                                        placeholder="D-d-M-Y" readonly>
                                    </div>
                            </div> --}}

                            {{-- <tr>
                                <td>Waktu Masuk Parkir :</td>
                                <td> : </td>
                                <td> <span id="demo"> </span>
                                    <?php
                                    date_default_timezone_set('Asia/Jakarta');
                                    $date =  new DateTime();
                                    echo $date->format('H:i:s');
                                    ?>
                                    <input type="hidden" name="jam" value="<?= $date->format('H:i:s') ?>">
                                </td>
                            </tr>
                            <tr onload="functionTimer()">
                                <td>Jam Masuk Parkir :</td>
                                <td> : </td>
                                <td> <span id="demo"> </span>
                                    <?php
                                    date_default_timezone_set('Asia/Jakarta');
                                    $jam = date("H:i:s");
                                    ?>
        
                                </td>
                            </tr> --}}
                            <div class="form-group">
                            {{-- <label for="inputPassword3" class="col-sm-2 control-label" >JAM TRANSAKSI</label>
                                <div class="col-sm-10" onload="functionTimer()">
                                    <input type="" class="form-control" id="demo" 
                                    value="
                                        <?php
                                            date_default_timezone_set('Asia/Jakarta');
                                            $date =  new DateTime();
                                            echo $date->format('H:i:s');
                                        ?>" 
                                    placeholder="" readonly>
                                </div>
                            </div>                          --}}




                            {{-- <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">QUANTITY</label>
                                <div class="col-sm-10">
                                    <select name="qty" class="form-control" >
                                        <option value=""> </option>
                                        <?php
                                        for ($xx = 1; $xx <= 100; $xx++) { ?>
                                        <option name="qty" value="<?php echo $xx; ?>">
                                            <?php echo $xx; ?>
                                        </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div> --}}
