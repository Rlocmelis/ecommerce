<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CouponController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:admin');
    }


    public function Coupon(){
      $coupon = DB::table('coupons')->get();
      return view('admin.coupon.coupon',compact('coupon'));
    }

    public function StoreCoupon(Request $request){
      $data = array();
      $data['coupon'] = $request->coupon;
      $data['discount'] = $request->discount;
      DB::table('coupons')->insert($data);
        return Redirect()->back();
    }

    public function DeleteCoupon($id){
      DB::table('coupons')->where('id',$id)->delete();
        return Redirect()->back();
    }

    public function EditCoupon($id){

      $coupon = DB::table('coupons')->where('id',$id)->first();
      return view('admin.coupon.edit_coupon',compact('coupon'));

    }

    public function UpdateCoupon(Request $request, $id){
      $data = array();
      $data['coupon'] = $request->coupon;
      $data['discount'] = $request->discount;
      DB::table('coupons')->where('id',$id)->update($data);
        return Redirect()->route('admin.coupon');

    }


    //Newsletters
    public function Newsletter(){
      $sub = DB::table('newsletters')->get();
      return view('admin.coupon.newsletter',compact('sub'));
    }

    public function DeleteSub($id){
      DB::table('newsletters')->where('id',$id)->delete();
        return Redirect()->back();
    }

}
