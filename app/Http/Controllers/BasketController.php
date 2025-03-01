<?php

namespace App\Http\Controllers;

use App\Models\baskets;
use App\Models\wallets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{

    public function Shopphome(){
        if(Auth::check()){
            $baskets = baskets::where('user_id' ,'=', Auth::user()->id)->where('is_payed' ,'=', 0)->get();
        }
        return view('front.ShppingBasket' , ['baskets' => $baskets]);
    }



    public function add($products_id){
        $product = baskets::where('user_id' ,'=', Auth::user()->id)->
        where('product_id' ,'=', $products_id)
        ->where('is_payed' ,'=', 0)
        ->first();

        if($product){
            $product->update(['count' => $product->count + 1]);
        }
        else{
            baskets::create([
               'user_id' => Auth::user()->id ?? 0,
               'product_id' => $products_id,
               'count' => 1
            ]);
        }
        return redirect()->back();
    }

    public function addCount($id){
          $basket = baskets::where('id' ,'=', $id)->where('user_id' ,'=', Auth::user()->id)->where('is_payed' ,'=', 0)->first();

          if($basket){
            $basket->update(['count' => $basket->count + 1]);
          }

          return redirect()->back();
    }

    public function minCount($id){
        $basket = baskets::where('id' ,'=', $id)->where('user_id' ,'=', Auth::user()->id)->where('is_payed' ,'=', 0)->first();

        if($basket){
            $basket->update(['count' => $basket->count - 1]);
            
          }

          return redirect()->back();
    }

    public function deleteBasket($id){
        $basket = baskets::where('user_id' ,'=', Auth::user()->id)->where('id' ,'=', $id)->where('is_payed' ,'=', 0)->first();

        if($basket){
            $basket->delete();
            return redirect()->back();
        }
        else{
            echo 'error';
        }
    }

    public function checkout($basket_id){
        // دریافت سبد خرید مشخص‌شده توسط شناسه
        $basket = baskets::where('id', '=', $basket_id)->where('is_payed', '=', 0)->first();
    
        if (!$basket) {
            return ('سبد خرید پیدا نشد یا قبلاً پرداخت شده است');
        }
    
        // دریافت کیف پول کاربر
        $wallet = wallets::where('user_id', '=', $basket->user_id)->first();
    
        // محاسبه قیمت کل محصول انتخاب شده
        $total = $basket->Products()->price * $basket->count;
    
        if (isset($wallet->price) && $wallet->price >= $total) {
            // بروزرسانی وضعیت پرداخت فقط برای همین آیتم
            $basket->update([
                'is_payed' => 1
            ]);
    
            // کاهش مبلغ از کیف پول
            $wallet->update([
                'price' => $wallet->price - $total
            ]);
    
            return redirect(route('shopp.home'));
        } else {
            return ('موجودی کیف پول کافی نیست');
        }
    }
    
}
