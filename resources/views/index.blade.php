@extends('template.main')
@section('container')
    <!-- HeroSection -->
    @foreach ($hero as $hero)
    @if($hero['id'] == 1)
    <div class="hero-section mt-12 text-white font-content">
        <h1 data-aos="fade-up" data-aos-duration="1000" class="md:text-[3.2rem] text-[2.6rem] text-center md:w-[80%] lg:w-[50%] w-auto font-bold md:mx-auto mx-8">Makes You Satisfied With What You <span class="text-text">Ordered</span></h1>
        <div class="hero-content md:mx-10 lg:mx-32  mx-8 mt-20 md:flex md:flex-row-reverse block">
            <img src="/assets/images/{{ $hero['images'] }}" alt="" data-aos="zoom-in-up" data-aos-duration="1200" class="md:w-[50%] lg:w-[70%] w-[100%] lg:mr-[3rem] -mt-[8rem]">
            <div class="content" data-aos="fade-right" data-aos-duration="1000">
                <h5 class="text-text">{{ $hero['title'] }}</h5>
                <h2 class="text-[2.6rem] font-bold">Hamburger<br><span class="font-normal">{{ $hero['subtitle'] }}</span></h2>
                <p class="text-[.9rem] text-[#DDDDDD] pt-3">{!! $hero['description'] !!}</p>
                <div class="button mt-10 space-x-6 flex">
                    <a href="{{ $hero['link_order'] }}" class="register bg-text px-6 py-2.5 mt-2 text-button text-[.9rem] text-white rounded-[50px]">
                        Order Now
                    </a>
                    <a href="{{ $hero['link_menu'] }}" class="register border-white border px-4 mt-2 py-2.5 text-button text-[.9rem] text-white rounded-[50px] items-center flex space-x-2">
                        <p>View Menu</p>
                        <ion-icon name="arrow-forward-outline" class="text-lg"></ion-icon>
                    </a>   
                </div>
            </div>
        </div>
    </div>
    <div class="circle overflow-x-hidden">
        <div class="bg-[#FFE6001A] opacity-[95%] w-[22rem] h-[22rem] blur-lg rounded-full absolute top-[-8rem] left-[-8rem]"></div>
        <div class="bg-[#FFE6001A] opacity-[95%] w-[25rem] h-[25rem] blur-lg rounded-full float-right  mr-[-12rem]"></div>
    </div>
    @endif
    @endforeach
    <!-- EndHeroSection -->

    <!-- Company Trusted -->
    <div class="company-trusted text-white mt-[-12rem] mb-40">
        <h1 data-aos="fade-up" data-aos-duration="1000" class="text-center mb-10">Trusted Companies Woldwide</h1>
        <div data-aos="fade-up" data-aos-duration="1200" class="company-icon grid lg:grid-cols-6 md:grid-cols-3 grid-cols-2 justify-items-center gap-5 lg:mx-32 md:mx-10 mx-8">
            @foreach ($company as $company)  
            @if($company['id'] <= '6')  
                <img src="/assets/images/{{ $company['images'] }}" alt="{{ $company['description'] }}">
            @else
                <img src="{{ asset('storage/'.$company['images'])}}" alt="{{ $company['description'] }}">
            @endif
            @endforeach
        </div>
    </div>
    <!-- End Company Trusted -->

    <!-- AboutSection -->
    @foreach ($about as $about) 
    @if($about['id'] == 1)
    <div class="about-section text-white font-content lg:mx-32 md:mx-10 mx-8 mb-40 md:flex md:flex-row-reverse block items-center">
        <img data-aos="zoom-in-up" data-aos-duration="1200" src="/assets/images/{{ $about['images'] }}" alt="" class="lg:mr-[10rem] md:w-[50%] lg:[70%] w-auto mx-auto md:mx-0">
        <div class="content md:pt-0 pt-20" data-aos="fade-right" data-aos-duration="1000">
            <h4 class="text-text">{{ $about['title'] }}</h4>
            <h2 class="text-[2.5rem] font-bold pb-4">{{ $about['subtitle'] }}</h2>
            <p class="text-[#dddddd] text-[.9rem] pb-5 md:w-[90%] w-auto">{!! $about['description'] !!}</p>
            <button href="#" class="register border-white border px-4 mt-2 py-2.5 text-button text-[.9rem] text-white rounded-[50px] items-center flex space-x-2">
                <a href="/about">Read More</a>
                <ion-icon name="arrow-forward-outline" class="text-lg"></ion-icon>
            </button> 
        </div>
    </div>

    <div class="bg-[#FFE6001A] opacity-[90%] w-[28rem] h-[28rem] blur-xl rounded-full absolute mt-14 left-[-10rem]"></div>
    @endif
    @endforeach
    <!-- EndHeroSection -->


    <!-- ShopAction -->
    @foreach ($shopaction as $shop)
    @if($shop['id'] == 1)
    <div class="shop-section md:flex block md:space-x-10 space-x-0 items-center text-white lg:mx-32 md:mx-10 mx-8 mb-40">
        <img data-aos="zoom-in-up" data-aos-duration="1200" src="/assets/images/{{ $shop['images'] }}" alt="" class="w-auto md:w-[50%] lg:w-[70%] md:mx-0 mx-auto">
        <div class="shop-content md:mt-0 pt-20" data-aos="fade-left" data-aos-duration="1000">
            <h4 class="text-text">{{ $shop['title'] }}</h4>
            <h2 class="text-[2.5rem] font-bold pb-4">{{ $shop['subtitle'] }}</h2>
            <p class="text-[#dddddd] text-[.9rem] md:w-[90%] w-auto">{!! $shop['description'] !!}</p>
            <div class="shop-button mt-8 space-x-6 flex">
                <a href="/menu" class="register bg-text px-6 py-2.5 mt-2 text-button text-[.9rem] text-white rounded-[50px]">
                    Shop Now
                </a>
                <a href="/about" class="register border-white border px-4 mt-2 py-2.5 text-button text-[.9rem] text-white rounded-[50px] items-center flex space-x-2">
                    <p>About Us</p>
                    <ion-icon name="arrow-forward-outline" class="text-lg"></ion-icon>
                </a>   
            </div>
        </div>
    </div>
    @endif
    @endforeach
    <!-- EndShopAction -->


    <!-- MenuSection -->
    <div class="menu-section text-white lg:mx-32 md:mx-10 mx-8 mb-40 font-content">
        @foreach ($menusection as $menus)   
        @if($menus['id'] == 1) 
        <div>
            <h4 data-aos="fade-in" data-aos-duration="1000" class="text-text">{{ $menus['title'] }}</h4>
            <h2 data-aos="fade-in" data-aos-duration="1000" class="text-[2.5rem] font-bold pb-4">{{ $menus['subtitle'] }}</h2>
            <div class="flex items-center">
                <p data-aos="fade-in" data-aos-duration="1000" class="text-[#dddddd] text-[.9rem] md:w-[40%] w-[70%]">{!! $menus['description'] !!}</p>
                <a data-aos="fade-left" data-aos-duration="1000" href="/menu" class="border py-2.5 font-button px-5 rounded-[50px] ml-auto">
                    View more
                </a>
            </div>
        </div>
        @endif
        @endforeach
            <div class="food-list grid lg:grid-cols-4 md:grid-cols-3 grid-cols-2 gap-20  mt-20" id="list-menu">
                @foreach ($menu as $menu)
                <div data-aos="fade-in" data-aos-duration="1000">
                    <div class="flex items-center space-x-2">
                        <img src="/assets/images/star.svg" alt=""><p>{{ $menu['rating'] }}</p>
                    </div>
                    @if($menu['id'] <= '8')
                    <img src="/assets/images/{{ $menu['image'] }}" alt="" class="w-[15rem] h-[8rem]">
                    @else
                    <img src="{{ asset('storage/'.$menu['image'])}}" alt="" class="w-[15rem] h-[8rem]">
                    @endif
                    <div class="pt-5">
                        <h4 class="text-[1.15rem] font-medium">{{ $menu['title'] }}</h4>
                        <div class="flex items-center pt-2">
                            <p class="text-[.9rem] text-[#dddddd]">{{ $menu['topping'] }}</p>
                            <p class="ml-auto font-medium">$ {{ $menu['price'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    </div>
    <!-- EndMenuSection -->


    <!-- Section 4 -->
    <div class="border-[1.8px] border-white lg:mx-52 md:mx-20 mx-10 w-auto text-center text-white py-20 px-5 font-content rounded-xl mb-40">
        <h4 data-aos="fade-up" data-aos-duration="1000" class="text-text">Order Now</h4>
        <h1 data-aos="fade-up" data-aos-duration="1000" class="text-[2.5rem] font-bold">Order Now and Take Away</h1>
        <p data-aos="fade-up" data-aos-duration="1000" class="text-[.9rem] text-[#dddddd] lg:w-[60%] w-auto mx-auto pt-3 pb-8">Order and get the prize, we will give a gift to those of you who are lucky to get something interesting from us</p>
        <a data-aos="fade-in" data-aos-duration="1000" href="menu.html" class="register bg-text px-6 py-2.5 text-button text-[.9rem] text-white rounded-[50px]">
            Order Now
        </a>
    </div>
    <!-- End Section 4 -->
@endsection