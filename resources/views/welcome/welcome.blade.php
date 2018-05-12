@extends('layout.wellcome')


@section('body')
<div class="col-md-1"></div>
<div class="col-md-10">
  <!-- <div class="bodybaner row">
    <br><br>
    <div class="">
      <img src="{{asset('image/logo.png')}}" style="height: 165px; width:220px;">
    </div>
    <br>
    <h3>Walasmulla National School</h3>
    <h3>Welcome to the Virtual Learning Environment for the WNS Students</h3>
    <h3 style="font-size:16px;">වලස්මුල්ල ජාතික පසලේහි සිසුන් සඳහා වූ අතථ්‍ය ඉගෙනුම් පරිස්ථිතියට ඔබව සාදරයෙන් පිළිගනිමු... !</h3>
  </div> -->
  <div class="row">
    <div class="slider">
    </div>
  </div>

<br><br>
  <div class="row">
    <div style="height:220px;" class="col-md-6 bodycomboxText">
      <h3 style="color:#001f4d;text-align:center;"><u>පාසලේ මෙහෙවර ප්‍රකාශය</u></h3>
      <br>
      <h4 style="color:#001f4d;padding-left:20px;padding-right:20px;line-height: 1.3;">ජතික අධ්‍යපන අරමුණු සහ නිපුනතාවලට අනුගතව
         කාලීන අභියෝග ජය ගැනීමෙහි සමත් සාමකාමී කාර්යශූර පරිසර හිතකාමී පුරවසියන් පිරිසක් 21 වන සියවසට දායකකිරීම.</h4>
    </div>
    <div style="height:220px;" class="col-md-6 bodycomboxText">
      <h3 style="color:#001f4d;text-align:center;"><u>පාසලේ දැක්ම</u></h3>
      <br>
      <h4 style="color:#001f4d;padding-left:20px;padding-right:20px;line-height: 1.3;">වඩාත් ගුණ නුවණින් හා ගත සවියෙන් පිරි නිර්මාණශීලී, පරිසර
                                                                      හිතකාමී පුරවැසියන් බිහිකරන ප්‍රදේශයේ අනභිභවනීය අධ්‍යාපනික
                                                                       කේන්ද්‍රස්ථානය බවට පත්කිරිම.</h4>
    </div>
  </div>

  <div style="height:1650px;padding:20px;" class="row bodycomboxText">
    <?php $i=0; ?>
    @foreach ($news as $news)
    <?php $temp=$i%2; ?>
    @if($temp == 0)
      <div class="row">
        <div style="height:300px;padding:20px;" class="col-md-5">
          <?php echo '<img  style="border-radius:20px;height:300px;width:450px;" src="'.$news->photoId.'"/>' ?>
        </div>
        <div style="height:300px;padding:20px;" class="col-md-7 bodycomboxText">
          <h2 style="text-align:center;">{{$news->title}}</h2>
          <h4>{{$news->news}}</h4>
        </div>
        <?php ++$i; ?>
      </div>
    @else
    <div class="row">
      <div style="height:300px;padding:20px;" class="col-md-7 bodycomboxText">
        <h2 style="text-align:center;">{{$news->title}}</h2>
        <h4>{{$news->news}}</h4>
      </div>
      <div style="height:300px;padding:20px;" class="col-md-5">
        <?php echo '<img  style="border-radius:20px;height:300px;width:450px;" src="'.$news->photoId.'"/>' ?>
      </div>
      <?php ++$i; ?>
    </div>
    @endif
  @endforeach
  </div>
  <br><br>
  <div class="row">
    <p style="color:#001f4d;float:right;">Design by Charaka Prabuddha - All Rights Reserved / charakacs13@gmail.com / +94716131767</p>
  </div>
</div>
<div class="col-md-1"></div>


@endsection
