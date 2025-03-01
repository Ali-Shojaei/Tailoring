<!doctype html>  
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
      <h1 class="text-lg font-bold dark:text-white">محصولات</h1>  
      <nav>  
        <a href="{{ route('home1') }}" class="text-gray-800 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 no-underline">خانه</a>  
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
    @foreach ($Products as $Product)  
      <div class="m-2 w-80 border border-gray-200 dark:border-gray-700 shadow-2xl rounded-lg overflow-hidden">  
        <img src="{{ asset('image/'.$Product->image)  }}" alt="{{ $Product->name }}">  
        <div class="m-4 space-y-3">  
          <h2 class="font-bold text-xl dark:text-gray-300">{{ "نام".": ".$Product->name }}</h2>  
          <p class="font-normal text-gray-800 dark:text-gray-300">{{ "توضیحات".": ".$Product->discription }}</p> 
          <p class="font-normal text-gray-800 dark:text-gray-300">{{ "سایز".": ".$Product->size }}</p>
          <p class="font-normal text-gray-800 dark:text-gray-300">{{ "قیمت".": ".$Product->price }}</p> 
          
          
              
          {{-- @foreach ($categories as $Category)
              
          
         
          <p class="font-normal text-gray-800 dark:text-gray-300">{{ "دسته بندی".": ".$Category->name }}</p>
          @endforeach --}}
          <a href="{{ route('basket.add' , ['products_id' => $Product->id]) }}" class="inline-flex bg-blue-600 rounded-md text-white font-bold text-base px-3 py-1 gap-2">  
            افزودن به سبد خرید   
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">  
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />  
            </svg>  
          </a>  
        </div>  
      </div>  
    @endforeach  
  </div>  

  <script src="./app.js"></script>  
</body>  
</html>