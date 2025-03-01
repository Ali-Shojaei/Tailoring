<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pishran\Zarinpal\Zarinpal as ZarinpalZarinpal;
use Zarinpal\Zarinpal;

class PaymentController extends Controller
{
    public function requestPayment(Request $request){
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://sandbox.zarinpal.com/pg/v4/payment/request.json',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{
          "merchant_id": "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
          "amount": "1100",
          "callback_url": "http://example.com/verify",
          "description": "Transaction description.",
          "metadata": {
            "mobile": "09165878570",
            "email": "ali.shojaei2243@gmail.com"
          }
        }',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Accept: application/json'
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
    }



    public function verifyPayment(Request $request)
    {
        $authority = request()->query('Authority'); 
        $status = request()->query('Status'); 

        $response = zarinpal()
        ->merchantId('00000000-0000-0000-0000-000000000000') 
        ->amount(100)
        ->verification()
        ->authority($authority)
        ->send();

        if (!$response->success()) {
            return $response->error()->message();
        }

      return $response->referenceId();
    }
}
