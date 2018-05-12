@extends('layout.wellcome')


@section('body')
<div style="height:100px;" class="col-md-1"></div>
<div class="col-md-10">
  <div class="row">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38
    05.896732839648!2d80.69567477394173!3d6.149929263243854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!
    4f13.1!3m3!1m2!1s0x3ae14e224385941b%3A0xbecd0af38f4176b6!2sWalasmulla+National+School!5e1!3m2!1sen!2slk!4v1525205521063"
     width="1160" height="400" style="border-style: solid;border:20;border-radius:10px;border-color:#001f4d;" allowfullscreen></iframe>
  </div>
  <br>
  <div style="color:#001f4d;" class="row">
    <div class="col-md-2">
      <h4>Contact -</h4>
      <h4>Address -</h4>
    </div>
    <div class="col-md-4">
      <h4> 0472200000</h4>
      <h4> Walasmulla National School,</h4>
      <h4> Walasmulla.</h4>
    </div>
    <div class="col-md-6">
      <h4>Email - wlasmullanationalschool@gmail.com</h4>
    </div>
  </div>
  <br>
  <div style="margin-bottom:10px;" class="row">
    <img src="{{asset('image/charaka.jpg')}}" style="height: 50px; width:80px;float:left;"><br>
    <p style="color:#001f4d;float:left;margin-left:20px;">Design by Charaka Prabuddha - All Rights Reserved / charakacs13@gmail.com / +94716131767
    </p>
  </div>
</div>
<div style="height:100px;" class="col-md-1"></div>

@endsection
