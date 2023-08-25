<!-- ====== About Section Start -->
<section id="about" class="dark:bg-slate-800 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
  <div class="container">
    <div class="flex flex-wrap justify-between items-center -mx-4">
      <div class="w-full lg:w-6/12 px-4">
        <div class="flex items-center -mx-3 sm:-mx-4">
          <div class="w-full xl:w-1/2 px-3 sm:px-4">
            <div class="py-3 sm:py-4">
              <img
                src="{{ asset('img/me/1.png') }}"
              alt=""
              class="rounded-2xl w-full"
              />
            </div>
            <div class="py-3 sm:py-4">
              <img
                src="{{ asset('img/me/5.png') }}"
              alt=""
              class="rounded-2xl w-full"
              />
            </div>
          </div>
          <div class="w-full xl:w-1/2 px-3 sm:px-4">
            <div class="my-4 relative z-10">
              <img
                src="{{ asset('img/me/3.png') }}"
              alt=""
              class="rounded-2xl w-full"
              />
              <x-about-dots></x-about-dots>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
        <div class="mt-10 lg:mt-0">
          <span class="font-semibold text-lg text-primary mb-2 block">
            <blockquote class="text-sm text-gray-500 italic py-2 px-3 border-l-4 border-amber-500">
              "The quieter you become the more you are able to hear"
            </blockquote>
          </span>
          <h2 class="font-bold text-3xl sm:text-4xl dark:text-gray-200 mb-8">
            About Me
          </h2>
          <p class="text-base dark:text-gray-400 mb-8">
            I have been working as a professional Laravel web developer for 5+ years, specializing in PHP, JavaScript, Livewire, and Laravel. <br />
            During my career, I have worked on various types of projects and contributed to open-source projects. <br />
            I constantly explore the newest technologies and enjoy reading about the latest trends in the industry. <br />
          </p>
          <x-button-link href="#portfolio" variant="red">
            View my projects
          </x-button-link>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== About Section End -->
