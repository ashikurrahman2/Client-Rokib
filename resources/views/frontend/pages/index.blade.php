@extends('layouts.app')

@section('content')
    <!-- Hero Start -->
    @foreach($sliders as $slider)
      <section
        class="pt-44"
        style="
          background: url('{{ asset('/') }}frontend/assets/images/hero/hero-three/hero-three-bg.jpg')
            no-repeat center center/cover;
        "
      >
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
          <div class="flex flex-col gap-10 lg:flex-row lg:items-center pb-20">
            <!-- Left -->
            <div class="lg:w-1/2">
              <h1
                class="text-5xl leading-snug xl:text-[66px] mb-8 xl:leading-normal font-bold text-white"
              >
                Hey, I am <br />
                 {{ $slider->heading_text }},<br />
                <span
                  class="inline-block"
                  style="
                    background: url('{{ asset('/') }}frontend/assets/images/hero/hero-one/wide-line.svg')
                      no-repeat bottom;
                  "
                >
                   {{ $slider->caption_text }}</span
                >
              </h1>
              <p class="text-2xl text-borderl-500 mb-4">
                Agency work with top rated talented people provide qulaity
                services.
              </p>
              <div class="flex items-center gap-8 mt-10">
                <a
                  href="#"
                  class="bg-new-500 text-interface-100 px-6 py-4 rounded-lg inline-flex justify-center items-center hover:bg-new-600 font-medium transition-all"
                >
                  <span>Hire Me</span>
                  <svg
                    width="24"
                    height="25"
                    viewBox="0 0 24 25"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M14 16.5L18 12.5M18 12.5L14 8.5M18 12.5L6 12.5"
                      stroke="#04091E"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </a>
                <a href="{{ $slider->video_url }}" class="flex video-popup items-center gap-5">
                  <span
                    class="w-[60px] pulsing-dev h-[60px] rounded-full grid place-items-center border border-new-500"
                  >
                    <svg
                      width="18"
                      height="22"
                      viewBox="0 0 18 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M0 18.4719V3.52806C0 1.14774 2.63921 -0.284513 4.63497 1.01273L16.1303 8.48467C17.9503 9.6677 17.9503 12.3323 16.1303 13.5153L4.63496 20.9873C2.63921 22.2845 0 20.8523 0 18.4719Z"
                        fill="#DAED1A"
                      />
                    </svg>
                  </span>
                  <span
                    ><span class="text-white uppercase text-lg font-medium"
                      >WATCH</span
                    >
                    <br />
                    <span class="text-base font-medium text-interface-200"
                      >Intro Video</span
                    ></span
                  >
                </a>
              </div>
              <div class="pt-14">
                <p class="text-base text-interface-200">
                  Over
                  <span class="text-new-500 font-semibold text-xl"
                    >50,000+ client</span
                  >
                  all over the world.
                </p>
              </div>
            </div>
            <!-- Right -->
            <div class="lg:w-1/2">
              <div>
                <img src="{{ asset($slider->slider_image) }}" alt="" />
              </div>
            </div>
          </div>
        </div>
      </section>
      @endforeach
      <!-- Hero End -->

            <!-- Social Link -->
      <section class="py-8">
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-7">
            <div class="group">
              <a
                href="{{ $setting->facebook }}"
                class="group-hover:bg-new-500 group-hover:border-transparent transition-all flex space-x-3 p-8 rounded-xl border border-dashed bg-[#0A1429] border-[#3A3E4E] items-center justify-center"
              >
                <svg
                  class="fill-white group-hover:fill-interface-500"
                  width="40"
                  height="40"
                  viewBox="0 0 40 40"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_537_18858)">
                    <path
                      d="M14.4272 32.1624C14.1491 32.2142 14.0276 32.3447 14.0625 32.5529C14.0971 32.7611 14.2534 32.8307 14.5311 32.7611C14.8092 32.6918 14.9306 32.57 14.8957 32.3965C14.8612 32.2057 14.705 32.1275 14.4272 32.1624Z"
                    />
                    <path
                      d="M12.943 32.3703C12.6652 32.3703 12.5264 32.4652 12.5264 32.6566C12.5264 32.8823 12.674 32.9775 12.969 32.9428C13.2469 32.9428 13.3859 32.8473 13.3859 32.6566C13.3859 32.4312 13.2382 32.3353 12.943 32.3703Z"
                    />
                    <path
                      d="M10.9119 32.2921C10.8425 32.4831 10.9555 32.613 11.2504 32.6828C11.5108 32.7865 11.6758 32.7346 11.7451 32.5265C11.7973 32.3358 11.6843 32.1972 11.4066 32.1098C11.1461 32.0406 10.9813 32.1005 10.9119 32.2921Z"
                    />
                    <path
                      d="M37.7994 2.20032C36.3323 0.733532 34.5663 0 32.4999 0H7.49995C5.43417 0 3.66748 0.733532 2.20032 2.20032C0.733532 3.66738 0 5.43408 0 7.49995V32.5002C0 34.5662 0.733532 36.3327 2.20032 37.7995C3.66738 39.2666 5.43417 40.0001 7.49995 40.0001H13.3333C13.7149 40.0001 14.0016 39.987 14.1925 39.9614C14.3833 39.9351 14.5741 39.8222 14.7652 39.6224C14.9564 39.4229 15.0516 39.132 15.0516 38.7502C15.0516 38.6984 15.0471 38.1075 15.0385 36.9791C15.0296 35.8504 15.0254 34.9564 15.0254 34.2966L14.4264 34.4008C14.0445 34.4701 13.5627 34.5007 12.981 34.4919C12.3996 34.4832 11.7962 34.4226 11.1713 34.3097C10.546 34.1967 9.96461 33.9364 9.42636 33.5287C8.88839 33.1204 8.50649 32.5867 8.28073 31.9271L8.02023 31.3278C7.84665 30.9289 7.57338 30.486 7.20005 30.0003C6.82671 29.5139 6.44919 29.184 6.06728 29.0104L5.88494 28.8802C5.76354 28.7934 5.65071 28.6888 5.54645 28.5674C5.44238 28.4456 5.3643 28.324 5.31222 28.2028C5.26014 28.0811 5.30337 27.9812 5.44238 27.9028C5.58139 27.8249 5.83286 27.7862 6.19762 27.7862L6.71826 27.8642C7.0656 27.9335 7.49503 28.1416 8.00746 28.4891C8.51953 28.8362 8.94047 29.2875 9.27039 29.8429C9.6699 30.5549 10.1512 31.0971 10.7157 31.4704C11.2798 31.8441 11.8485 32.0308 12.4213 32.0308C12.9941 32.0308 13.4889 31.9873 13.9057 31.9009C14.3221 31.8139 14.7128 31.6833 15.0775 31.5098C15.2338 30.3467 15.6592 29.4521 16.3534 28.8272C15.3639 28.7229 14.4743 28.5669 13.6841 28.3584C12.8944 28.1498 12.0783 27.8115 11.2364 27.3426C10.3941 26.8738 9.69544 26.2926 9.13987 25.5977C8.58438 24.9029 8.1285 23.9915 7.77286 22.8633C7.41704 21.7346 7.23909 20.4323 7.23909 18.9568C7.23909 16.8563 7.9251 15.0678 9.29657 13.5922C8.65407 12.0124 8.71472 10.2418 9.47872 8.27982C9.98221 8.12348 10.7289 8.24078 11.7184 8.63145C12.708 9.02238 13.4326 9.35668 13.8929 9.63406C14.3531 9.91152 14.7219 10.1461 14.9997 10.3373C16.6146 9.88589 18.2812 9.66023 19.9998 9.66023C21.7184 9.66023 23.3852 9.88589 25.0002 10.3373L25.9897 9.71232C26.6671 9.29547 27.4656 8.91357 28.3858 8.5665C29.306 8.21935 30.0089 8.12376 30.4953 8.2801C31.2762 10.2421 31.3461 12.0127 30.7032 13.5924C32.0746 15.0681 32.7608 16.8565 32.7608 18.9571C32.7608 20.4329 32.5829 21.7395 32.227 22.8764C31.8715 24.0135 31.4117 24.9253 30.847 25.611C30.2829 26.2969 29.5797 26.8737 28.7378 27.3428C27.8957 27.8114 27.0797 28.1503 26.2897 28.3582C25.4997 28.5667 24.6101 28.7234 23.6205 28.8276C24.5227 29.6086 24.974 30.8409 24.974 32.5252V38.7494C24.974 39.0446 25.0171 39.2832 25.1039 39.4655C25.1913 39.6477 25.3299 39.7732 25.5208 39.8432C25.7126 39.9125 25.881 39.9559 26.029 39.9731C26.1769 39.9905 26.3892 39.9993 26.667 39.9993H32.5003C34.5661 39.9993 36.3329 39.2657 37.7993 37.7987C39.2664 36.3316 39.9999 34.5648 39.9999 32.499V7.49995C39.9997 5.43408 39.2662 3.66711 37.7994 2.20032Z"
                    />
                    <path
                      d="M7.91658 29.1155C7.79517 29.202 7.8125 29.3409 7.96875 29.5319C8.1426 29.7054 8.28134 29.7315 8.38559 29.6099C8.507 29.5234 8.48967 29.3845 8.33315 29.1931C8.15966 29.0371 8.02083 29.011 7.91658 29.1155Z"
                    />
                    <path
                      d="M7.05753 28.4626C7.00554 28.5844 7.06629 28.6886 7.23987 28.7751C7.3786 28.8622 7.4918 28.8451 7.57836 28.7233C7.63035 28.6015 7.5696 28.4973 7.39602 28.4102C7.22244 28.358 7.10961 28.3755 7.05753 28.4626Z"
                    />
                    <path
                      d="M8.72426 30.1304C8.56783 30.2169 8.56783 30.3736 8.72426 30.599C8.8805 30.825 9.02781 30.8856 9.16691 30.7812C9.32325 30.6596 9.32325 30.4946 9.16691 30.2862C9.02818 30.0611 8.8805 30.0084 8.72426 30.1304Z"
                    />
                    <path
                      d="M9.63557 31.3014C9.47923 31.4406 9.51371 31.6049 9.73973 31.7965C9.94779 32.0044 10.1215 32.0306 10.2604 31.8739C10.3994 31.7354 10.3646 31.5706 10.1562 31.3796C9.94815 31.1716 9.77448 31.1453 9.63557 31.3014Z"
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0_537_18858">
                      <rect width="40" height="40" />
                    </clipPath>
                  </defs>
                </svg>

                <span
                  class="text-white transition-all group-hover:text-interface-100 text-2xl font-semibold"
                  >Github</span
                >
              </a>
            </div>
          
            <div class="group">
              <a
                href="{{ $setting->linkedin }}"
                class="group-hover:bg-new-500 group-hover:border-transparent transition-all flex space-x-3 p-8 rounded-xl border border-dashed bg-[#0A1429] border-[#3A3E4E] items-center justify-center"
              >
                <svg
                  class="fill-white group-hover:fill-interface-100"
                  width="40"
                  height="40"
                  viewBox="0 0 40 40"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_537_18883)">
                    <path
                      d="M34.5455 0H5.45455C4.00791 0 2.62053 0.574674 1.5976 1.5976C0.574674 2.62053 0 4.00791 0 5.45455L0 34.5455C0 35.9921 0.574674 37.3795 1.5976 38.4024C2.62053 39.4253 4.00791 40 5.45455 40H34.5455C35.9921 40 37.3795 39.4253 38.4024 38.4024C39.4253 37.3795 40 35.9921 40 34.5455V5.45455C40 4.00791 39.4253 2.62053 38.4024 1.5976C37.3795 0.574674 35.9921 0 34.5455 0ZM13.6364 31.6545C13.6367 31.7655 13.6151 31.8754 13.5728 31.9779C13.5306 32.0805 13.4685 32.1737 13.3902 32.2522C13.3119 32.3308 13.2188 32.3931 13.1164 32.4356C13.0139 32.4781 12.9041 32.5 12.7932 32.5H9.2C9.08889 32.5003 8.97882 32.4786 8.8761 32.4363C8.77339 32.3939 8.68007 32.3316 8.6015 32.253C8.52294 32.1745 8.46067 32.0812 8.41829 31.9784C8.37591 31.8757 8.35425 31.7657 8.35455 31.6545V16.5909C8.35455 16.3667 8.44362 16.1516 8.60217 15.9931C8.76073 15.8345 8.97577 15.7455 9.2 15.7455H12.7932C13.017 15.7461 13.2315 15.8354 13.3895 15.9939C13.5476 16.1524 13.6364 16.3671 13.6364 16.5909V31.6545ZM10.9955 14.3182C10.3212 14.3182 9.66209 14.1182 9.10147 13.7436C8.54084 13.3691 8.10389 12.8366 7.84587 12.2137C7.58784 11.5908 7.52033 10.9053 7.65187 10.244C7.78341 9.58271 8.10809 8.97527 8.58486 8.4985C9.06163 8.02173 9.66908 7.69705 10.3304 7.5655C10.9917 7.43396 11.6771 7.50148 12.3001 7.7595C12.923 8.01753 13.4554 8.45448 13.83 9.0151C14.2046 9.57572 14.4045 10.2348 14.4045 10.9091C14.4045 11.8132 14.0454 12.6804 13.406 13.3197C12.7667 13.959 11.8996 14.3182 10.9955 14.3182ZM32.4182 31.7136C32.4185 31.8158 32.3986 31.917 32.3596 32.0114C32.3207 32.1059 32.2634 32.1917 32.1912 32.2639C32.119 32.3362 32.0332 32.3934 31.9387 32.4324C31.8443 32.4713 31.7431 32.4912 31.6409 32.4909H27.7773C27.6751 32.4912 27.5739 32.4713 27.4795 32.4324C27.385 32.3934 27.2992 32.3362 27.227 32.2639C27.1548 32.1917 27.0975 32.1059 27.0586 32.0114C27.0196 31.917 26.9997 31.8158 27 31.7136V24.6568C27 23.6023 27.3091 20.0386 24.2432 20.0386C21.8682 20.0386 21.3841 22.4773 21.2886 23.5727V31.7227C21.2887 31.9269 21.2083 32.1229 21.065 32.2684C20.9217 32.4138 20.7269 32.497 20.5227 32.5H16.7909C16.6889 32.5 16.588 32.4799 16.4938 32.4408C16.3996 32.4017 16.3141 32.3444 16.2421 32.2722C16.1701 32.2 16.1131 32.1143 16.0742 32.02C16.0354 31.9257 16.0156 31.8247 16.0159 31.7227V16.525C16.0156 16.423 16.0354 16.322 16.0742 16.2277C16.1131 16.1334 16.1701 16.0477 16.2421 15.9755C16.3141 15.9033 16.3996 15.846 16.4938 15.8069C16.588 15.7678 16.6889 15.7477 16.7909 15.7477H20.5227C20.7289 15.7477 20.9266 15.8296 21.0723 15.9754C21.2181 16.1212 21.3 16.3189 21.3 16.525V17.8386C22.1818 16.5136 23.4886 15.4955 26.2773 15.4955C32.4545 15.4955 32.4136 21.2636 32.4136 24.4318L32.4182 31.7136Z"
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0_537_18883">
                      <rect width="40" height="40" />
                    </clipPath>
                  </defs>
                </svg>

                <span
                  class="text-white transition-all group-hover:text-interface-100 text-2xl font-semibold"
                  >Linkedin</span
                >
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- Social Link End -->

  <!-- Services -->
<section class="py-120">
  <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">

    {{-- Section Header --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-5 gap-5 xl:gap-10 lg:gap-16 place-items-center mb-14">
      <div class="xl:col-span-2">
        <h2 class="text-white font-bold lg:text-5xl text-4xl capitalize leading-snug">
          Expertise
          <span class="relative">
            <span class="relative z-20">Service!</span>
            <svg class="absolute -left-1 z-0 -top-2 hidden md:block" width="206" height="75" viewBox="0 0 206 75" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M27.1282 14.4113C66.5337 9.03391 151.827 4.45371 187.897 15.4254C226.745 27.2424 180.759 53.1141 129.951 64.6499C77.3856 76.585 18.356 73.496 6.50757 58.6571C-13.495 33.6061 61.3156 8.13765 120.395 3.11796" stroke="#DAED1A" stroke-width="6" stroke-linecap="round"/>
            </svg>
            Let's check it out.
          </span>
        </h2>
      </div>
      <div class="xl:col-span-3">
        <p class="text-white text-xl">
          We put your ideas and thus your wishes in the form of a unique
          web project that inspires you and your customers. We've expert
          team to solve your problems.
        </p>
      </div>
    </div>

    {{-- Swiper Slider --}}
    <div class="swiper devServiceSlider">
      <div class="swiper-wrapper pb-10 lg:pb-16">

        @forelse($services as $service)
        <article class="swiper-slide">
          <div class="relative transition duration-200 cursor-pointer border border-transparent hover:border-new-500 bg-interface-600 px-7 py-8 group shadow-customThree rounded-custom">

            <h3 class="mb-6 font-semibold text-2xl text-white">
              {{ $service->title }}
            </h3>

            <p class="pb-6 text-white text-base">
              {{ $service->description }}
            </p>

            <a href="#"
               class="underline flex relative group-hover:text-new-500 z-10 items-center text-white">
              <span>Learn more</span>
              <svg class="stroke-white group-hover:stroke-new-500" width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.10156 18.0748L17.2491 7.92383" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M7.10156 7.92383H17.2491V18.0748" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>

            <img src="{{ asset('assets/images/bg/services-circle.png') }}"
                 class="absolute top-5 -right-12 opacity-0 group-hover:opacity-100 transition-opacity" alt="">
          </div>
        </article>
        @empty
        <div class="swiper-slide">
          <div class="bg-interface-600 px-7 py-8 rounded-custom text-center">
            <p class="text-white text-xl">No services available at the moment.</p>
          </div>
        </div>
        @endforelse

      </div>
      {{-- Pagination --}}
      <div class="service-pagination dev-style swiper-pagination"></div>
    </div>

  </div>
</section>
<!-- Services End -->

       <!-- Resume -->
<section class="pb-120">
  <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
    <div class="bg-interface-600 rounded-xl border border-[#494C5F] p-8 xl:p-14">
      <h2 class="text-white text-4xl font-medium">Resume</h2>

      <!-- About -->
      <div class="grid lg:grid-cols-3 gap-5 xl:gap-10 items-center py-12 md:py-20">

        {{-- Left Col - Name, Designation, Experience, Cover Letter --}}
        <div class="pb-4">
          <div class="flex flex-col gap-y-5 md:flex-row justify-between pb-5 border-b border-[#494C5F]">
            <div>
              <h3 class="text-2xl text-white font-semibold mb-2">
                {{ $ressume->name ?? 'N/A' }}
              </h3>
              <span class="text-white text-lg">
                {{ $ressume->designation ?? 'N/A' }}
              </span>
            </div>
            <div class="flex space-x-2 items-center">
              <h3 class="text-7xl leading-none text-new-500 font-bold">
                {{ $ressume->total_exp ?? '0' }}
              </h3>
              <p class="text-lg text-white font-medium">
                Years <br/> Experience
              </p>
            </div>
          </div>
          <p class="text-white text-lg mt-5 leading-normal">
            {{ $ressume->cover_letter ?? '' }}
          </p>
        </div>

        {{-- Middle Col - Image --}}
        <div class="mx-auto">
          <img src="{{ asset('assets/images/about/male.png') }}"
               class="w-full"
               alt="{{ $ressume->name ?? '' }}"/>
        </div>

        {{-- Right Col - Current & Previous Designation + Company --}}
        <div>
          <ul class="divide-y divide-[#494C5F]">

            {{-- Current Position --}}
            <li class="flex justify-between items-center pl-4 py-5">
              <div>
                <h4 class="text-xl font-semibold text-white mb-4">
                  {{ $ressume->currentdesignation ?? 'N/A' }}
                </h4>
                <span class="text-white text-lg">{{ $ressume->company_name ?? 'N/A' }}</span>
              </div>
              <div>
                @if(isset($ressume->current_status))
                  @if($ressume->current_status == 'employed')
                    <span class="bg-new-500 px-3 py-2 rounded-md text-white">Current</span>
                  @elseif($ressume->current_status == 'unemployed')
                    <span class="border border-new-500 text-new-500 px-3 py-2 rounded-md">Open to Work</span>
                  @elseif($ressume->current_status == 'freelance')
                    <span class="border border-new-500 text-new-500 px-3 py-2 rounded-md">Freelance</span>
                  @endif
                @endif
              </div>
            </li>

            {{-- Designation --}}
            <li class="flex justify-between items-center pl-4 py-5">
              <div>
                <h4 class="text-xl font-semibold text-white mb-4">
                  {{ $ressume->designation ?? 'N/A' }}
                </h4>
                <span class="text-white text-sm">{{ $ressume->company_name ?? 'N/A' }}</span>
              </div>
              <div class="shrink-0">
                <span class="border border-new-500 text-new-500 px-3 py-2 rounded-md">
                  {{ $ressume->created_at?->format('Y') ?? '' }}
                </span>
              </div>
            </li>

            {{-- Company --}}
            <li class="flex justify-between items-center pl-4 py-5">
              <div>
                <h4 class="text-xl font-semibold text-white mb-4">
                  {{ $ressume->company_name ?? 'N/A' }}
                </h4>
                {{-- <span class="text-white text-sm">Company</span> --}}
              </div>
              <div class="shrink-0">
                <span class="border border-new-500 text-new-500 px-3 py-2 rounded-md">
                  {{ $ressume->total_exp ?? '0' }} Yrs
                </span>
              </div>
            </li>

          </ul>
        </div>
      </div>

 <!-- Skills -->
<div class="grid lg:grid-cols-2 gap-x-20 gap-y-10">

    {{-- Left Col - Skills --}}
    <div>
        <div class="border-b border-[#494C5F] pb-3">
            <h3 class="text-borderl-500 text-2xl">Skills</h3>
        </div>
        <ul class="mt-7 flex flex-wrap gap-3">
            @forelse($skills as $skill)
                <li>
                    <a href="#" class="bg-[#16213B] block px-4 py-3 hover:bg-new-500 hover:text-interface-100 transition rounded-md text-white text-xl">
                        {{ $skill->skill_name }}
                    </a>
                </li>
            @empty
                <li>
                    <p class="text-white text-xl">No skills found.</p>
                </li>
            @endforelse
        </ul>
    </div>

</div>

      <!-- Freelance Clients -->
      {{-- <div class="pt-16">
        <div class="border-b border-[#494C5F] pb-3">
          <h3 class="text-borderl-500 font-semibold text-2xl">Freelance Clients</h3>
        </div>
        <div class="grid items-center grid-cols-2 gap-6 md:grid-cols-3 xl:grid-cols-6 xl:divide-x divide-white divide-opacity-20 mt-10 pb-8">
          <a href="#" class="px-7">
            <img src="{{ asset('frontend/assets/images/clients/f-c-2.png') }}" class="opacity-30 hover:opacity-100 transition" alt="Logo"/>
          </a>
          <a href="#" class="px-7">
            <img src="{{ asset('assets/images/clients/f-c-2.png') }}" class="opacity-30 hover:opacity-100 transition" alt="Logo"/>
          </a>
          <a href="#" class="px-7">
            <img src="{{ asset('assets/images/clients/f-c-3.png') }}" class="opacity-30 hover:opacity-100 transition" alt="Logo"/>
          </a>
          <a href="#" class="px-7">
            <img src="{{ asset('assets/images/clients/f-c-4.png') }}" class="opacity-30 hover:opacity-100 transition" alt="Logo"/>
          </a>
          <a href="#" class="px-7">
            <img src="{{ asset('assets/images/clients/f-c-5.png') }}" class="opacity-30 hover:opacity-100 transition" alt="Logo"/>
          </a>
          <a href="#" class="px-7">
            <img src="{{ asset('assets/images/clients/f-c-1.png') }}" class="opacity-30 hover:opacity-100 transition" alt="Logo"/>
          </a>
        </div>
      </div> --}}

    </div>
  </div>
</section>
      <!-- Resume End --> 

            <!-- Grid Masonry -->
      <section class="pb-120">
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
          <div class="max-w-xl mx-auto mb-10 text-center">
            <h2 class="text-4xl leading-normal xl:text-5xl xl:leading-snug font-bold text-white mb-4">
              Let’s Check my
              <span class="relative z-30"
                ><span class="relative z-10"> Projects</span>
                <svg
                  class="absolute right-0 bottom-1"
                  width="200"
                  height="10"
                  viewBox="0 0 243 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M3 7C45.1729 3.98151 151.615 -0.244386 240 7"
                    stroke="#FFD233"
                    stroke-width="6"
                    stroke-linecap="round"
                  />
                </svg>
              </span>
            </h2>
            <p class="text-white text-xl mb-5">
              Donec dignissim, metus sit amet suscipit mauris vul putate odio,
              quis cursus nunc urna Aliqum tell us. Quisque hendrerit ..
            </p>
          </div>
        
          <!-- Grid -->
          <div
            class="grid grid-cols-1 gap-y-5 md:grid-cols-2 lg:grid-cols-3 md:gap-5 lg:gap-7"
          >
            <!-- Single Item -->
               @foreach($portfolios as $index => $portfolio)
            <div
              class="relative group min-h-[370px] rounded-lg cursor-pointer overflow-hidden"
              style="
                background: url('{{asset($portfolio->image)}}') no-repeat
                  center center/cover;
              "
            >
              <div
                class="bg-interface-100 bg-opacity-0 transition-opacity duration-500 ease-in-out absolute w-full h-full group-hover:bg-opacity-80 rounded-lg flex flex-col items-center justify-center"
              >
                <div
                  class="transform transition-transform duration-700 ease-in-out translate-y-24 opacity-0 invisible group-hover:visible group-hover:opacity-100 group-hover:translate-y-0 max-w-xs flex flex-col items-center justify-center text-center"
                >
                  <h3 class="text-white">
                    <a
                      href="portfolio-details.html"
                      class="text-3xl font-semibold text-white"
                      >{{$portfolio->title}}</a
                    >
                  </h3>
                  <span class="flex items-center gap-2 text-white">
                    <span
                      class="w-2 h-2 rounded-full inline-block bg-new-500"
                    ></span>
                    {{$portfolio->sub_title}}</span
                  >
                  <a
                    href="{{$portfolio->pro_link}}"
                      target="_blank"
                    class="grid place-content-center transition mt-6 px-3 py-2 border border-new-500 text-new-500 text-sm rounded"
                    >View Project
                  </a>
                </div>
              </div>
            </div>
              @endforeach
          </div>
        </div>
      </section>
      <!-- Grid Masonry End -->

           <!-- CTA  -->
      {{-- <section
        class="py-20"
        style="
          background: url('{{ asset('/') }}frontend/assets/images/bg/dev-cta.jpg') no-repeat center
            center/cover;
        "
      >
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
          <div
            class="flex flex-col gap-5 xl:gap-10 lg:flex-row justify-between"
          >
            <div class="xl:w-6/12">
              <h2 class="text-4xl leading-normal lg:text-5xl lg:leading-snug font-bold text-white">
                Have a project in mind? <br />
                Let’s get to work.👋📫
              </h2>
            </div>
            <div class="xl:w-5/12">
              <div class="max-w-lg">
                <p class="text-2xl text-interface-300 mb-8">
                  I am product designer, who are excited about unique ideas and
                  help.
                </p>
                <a
                  href="contact-us.html"
                  class="bg-new-500 group inline-flex py-4 space-x-2 px-7 rounded-xl text-interface-500 text-lg"
                >
                  <span>Download CV</span>
                  <svg
                  class="transform transition  group-hover:translate-y-2"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M12.0008 3.5625C11.7939 3.56255 11.5955 3.64474 11.4493 3.79101C11.303 3.93728 11.2208 4.13565 11.2208 4.3425V13.2409L8.23783 10.2579C8.16539 10.1855 8.07939 10.1281 7.98475 10.0889C7.89011 10.0497 7.78867 10.0295 7.68623 10.0295C7.47935 10.0295 7.28095 10.1117 7.13467 10.258C6.9884 10.4043 6.90623 10.6027 6.90625 10.8096C6.90627 11.0165 6.98847 11.2149 7.13477 11.3612L11.4491 15.675C11.5955 15.8212 11.7939 15.9034 12.0008 15.9034C12.2076 15.9034 12.4061 15.8212 12.5524 15.675L16.8668 11.3604C17.0131 11.2142 17.0953 11.0158 17.0953 10.8089C17.0953 10.602 17.0131 10.4036 16.8669 10.2573C16.7206 10.111 16.5222 10.0288 16.3153 10.0288C16.1084 10.0287 15.91 10.1109 15.7637 10.2572L12.7808 13.2409V4.3425C12.7807 4.13565 12.6985 3.93728 12.5523 3.79101C12.406 3.64474 12.2076 3.56255 12.0008 3.5625Z"
                      fill="#04091E"
                    />
                    <path
                      d="M4.3425 13.876C4.13563 13.876 3.93723 13.9582 3.79096 14.1044C3.64468 14.2507 3.5625 14.4491 3.5625 14.656V17.2262C3.56344 18.0776 3.90208 18.8939 4.50411 19.4959C5.10615 20.098 5.92241 20.4366 6.77381 20.4375H17.2262C18.0776 20.4366 18.8939 20.098 19.4959 19.4959C20.0979 18.8939 20.4366 18.0776 20.4375 17.2262V14.656C20.4375 14.5535 20.4173 14.4521 20.3781 14.3575C20.3389 14.2628 20.2815 14.1769 20.209 14.1044C20.1366 14.032 20.0506 13.9746 19.956 13.9354C19.8614 13.8962 19.7599 13.876 19.6575 13.876C19.5551 13.876 19.4536 13.8962 19.359 13.9354C19.2644 13.9746 19.1784 14.032 19.106 14.1044C19.0335 14.1769 18.9761 14.2628 18.9369 14.3575C18.8977 14.4521 18.8775 14.5535 18.8775 14.656V17.2262C18.877 17.664 18.7029 18.0838 18.3933 18.3933C18.0837 18.7029 17.664 18.877 17.2262 18.8775H6.77381C6.33601 18.877 5.91628 18.7029 5.60671 18.3933C5.29713 18.0838 5.123 17.664 5.1225 17.2262V14.656C5.12252 14.5535 5.10237 14.4521 5.06318 14.3575C5.02399 14.2628 4.96653 14.1768 4.8941 14.1044C4.82166 14.0319 4.73567 13.9745 4.64102 13.9353C4.54638 13.8961 4.44494 13.876 4.3425 13.876Z"
                      fill="#04091E"
                    />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section> --}}
      <!-- CTA End -->
@endsection