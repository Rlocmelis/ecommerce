
@php

$category = DB::table('categories')->get();

@endphp


<nav class="main_nav">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="main_nav_content d-flex flex-row">

                    <!-- Categories Menu -->

                    <div class="cat_menu_container">
                        <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                            <div class="cat_burger"><span></span><span></span><span></span></div>
                            <div class="cat_menu_text">categories</div>
                        </div>

        <ul class="cat_menu">


          @foreach($category as $cat)
          <li class="hassubs">
              <a href="#">{{ $cat->category_name }}<i class="fas fa-chevron-right"></i></a>
                  <ul>
@php
  $subcategory = DB::table('subcategories')->where('category_id',$cat->id)->get();
@endphp
                    @foreach($subcategory as $row)
                      <li class="hassubs">
                          <a href="#">{{ $row->subcategory_name }}<i class="fas fa-chevron-right"></i></a>
                      </li>
                      @endforeach
                  </ul>
          </li>
          @endforeach
        </ul>
                    </div>



                    <!-- Menu Trigger -->

                    <div class="menu_trigger_container ml-auto">
                        <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                            <div class="menu_burger">
                                <div class="menu_trigger_text">menu</div>
                                <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Menu -->

<div class="page_menu">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page_menu_content">

                    <div class="page_menu_search">
                        <form action="#">
                            <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</header>

<!-- Banner -->

@php

$slider = DB::table('products')
              ->join('brands','products.brand_id','brands.id')
              ->select('products.*', 'brands.brand_name')
              ->where('main_slider',1)->orderBy('id','DESC')->first();

@endphp

<div class="banner">
<div class="banner_background" style="background-image:url({{ asset('public/frontend/images/banner_background.jpg')}})"></div>
<div class="container fill_height">
    <div class="row fill_height">
        <div class="banner_product_image"><img src="{{ asset($slider->image_one)}}" alt="" stlye="height: 450px;"></div>
        <div class="col-lg-5 offset-lg-4 fill_height">
            <div class="banner_content">
                <h1 class="banner_text">{{$slider->product_name}}</h1>
                <div class="banner_price">
                  @if($slider->discount_price == NULL)
                    <h2>${{ $slider->selling_price }}</h2>
                  @else

                    <span>${{$slider->selling_price}}</span>${{$slider->discount_price}}

                  @endif

                </div>
                <div class="banner_product_name">{{$slider->brand_name}}</div>
                <div class="button banner_button"><a href="#">Shop Now</a></div>
            </div>
        </div>
    </div>
</div>
</div>
