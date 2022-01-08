@extends('admin.templates.default')
@section('content')
<h1> DATA TAHUN KABISAT</h1>

<!-- /.box-header -->
    <div class="box">
        <div class="box-header">
            <center> <h3 class="box-title" style="text-transform: uppercase;">Silahkan input data </h3><br><br> </center>
            <form action="" class="form-horizontal" method="POST" enctype="multipart/form-data" style="max-width:500px">
                @csrf

                <div class="form-group @error('tahun') has-error @enderror">
                    <label for="inputPassword3" class="col-sm-2 control-label">TAHUN</label>
                        <div class="col-sm-10">
                            <input type="text" name="tahun" class="form-control" id="inputPassword3" 
                            value="{{ old('tahun') }}" placeholder="Input tahun penumpang">
                                @error('tahun')
                                    <span class="help-block">{{ $message}}</span>
                                @enderror
                        </div>
                </div>
                
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
                            <th width='5'>TAHUN</th>
                            <th width='5'>GOLONGAN TAHUN</th>
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

