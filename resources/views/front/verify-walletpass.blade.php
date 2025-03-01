{{-- <!doctype html>
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
            <h1 style="font-family: vazir;" class="text-xl font-bold text-gray-800 dark:text-white">تایید کد ایمیل</h1>
            <nav>
                <a href="{{ route('add.price' , ['user_id' => Auth::user()->id]) }}" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 no-underline">بازگشت</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <div class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-xl shadow-md p-6">
            <!-- Verification Form -->
            <form action="#" method="POST" class="space-y-6">
                @csrf
                
                <div class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-blue-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 2 11 13M22 2l-7 20-4-9-9-4 20-7z"/>
                    </svg>
                    <h2 style="font-family: vazir;" class="text-xl font-semibold mt-4 dark:text-white">کد تایید را وارد کنید</h2>
                    <p style="font-family: vazir;" class="text-gray-600 dark:text-gray-300 mt-2">کد ۶ رقمی ارسال شده به ایمیلتان را وارد نمایید</p>
                </div>

                <!-- Code Inputs -->
                <div class="flex justify-center gap-3" id="codeInputs">
                    <input type="number" name="code[]" maxlength="1" 
                        class="w-12 h-12 text-2xl text-center border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white" 
                        autofocus
                        oninput="this.value = this.value.slice(0,1); if(this.value.length === 1) this.nextElementSibling.focus()"
                    >
                    <input type="number" name="code[]" maxlength="1" 
                        class="w-12 h-12 text-2xl text-center border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                        oninput="this.value = this.value.slice(0,1); if(this.value.length === 1) this.nextElementSibling.focus()"
                    >
                    <input type="number" name="code[]" maxlength="1" 
                        class="w-12 h-12 text-2xl text-center border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                        oninput="this.value = this.value.slice(0,1); if(this.value.length === 1) this.nextElementSibling.focus()"
                    >
                    <input type="number" name="code[]" maxlength="1" 
                        class="w-12 h-12 text-2xl text-center border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                        oninput="this.value = this.value.slice(0,1); if(this.value.length === 1) this.nextElementSibling.focus()"
                    >
                    <input type="number" name="code[]" maxlength="1" 
                        class="w-12 h-12 text-2xl text-center border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                        oninput="this.value = this.value.slice(0,1); if(this.value.length === 1) this.nextElementSibling.focus()"
                    >
                    <input type="number" name="code[]" maxlength="1" 
                        class="w-12 h-12 text-2xl text-center border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                        oninput="this.value = this.value.slice(0,1)"
                    >
                </div>

                <!-- Error Message -->
                @if($errors->any())
                    <div class="text-red-500 text-center text-sm">{{ $errors->first() }}</div>
                @endif

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    style="font-family: vazir;"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors"
                >
                    تایید و پرداخت
                </button>

                <!-- Resend Code -->
                <div class="text-center mt-4">
                    <p style="font-family: vazir;" class="text-gray-600 dark:text-gray-400">
                        کد را دریافت نکردید؟ 
                        <a href="#" class="text-blue-500 hover:text-blue-600">ارسال مجدد کد</a>
                    </p>
                </div>
            </form>
        </div>
    </main>

    <script>
        // Paste Code Functionality
        document.getElementById('codeInputs').addEventListener('paste', (e) => {
            e.preventDefault();
            const pasteData = e.clipboardData.getData('text').trim();
            const inputs = document.querySelectorAll('#codeInputs input');
            
            if(pasteData.length === 6 && /^\d+$/.test(pasteData)) {
                inputs.forEach((input, index) => {
                    input.value = pasteData[index];
                    if(index < 5) input.nextElementSibling.focus();
                });
            }
        });
    </script>

</body>
</html> --}}