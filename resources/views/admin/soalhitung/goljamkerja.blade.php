@extends('admin.templates.default')
@section('content')
<h1> DATA GOLONGAN JAM KERJA</h1>

<!-- /.box-header -->
    <div class="box">
        <div class="box-header">
            <center> <h3 class="box-title" style="text-transform: uppercase;">Silahkan input data </h3><br><br> </center>
            <form action="" class="form-horizontal" method="POST" enctype="multipart/form-data" style="max-width:500px">
                @csrf

                <div class="form-group @error('jumlahjamkerja') has-error @enderror">
                    <label for="inputPassword3" class="col-sm-2 control-label">JAM KERJA</label>
                        <div class="col-sm-10">
                            <input type="text" name="jumlahjamkerja" class="form-control" id="inputPassword3" 
                            value="{{ old('jumlahjamkerja') }}" placeholder="Input jumlahjamkerja penumpang">
                                @error('jumlahjamkerja')
                                    <span class="help-block">{{ $message}}</span>
                                @enderror
                        </div>
                </div>

                <div class="form-group @error('tingkatanjamkerja') has-error @enderror">
                    <label for="inputPassword3" class="col-sm-2 control-label">TINGKATAN JAM KERJA</label>
                        <div class="col-sm-10">
                            <input type="text" name="tingkatanjamkerja" class="form-control" id="inputPassword3" 
                            value="{{ old('tingkatanjamkerja') }}" placeholder="Jenis Bis ">
                                @error('tingkatanjamkerja')
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
                            <th width='5'>JAM KERJA ANDA</th>
                            <th width='5'>GAJI ANDA ADALAH</th>
                         
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

