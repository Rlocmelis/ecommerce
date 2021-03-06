<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>e-shop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ asset('public/frontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }} ">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/plugins/slick-1.8.0/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/responsive.css') }}">

<!-- chart -->
         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

         <link rel="stylesheet" href="sweetalert2.min.css">

     <script src="https://js.stripe.com/v3/"></script>



</head>

<body>


<div class="super_container">

   <!-- Header -->

   <header class="header">

       <!-- Top Bar -->

       <div class="top_bar">
           <div class="container">
               <div class="row">
                   <div class="col d-flex flex-row">
                       <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{ asset('public/frontend/images/phone.png')}}" alt=""></div>+371 4206669</div>
                       <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{ asset('public/frontend/images/mail.png')}}" alt=""></div><a href="mailto:PrayForHarambe@gmail.com">PrayForHarambe@gmail.com</a></div>
                       <div class="top_bar_content ml-auto">
                           <div class="top_bar_menu">
                               <ul class="standard_dropdown top_bar_dropdown">
                                   <li>
                                     <a href="/lang/lv">{{ __('messages.Latvian') }}</a>
                                     <a href="/lang/en">{{ __('messages.English') }}<i class="fas fa-chevron-down"></i></a></li>
                                   </li>
                               </ul>
                           </div>
                           <div class="top_bar_user">
                             @guest
                             <div><a href="{{ route('login')}}"><div class="user_icon"><img src="{{ asset('public/frontend/images/user.svg')}}" alt=""></div>{{ __('messages.Sign in / Register') }}</a></div>
                             @else
                             <ul class="standard_dropdown top_bar_dropdown">
                                 <li>
                                     <a href="{{route('home')}}"> <div class="user_icon"><img src="{{ asset('public/frontend/images/user.svg')}}" alt=""></div>{{ __('messages.Profile') }}<i class="fas fa-chevron-down"></i></a>
                                     <ul>
                                         <li><a href="{{route('user.wishlist')}}">{{ __('messages.Wishlist') }}</a></li>
                                         <li><a href="{{route('user.checkout')}}">{{ __('messages.Checkout') }}</a></li>
                                     </ul>
                                 </li>
                             </ul>
                             @endguest
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>

       <!-- Header Main -->

       <div class="header_main">
           <div class="container">
               <div class="row">

                   <!-- Logo -->
                   <div class="col-lg-2 col-sm-3 col-3 order-1">
                       <div class="logo_container">
                           <div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('public/frontend/images/logo.jpg')}}" alt=""></a></div>
                       </div>
                   </div>


@php
$category = DB::table('categories')->get();
@endphp
                   <!-- Search -->
                   <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                       <div class="header_search">
                           <div class="header_search_content">
                               <div class="header_search_form_container">
                                   <form action="#" class="header_search_form clearfix">
                                       <input type="search" required="required" class="header_search_input" placeholder="{{ __('messages.Search for products...') }}">
                                       <div class="custom_dropdown">
                                           <div class="custom_dropdown_list">
                                               <span class="custom_dropdown_placeholder clc">{{ __('messages.All Categories') }}</span>
                                               <i class="fas fa-chevron-down"></i>
                       <ul class="custom_list clc">
                        @foreach($category as $row)
                           <li><a class="clc" href="#">{{ $row->category_name }}</a></li>
                        @endforeach
                       </ul>
                                           </div>
                                       </div>
                                       <button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{ asset('public/frontend/images/search.png')}}" alt=""></button>
                                   </form>
                               </div>
                           </div>
                       </div>
                   </div>

                   <!-- Wishlist -->
                   <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                       <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                           <div class="wishlist d-flex flex-row align-items-center justify-content-end">
@guest

@else

@php

$wishlist = DB::table('wishlists')->where('user_id',Auth::id())->get();


@endphp
                               <div class="wishlist_icon"><img src="{{ asset('public/frontend/images/heart.png')}}" alt=""></div>
                               <div class="wishlist_content">
                                   <div class="wishlist_text"><a href="{{route('user.wishlist')}}">{{ __('messages.Wishlist') }}</a></div>
                                   <div class="wishlist_count">{{count($wishlist)}}</div>
                               </div>
@endguest
                           </div>

                           <!-- Cart -->
                           <div class="cart">
                            <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                <div class="cart_icon">
                                    <img src="{{ asset('public/frontend/images/cart.png')}}" alt="">
                                    <div class="cart_count"><span>{{ Cart::count() }}</span></div>
                                </div>
                                <div class="cart_content">
                                    <div class="cart_text"><a href="{{ route('show.cart') }}">{{ __('messages.Cart') }}</a></div>
                                    <div class="cart_price">${{ Cart::subtotal() }}</div>
                                </div>
                            </div>
                        </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>

       <!-- Main Navigation -->



@yield('content')

</div>

<script src="{{ asset('public/frontend/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('public/frontend/styles/bootstrap4/popper.js')}}"></script>
<script src="{{ asset('public/frontend/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{ asset('public/frontend/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{ asset('public/frontend/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{ asset('public/frontend/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{ asset('public/frontend/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{ asset('public/frontend/plugins/greensock/ScrollToPlugin.min.jsplugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{ asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{ asset('public/frontend/plugins/slick-1.8.0/slick.js')}}"></script>
<script src="{{ asset('public/frontend/plugins/easing/easing.js')}}"></script>
<script src="{{ asset('public/frontend/js/custom.js')}}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


<script src="{{ asset('public/frontend/js/product_custom.js')}}"></script>



   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>



 <script>
        @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
     </script>


 <script>
         $(document).on("click", "#return", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Do you want to Return this?",
                  text: "We gib muney!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Cancel!");
                  }
                });
            });
    </script>


</body>

</html>
