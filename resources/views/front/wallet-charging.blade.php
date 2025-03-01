<!doctype html>
<html lang="en" dir="rtl" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 dark:bg-gray-900 min-h-screen">

    <!-- Header Section -->
    <header class="bg-white dark:bg-gray-800 shadow-sm">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <h1 style="font-family: vazir;" class="text-xl font-bold text-gray-800 dark:text-white">کیف پول کاربری</h1>
            <nav class="flex gap-4">
                <a href="{{ route('home1') }}" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 no-underline flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                    بازگشت
                </a>
                <a href="{{route('home1')}}" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 no-underline">خانه</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <!-- Wallet Balance Card -->
        <div class="max-w-md mx-auto mb-8 bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl p-6 shadow-xl">
            <div class="flex items-center justify-between text-white">
                <div>
                     <p style="font-family: vazir;" class="text-sm opacity-80">موجودی فعلی</p>
                    @foreach ($wallets as $wallet )
                        
                    
                   
                    
                    <p style="font-family: vazir;" class="text-3xl font-bold mt-2">{{ $wallet->price }}<span class="text-sm">تومان</span></p>
                    
                    {{-- <p style="font-family: vazir;" class="text-3xl font-bold mt-2"><span class="text-sm">تومان</span></p> --}}
                   
                    @endforeach
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 opacity-80" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M21 4H3a1 1 0 00-1 1v14a1 1 0 001 1h18a1 1 0 001-1V5a1 1 0 00-1-1zm-1 11a3 3 0 01-3 3H7a3 3 0 01-3-3V8h16v7z"/>
                    <path d="M12 11a2 2 0 100-4 2 2 0 000 4z"/>
                </svg>
            </div>
        </div>

        <!-- Charge Wallet Section -->
        <div class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden">
            <div class="p-6">
                
                <h2 style="font-family: vazir;" class="text-lg font-semibold text-gray-800 dark:text-white mb-4">شارژ کیف پول</h2>
                
                <form action="{{ route('insert.price' , ['user_id' => Auth::user()->id]) }}" class="space-y-4">
                    @csrf
                    
                    <div>
                        <label style="font-family: vazir;" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">مبلغ شارژ (تومان)</label>
                        <input 
                            type="number" 
                            id="amount"
                            name="amount" 
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                            placeholder="مبلغ را وارد نمایید"
                            required
                        >
                    </div>

                    <button 
                        type="submit" 
                        style="font-family: vazir;"
                        class="w-full bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-lg transition-colors flex items-center justify-center gap-2"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        </svg>
                        شارژ کیف پول
                    </button>
                </form>
            </div>
        </div>
    </main>

    <!-- Dark Mode Toggle -->
    <div class="fixed bottom-4 left-4">
        <button id="togglebtn" class="p-2 rounded-full bg-white dark:bg-gray-800 shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800 dark:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
            </svg>
        </button>       
    </div>

    <script src="./app.js"></script>
</body>
</html>