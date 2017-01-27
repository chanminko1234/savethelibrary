@extends('layouts.master')
@section('content')

<div class="all_slider">
  <div class="col-md-9">
    <div class="row">
      <div class="flexslider">
        <a href="libraries"><h1>Libraries</h1></a>
        <br>
        <ul class="slides">
          <li>
            <div class="col-md-4">
              <a href="">
                <img src="{{asset('images/feature_image (4).jpg')}}" alt="" class="photo">
                <p class="flex-caption">တက်နေဝန်းစာကြည့်တိုက် - စေတုတ္တရာ - ဖာအိုင်း</p>
              </a>
            </div>
            <div class="col-md-4">
              <a href="">
                <img src="{{asset('images/feature_image (3).jpg')}}" alt="" class="photo">
                <p class="flex-caption">အစိုးနည်းပညာအထက်တန်းကျောင်း(ပင်းပက်) စာကြည့်တိုက် - တောင်ကြီး - အမှတ် (၂) ရပ်ကွက်</p>
              </a>
            </div>
            <div class="col-md-4">
              <a href="">
                <img src="{{asset('images/feature_image (2).jpg')}}" alt="" class="photo">
                <p class="flex-caption">လမ်းပြကြယ် - လှိုင် - အမှတ် (၁) ရပ်ကွက်</p>
              </a>
            </div>
          </li>
          <li>
            <div class="col-md-4">
             <a href="#">
               <img src="{{asset('images/feature_image (4).jpg')}}" alt="" class="photo">
               <p class="flex-caption">တက်နေဝန်းစာကြည့်တိုက် - စေတုတ္တရာ - ဖာအိုင်း</p>
             </a>
           </div>
           <div class="col-md-4">
            <a href="#">
              <img src="{{asset('images/feature_image (3).jpg')}}" alt="" class="photo">
              <p class="flex-caption">အစိုးနည်းပညာအထက်တန်းကျောင်း(ပင်းပက်) စာကြည့်တိုက် - တောင်ကြီး - အမှတ် (၂) ရပ်ကွက်</p>
            </a>
          </div>
          <div class="col-md-4">
            <a href="#">
              <img src="{{asset('images/feature_image (2).jpg')}}" alt="" class="photo">
              <p class="flex-caption">လမ်းပြကြယ် - လှိုင် - အမှတ် (၁) ရပ်ကွက်</p>
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>

  <div class="row">
    <div class="flexslider">
      <a href="latest"><h1>Latest New</h1></a>
      <br>
      <ul class="slides">

        <li>
          <div class="col-md-4">
            <a href="#">
              <img src="{{asset('images/feature_image (4).jpg')}}" alt="" class="photo">
              <p  class="flex-caption">တက်နေဝန်းစာကြည့်တိုက် - စေတုတ္တရာ - ဖာအိုင်း</p>
            </a>
          </div>
          <div class="col-md-4">
           <a href="#">
            <img src="{{asset('images/feature_image (3).jpg')}}" alt="" class="photo">
            <p class="flex-caption">အစိုးနည်းပညာအထက်တန်းကျောင်း(ပင်းပက်) စာကြည့်တိုက် - တောင်ကြီး - အမှတ် (၂) ရပ်ကွက်</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="#">
            <img src="{{asset('images/feature_image (2).jpg')}}" alt="" class="photo">
            <p  class="flex-caption">လမ်းပြကြယ် - လှိုင် - အမှတ် (၁) ရပ်ကွက်</p>
          </a>
        </div>
      </li>
      <li>
        <div class="col-md-4">
          <a href="#">
            <img src="{{asset('images/feature_image (4).jpg')}}" alt="" class="photo">
            <p class="flex-caption">တက်နေဝန်းစာကြည့်တိုက် - စေတုတ္တရာ - ဖာအိုင်း</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="#">
            <img src="{{asset('images/feature_image (3).jpg')}}" alt="" class="photo">
            <p class="flex-caption">အစိုးနည်းပညာအထက်တန်းကျောင်း(ပင်းပက်) စာကြည့်တိုက် - တောင်ကြီး - အမှတ် (၂) ရပ်ကွက်</p>
          </a>
        </div>
        <div class="col-md-4">
         <a href="#">
          <img src="{{asset('images/feature_image (2).jpg')}}" alt="" class="photo">
          <p class="flex-caption">လမ်းပြကြယ် - လှိုင် - အမှတ် (၁) ရပ်ကွက်</p>
        </a>
      </div>
    </li>
  </ul>
</div>
</div>

<div class="row">
  <div class="flexslider">
    <a href="latestreview"><h1>Latest Review</h1></a>
    <br>
    <ul class="slides">
      <li>
        <div class="col-md-3">
          <a href="#">
            <img src="{{asset('images/နန်းကျဘုရင်.jpg')}}" alt="" class="review">
            <p class="flex-cap">နန်းကျဘုရင်<br>ဝင်းငြိမ်း</p>
          </a>
        </div>
        <div class="col-md-3">
          <a href="#">
            <img src="{{asset('images/သုခမြို့တော်.JPG')}}" alt="" class="review">
            <p class="flex-cap">သုခမြို့တော်<br>မြသန်းတင့်</p>
          </a>
        </div>
        <div class="col-md-3">
         <a href="#">
          <img src="{{asset('images/အကြီးအကဲ.jpg')}}" alt=""  class="review">
          <p class="flex-cap">အကြီးအကဲ(နိုင်ငံတစ်ခုပျက်သုဉ်းခြင်း)<br>မောင်ပေါ်ထွန်း</p>
        </a>
      </div>
      <div class="col-md-3">
        <a href="#">
          <img src="{{asset('images/အကြီးအကဲ.jpg')}}" alt="" class="review">
          <p class="flex-cap">အကြီးအကဲ(နိုင်ငံတစ်ခုပျက်သုဉ်းခြင်း)<br>မောင်ပေါ်ထွန်း</p>
        </a>
      </div>
    </li>
    <li>
      <div class="col-md-3">
        <a href="#">
          <img src="{{asset('images/ဦးတင်ဦး.jpg')}}" alt="" class="review">
          <p class="flex-cap">မြန်မာ့ဒီမိုကရေစီခရီးနှင့် သူရဦးတင်ဦး<br>တက္ကသိုလ်စိန်တင်</p>
        </a>
      </div>
      <div class="col-md-3">
       <a href="#">
        <img src="{{asset('images/နန်းကျဘုရင်.jpg')}}" alt="" class="review">
        <p class="flex-cap">နန်းကျဘုရင်<br>ဝင်းငြိမ်း</p>
      </a>
    </div>
    <div class="col-md-3">
      <a href="#">
        <img src="{{asset('images/အကြီးအကဲ.jpg')}}" alt="" class="review">
        <p class="flex-cap">အကြီးအကဲ(နိုင်ငံတစ်ခုပျက်သုဉ်းခြင်း)<br>မောင်ပေါ်ထွန်း</p>
      </a>
    </div>
    <div class="col-md-3">
      <a href="#">
        <img src="{{asset('images/အကြီးအကဲ.jpg')}}" alt="" class="review">
        <p class="flex-cap">အကြီးအကဲ(နိုင်ငံတစ်ခုပျက်သုဉ်းခြင်း)<br>မောင်ပေါ်ထွန်း</p>
      </a>
    </div>
  </li>
</ul>
</div>
</div>
</div>
</div>

<div class="col-md-3" style="margin-top: 89px;">
  <div class="fb-page" data-href="https://www.facebook.com/savethelibraryinmyanmar/?ref=br_rs" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/savethelibraryinmyanmar/?ref=br_rs" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/savethelibraryinmyanmar/?ref=br_rs">Facebook</a></blockquote></div>
</div>
<br>
<div class="row">
  <div class="container">
    <div class="col-md-12">

      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1184.9227493871033!2d96.13794673271673!3d16.80201848464543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1smy!2smm!4v1485490732387" class="map" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>
  </div>
</div>
<br>
@endsection










