<!DOCTYPE html>
<html lang="en"  class="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>قالب رایگان سایت رستوران Bueno :: دریافت شده از وب روبیک</title>
	<!-- Stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	@vite(['resources/css/app.css', 'resources/js/app.js']);
</head>
<body class="rtl bg-slate-100 dark:bg-gray-900">
	{{-- <!-- Preloader -->
	<div class="preloader d-flex align-items-center justify-content-center">
		<div class="preloader-content">
			<h3>در حال بارگزاری..</h3>
			<div id="cooking">
				<div class="bubble"></div>
				<div class="bubble"></div>
				<div class="bubble"></div>
				<div class="bubble"></div>
				<div class="bubble"></div>
				<div id="area">
					<div id="sides">
						<div id="pan"></div>
						<div id="handle"></div>
					</div>
					<div id="pancake">
						<div id="pastry"></div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

<!-- ##### Header Area Start ##### -->
	<header class="header-area">

		<!-- Top Header Area -->
		<div class="top-header-area bg-img bg-overlay" style="margin-right: 8px; border-radius: 10px; background-image: url(img/bg-img/Sewing-shop.jpg);">
			<div class="container h-100">
				<div class="row h-100 align-items-center justify-content-between">
					<div class="col-12 col-sm-6">
						<!-- Top Social Info -->
						<div class="top-social-info">
							<a href="#" data-toggle="tooltip" data-placement="bottom" title="پینترست"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
							<a href="#" data-toggle="tooltip" data-placement="bottom" title="فیس بوک"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#" data-toggle="tooltip" data-placement="bottom" title="تویتر"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							{{-- <a href="#" data-toggle="tooltip" data-placement="bottom" title="دریبل"><i class="fa fa-dribbble" aria-hidden="true"></i></a> --}}
							{{-- <a href="#" data-toggle="tooltip" data-placement="bottom" title="بیهنس"><i class="fa fa-behance" aria-hidden="true"></i></a> --}}
							{{-- <a href="#" data-toggle="tooltip" data-placement="bottom" title="لینکدین"><i class="fa fa-linkedin" aria-hidden="true"></i></a> --}}
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-5 col-xl-4">
						<!-- Top Search Area -->
						<div class="top-search-area">
							<form action="{{ route('search') }}">
								<input type="text" name="q" placeholder="جستجو در سایت">
								<button type="submit" class="btn"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Logo Area -->
		<div class="logo-area">
			<a href="{{ route('home1') }}"><img style="width: 100px; height: 100px;" src="img/core-img/sewing-machine.png" alt=""></a>
		</div>
		<div class="p-10 text-center">
			<button id="togglebtn" class="border border-gray-400 p-2 rounded-md">
			  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
				<path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
			  </svg>
			  
			</button>
		  </div>
		<!-- Navbar Area -->
		<div class="bueno-main-menu" id="sticker">
			<div class="classy-nav-container breakpoint-off dark:bg-gray-900 mr-">
				<div class="container">
					{{-- <div class="p-10 text-center">
						<button id="togglebtn" class="border border-gray-400 p-2 rounded-md">
						  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
							<path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
						  </svg>
						  
						</button>
					  </div> --}}
					<!-- Menu -->
					<nav class="classy-navbar justify-content-between dark:bg-gray-900 " id="buenoNav">

						<!-- Toggler -->
						@if (Auth::check())
						<div class="flex"><a href="{{ route('add.price' , ['user_id' => Auth::user()->id]) }}" style="font-family: vazir; font-size: 20px; font: bold">کیف پول</a> <a href="{{ route('add.price' , ['user_id' => Auth::user()->id]) }}"><img style="width: 30px; height: 30px;" src="{{ asset('image/wallet.png') }}" alt=""></a> </div> 
						@endif
						<div class="flex"><a href="#" style="font-family: vazir; font-size: 20px; font: bold">   </a></div> 

						<!-- Navbar Toggler -->
						<div class="classy-navbar-toggler ">
							<span class="navbarToggler"><span></span><span></span><span></span></span>
						</div>
						
						<!-- Menu -->
						<div class="classy-menu ">

							<!-- Close Button -->
							<div class="classycloseIcon ">
								<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
							</div>

							<!-- Nav Start -->
							<div class="classynav ">
								<ul>
									{{-- <li><a href="index.html">صفحه نخست</a></li> --}}
									
									{{-- <li><a href="#">صفحات</a>
										<ul class="dropdown">
											<li><a href="index.html">صفحه نخست</a></li>
											<li><a href="catagory.html">دسته بندی</a></li>
											<li><a href="{{ route('CategoryPost') }}">صفحه میانی دسته بندی</a></li>
											<li><a href="single-post.html">صفحه داخلی محصول</a></li>
											<li><a href="receipe.html">رسید خرید</a></li>
											<li><a href="contact.html">تماس با ما</a></li>
										</ul>
									</li> --}}
									<li><a href="{{ route('product') }}">لباس ها	</a></li>
									
									
									<li><a class="" style="" href="#">دسته بندی لباس ها</a>
										<div class="megamenu">
											@foreach ($categories as $Category)
												
											
											<ul class="row mr-96 ">
												<li><a href="{{ route('categories' , ['id' => $Category->id]) }}">{{ $Category->name }}</a></li>
												
												@endforeach
											</ul>							
										</div>
									</li>
										@if (Auth::check())
										@if (Auth::user()->role != 'Admin')
										
										@else
										
										<li><a href="{{ route('admin') }}">ادمین</a></li>
										@endif
										@endif
										<li><a href="{{ route('shopp.home') }}">سبد خرید</a></li>
										{{-- @if (Auth::user())
										<li><a href="{{ route('frontWallet') }}">کیف پول</a></li>	
										@endif --}}
										
									
									@if (Auth::user())
									<li><a href="{{ route('logout') }}">خروج از حساب</a></li>
									
									@else
									<div class="login-area">
										<a class="inline" style="" href="{{ route('login') }}">ورود / عضویت</a>
									</div>
									
									@endif
									
									
									
									
								</ul>
								
								<!-- Login/Register -->
								
								
							</div>
							<!-- Nav End -->

						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ##### Header Area End ##### -->

	<!-- ##### Hero Area Start ##### -->
	<h1 style="margin-right: 50px;" class="mr-24 mt-3 mb-4 font-bold text-lg">جدید ترین ها</h1>

<div class="hero-area">
    <!-- Hero Post Slides -->
    <div class="hero-post-slides owl-carousel">
        @foreach ($Products as $Product)
            <!-- Single Slide for each product -->
            <div class="single-slide">
                <!-- Blog Thumbnail -->
                <div class="blog-thumbnail">
                    <a href="#">
                        <img style="border-radius: 5px;" src="{{ asset('image/'.$Product->image ) }}" alt="{{ $Product->name }}">
                    </a>
                </div>
                <!-- Blog Content -->
                <div style="border-radius: 5px;" class="blog-content-bg">
                    <div class="blog-content">
                        {{-- <a href="{{ route('productSlider' , ['id' => $Product->id]) }}" class="post-tag">{{ $Product->name }}</a> --}}
                        <a href="{{ route('productSlider' , ['id' => $Product->id]) }}" class="post-title">{{ $Product->name }}</a>
                        <div class="post-meta">
                            {{-- <a href="{{ route('productSlider' , ['id' => $Product->id]) }}" class="post-date">{{ $Product->price }}</a> --}}
                            <a href="{{ route('productSlider' , ['id' => $Product->id]) }}" class="post-author">{{ $Product->discription }}</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
	
	<!-- ##### Hero Area End ##### -->

	<!-- ##### Catagory Area Start ##### -->
	
	{{-- <div style="border-radius: 5px;" class="post-catagory section-padding-100-0 mb-70">  
		<div class="container">  
			<h1 class="mr-5 mb-6 font-bold text-lg">محبوب ترین محصولات</h1>  
			<div class="row justify-content-center d-flex flex-wrap"> <!-- استفاده از d-flex و flex-wrap -->  
				@foreach ($bestProducts as $Product)  
				<div class="col-12 col-md-6 col-lg-4 mb-30"> <!-- mb-30 برای فاصله بین عناصر -->  
					<div class="single-post-catagory">  
						<img style="border-radius: 5px;" src="img/bg-img/4.jpg" alt="">  
						<div style="border-radius: 5px;" class="catagory-content-bg">  
							<div class="catagory-content">  
								<a href="#" class="post-title">{{ $Product->name }}</a>  
								<a href="#" class="post-tag">{{$Product->discription}}</a>  
							</div>  
						</div>  
					</div>  
				</div>  
				@endforeach  
			</div>  
		</div>  
	</div> --}}
				{{-- <!-- Single Post Catagory -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="single-post-catagory mb-30">
						<img style="border-radius: 5px;" src="img/bg-img/5.jpg" alt="">
						<!-- Content -->
						<div style="border-radius: 5px;" class="catagory-content-bg">
							<div class="catagory-content">
								<a href="#" class="post-tag">بهترین</a>
								<a href="#" class="post-title">غذاهای ارگانیک</a>
							</div>
						</div>
					</div>
				</div> --}}
				
	<!-- ##### Catagory Area End ##### -->

	<!-- ##### Big Posts Area Start ##### -->
	
	<!-- ##### Big Posts Area End ##### -->

	<!-- ##### Posts Area End ##### -->
	
	<!-- ##### Posts Area End ##### -->

	<!-- ##### Treading Post Area Start ##### -->
	<div class="treading-post-area" id="treadingPost">
		<div class="close-icon">
			<i class="fa fa-times"></i>
		</div>

		<h4>مطالب پربازدید</h4>

		<!-- Single Blog Post -->
		<div class="single-blog-post style-1 d-flex flex-wrap mb-30">
			<!-- Blog Thumbnail -->
			<div class="blog-thumbnail">
				<img src="img/bg-img/9.jpg" alt="">
			</div>
			<!-- Blog Content -->
			<div class="blog-content">
				<a href="#" class="post-tag">بهترین</a>
				<a href="#" class="post-title">صبحانه اختصاصی</a>
				<div class="post-meta">
					<a href="#" class="post-date">22 آبان 1398</a>
					<a href="#" class="post-author">توسط مصطفی کلانتری فرد</a>
				</div>
			</div>
		</div>

		<!-- Single Blog Post -->
		<div class="single-blog-post style-1 d-flex flex-wrap mb-30">
			<!-- Blog Thumbnail -->
			<div class="blog-thumbnail">
				<img src="img/bg-img/10.jpg" alt="">
			</div>
			<!-- Blog Content -->
			<div class="blog-content">
				<a href="#" class="post-tag">بهترین</a>
				<a href="#" class="post-title">قارچ سوخاری</a>
				<div class="post-meta">
					<a href="#" class="post-date">22 آبان 1398</a>
					<a href="#" class="post-author">توسط مصطفی کلانتری فرد</a>
				</div>
			</div>
		</div>

		<!-- Single Blog Post -->
		<div class="single-blog-post style-1 d-flex flex-wrap mb-30">
			<!-- Blog Thumbnail -->
			<div class="blog-thumbnail">
				<img src="img/bg-img/11.jpg" alt="">
			</div>
			<!-- Blog Content -->
			<div class="blog-content">
				<a href="#" class="post-tag">بهترین</a>
				<a href="#" class="post-title">کیک تولد شکلاتی</a>
				<div class="post-meta">
					<a href="#" class="post-date">22 آبان 1398</a>
					<a href="#" class="post-author">توسط مصطفی کلانتری فرد</a>
				</div>
			</div>
		</div>

		<!-- Single Blog Post -->
		<div class="single-blog-post style-1 d-flex flex-wrap mb-30">
			<!-- Blog Thumbnail -->
			<div class="blog-thumbnail">
				<img src="img/bg-img/9.jpg" alt="">
			</div>
			<!-- Blog Content -->
			<div class="blog-content">
				<a href="#" class="post-tag">بهترین</a>
				<a href="#" class="post-title">صبحانه اختصاصی</a>
				<div class="post-meta">
					<a href="#" class="post-date">22 آبان 1398</a>
					<a href="#" class="post-author">توسط مصطفی کلانتری فرد</a>
				</div>
			</div>
		</div>

		<!-- Single Blog Post -->
		<div class="single-blog-post style-1 d-flex flex-wrap mb-30">
			<!-- Blog Thumbnail -->
			<div class="blog-thumbnail">
				<img src="img/bg-img/10.jpg" alt="">
			</div>
			<!-- Blog Content -->
			<div class="blog-content">
				<a href="#" class="post-tag">بهترین</a>
				<a href="#" class="post-title">قارچ سوخاری</a>
				<div class="post-meta">
					<a href="#" class="post-date">22 آبان 1398</a>
					<a href="#" class="post-author">توسط مصطفی کلانتری فرد</a>
				</div>
			</div>
		</div>

		<!-- Single Blog Post -->
		<div class="single-blog-post style-1 d-flex flex-wrap mb-30">
			<!-- Blog Thumbnail -->
			<div class="blog-thumbnail">
				<img src="img/bg-img/11.jpg" alt="">
			</div>
			<!-- Blog Content -->
			<div class="blog-content">
				<a href="#" class="post-tag">بهترین</a>
				<a href="#" class="post-title">کیک تولد شکلاتی</a>
				<div class="post-meta">
					<a href="#" class="post-date">22 آبان 1398</a>
					<a href="#" class="post-author">توسط مصطفی کلانتری فرد</a>
				</div>
			</div>
		</div>
	</div>
	<!-- ##### Treading Post Area End ##### -->

	<!-- ##### Instagram Area Start ##### -->
	
	<!-- ##### Instagram Area End ##### -->

	<!-- ##### Footer Area Start ##### -->
	<footer class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-7">
					<!-- Footer Nav -->
					<div class="footer-nav">
						
						<ul>
							{{-- <li class="active"><a href="#">صفحه نخست</a></li> --}}
							{{-- <li><a href="#">دستورالعمل ها</a></li> --}}
							<li><a href="#">درباره ما</a></li>
							<li><a href="#">بلاگ</a></li>
							<li><a href="#">تماس با ما</a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-12 col-sm-5">
					<!-- Copywrite Text -->
					<p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					{{-- <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> --}}
						 {{-- 	فارسی و راست چین شده با <i class="fa fa-heart-o" aria-hidden="true"></i> توسط <a href="http://webrubik.com" target="_blank"> Webrubik.com</a> --}}
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- ##### Footer Area Start ##### -->

	<!-- ##### All Javascript Script ##### -->
	<!-- jQuery-2.2.4 js -->
	<script src="js/jquery/jquery-2.2.4.min.js"></script>
	<!-- Popper js -->
	<script src="js/bootstrap/popper.min.js"></script>
	<!-- Bootstrap js -->
	<script src="js/bootstrap/bootstrap.min.js"></script>
	<!-- All Plugins js -->
	<script src="js/plugins/plugins.js"></script>
	<!-- Custom js -->
	<script  src="js/scripts.js"></script>
	
	{{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 <script src="https://cdn.lordicon.com/lordicon.js"></script> --}}
</body><!-- This template has been downloaded from Webrubik.com -->
</html>