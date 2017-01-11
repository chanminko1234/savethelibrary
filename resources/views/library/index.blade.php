@extends('layouts.master')
@section('content')

{{-- <div class="container"> --}}

<div class="row">
  <div class="col-md-12">
    <div class="flexslider">
      <a href="libraries"><h1>Libraries</h1></a>
      <ul class="slides">

        <li>
          <div class="col-md-4">
            <a href="">
              <img src="{{asset('images/feature_image (4).jpg')}}" alt="" class="photo">
              <p>တက်နေဝန်းစာကြည့်တိုက် - စေတုတ္တရာ - ဖာအိုင်း</p></a>
            </div>
            <div class="col-md-4">
              <a href="">
                <img src="{{asset('images/feature_image (3).jpg')}}" alt="" class="photo">
                <p>အစိုးနည်းပညာအထက်တန်းကျောင်း(ပင်းပက်) စာကြည့်တိုက် - တောင်ကြီး - အမှတ် (၂) ရပ်ကွက်</p></a>
              </div>
              <div class="col-md-4">
                <a href="">
                  <img src="{{asset('images/feature_image (2).jpg')}}" alt="" class="photo">
                  <p>လမ်းပြကြယ် - လှိုင် - အမှတ် (၁) ရပ်ကွက်</p>
                </a>
              </div>
            </li>
            <li>
              <div class="col-md-4">
               <a href="#">
                <img src="{{asset('images/feature_image (4).jpg')}}" alt="" class="photo">
                <p>တက်နေဝန်းစာကြည့်တိုက် - စေတုတ္တရာ - ဖာအိုင်း</p>
              </a>
            </div>
            <div class="col-md-4">
              <a href="#">
                <img src="{{asset('images/feature_image (3).jpg')}}" alt="" class="photo">
                <p>အစိုးနည်းပညာအထက်တန်းကျောင်း(ပင်းပက်) စာကြည့်တိုက် - တောင်ကြီး - အမှတ် (၂) ရပ်ကွက်</p>
              </a>
            </div>
            <div class="col-md-4">
              <a href="#">
                <img src="{{asset('images/feature_image (2).jpg')}}" alt="" class="photo">
                <p>လမ်းပြကြယ် - လှိုင် - အမှတ် (၁) ရပ်ကွက်</p>
              </a>
            </div>
          </li>

        </ul>

      </div>

    </div>
  </div>

  {{-- </div>   --}}
  {{-- <div class="container"> --}}

  <div class="row">
    <div class="col-md-12">
      <div class="flexslider">
        <a href="latest"><h1>Latest New</h1></a>
        <ul class="slides">

          <li>
            <div class="col-md-4">
              <a href="#">
                <img src="{{asset('images/feature_image (4).jpg')}}" alt="" class="photo">
                <p>တက်နေဝန်းစာကြည့်တိုက် - စေတုတ္တရာ - ဖာအိုင်း</p>
              </a>
            </div>
            <div class="col-md-4">
             <a href="#">
              <img src="{{asset('images/feature_image (3).jpg')}}" alt="" class="photo">
              <p>အစိုးနည်းပညာအထက်တန်းကျောင်း(ပင်းပက်) စာကြည့်တိုက် - တောင်ကြီး - အမှတ် (၂) ရပ်ကွက်</p>
            </a>
          </div>
          <div class="col-md-4">
            <a href="#">
              <img src="{{asset('images/feature_image (2).jpg')}}" alt="" class="photo">
              <p>လမ်းပြကြယ် - လှိုင် - အမှတ် (၁) ရပ်ကွက်</p>
            </a>
          </div>
        </li>
        <li>
          <div class="col-md-4">
            <a href="#">
              <img src="{{asset('images/feature_image (4).jpg')}}" alt="" class="photo">
              <p>တက်နေဝန်းစာကြည့်တိုက် - စေတုတ္တရာ - ဖာအိုင်း</p>
            </a>
          </div>
          <div class="col-md-4">
            <a href="#">
              <img src="{{asset('images/feature_image (3).jpg')}}" alt="" class="photo">
              <p>အစိုးနည်းပညာအထက်တန်းကျောင်း(ပင်းပက်) စာကြည့်တိုက် - တောင်ကြီး - အမှတ် (၂) ရပ်ကွက်</p>
            </a>
          </div>
          <div class="col-md-4">
           <a href="#">
            <img src="{{asset('images/feature_image (2).jpg')}}" alt="" class="photo">
            <p>လမ်းပြကြယ် - လှိုင် - အမှတ် (၁) ရပ်ကွက်</p>
          </a>
        </div>
      </li>

    </ul>

  </div>

</div>
</div>

{{-- </div> --}}
{{-- <div class="container"> --}}
<div class="row">
  <div class="col-md-12">
    <div class="flexslider">
      <a href="latestreview"><h1>Latest Review</h1></a>
      <ul class="slides">

        <li>
          <div class="col-md-4">
            <a href="#">
              <img src="{{asset('images/နန်းကျဘုရင်.jpg')}}" alt="" class="review">
              <p>နန်းကျဘုရင်</p>
            </a>
          </div>
          <div class="col-md-4">
            <a href="#">
              <img src="{{asset('images/သုခမြို့တော်.JPG')}}" alt="" class="review">
              <p>သုခမြို့တော်</p>
            </a>
          </div>
          <div class="col-md-4">
           <a href="#">
            <img src="{{asset('images/အကြီးအကဲ.jpg')}}" alt="" class="review">
            <p>အကြီးအကဲ(နိုင်ငံတစ်ခုပျက်သုဉ်းခြင်း)</p>
          </a>
        </div>
      </li>
      <li>
        <div class="col-md-4">
          <a href="#">
            <img src="{{asset('images/ဦးတင်ဦး.jpg')}}" alt="" class="review">
            <p>မြန်မာ့ဒီမိုကရေစီခရီးနှင့် သူရဦးတင်ဦး</p>
          </a>
        </div>
        <div class="col-md-4">
         <a href="#">
          <img src="{{asset('images/နန်းကျဘုရင်.jpg')}}" alt="" class="review">
          <p>နန်းကျဘုရင်</p>
        </a>
      </div>
      <div class="col-md-4">
        <a href="#">
          <img src="{{asset('images/အကြီးအကဲ.jpg')}}" alt="" class="review">
          <p>အကြီးအကဲ(နိုင်ငံတစ်ခုပျက်သုဉ်းခြင်း)</p>
        </a>
      </div>
    </li>

  </ul>

</div>

</div>
</div>


{{-- </div> --}}








@endsection










