@extends('admin.templates.default')
@section('content')
<h1> DATA JQUERY FORM</h1>

<!-- /.box-header -->
<div class="box">
    <div class="box-header">
        <center> <h3 class="box-title" style="text-transform: uppercase;">Silahkan input data </h3><br><br> </center>
        </div>
        <div class="box-body">
            
            {{-- //jQ FROM --}}
            <div class="container">
                <form action="" id="form" class="">
               <div id="form-exams-list">
                 <div class="form-group">
                   <label for="">Exam Title: </label>
                   <input type="text" id="exam" placeholder="e.g. Exam 1, Mid Term"/>
                   <label for="">Date: </label>
                   <input type="text" id="exam_date" />
                 </div>
               </div>
               <button class="btn btn-primary js-add--exam-row">Add another exam</button>               
               </form> 
               </div>        
        </div>
    </div>  

    <script>

       // #add rows when add button is clicked
        $(document).on 'click', '.js-add--exam-row', (e) ->
               e.preventDefault()
               examsList = $('#form-exams-list')
               clone = examsList.children('.form-group:first').clone(true)
               clone.append($('<button>').addClass('btn btn-danger js-remove--exam-row').html('Remove'))
             //  #reset values in cloned inputs and
              // #add enumerated ID's to input fields
               clone.find('input').val('').attr('id', () ->
                 return $(this).attr('id') + '_' + (examsList.children('.form-group').length+1)
               )
               examsList.append(clone)
           
           // #remove rows when remove button is clicked
           $(document).on 'click', '.js-remove--exam-row', (e) ->
               e.preventDefault()
               $(this).parent().remove()
       </script>

@endsection



@push('scripts')
  
@endpush


