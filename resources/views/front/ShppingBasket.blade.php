<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سبد خرید</title>
    <style>
        /* استایل های جدید */
        body {
            background-color: #212a35;
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            font-family: 'vazir', sans-serif;
        }

        .products-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            max-width: 1300px;
            margin: 0 auto;
            padding: 20px;
        }

        .product-card {
            background: linear-gradient(180deg, #393b36, #165a5a);
            border-radius: 15px;
            padding: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .image-container {
            width: 100%;
            height: 200px;
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 15px;
        }

        .product-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-details {
            color: white;
            padding: 10px;
        }

        .action-buttons {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            margin-top: 15px;
        }

        .button {
            padding: 8px 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.3s;
        }
        .info-item {
        border-right: 2.5px solid #2e849e; /* تغییر جهت حاشیه */
        border-left: none;
          }
          .info-item::before {
              right: -50px; /* تغییر جهت انیمیشن */
              left: auto;
              transform: skewX(30deg);
          }
          .info-item:hover::before {
              right: 110%;
          }

        .button:hover {
            filter: brightness(1.1);
            transform: scale(1.02);
        }

        .add-button { background: #1762d1; color: white; text-decoration: none; }
        .min-button { background: #d6661b; color: white; text-decoration: none; }
        .remove-button { background: #B22222; color: white; text-decoration: none; }
        .pay-button { background: #333738; color: white; text-decoration: none; }

        .back-link {
            display: block;
            text-align: center;
            color: #fff;
            margin-top: 25px;
            text-decoration: none;
            padding: 10px;
            background: #2c3e50;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    
    <div class="products-container">
        @foreach ($baskets as $basket)
        <div class="product-card">
            <div class="image-container">
                <img src="{{ asset('image/'.$basket->Products()->image) }}" class="product-image">
            </div>
           
            <div class="product-details">
                <p class="info-item">نام محصول: {{ $basket->Products()->name }}</p>
                <p class="info-item">توضیحات: {{ $basket->Products()->discription }}</p>
                <p class="info-item">قیمت: {{ number_format($basket->Products()->price) }} تومان</p>
                <p class="info-item">سایز: {{ $basket->Products()->size }}</p>
                <p class="info-item">تعداد: {{ $basket->count }}</p>
                
                <div class="action-buttons">
                    <a href="{{ route('addCount', ['id' => $basket->id]) }}" class="button add-button">افزایش</a>
                    <a href="{{ route('minCount', ['id' => $basket->id]) }}" class="button min-button">کاهش</a>
                    <a href="{{ route('deleteBasket', ['id' => $basket->id]) }}" class="button remove-button">حذف</a>
                    <a href="{{ route('checkout', ['basket_id' => $basket->id]) }}" class="button pay-button">پرداخت</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <a href="{{ route('home1') }}" class="back-link">بازگشت به صفحه اصلی</a>
</body>
</html>