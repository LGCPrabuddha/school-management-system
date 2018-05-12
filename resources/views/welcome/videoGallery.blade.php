@extends('layout.wellcome')


@section('body')
<div class="col-md-1"></div>
<div class="col-md-10">
    <h2 style="color:#001f4d;text-align:center;">Video Gallery</h2>
    <br><br>
  @foreach ($videos as $video)
    <div class="col-md-4 video">
      <h3 style="color:#001f4d;">{{$video->title}}</h3>
        <?php echo $video->videoLink; ?>
    </div>
  @endforeach
  <br><br>
</div>
<div class="col-md-1"></div>

@endsection
