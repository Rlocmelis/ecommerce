@extends('admin.admin_layouts')

@section('admin_content')

        
        
            <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">E-SHOP <span class="tx-info tx-normal">admin</span></div>
        <div class="tx-center mg-b-60">Lots of work to do</div>

        <form>
   
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter your username">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Enter your password">
          <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
        </div><!-- form-group -->
        <button type="submit" class="btn btn-info btn-block">Sign In</button>

        </form>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->
    
@endsection
