{{-- <!doctype html>  
<html lang="en" dir="rtl" class="dark">  
<head>  
  <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link href="./output.css" rel="stylesheet">  
  @vite(['resources/css/app.css', 'resources/js/app.js'])  
</head>  
<body class="bg-white dark:bg-gray-900">  

  <!-- Header Section -->  
  <header class="bg-gray-200 dark:bg-gray-800 p-4">  
    <div class="container mx-auto flex justify-between items-center">  
      <h1 style="font-family: vazir;" class="text-lg font-bold dark:text-white">صفحه پرداخت</h1>  
      <nav>  
        <a href="{{ route('shopp.home') }}" style="margin-right: 850px;" class="text-gray-800 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 no-underline">بازگشت به سبد خرید</a>  
      </nav>  
      <nav>  
        <a href="{{route('home1')}}" class="text-gray-800 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 no-underline">خانه</a>  
      </nav>  
    </div>  
  </header>  

  <div class="p-10 text-center">  
    <button id="togglebtn" class="border border-gray-400 p-2 rounded-md">  
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">  
        <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />  
      </svg>  
    </button>  
  </div>  

  <div class="flex justify-center flex-wrap">  
    <div class="m-2 w-80 border border-gray-200 dark:border-gray-700 shadow-2xl rounded-lg overflow-hidden">  
      <form class="col-6 m-auto p-4" action="{{ route('payment.request') }}" method="post">  
          <?php if(!empty($err_zarinpal)): ?>  
              <p class="text-center p-2 rounded fw-bold bg-warning text-dark"><?= $err_zarinpal ?></p>  
          <?php endif; ?>  
          <div class="input-group mb-3">  
            @foreach ($baskets as  $basket)
                
            
              <input type="number" style="font-family: vazir;" class="form-control text-center w-60 rounded-md bg-gray-400" name="amount" value="{{ $basket->Products()->price * $basket->count }}" aria-label="Amount">  
              <span style="font-family: vazir;" class="input-group-text bg-green-600 rounded-md">ریال</span>  
              @endforeach
          </div>  
          <input type="hidden" name="ref" value="zarinpal_request">  
          <center><input type="submit" style="font-family: vazir;" class="btn btn-success ps-3 pe-3 bg-blue-600 rounded-md text-gray-200 stroke-emerald-950 text-2xl pr-24 pl-24 ml-11" value="خرید"></center>  
      </form>  
    </div>  
  </div>  

  <script src="./app.js"></script>  
</body>  
</html> --}}