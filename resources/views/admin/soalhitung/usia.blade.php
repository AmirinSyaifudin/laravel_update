@extends('admin.templates.default')
@section('content')
<h1> DATA USIA</h1>

<!-- /.box-header -->
    <div class="box">
        <div class="box-header">
            <center> <h3 class="box-title" style="text-transform: uppercase;">Silahkan input data </h3><br><br> </center>
            <form action="" class="form-horizontal" method="POST" enctype="multipart/form-data" style="max-width:500px">
                @csrf

                <div class="form-group @error('usia') has-error @enderror">
                    <label for="inputPassword3" class="col-sm-2 control-label">USIA</label>
                        <div class="col-sm-10">
                            <input type="text" name="usia" class="form-control" id="inputPassword3" 
                            value="{{ old('usia') }}" placeholder="Input usia penumpang">
                                @error('usia')
                                    <span class="help-block">{{ $message}}</span>
                                @enderror
                        </div>
                </div>

                {{-- <div class="form-group @error('jenis_bis') has-error @enderror">
                    <label for="inputPassword3" class="col-sm-2 control-label">JENIS BIS</label>
                        <div class="col-sm-10">
                            <input type="text" name="jenis_bis" class="form-control" id="inputPassword3" 
                            value="{{ old('jenis_bis') }}" placeholder="Jenis Bis ">
                                @error('jenis_bis')
                                    <span class="help-block">{{ $message}}</span>
                                @enderror
                        </div>
                </div> --}}
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <center>
                        <tr>
                            <td><input type="submit" value="Tambah" class="btn btn-primary"></td>
                            <td><input type="reset" name="batal" class="btn btn-warning" value="RESET"></td>
                        </tr>
                    </center>
                    </div>
                </div>
            </form>
            </div>
            <div class="box-body">

            <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width='5'>ID</th>
                            <th width='5'>USIA ANDA</th>
                            <th width='5'>GOLONGAN USIA</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                   
                    </tbody>
            </table>
        </div>
    </div>


@endsection

@push('scripts')
    <script>
        $(function () {
            $('#dataTable').DataTable({


            });
        });
    </script>
@endpush

