<!-- ====== Testimonials Section Start -->
<section class="pt-20 lg:pt-[120px] pb-20 lg:pb-[120px] dark:bg-slate-800" id="testimonials">
  <div class="container">
    <div
      x-data="
{
  slides: ['1','2','3', '4', '5', '6','7','8','9', '10'],
  activeSlide: 1,
  activeButton: 'w-[30px] bg-primary',
  button: 'w-[10px] bg-[#E4E4E4]',
}
"
    >
      <div class="flex justify-center relative">
        <div class=" w-full md:w-11/12 lg:w-10/12 xl:w-8/12 relative pb-16 xl:pb-0 ">
          <div
            x-ref="carousel"
            class="snap w-full max-w-[300px] xs:max-w-[368px] sm:max-w-[508px] md:max-w-[630px] lg:max-w-[738px] 2xl:max-w-[850px] mx-auto h-auto flex flex-no-wrap overflow-hidden transition-all">
            @foreach($reviews as $review)
              <div
                class="min-w-[300px] xs:min-w-[368px] sm:min-w-[508px] md:min-w-[630px] lg:min-w-[738px] 2xl:min-w-[850px] mx-auto h-full sm:p-6">
                <div class="w-full md:flex items-center">
                  <div
                    class="max-w-[310px] md:max-w-[250px] lg:max-w-[280px] w-full md:mr-12 lg:mr-14 2xl:mr-16 mb-12 md:mb-0 relative">
                    <img src="{{ $review['image'] }}" alt="image" class="w-full"/>
                  </div>
                  <div class="w-full">
                    <div>
                      <div class="mb-7">
                        <img src="{{ asset('img/fiverr.svg') }}" alt="fiverr review"/>
                      </div>
                      <p class="font-medium italic text-body-color text-base sm:text-lg mb-11">
                        <span>{{ $review['quote'] }}</span>
                      </p>
                      <h4 class="font-semibold text-dark text-xl">
                        <span>{{ $review['name'] }}</span>
                      </h4>
                      <p class="text-body-color text-base">
                        <span>{{ $review['title'] }}</span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
          {{--          corrousal buttons--}}
          <div
            class=" absolute left-0 right-0 bottom-0 flex items-center justify-center lg:pl-[120px] 2xl:pl-0 ">
            <button
              class=" w-12 h-12 rounded-full flex items-center justify-center bg-white text-primary hover:bg-primary hover:text-white transition-all shadow-input mx-1 "
              @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft - ($refs.carousel.scrollWidth / slides.length); activeSlide -= 1">
              <svg width="15" height="13" viewBox="0 0 15 13" class="fill-current">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M5.24264 11.8033L0.46967 7.03037C0.176777 6.73748 0.176777 6.2626 0.46967 5.96971L5.24264 1.19674C5.53553 0.903845 6.01041 0.903845 6.3033 1.19674C6.59619 1.48963 6.59619 1.96451 6.3033 2.2574L2.81066 5.75004H14C14.4142 5.75004 14.75 6.08583 14.75 6.50004C14.75 6.91425 14.4142 7.25004 14 7.25004H2.81066L6.3033 10.7427C6.59619 11.0356 6.59619 11.5104 6.3033 11.8033C6.01041 12.0962 5.53553 12.0962 5.24264 11.8033Z"
                />
              </svg>
            </button>
            <button
              class=" w-12 h-12 rounded-full flex items-center justify-center bg-white text-primary hover:bg-primary hover:text-white transition-all shadow-input mx-1 "
              @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft + ($refs.carousel.scrollWidth / slides.length); activeSlide += 1">
              <svg width="15" height="13" viewBox="0 0 15 13" class="fill-current">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M9.75736 11.8033L14.5303 7.03037C14.8232 6.73748 14.8232 6.2626 14.5303 5.96971L9.75736 1.19674C9.46447 0.903845 8.98959 0.903845 8.6967 1.19674C8.40381 1.48963 8.40381 1.96451 8.6967 2.2574L12.1893 5.75004H1C0.585786 5.75004 0.25 6.08583 0.25 6.50004C0.25 6.91425 0.585786 7.25004 1 7.25004H12.1893L8.6967 10.7427C8.40381 11.0356 8.40381 11.5104 8.6967 11.8033C8.98959 12.0962 9.46447 12.0962 9.75736 11.8033Z"
                />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== Testimonials Section End -->
