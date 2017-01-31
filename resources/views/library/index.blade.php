@extends('layouts.master')
@section('content')
<div class="col-md-9">
  <div class="flexslider1 flexslider">
    <a href="libraries"><h1>Libraries</h1></a>
    <br>
    <ul class="slides">
      @foreach($LibrySliderImages  as $librySliderImage)
      <li>
        <a href="">
          <img src="{{ asset('imgs/libraryslider/thumbnails/thumb-'.$librySliderImage->image_name.'.'.$librySliderImage->image_extension) }}" class="photo img-responsive" alt="Responsive image">
          <p class="flex-caption">{!! $librySliderImage->library_description !!}</p>
        </a>
      </li>
      @endforeach
    </ul>
  </div>

  <div class="flexslider1 flexslider">
    <a href="latest"><h1>Latest New</h1></a>
    <br>
    <ul class="slides">
      @foreach($LatestNews as $LatestNew)
      <li>
        <a href="">
          <img src="{{ asset('imgs/LatestNewsSlider/thumbnails/thumb-'.$LatestNew->image_name.'.'.$LatestNew->image_extension) }}" class="photo img-responsive" alt="Responsive image">
          <p  class="flex-caption">{!! $LatestNew->news_description !!}</p>
        </a>
      </li>
      @endforeach
    </ul>
  </div>


  <div class="flexslider2 flexslider" >
    <a href="latestreview"><h1>Latest Review</h1></a>
    <br>
    <ul class="slides">
      @foreach($LatestReviews as $review)
      <li>
        <a href="#">
          <img src="{{ asset('imgs/LatestReviewSlider/thumbnails/thumb-'.$review->image_name.'.'.$review->image_extension) }}"  class="review img-responsive" alt="Responsive image">
          <p class="flex-cap">{{ $review->book_name }}<br>{{ $review->author }}</p>
        </a>
      </li>
      @endforeach

    </ul>
  </div>
</div>


<div class="col-md-3" style="margin-top: 89px;">
  <div class="fb-page" data-href="https://www.facebook.com/savethelibraryinmyanmar/?ref=br_rs" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/savethelibraryinmyanmar/?ref=br_rs" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/savethelibraryinmyanmar/?ref=br_rs">Facebook</a></blockquote></div>
</div>
<div class="col-md-3" style="margin-top: 10px;">
  <ul id="simpleQuote">
    <li id="display"> </li> 

    <li author="ေရှးစကားပံု"> "ပညာလို အိုသည်မရှိ<br>
      ပညာရဲရင့် ပွဲလည်တင့်<br>
      ပညာသည် တန်ခိုးကိုဖန်ဆင်း၏<br>
      ပညာရွှေအိုး လူမခိုး<br>
      အလိမ္မာစာမှာရှိ" </li>

      <li author="Ralph Nader">"လောကမှာ အကောင်းဆံုးဆရာဆိုတာ<br>
        နောက်ဆံုးအမှားပါပဲ"
      </li>

      <li author="Albert Einstein"> "အမှားကို တစ်ခါမှမကျူးလွန်ဖူးသူဟာ<br>
        အသစ်ကိုရှာဖွေဖို့ ဘယ်တော့မှ မကြိုးစားတော့တဲ့သူပဲ"
      </li>  

      <li author="ေရှးစကားပံု">"ကိုင်းကျွန်းမှီ ကျွန်းကိုင်းမှီ<br>
        ပတ္တမြားမှန်က နွံမှာနစ်လည်းမညစ်<br>
        သတိမမူ ဂူမမြင်၊ သတိမူ မြူမြင်"
      </li>
      <li author="ေရှးစကားပံု">"ပညာရှိသတိဖြစ်ခဲ"
      </li>
      <li author="ေရှးစကားပံု">"ပညာရှာ ပမာသူဖုန်းစား"
      </li>
      <li author="ေရှးစကားပံု">"ပိုနေမြဲ..ကျားနေမြဲ"
      </li>
      <li author="ေရှးစကားပံု">"ရှာဖွေလေ..တွေ့ရှိလေ"
      </li>
      <li author="ေရှးစကားပံု">"ရတနာရှိရာ..ရတနာလာ"
      </li>
      <li author="ေရှးစကားပံု">"သတိပညာ ဉာဏ်မြေကတုတ် ချွန်းကဲ့သို့အုပ်"
      </li>
      <li author="ေရှးစကားပံု">"သူများအကျိုးဆောင် ကိုယ်ကျိုးအောင်"
      </li>
      <li author="ေရှးစကားပံု">"သစ်တစ်ပင်ကောင်း...<br>ငှက်တစ်သောင်းနားနိုင်"
      </li>
      <li author="ေရှးစကားပံု">"သားသမီးမကောင်း မိဘခေါင်း"
      </li>
      <li author="ေရှးစကားပံု">"တလုပ်စားဖူး သူ့ကျေးဇူး"
      </li>
      <li author="ေရှးစကားပံု">"အစကောင်းမှ အနှောင်းသေချာ"
      </li>
      <li author="ေရှးစကားပံု">"အချိန်နှင့်ဒီရေသည် လူကိုမစောင့်"
      </li>
      <li author="ေရှးစကားပံု">"အချိန်ရှိခိုက် လုံ့လစိုက်"
      </li>
      <li author="Ed Bradley">"ကြိုတင်ပြင်ဆင်ပါ။ အလုပ်ကြိုးစားပါ၊ ကံကြမ္မာကို အနည်းငယ်သာ မျှော်လင့်ပါ။ အလုပ်ကြိုးစားလေလေ ကံကောင်းလေလေပါပဲ။"
      </li>
      <li author="Bernard Mellzer">"ခွင့်လွှတ်ြခင်းဟာ အတိတ်ကဖြစ်ရပ်တွေကို ပြောင်းလဲပေးနိုင်စွမ်း မရှိပါဘူး။ သို့သော် အနာဂတ်အတွက် ပေါင်းသင်းဆက်ဆံရေးပြေလည်မှုကိုတော့
        အထောက်အကူပြုမှာ သေချာပါတယ်။"
      </li> 
      <li author="ဦးသောင်းဌေး (ရန်ကုန်တက္ကသိုလ်)">"အသိပညာကို သင်ယူခြင်းအားဖြင့် ရရှိနိုင်သည်။<br>
        ကျွမ်းကျင်မှုကို လေ့ကျင့်မှုမှ ရရှိနိုင်သည်။<br>
        ယံုကြည်မှုကို သံသယမှ ရရှိနိုင်သည်။<br>
        မေတ္တာကို မေတ္တာမှသာ ရရှိနိုင်ပါသည်။"
      </li> 
    </ul>

  </div>
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










