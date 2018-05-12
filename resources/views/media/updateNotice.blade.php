<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Update notice</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="css/dycalendar.min.css" rel="stylesheet" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>

  </head>
  <body style="background: #e6f0ff;">

     <br><br><br>
     <div class="container">
       <div class="panel panel-default">
         <div class="panel-heading">
           <h4>Update notice</h4>
         </div>
         <div class="panel-body">
           <form class="" action="{{route('updateNotice')}}" method="post">
             <input type="hidden" name="id" value="{{$data->id}}">
             <div class="form-group">
               <label for="title">Titel</label>
               <input type="text" name="title" id="title" class="form-control" value="{{$data->title}}" required>
             </div>
             <div class="form-group">
               <textarea id="summernote" name="summernote" class="form-control" required>
                 {!!$data->detail!!}
               </textarea>
             </div>
             <div class="form-group">
               <button type="submit" name="submit" class="btn btn-success" style="width:100px;">Update</button>
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

 </body>
</html>
