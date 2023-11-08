<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Siêu thị Y Tế</title>
<link rel="icon" href="https://yt3.googleusercontent.com/ytc/AOPolaRvZQ1HezYCw--FbtWf3csm7fl1h2MWdrXCwIME=s900-c-k-c0x00ffffff-no-rj" type="image/x-icon" />
<link rel="shortcut icon" href="https://yt3.googleusercontent.com/ytc/AOPolaRvZQ1HezYCw--FbtWf3csm7fl1h2MWdrXCwIME=s900-c-k-c0x00ffffff-no-rj" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href= "{{asset('frontend/css/bootstrap.min.css')}}" type="text/css" >
<link rel="stylesheet" href= "{{asset('frontend/css/style.css')}}" type="text/css" >
<link rel="stylesheet" href= "{{asset('frontend/css/revslider.css')}}" type="text/css" >
<link rel="stylesheet" href= "{{asset('frontend/css/owl.carousel.css')}}" type="text/css" >
<link rel="stylesheet" href= "{{asset('frontend/css/owl.theme.css')}}" type="text/css" >
<link rel="stylesheet" href= "{{asset('frontend/css/blogmate.css')}}" type="text/css" >
<link rel="stylesheet" href= "{{asset('frontend/css/fancybox.css')}}" type="text/css" >
<link rel="stylesheet" href= "{{asset('frontend/css/font-awesome.css')}}" type="text/css" >
<link rel="stylesheet" href= "{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
</head>
<body class="cms-index-index">
<div class="page"> 

    @include('frontend.layouts.header')

    @include('frontend.layouts.nav')

    <div class="content-wrapper">
        @yield('Content')
      </div>


    @include('frontend.layouts.footer')
</div>
<script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('frontend/js/jquery.jcarousel.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('frontend/js/cloudzoom.js')}}"></script> 
<script type="text/javascript" src="{{asset('frontend/js/common.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revslider.js')}}"></script> 
<script type="text/javascript" src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
@stack('my_js')

@stack('Cart')

<script>
  function addToCart(event){
      event.preventDefault();
      let urlCart = $(this).data('url');
      $.ajax({
          type: "GET",
          url: urlCart,
          dataType: 'json',
          success: function (data){
            alert('Đã thêm vào giỏ hàng');
            $("#cart-total").text();
          }
      });
  }
  $(function (){
      $('.add_to_cart').on('click', addToCart);
  });

</script>

<script type='text/javascript'>
jQuery(document).ready(function(){
jQuery('#rev_slider_4').show().revolution({
dottedOverlay: 'none',
delay: 5000,
startwidth: 1170,
startheight: 580,

hideThumbs: 200,
thumbWidth: 200,
thumbHeight: 50,
thumbAmount: 2,

navigationType: 'thumb',
navigationArrows: 'solo',
navigationStyle: 'round',

touchenabled: 'on',
onHoverStop: 'on',

swipe_velocity: 0.7,
swipe_min_touches: 1,
swipe_max_touches: 1,
drag_block_vertical: false,

spinner: 'spinner0',
keyboardNavigation: 'off',

navigationHAlign: 'center',
navigationVAlign: 'bottom',
navigationHOffset: 0,
navigationVOffset: 20,

soloArrowLeftHalign: 'left',
soloArrowLeftValign: 'center',
soloArrowLeftHOffset: 20,
soloArrowLeftVOffset: 0,

soloArrowRightHalign: 'right',
soloArrowRightValign: 'center',
soloArrowRightHOffset: 20,
soloArrowRightVOffset: 0,

shadow: 0,
fullWidth: 'on',
fullScreen: 'off',

stopLoop: 'off',
stopAfterLoops: -1,
stopAtSlide: -1,

shuffle: 'off',

autoHeight: 'off',
forceFullWidth: 'on',
fullScreenAlignForce: 'off',
minFullScreenHeight: 0,
hideNavDelayOnMobile: 1500,

hideThumbsOnMobile: 'off',
hideBulletsOnMobile: 'off',
hideArrowsOnMobile: 'off',
hideThumbsUnderResolution: 0,

hideSliderAtLimit: 0,
hideCaptionAtLimit: 0,
hideAllCaptionAtLilmit: 0,
startWithSlide: 0,
fullScreenOffsetContainer: ''
});
});
</script>
</body>
</html>
