@extends('template.main')
@section('container')
<div class="circle overflow-x-hidden mb-20">
    <div class="bg-[#FFE6001A] opacity-[95%] w-[22rem] h-[22rem] blur-lg rounded-full absolute top-[-8rem] left-[-8rem]"></div>
</div>

<!-- AboutSection -->
@foreach ($about as $about)
<div class="about-section text-white font-content lg:mx-32 md:mx-10 mx-8 mb-40 md:flex md:flex-row-reverse block items-center">
@if($about['id'] == 1)    
<img src="/assets/images/{{ $about['images'] }}" alt="" class="lg:mr-[10rem] md:w-[50%] lg:[70%] w-auto mx-auto md:mx-0">
@else
<img src="{{ asset('storage/'.$about['images'])}}" alt="" class="lg:mr-[10rem] md:w-[50%] lg:[70%] w-auto mx-auto md:mx-0">

@endif
<div class="content md:pt-0 pt-20">
        <h4 class="text-text">{{ $about['title'] }}</h4>
        <h2 class="text-[2.5rem] font-bold pb-4">{{ $about['subtitle'] }}</h2>
        <p class="text-[#dddddd] text-[.9rem] pb-5 md:w-[90%] w-auto">{!! $about['description'] !!}</p>
        <button href="#" class="register border-white border px-4 mt-2 py-2.5 text-button text-[.9rem] text-white rounded-[50px] items-center flex space-x-2">
            <a href="#">Read More</a>
            <ion-icon name="arrow-forward-outline" class="text-lg"></ion-icon>
        </button> 
    </div>
</div>
@endforeach

<!-- <div class="bg-[#FFE6001A] opacity-[90%] w-[28rem] h-[28rem] blur-xl rounded-full absolute mt-14 left-[-10rem]"></div> -->
<!-- EndHeroSection -->

<!-- Company Trusted -->
<div class="company-trusted text-white mb-40">
    <h1 class="text-center mb-10">Trusted Companies Woldwide</h1>
    <div class="company-icon grid lg:grid-cols-6 md:grid-cols-3 grid-cols-2 justify-items-center gap-5 lg:mx-32 md:mx-10 mx-8">
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
@endsection
