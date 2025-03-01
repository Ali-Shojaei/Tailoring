<?php

namespace App\Http\Controllers;

use App\Mail\UserRegister;
use App\Models\baskets;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\categories;
use App\Models\wallets;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function home(){
      
        // Mail::to('ali.shojaei2243@gmail.com')->send(new UserRegister());
        $Products = Products::where('is_hide' ,'=', 0)->orderBy('created_at' , 'desc')->limit(3)->get();
        $categories = categories::where('is_hide' ,'=', 0)->get();
        $bestProducts = Products::orderByDesc('counter')->limit(3)->get();
        return view('front.index' , ['Products' => $Products , 'categories' => $categories , 'bestProducts' => $bestProducts]);
    }
      public function frontWallet($id){
        $baskets = baskets::where('id' ,'=', $id)->get();

        
        return view('front.FrontWallet' , ['baskets' => $baskets]);
      }

      public function addPrice($id){
          $wallet = wallets::where('user_id' ,'=', $id)->get();  

          return view('front.wallet-charging' , ['wallets' => $wallet]);
      }

      // public function verifyWallet(){
      //   return view('front.verify-walletpass');
      // }

      public function insertPrice($id , Request $request){
      
        $amount = $request->input('amount');

        // تلاش برای یافتن رکورد
        $wallet = wallets::where('user_id', '=', $id)->first();
    
        // اگر رکورد وجود ندارد، آن را ایجاد کنید
        if (!$wallet) {
            $wallet = new wallets();
            $wallet->user_id = $id;
            $wallet->price = 0; // مقدار اولیه price
            $wallet->save();
        }
    
        // افزودن مقدار جدید به price
        $wallet->price += (int)$amount;
        $wallet->save();
    
        return redirect(route('add.price', ['user_id' => Auth::user()->id]));
    

    
      }
    
  
}
