@extends('layouts.app')

@section('content')
         <!-- Breadcrumb -->
      <section
        class="pt-[235px] pb-[100px]"
        style="
          background: url('{{ asset('/') }}frontend/assets/images/bg/brcm.jpg') no-repeat center
            center/cover;
        "
      >
        <div class="max-w-xs mx-auto text-center">
          <h1 class="text-5xl text-interface-100 font-semibold mb-2.5">Services</h1>
          <ul class="flex justify-center items-center space-x-2">
            <li class="text-lg font-medium text-interface-100">Home</li>
            <li>
              <svg
                width="24"
                height="25"
                viewBox="0 0 24 25"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M10 7.5L14 12.5L10 17.5"
                  stroke="#04091E"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </li>
            <li class="text-lg font-medium text-interface-100">Services</li>
          </ul>
        </div>
      </section>
      <!-- Breadcrumb End -->

<!-- Services -->
<section class="py-120">
  <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">

    {{-- Section Header --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 lg:gap-16 place-items-center mb-14">
      <div class="lg:col-span-2">
        <h2 class="text-interface-500 font-bold text-4xl leading-normal lg:text-5xl capitalize lg:leading-snug">
          Expertise
          <span class="relative">
            <span class="relative z-20">Service!</span>
            <svg class="absolute -left-1 z-0 -top-2" width="206" height="75" viewBox="0 0 206 75" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M27.1282 14.4113C66.5337 9.03391 151.827 4.45371 187.897 15.4254C226.745 27.2424 180.759 53.1141 129.951 64.6499C77.3856 76.585 18.356 73.496 6.50757 58.6571C-13.495 33.6061 61.3156 8.13765 120.395 3.11796" stroke="#DAED1A" stroke-width="6" stroke-linecap="round"/>
            </svg>
            Let's check it out.
          </span>
        </h2>
      </div>
      <div class="lg:col-span-3">
        <p class="text-interface-200 text-xl">
          We put your ideas and thus your wishes in the form of a unique
          web project that inspires you and your customers. We've expert
          team to solve your problems.
        </p>
      </div>
    </div>

    {{-- Services Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7 pb-10 lg:pb-16">

      @forelse($services as $service)
      <article class="relative transition duration-200 cursor-pointer px-7 py-8 bg-white group hover:bg-pblue-500 shadow-customThree rounded-custom overflow-hidden">

        <h3 class="mb-6 font-semibold text-2xl text-interface-100 group-hover:text-white">
          {{ $service->title }}
        </h3>

        <p class="pb-6 text-interface-200 group-hover:text-white text-lg">
          {{ $service->description }}
        </p>

        <a href="#"
           class="underline flex relative z-10 items-center text-interface-100 group-hover:text-white">
          <span>Learn more</span>
          <svg class="stroke-interface-100 group-hover:stroke-white" width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.10156 18.0748L17.2491 7.92383" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M7.10156 7.92383H17.2491V18.0748" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>

        <img src="{{ asset('assets/images/bg/services-circle.png') }}" class="absolute top-8 -right-12" alt="">

      </article>
      @empty
      {{-- কোনো service না থাকলে --}}
      <div class="col-span-3 text-center py-10">
        <p class="text-interface-200 text-xl">No services available at the moment.</p>
      </div>
      @endforelse

    </div>
  </div>
</section>
<!-- Services End -->
@endsection