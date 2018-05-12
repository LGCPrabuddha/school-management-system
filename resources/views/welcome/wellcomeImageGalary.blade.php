@extends('layout.wellcome')


@section('body')
<div class="col-md-1"></div>
<div class="col-md-10 galary">
  <div class="row">
    @foreach ($titles as $title)
      <?php $i=0; ?>
      <h3>{{$title->title}}</h3>
      <div class="row" style="text-align:center;">
        @foreach ($images as $image)
        @if($title->title == $image->title)
        <?php echo '<img  style="width:200px;height:130px;padding-left:10px;padding-right:10px;" src="'.$image->photoId.'"/>' ?>
        <?php  $i++; ?>
        @endif
        <?php  if($i==5) break; ?>
        @endforeach
      </div>
      <br>
      <a href="{{route('moreImages',array($title->title))}}" style="float:right;">More images</a>
      <br><br><br>
    @endforeach
  </div>
  <br><br>
</div>
<div class="col-md-1"></div>

@endsection
