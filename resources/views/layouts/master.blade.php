@include('layouts.header'))
<section class="home-section-wrap">
   <div class="container">
      <div class="row">
         <div class="home-section-inner">
            <div class="home-slider-wrap">
               <div class="home-slider" data-speed="1000" data-autoplay="1" data-autoplay-speed="5000" data-fade="0" data-dots="1" data-arrows="1">
                    @foreach ($topSlides as $slide)
                        <div class="slide">
                            <img src="{{ asset('storage/media/'.$slide->photo) }}" data-animation-in="zoomInImage" class="slider-image animated">
                            <div class="slide-content align-left">
                                <div class="captions">
                                <span class="caption caption-1" data-animation-in="fadeInRight" data-delay-in="">
                                {{$slide->title}}<b>{{$slide->bold_text}}</b>
                                </span>
                                <span class="caption caption-2" data-animation-in="fadeInRight" data-delay-in="0.3">
                                {{$slide->description}}
                                </span>
                                <a href="family/{{$slide->id_families}}" class="btn btn-primary btn-slider" data-animation-in="fadeInUp" data-delay-in="0.7" target="_blank">
                                Achetez maintenant
                                </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
               </div>
            </div>
            <div class="home-banner-wrap">
               <a href="{{ asset('en/categories/backpacks/products.html') }}" class="banner" target="_self">
               <img src="{{ asset('storage/media/5siKhRlEDQFmbiJRwCNBW3rDsbG7m1r2PibvtNeF.png') }}" alt="banner">
               </a>
               <a href="{{ asset('en/categories/iphone/products.html') }}" class="banner m-t-30" target="_blank">
               <img src="{{ asset('storage/media/yl6rNkswnKQzh7mouQ0HpagRLwBpnq3Mt9LZMRak.png') }}" alt="banner">
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
@include('layouts.footer'))
</div>
<script data-cfasync="false" src="{{ asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
<script src="{{ asset('themes/storefront/js/forever.js') }}"></script>
@yield('js')
</body>
<!-- Mirrored from fleetcart.envaysoft.com/en by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Mar 2022 00:56:11 GMT -->
</html>