@extends('layouts.app')

@section('content')
    <!-- Breadcrumb -->
        <section class="pt-[235px] pb-[100px]" style="
          background: url('{{ asset('/') }}frontend/assets/images/bg/brcm.jpg') no-repeat center
            center/cover;
        ">
            <div class="max-w-lg mx-auto text-center">
                <h1 class="text-5xl text-interface-100 font-semibold mb-2.5">
                    Portolio
                </h1>
                <ul class="flex justify-center items-center space-x-2">
                    <li class="text-lg font-medium text-interface-100">Home</li>
                    <li>
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 7.5L14 12.5L10 17.5" stroke="#04091E" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </li>
                    <li class="text-lg font-medium text-interface-100">
                        Portolio Grid
                    </li>
                </ul>
            </div>
        </section>
        <!-- Breadcrumb End -->

        <!-- Portfolio Grid -->
    <section class="py-20 lg:py-120 port-grid-two relative bg-white">
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8 relative z-10">
            <div class="max-w-2xl mx-auto mb-14 text-center">
                <h2 class="text-4xl leading-normal xl:text-5xl xl:leading-snug font-bold text-interface-100 mb-4">
                    Let’s Check my
                    <span class="relative"><span class="relative z-10">Best Works</span>
                        <svg class="absolute right-0 bottom-1" width="243" height="11" viewBox="0 0 243 11" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 7.22656C45.1729 4.20807 151.615 -0.017823 240 7.22656" stroke="#FFD233"
                                stroke-width="6" stroke-linecap="round"></path>
                        </svg>
                    </span>
                </h2>
                <p class="text-interface-200 text-xl mb-5">
                    Donec dignissim, metus sit amet suscipit mauris vul putate odio,
                    quis cursus nunc urna Aliqum tell us. Quisque hendrerit ..
                </p>
            </div>
            <!-- Grid -->
            <div class="grid grid-cols-1 gap-y-5 md:grid-cols-2 lg:grid-cols-3 md:gap-5 lg:gap-7">
                <!-- Single Item -->
                 @foreach($portfolios as $index => $portfolio)
                <div class="relative group min-h-[370px] rounded-lg cursor-pointer overflow-hidden portfolio-item" style="
                    background: url('{{ asset($portfolio->image) }}') no-repeat
                      center center/cover;
                  ">
                    <div
                        class="bg-interface-100 bg-opacity-0 transition-opacity duration-500 ease-in-out absolute w-full h-full group-hover:bg-opacity-80 rounded-lg flex flex-col items-center justify-center">
                        <div
                            class="transform transition-transform duration-700 ease-in-out translate-y-24 opacity-0 invisible group-hover:visible group-hover:opacity-100 group-hover:translate-y-0 max-w-xs flex flex-col items-center justify-center text-center">
                            <h3 class="text-white">
                                <a href="portfolio-details.html" class="text-3xl font-semibold text-white">
                                    {{ $portfolio->title }}
                                    </a>
                            </h3>
                            <span class="flex items-center gap-2 text-white">
                                <span class="w-2 h-2 rounded-full inline-block bg-new-500"></span>
                                {{ $portfolio->sub_title }}</span>
                            <a href="{{ $portfolio->pro_link }}"
                                target="_blank"
                                class="grid place-content-center  mt-6 px-3 py-2.5 border border-new-500 text-new-500 text-sm rounded hover:border-transparent hover:bg-new-500 hover:text-interface-100 transition ">View
                                Project
                            </a>
                        </div>
                    </div>
                </div>
           @endforeach
            </div>
        </div>
        <div class="hidden xl:block">
            <img src="{{ asset('/') }}frontend/assets/images/portfolio-grid/circle.png" class="absolute top-[60%] left-0" alt="">
            <img src="{{ asset('/') }}frontend/assets/images/portfolio-grid/gr-circle.png" class="absolute right-0 top-0" alt="">
        </div>
    </section>
@endsection