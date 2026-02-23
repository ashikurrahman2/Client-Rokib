@extends('layouts.app')
@section('content')
      <!-- Breadcrumb -->
      <section
        class="pt-[235px] pb-[100px]"
        style="
          background: url('{{ asset('frontend/assets/images/bg/brcm.jpg') }}') no-repeat center
            center/cover;
        "
      >
        <div class="max-w-lg mx-auto text-center">
          <h1 class="text-5xl text-interface-100 font-semibold mb-2.5">
            Services Details
          </h1>
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
            <li class="text-lg font-medium text-interface-100">
              Services Details
            </li>
          </ul>
        </div>
      </section>
      <!-- Breadcrumb End -->

      <!-- Details Info -->
      <section class="lg:pt-120">
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
          <div>
            <div class="pb-5 border-b border-b-interface-200">
              <img
                src="{{asset('/')}}frontend/assets/images/services/thumb-xl.jpg"
                class="rounded-lg w-full"
                alt=""
              />
              <div class="flex flex-col md:flex-row justify-between mt-10">
                <div>
                  <h4 class="text-lg font-medium text-interface-500">
                    Crated by Fallow
                  </h4>
                  <span>20 Jan. 2023</span>
                </div>
                <div class="flex items-center gap-4">
                  <span class="text-lg font-medium text-interface-500"
                    >Share this Service</span
                  >
                  <div class="flex space-x-3">
                    <a
                      href="http://"
                      class="text-white bg-interface-100 hover:bg-pblue-500 transition-all text-lg w-10 h-10 rounded-full inline-flex justify-center items-center"
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a
                      href="http://"
                      class="text-white bg-interface-100 hover:bg-pblue-500 transition-all text-lg w-10 h-10 rounded-full inline-flex justify-center items-center"
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a
                      href="http://"
                      class="text-white bg-interface-100 hover:bg-pblue-500 transition-all text-lg w-10 h-10 rounded-full inline-flex justify-center items-center"
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a
                      href="http://"
                      class="text-white bg-interface-100 hover:bg-pblue-500 transition-all text-lg w-10 h-10 rounded-full inline-flex justify-center items-center"
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      <i class="fa-brands fa-youtube"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-10">
              <h3 class="text-2xl font-semibold mb-5">
                Website/ App Design UX/ UI Design
              </h3>
              <p class="text-lg text-interface-200 mb-5">
                It is a long established fact that a reader will be distracted
                by the readable content of a page when looking at its layout.
                The point of using Lorem Ipsum is that it has a the a
                more-or-less normal distribution of letters, as opposed to using
                '
              </p>
              <p class="text-lg text-interface-200 mb-6">
                Content here, content here', making it look like readable
                English. Many desktop into a publishing packages and web page
                editors now use Lorem Ipsum as their default to a model text,
                and a search for 'lorem ipsum' will uncover many web sites still
                in their to infancy. Various versions have evolved over the
                years, sometimes by accident, sometimes on purpose injected
                humour and the like
              </p>
              <h3 class="text-2xl font-semibold mb-5">
                Do your research ahead of time
              </h3>
              <p class="text-lg text-interface-200">
                It is a long established fact that a reader will be distracted
                by the readable content of a page when looking at its layout.
                The point of using Lorem Ipsum is that it has a the a
                more-or-less normal distribution of letters, as opposed to using
                '
              </p>
            </div>
            <div
              class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7 mt-10"
            >
              <div>
                <img
                  src="assets/images/services/th-md-1.jpg"
                  class="w-full rounded"
                  alt=""
                />
              </div>
              <div>
                <img
                  src="assets/images/services/th-md-2.jpg"
                  class="w-full rounded"
                  alt=""
                />
              </div>
              <div>
                <img
                  src="assets/images/services/th-md-3.jpg"
                  class="w-full rounded"
                  alt=""
                />
              </div>
            </div>
            <ul class="mt-10 mb-14 space-y-3 list-disc pl-5">
              <li class="text-interface-200 text-lg">
                Brainwriting: Everyone writes down three ideas and passes their
                ideas to the person on their left (or right), who builds off
                those ideas before passing them on again. This way, ideas can
                cross-pollinate, morph and build on top of each other from
                different perspectives. After all, two heads are better than
                one.
              </li>
              <li class="text-interface-200 text-lg">
                Rapid ideation: Everyone writes down as many ideas as they can
                in a set amount of time before anything is discussed or
                critiqued. This is a fun way to get all the good (and bad) ideas
                out fast and bring a sense of fun urgency to the session.
              </li>
              <li class="text-interface-200 text-lg">
                Figure storming: The group picks a well-known figure who is not
                in the room and asks how they would approach the problem. For
                example, “How would Barack Obama (or Harry Potter, or anyone
                else) approach this problem?” - prepare for some funny answers
                here, this method is a good ice-breaker for everyone involved.
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Details Info End --> 
@endsection