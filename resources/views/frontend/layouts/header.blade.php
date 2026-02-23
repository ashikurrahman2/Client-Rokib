      <!-- Header -->
      <header class="main-header">
        <!-- Header Top -->
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
          <div class="flex justify-between py-3">
            <div class="grow">
              <div class="flex space-x-0 md:space-x-14">
                <!-- Email -->
                <div class="flex items-center space-x-2">
                  <i class="fa-solid fa-envelope text-new-500"></i>
                  <a href="{{ $setting->main_email }}" class="text-interface-200 text-base"><span class="__cf_email__" data-cfemail="bad3d4dcd5fadfc2dbd7cad6df94d9d5d7">{{ $setting->main_email }}</span></a
                  >
                </div>
                <!-- Phone -->
                <div class="space-x-2 hidden md:flex items-center">
                  <i class="fa-solid fa-phone text-new-500"></i>
                  <a href="tel:+0168833300" class="text-interface-200 text-base"
                    >{{ $setting->phone_one }}</a
                  >
                </div>
              </div>
            </div>
            <div class="flex items-center space-x-6">
              <a
                href="{{ $setting->facebook }}"
                class="group transition-all text-interface-200 hover:text-new-500"
                target="_blank"
                rel="noopener noreferrer"
              >
            <i class="fa-brands fa-github"></i>

              </a>
              <a
                href="{{ $setting->linkedin }}"
                class="group transition-all text-interface-200 hover:text-new-500"
                target="_blank"
                rel="noopener noreferrer"
              >
                <i class="fa-brands fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Header Menu -->
        <div class="main-menu sticky-header">
          <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <nav class="nav nav-dev">
              <div class="nav__data">
                <a href="/" class="nav__logo">
                  <img src="{{ asset('/') }}frontend/assets/images/logo/logo-dev-m.svg" alt="" />
                </a>
                <div class="nav__toggle" id="nav-toggle">
                  <i class="fa-solid fa-bars nav__toggle-menu"></i>
                  <i class="fa-solid fa-xmark nav__toggle-close"></i>
                </div>
              </div>
              <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                  <!-- Demo-->
            <li class="nav__item">
            <a href="/" class="nav__link">Home</a>
          </li>


              <li class="nav__item">
                <a href="{{ route('about') }}" class="nav__link">About</a>
              </li>
                  <!-- Services-->
             <li class="nav__item">
              <a href="{{ route('ser') }}" class="nav__link">Services</a>
            </li>
                  <!-- Portfolio-->
              <li class="nav__item">
                  <a href="{{ route('port') }}" class="nav__link">Portfolio</a>
                </li>
                </ul>
              </div>
              <div class="hidden xl:block">
                <a
                  href="{{ route('contact') }}"
                  class="bg-new-500 text-interface-100 px-6 py-4 font-medium rounded-lg inline-flex justify-center items-center group transition-all hover:bg-new-600"
                >
                  <span>Let's Talk</span>
                  <svg
                  class=" stroke-interface-100 transform translate transition-transform group-hover:translate-x-2"
                    
                    width="24"
                    height="25"
                    viewBox="0 0 24 25"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M14 16.5L18 12.5M18 12.5L14 8.5M18 12.5L6 12.5"
                   
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </a>
              </div>
            </nav>
          </div>
        </div>
      </header>
      <!-- Header End -->