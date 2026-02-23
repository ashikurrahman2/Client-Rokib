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
        <div class="max-w-lg mx-auto text-center">
          <h1 class="text-5xl text-interface-100 font-semibold mb-2.5">
            Contact Me
          </h1>
          <ul class="flex justify-center items-center space-x-2">
            <li class="text-xl font-medium text-interface-100">Home</li>
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
            <li class="text-xl font-medium text-interface-100">Contact Me</li>
          </ul>
        </div>
      </section>

      <!-- Contact Widget -->
      <section class="pt-120">
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
          <div
            class="grid lg:grid-cols-2 bg-[#F8FBFF] divide-y lg:divide-y-0 lg:divide-x divide-[#DFEAF9] border border-[#DFEAF9] shadow-customFive rounded-[15px]"
          >
            <!-- Left -->
            <div class="flex flex-col md:flex-row  gap-6 py-14 px-20">
              <div>
                <img src="{{ asset('/') }}frontend/assets/images/icons/ci-1.svg" alt="" />
              </div>
              <div class="grow">
                <h4 class="text-2xl font-semibold text-interface-100">
                  Our Address
                </h4>
                <address class="text-lg text-interface-200 not-italic">
                  1012 Pebda Parkway, Mirpur 2 <br />
                  Dhaka, Bangladesh
                </address>
              </div>
            </div>
            <!-- Right -->
            <div class="flex flex-col md:flex-row gap-6 py-14 px-20">
              <div>
                <img src="{{ asset('/') }}frontend/assets/images/icons/ci-2.svg" alt="" />
              </div>
              <div class="grow">
                <h4 class="text-2xl font-semibold text-interface-100">
                  Contact Info
                </h4>
                <p class="text-lg text-interface-200 not-italic">
                  Open a chat or give us call at <br />

                  <a
                    href="tel:310 841 5500"
                    class="font-bold text-interface-100"
                    >310.841.5500</a
                  >
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact Widget End -->


      <!-- Contact Form -->
      <section class="py-20 lg:py-120">
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
          <div
            class="grid grid-cols-1 place-items-center lg:grid-cols-2 gap-10 xl:grid-cols-7"
          >
            <div class="xl:col-span-3 w-full">
              <div>
                <h2
                  class="text-interface-500 font-bold text-4xl leading-normal xl:text-5xl capitalize xl:leading-snug"
                >
                  Have any
                  <span class="relative">
                    <span class="relative z-20">Thought.</span>
                    <svg
                      class="absolute -left-4 md:-left-1 z-0 top-0"
                      width="204"
                      height="61"
                      viewBox="0 0 204 61"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M30.2354 3.79049C69.1075 3.09921 152.664 7.57177 186.934 20.378C223.844 34.1708 176.864 51.5472 126.365 56.3301C74.1181 61.2786 16.807 52.8912 6.47632 39.1849C-10.9639 16.046 64.0926 1.83083 122.121 3.36689"
                        stroke="#DAED1A"
                        stroke-width="6"
                        stroke-linecap="round"
                      />
                    </svg>
                  </span>
                  Find here
                </h2>
              </div>
              <!-- accordions -->
              <div class="flex flex-col">
                <!-- Accordion Item -->
                <div class="border-b border-interface-200 py-8">
                  <div
                    class="flex justify-between items-center cursor-pointer accordion-header"
                  >
                    <h3 class="text-2xl font-medium">
                      <span class="inline-block accordion-number mr-4">01</span>
                      Get an project overview
                    </h3>
                    <span class="accordion-icon">
                      <svg
                        width="15"
                        height="9"
                        viewBox="0 0 15 9"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M1 1L7.5 8L14 1"
                          stroke="#04091E"
                          stroke-width="1.5"
                          stroke-linejoin="round"
                        />
                      </svg>
                    </span>
                  </div>
                  <div class="hidden accordion-body pl-5">
                    <div class="px-4 py-2">
                      <p class="text-interface-100 text-xl mb-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        In urna,elementum turpis.
                      </p>
                      <a
                        href="achievement.html"
                        class="text-pblue-500 inline-flex items-center gap-5 text-base"
                        ><span> Learn more about this </span>
                        <svg
                          width="20"
                          class="stroke-pblue-500"
                          height="15"
                          viewBox="0 0 20 15"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M0 7.93333H19M19 7.93333L12.0909 1M19 7.93333L12.0909 14"
                            stroke-width="1.5"
                            stroke-linejoin="round"
                          />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- Accordion Item -->
                <div class="border-b border-interface-200 py-8">
                  <div
                    class="flex gap-5 justify-between items-center cursor-pointer accordion-header"
                  >
                    <h3 class="text-2xl font-medium">
                      <span class="inline-block accordion-number mr-4">02</span>
                      Task monitoring at a glance
                    </h3>
                    <span class="accordion-icon">
                      <svg
                        width="15"
                        height="9"
                        viewBox="0 0 15 9"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M1 1L7.5 8L14 1"
                          stroke="#04091E"
                          stroke-width="1.5"
                          stroke-linejoin="round"
                        />
                      </svg>
                    </span>
                  </div>
                  <div class="hidden accordion-body pl-5">
                    <div class="px-4 py-2">
                      <p class="text-interface-100 text-xl mb-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        In urna,elementum turpis.
                      </p>
                      <a
                        href="#"
                        class="text-pblue-500 inline-flex items-center gap-5 text-base"
                        ><span> Learn more about this </span>
                        <svg
                          width="20"
                          class="stroke-pblue-500"
                          height="15"
                          viewBox="0 0 20 15"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M0 7.93333H19M19 7.93333L12.0909 1M19 7.93333L12.0909 14"
                            stroke-width="1.5"
                            stroke-linejoin="round"
                          />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- Accordion Item -->
                <div class="border-b border-interface-200 py-8">
                  <div
                    class="flex gap-5 justify-between items-center cursor-pointer accordion-header"
                  >
                    <h3 class="text-2xl font-medium">
                      <span class="inline-block accordion-number mr-4">03</span>
                      Weekly Project
                    </h3>
                    <span class="accordion-icon">
                      <svg
                        width="15"
                        height="9"
                        viewBox="0 0 15 9"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M1 1L7.5 8L14 1"
                          stroke="#04091E"
                          stroke-width="1.5"
                          stroke-linejoin="round"
                        />
                      </svg>
                    </span>
                  </div>
                  <div class="hidden accordion-body pl-5">
                    <div class="px-4 py-2">
                      <p class="text-interface-100 text-xl mb-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        In urna,elementum turpis.
                      </p>
                      <a
                        href="#"
                        class="text-pblue-500 inline-flex items-center gap-5 text-base"
                        ><span> Learn more about this </span>
                        <svg
                          width="20"
                          class="stroke-pblue-500"
                          height="15"
                          viewBox="0 0 20 15"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M0 7.93333H19M19 7.93333L12.0909 1M19 7.93333L12.0909 14"
                            stroke-width="1.5"
                            stroke-linejoin="round"
                          />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="xl:col-span-4 w-full">
              <!-- Contact Form -->
              <div
                class="px-8 py-10 bg-[#F0F4FC] rounded-lg"
                style="
                  background: url('{{ asset('/') }}frontend/assets/images/bg/contact-form-bg-shape.jpg')
                    no-repeat center center/cover;
                "
              >
                <form>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-x-7 gap-y-5">
                    <div>
                      <label
                        for="fname"
                        class="block mb-2 text-base font-medium text-interface-200"
                        >First Name</label
                      >
                      <input
                        type="text"
                        placeholder="Max"
                        class="px-4 py-2.5 bg-white rounded-lg border-0 w-full placeholder:text-interface-200 placeholder:text-sm"
                      />
                    </div>
                    <div>
                      <label
                        for="lname"
                        class="block mb-2 text-base font-medium text-interface-200"
                        >Last Name</label
                      >
                      <input
                        type="text"
                        placeholder="Mustermann"
                        class="px-4 py-2.5 bg-white rounded-lg border-0 w-full placeholder:text-interface-200 placeholder:text-sm"
                      />
                    </div>
                    <div>
                      <label
                        for="email"
                        class="block mb-2 text-base font-medium text-interface-200"
                        >Email</label
                      >
                      <input
                        type="text"
                        placeholder="max.mustermann@mail.de"
                        class="px-4 py-2.5 bg-white rounded-lg border-0 w-full placeholder:text-interface-200 placeholder:text-sm"
                      />
                    </div>
                    <div>
                      <label
                        for="telephone"
                        class="block mb-2 text-base font-medium text-interface-200"
                        >Telephone</label
                      >
                      <input
                        type="text"
                        placeholder="+49 123456789"
                        class="px-4 py-2.5 bg-white rounded-lg border-0 w-full placeholder:text-interface-200 placeholder:text-sm"
                      />
                    </div>
                    <div class="md:col-span-2">
                      <label
                        for="telephone"
                        class="block mb-2 text-base font-medium text-interface-200"
                        >Description</label
                      >
                      <textarea
                        type="text"
                        placeholder="Hier text ainfugen"
                        class="px-4 py-2.5 bg-white rounded-lg border-0 w-full placeholder:text-interface-200 placeholder:text-sm resize-none h-40"
                      >
                      </textarea>
                    </div>
                  </div>
                  <div class="mt-8 flex justify-end">
                    <button
                      class="py-4 px-6 rounded-lg bg-pblue-500 text-white font-medium text-lg transition-all hover:bg-pblue-600"
                    >
                      Send Now
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact Form End -->
@endsection