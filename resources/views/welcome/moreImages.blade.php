@extends('layout.wellcome')


@section('body')
<div class="col-md-1"></div>
<div style="text-align:center;" class="col-md-10 galaryImage">
  <!-- <img data-original="{{asset('image/image (1).jpg')}}">
  <img data-original="{{asset('image/image (2).jpg')}}">
  <img data-original="{{asset('image/image (3).jpg')}}">
  <img data-original="{{asset('image/image (4).jpg')}}">
  <img data-original="{{asset('image/image (1).jpg')}}"> -->

  <!-- <div class="galaryImage"> -->
    @foreach ($allImages as $allImage)
    <?php echo '<img src="'.$allImage->photoId.'"/>' ?>
    @endforeach
  <!-- </div> -->
</div>
<div class="col-md-1"></div>

<!-- <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>

<script>
  $(function(){
    $('img.lazy').lazyload();
  });
</script> -->

@endsection
