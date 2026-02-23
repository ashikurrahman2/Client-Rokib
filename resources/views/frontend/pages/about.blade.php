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
  <h1 class="text-5xl font-semibold mb-2.5">About</h1>

  <ul class="flex justify-center items-center space-x-2">
    <li>
      <a href="/" class="text-lg font-medium hover:underline">
        Home
      </a>
    </li>

    <li>
      <svg
        width="24"
        height="25"
        viewBox="0 0 24 25"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
        class="stroke-white"
      >
        <path
          d="M10 7.5L14 12.5L10 17.5"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
      </svg>
    </li>

    <li class="text-lg font-medium">
      About
    </li>
  </ul>
</div>


      </section>
      <!-- Breadcrumb End -->

      <!-- About -->
      <section class="pt-120 lg:pb-0 pb-120 bg-[#F7F7FD]">
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
            <!-- Left -->
            {{-- My image --}}
            <div class="relative">
              <img
                src="{{ asset('/') }}frontend/assets/images/about/model-pm.png"
                class="w-full"
                alt=""
              />
              <div class="hidden md:block">
                <img
                  src="{{ asset('/') }}frontend/assets/images/about/pm-shape-1.png"
                  class="absolute left-0 xl:-left-44 bottom-20"
                  alt=""
                />
                <img
                  src="{{ asset('/') }}frontend/assets/images/about/pm-shape-2.png"
                  class="absolute right-0 bottom-96"
                  alt=""
                />
              </div>
              <div
                class="inline-flex gap-x-3 bg-white rounded-xl px-4 py-2.5 absolute bottom-10 left-[50%] transform translate-x-[-50%]"
              >
                <a
                  href="http://"
                  class="bg-pblue-500 bg-opacity-10 hover:bg-pblue-500 text-pblue-500 hover:text-white transition-all rounded-full text-lg w-10 h-10 rounded-ful inline-flex justify-center items-center"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a
                  href="http://"
                  class="bg-pblue-500 bg-opacity-10 hover:bg-pblue-500 text-pblue-500 hover:text-white transition-all rounded-full text-lg w-10 h-10 rounded-ful inline-flex justify-center items-center"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  <i class="fa-brands fa-dribbble"></i>
                </a>
                <a
                  href="http://"
                  class="bg-pblue-500 bg-opacity-10 hover:bg-pblue-500 text-pblue-500 hover:text-white transition-all rounded-full text-lg w-10 h-10 rounded-ful inline-flex justify-center items-center"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  <i class="fa-brands fa-skype"></i>
                </a>
                <a
                  href="http://"
                  class="bg-pblue-500 bg-opacity-10 hover:bg-pblue-500 text-pblue-500 hover:text-white transition-all rounded-full text-lg w-10 h-10 rounded-ful inline-flex justify-center items-center"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  <i class="fa-brands fa-linkedin-in"></i>
                </a>
              </div>
            </div>
            <!-- Right -->
            <div>
              <h2
                class="text-interface-500 font-bold text-4xl leading-normal xl:text-5xl capitalize xl:leading-snug mb-4"
              >
                World leading

                <span class="relative">
                  <span class="relative z-20">Creative</span>
                  <svg
                    class="absolute -left-1 z-0 -top-2"
                    width="211"
                    height="69"
                    viewBox="0 0 211 69"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M30.8353 5.20707C71.3242 4.06296 158.3 8.31774 193.87 22.426C232.179 37.6211 183.09 57.6423 130.454 63.5062C75.9959 69.573 16.3894 60.6604 5.75954 45.3131C-12.1857 19.4037 66.1136 2.68084 126.531 3.86657"
                      stroke="#DAED1A"
                      stroke-width="6"
                      stroke-linecap="round"
                    />
                  </svg>

                  product designer
                </span>
              </h2>
              <p class="text-xl text-interface-200 mb-4">
                Hello there! My name is Robert Elisc. I am a web designer &
                developer, and I'm very passionate and dedicated to my work.
                With 20 years experience as a professional a graphic designer,
              </p>
              <div class="mt-10 mb-10 space-y-6">
                <div class="relative">
                  <div class="flex justify-between">
                    <span
                      class="text-lg text-interface-200 font-medium block mb-3"
                      >Figma
                    </span>
                    <span
                      class="text-lg font-medium text-interface-100 block mb-3"
                      >88%
                    </span>
                  </div>
                  <div class="bg-[#D8D8DE] bg-opacity-20 w-full h-2 rounded">
                    <div
                      class="bg-interface-100 h-2 rounded"
                      style="width: 88%"
                    ></div>
                  </div>
                </div>
                <div class="relative">
                  <div class="flex justify-between">
                    <span
                      class="text-lg text-interface-200 font-medium block mb-3"
                      >Adobe XD
                    </span>
                    <span
                      class="text-lg font-medium text-interface-100 block mb-3"
                      >57%
                    </span>
                  </div>
                  <div class="bg-[#D8D8DE] bg-opacity-20 w-full h-2 rounded">
                    <div
                      class="bg-interface-100 h-2 rounded"
                      style="width: 57%"
                    ></div>
                  </div>
                </div>
                <div class="relative">
                  <div class="flex justify-between">
                    <span
                      class="text-lg text-interface-200 font-medium block mb-3"
                      >Adobe Photoshop
                    </span>
                    <span
                      class="text-lg font-medium text-interface-100 block mb-3"
                      >82%
                    </span>
                  </div>
                  <div class="bg-[#D8D8DE] bg-opacity-20 w-full h-2 rounded">
                    <div
                      class="bg-interface-100 h-2 rounded"
                      style="width: 82%"
                    ></div>
                  </div>
                </div>
              </div>
              {{-- Signature --}}
              <div>
                <img src="{{ asset('/') }}frontend/assets/images/about/pm-signature.png" alt="" />
                <span class="text-xl text-interface-100 font-medium"
                  >CEO & Founder of QuomodoSoft</span
                >
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- About End -->
@endsection