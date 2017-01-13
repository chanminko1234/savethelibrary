@extends('layouts.master')
@section('content')

{{-- <div class="container"> --}}
<div class="all_slider">
  <div class="row">
    <div class="col-md-12">
      <div class="flexslider">
        <a href="libraries"><h1>Libraries</h1></a>
        <br>
        <ul class="slides">

          <li>
            <div class="col-md-4">
              <a href="">
                <img src="{{asset('images/feature_image (4).jpg')}}" alt="" class="photo">
                <br>
                <p>တက်နေဝန်းစာကြည့်တိုက် - စေတုတ္တရာ - ဖာအိုင်း</p></a>
              </div>
              <div class="col-md-4">
                <a href="">
                  <img src="{{asset('images/feature_image (3).jpg')}}" alt="" class="photo">
                  <br>
                  <p>အစိုးနည်းပညာအထက်တန်းကျောင်း(ပင်းပက်) စာကြည့်တိုက် - တောင်ကြီး - အမှတ် (၂) ရပ်ကွက်</p>
                </a>
              </div>
              <div class="col-md-4">
                <a href="">
                  <img src="{{asset('images/feature_image (2).jpg')}}" alt="" class="photo">
                  <br>
                  <p>လမ်းပြကြယ် - လှိုင် - အမှတ် (၁) ရပ်ကွက်</p>
                </a>
              </div>
            </li>
            <li>
              <div class="col-md-4">
               <a href="#">
                <img src="{{asset('images/feature_image (4).jpg')}}" alt="" class="photo">
                <br>
                <p>တက်နေဝန်းစာကြည့်တိုက် - စေတုတ္တရာ - ဖာအိုင်း</p>
              </a>
            </div>
            <div class="col-md-4">
              <a href="#">
                <img src="{{asset('images/feature_image (3).jpg')}}" alt="" class="photo">
                <br>
                <p>အစိုးနည်းပညာအထက်တန်းကျောင်း(ပင်းပက်) စာကြည့်တိုက် - တောင်ကြီး - အမှတ် (၂) ရပ်ကွက်</p>
              </a>
            </div>
            <div class="col-md-4">
              <a href="#">
                <img src="{{asset('images/feature_image (2).jpg')}}" alt="" class="photo">
                <br>
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
        <br>
        <ul class="slides">

          <li>
            <div class="col-md-4">
              <a href="#">
                <img src="{{asset('images/feature_image (4).jpg')}}" alt="" class="photo">
                <br>
                <p>တက်နေဝန်းစာကြည့်တိုက် - စေတုတ္တရာ - ဖာအိုင်း</p>
              </a>
            </div>
            <div class="col-md-4">
             <a href="#">
              <img src="{{asset('images/feature_image (3).jpg')}}" alt="" class="photo">
              <br>
              <p>အစိုးနည်းပညာအထက်တန်းကျောင်း(ပင်းပက်) စာကြည့်တိုက် - တောင်ကြီး - အမှတ် (၂) ရပ်ကွက်</p>
            </a>
          </div>
          <div class="col-md-4">
            <a href="#">
              <img src="{{asset('images/feature_image (2).jpg')}}" alt="" class="photo">
              <br>
              <p>လမ်းပြကြယ် - လှိုင် - အမှတ် (၁) ရပ်ကွက်</p>
            </a>
          </div>
        </li>
        <li>
          <div class="col-md-4">
            <a href="#">
              <img src="{{asset('images/feature_image (4).jpg')}}" alt="" class="photo">
              <br>
              <p>တက်နေဝန်းစာကြည့်တိုက် - စေတုတ္တရာ - ဖာအိုင်း</p>
            </a>
          </div>
          <div class="col-md-4">
            <a href="#">
              <img src="{{asset('images/feature_image (3).jpg')}}" alt="" class="photo">
              <br>
              <p>အစိုးနည်းပညာအထက်တန်းကျောင်း(ပင်းပက်) စာကြည့်တိုက် - တောင်ကြီး - အမှတ် (၂) ရပ်ကွက်</p>
            </a>
          </div>
          <div class="col-md-4">
           <a href="#">
            <img src="{{asset('images/feature_image (2).jpg')}}" alt="" class="photo">
            <br>
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
      <br>
      <ul class="slides">

        <li>
          <div class="col-md-3">
            <a href="#">
              <img src="{{asset('images/နန်းကျဘုရင်.jpg')}}" alt="" class="review">
              <br>
              <p>နန်းကျဘုရင်</p>
              <p>ဝင်းငြိမ်း</p>
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img src="{{asset('images/သုခမြို့တော်.JPG')}}" alt="" class="review">
              <br>
              <p>သုခမြို့တော်</p>
              <p>မြသန်းတင့်</p>
            </a>
          </div>
          <div class="col-md-3">
           <a href="#">
            <img src="{{asset('images/အကြီးအကဲ.jpg')}}" alt=""  class="review">
            <br>
            <p>အကြီးအကဲ(နိုင်ငံတစ်ခုပျက်သုဉ်းခြင်း)</p>
            <p>မောင်ပေါ်ထွန်း</p>
          </a>
        </div>
        <div class="col-md-3">
          <a href="#">
            <img src="{{asset('images/အကြီးအကဲ.jpg')}}" alt="" class="review">
            <br>
            <p>အကြီးအကဲ(နိုင်ငံတစ်ခုပျက်သုဉ်းခြင်း)</p>
            <p>မောင်ပေါ်ထွန်း</p>
          </a>
        </div>
      </li>
      <li>
        <div class="col-md-3">
          <a href="#">
            <img src="{{asset('images/ဦးတင်ဦး.jpg')}}" alt="" class="review">
            <br>
            <p>မြန်မာ့ဒီမိုကရေစီခရီးနှင့် သူရဦးတင်ဦး</p>
            <p>တက္ကသိုလ်စိန်တင်</p>
          </a>
        </div>
        <div class="col-md-3">
         <a href="#">
          <img src="{{asset('images/နန်းကျဘုရင်.jpg')}}" alt="" class="review">
          <br>
          <p>နန်းကျဘုရင်</p>
          <p>ဝင်းငြိမ်း</p>
        </a>
      </div>
      <div class="col-md-3">
        <a href="#">
          <img src="{{asset('images/အကြီးအကဲ.jpg')}}" alt="" class="review">
          <br>
          <p>အကြီးအကဲ(နိုင်ငံတစ်ခုပျက်သုဉ်းခြင်း)</p>
          <p>မောင်ပေါ်ထွန်း</p>
        </a>
      </div>
      <div class="col-md-3">
        <a href="#">
          <img src="{{asset('images/အကြီးအကဲ.jpg')}}" alt="" class="review">
          <br>
          <p>အကြီးအကဲ(နိုင်ငံတစ်ခုပျက်သုဉ်းခြင်း)</p>
          <p>မောင်ပေါ်ထွန်း</p>
        </a>
      </div>
    </li>

  </ul>

</div>

<div class="row" id="slideshow">
  <div class="col-md-12" align="center">
    <img src="{{ asset('images/aungsan.jpg') }}" alt="aungsan" class="contentimage">
  </div>
  <div class="col-md-12" align="center">
    <img src="{{ asset('images/u thant.jpg') }}" alt="u thant" class="contentimage">
  </div>
  <div class="col-md-12" align="center">
    <img src="{{ asset('images/aung san suu kyi.jpg') }}" alt="aung san suu kyi" class="contentimage">
  </div>
  <div class="col-md-12" align="center">
    <img src="{{ asset('images/1.jpg') }}" alt="aung san suu kyi" class="contentimage">
  </div>
  <div class="col-md-12" align="center">
    <img src="{{ asset('images/2.jpg') }}" alt="aung san suu kyi" class="contentimage">
  </div>
  <div class="col-md-12" align="center">
    <img src="{{ asset('images/3.jpg') }}" alt="aung san suu kyi" class="contentimage">
  </div>
  <div class="col-md-12" align="center">
    <img src="{{ asset('images/4.jpg') }}" alt="aung san suu kyi" class="contentimage">
  </div>
  <div class="col-md-12" align="center">
    <img src="{{ asset('images/5.jpg') }}" alt="aung san suu kyi" class="contentimage">
  </div>
</div>
</div>
<br>

</div>
</div>


{{-- </div> --}}








@endsection










