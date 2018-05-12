@extends('layout.adminmain')

@section('title')
  Notice
@endsection

@section('body')

    @if( session()->has('message'))
      <div class="alert alert-danger container">
        <h4>{{ session()->get('message')}}</h4>
      </div>
    @endif
     <br><br><br>
     <div class="container">
       <div class="panel panel-default">
         <div class="panel-heading">
           <h4>Create new notice</h4>
         </div>
         <div class="panel-body">
           <form class="" action="{{route('insertNews')}}" method="post">
             <div class="form-group">
               <label for="title">Titel</label>
               <input type="text" name="title" id="title" class="form-control" required>
             </div>
             <br>
             <div class="form-group">
               <textarea id="summernote" name="summernote" class="form-control" required>

               </textarea>
             </div>
             <div class="form-group">
               <button type="submit" name="submit" class="btn btn-success" style="width:100px;">Pulish</button>
               <button type="button" name="clear" id="clear" class="btn btn-warning pull-right" style="width:100px;">Clear</button>
             </div>
             {{ csrf_field() }}
           </form>
         </div>
       </div>
     </div>

     <script type="text/javascript">
       $(document).ready(function(){
         $('#summernote').summernote({
           height:'300px',
           placeholder:'Content here...'
         })
       })
       $('#clear').on('click',function(){
         $('#summernote').summernote('code',null);
       })
     </script>

@endsection
