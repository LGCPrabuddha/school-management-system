@extends('layout.adminmain')

@section('title')
  News
@endsection

@section('body')
<div class="col-md-1"></div>
<div style="text-align:center;" class="col-md-10">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10 bodycomboxText">
      <br><br><br><br>
      @if( session()->has('message'))
      <div class="alert alert-danger">
        <h4>{{ session()->get('message')}}</h4>
      </div>
      @endif
      <h2>Create news</h2>
      <br>
      <form action="{{route('wellcomeNewsInsert')}}" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-1">
            <h4>Title</h4>
          </div>
          <div class="col-md-8">
            <input id="exampleInputEmail1" type="text" class="form-control" name="title" required>
          </div>
        </div>
        <br><br>
        <div class="row ">
          <div class="col-md-1"></div>
          <div class="col-md-3 ">
            <label style="float:left;">Select image to upload:</label>
          </div>
          <div class="col-md-4">
            <input type="file" name="file" id="file" >
          </div>
        </div>
        <br><br>
        <div class="row">
          <textarea class="form-group" style="width:80%;height:230px; font-size:16px;color:black;padding:10px;" name="news" class="form-control" required>
          </textarea>
          <div class="form-group">
            <button type="submit" name="wellcomeNewssubmit" class="btn btn-primary" style="width:100px; float:right;margin-right:20px;">Submit</button>
          </div>
          <br><br>
        </div>
        {{ csrf_field() }}
      </form>
    </div>
    <div class="col-md-1"></div>
  </div>
  <br><br>
  <div class="row">
    <h2 style="float:left;">Last news delete</h2>
  </div>
  <div class="row">
  <br><br>
    @foreach ($newsLast as $newsLast)
      <div style="height:300px;padding:20px;" class="col-md-5">
        <?php echo '<img  style="border-radius:20px;height:300px;width:450px;" src="'.$newsLast->photoId.'"/>' ?>
      </div>
      <div style="height:300px;padding:20px;" class="col-md-7 bodycomboxText">
        <h2 style="text-align:center;">{{$newsLast->title}}</h2>
        <h4 style="float:left;">{{$newsLast->news}}</h4>
      </div>
      <?php $newsId =  $newsLast->id;?>
    @endforeach
    <form class="" action="{{route('wellcomeNewsInsert')}}" method="post" enctype="multipart/form-data">
      <input type="hidden" name="newsId" value="{{$newsId}}">
      <div class="form-group">
        <button type="submit" name="wellcomeNewsDelete" class="btn btn-danger" style="width:100px;float:right;margin-right:20px;margin-top:20px;">Delete</button>
      </div>
      {{ csrf_field() }}
    </form>
  </div>
  <br><br>
</div>
<div class="col-md-1"></div>

@endsection
