<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>E-shop admin panel</title>

    <!-- vendor css -->
    <link href="{{ asset('public/backend/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
    <!-- Tag input CDN CSS-->
    <link href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet"/>

    <!--notification--->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    <!--Datatable css -->
    <link href="{{ asset('public/backend/lib/highlightjs/github.css')}}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/select2/css/select2.min.css')}}" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('public/backend/css/starlight.css')}}">
    <link href="{{ asset('public/backend/lib/summernote/summernote-bs4.css')}}.." rel="stylesheet">

  </head>

  <body>

      @guest

      @else

    <div class="sl-logo"><a href=""><i class="fas fa-dragon"></i>E-shop</a></div>
    <div class="sl-sideleft">

      <div class="sl-sideleft-menu">
        <a href="{{url('admin/home')}}" class="sl-menu-link active">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Category</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('categories') }}" class="nav-link">Category</a></li>
          <li class="nav-item"><a href="{{ route('sub.categories') }}" class="nav-link">Sub category</a></li>
          <li class="nav-item"><a href="{{ route('brands') }}" class="nav-link">Brand</a></li>
        </ul>
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
            <span class="menu-item-label">Coupons</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('admin.coupon') }}" class="nav-link">Coupon</a></li>
        </ul>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">Products</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('add.product') }}" class="nav-link">Add Product</a></li>
          <li class="nav-item"><a href="{{ route('all.product') }}" class="nav-link">All Products</a></li>
        </ul>


        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">Blog</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('add.blog.categorylist') }}" class="nav-link">Blog Category</a></li>
          <li class="nav-item"><a href="{{route('add.blogpost')}}" class="nav-link">Add Post</a></li>
          <li class="nav-item"><a href="{{route('all.blogpost')}}" class="nav-link">Post List</a></li>
        </ul>


        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Others</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('admin.newsletter') }}" class="nav-link">Newsletters</a></li>
        </ul>
      </div><!-- sl-sideleft-menu -->
      <br>
    </div><!-- sl-sideleft -->


    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name">Admin<span class="hidden-md-down"></span></span>
              <img src="{{asset('public/frontend/images/ivern.jpg')}}" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                <li><a href="{{route('admin.password.change')}}"><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                <li><a href="{{route('admin.logout') }}"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->



      @endguest

      @yield('admin_content')


    <script src="{{ asset('public/backend/lib/jquery/jquery.js')}}"></script>
    <script src="{{ asset('public/backend/lib/popper.js/popper.js')}}"></script>
    <script src="{{ asset('public/backend/lib/bootstrap/bootstrap.js')}}"></script>
    <script src="{{ asset('public/backend/lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{ asset('public/backend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{ asset('public/backend/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('public/backend/lib/d3/d3.js')}}"></script>
    <script src="{{ asset('public/backend/lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{ asset('public/backend/lib/chart.js/Chart.js')}}"></script>
    <script src="{{ asset('public/backend/lib/Flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('public/backend/lib/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('public/backend/lib/Flot/jquery.flot.resize.js')}}"></script>


    <script src="{{ asset('public/backend/lib/highlightjs/highlight.pack.js')}}"></script>
    <script src="{{ asset('public/backend/lib/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('public/backend/lib/datatables-responsive/dataTables.responsive.js')}}"></script>
    <script src="{{ asset('public/backend/lib/select2/js/select2.min.js')}}"></script>

    <script>
    $(function(){
      'use strict';

      $('#datatable1').DataTable({
        responsive: true,
        language: {
          searchPlaceholder: 'Search...',
          sSearch: '',
          lengthMenu: '_MENU_ items/page',
        }
      });

      $('#datatable2').DataTable({
        bLengthChange: false,
        searching: false,
        responsive: true
      });

      // Select2
      $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

    });
  </script>


    <script src="{{ asset('public/backend/lib/medium-editor/medium-editor.js')}}"></script>
    <script src="{{ asset('public/backend/lib/summernote/summernote-bs4.min.js')}}"></script>

   <script>
     $(function(){
       'use strict';

       // Inline editor
       var editor = new MediumEditor('.editable');

       // Summernote editor
       $('#summernote').summernote({
         height: 150,
         tooltip: false
       })
     });
   </script>


   <script>
     $(function(){
       'use strict';

       // Inline editor
       var editor = new MediumEditor('.editable');

       // Summernote editor
       $('#summernote1').summernote({
         height: 150,
         tooltip: false
       })
     });
   </script>

    <script src="{{ asset('public/backend/lib/flot-spline/jquery.flot.spline.js')}}"></script>
    <script src="{{ asset('public/backend/js/starlight.js')}}"></script>
    <script src="{{ asset('public/backend/js/ResizeSensor.js')}}"></script>
    <script src="{{ asset('public/backend/js/dashboard.js')}}"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="{{asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
   <script>

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
           $(document).on("click", "#delete", function(e){
               e.preventDefault();
               var link = $(this).attr("href");
                  swal({
                    title: "Are you sure you want to delete this?",
                    text: "Once Deleted this will be gone, Permanently!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                  })
                  .then((willDelete) => {
                    if (willDelete) {
                         window.location.href = link;
                    } else {
                      swal("The Data is Safe!");
                    }
                  });
              });
      </script>

  </body>
</html>
