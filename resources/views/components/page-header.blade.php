@props([
'slides' => []
])
<div class="relative -mt-24 pt-2 overflow-hidden" style="height: calc(75vh + (112px - 96px));">
  <div
    class="absolute top-1/2 left-0 w-2/3 md:w-1/2 bg-cover bg-right -mt-12 flex flex-col items-center justify-center z-10"
  >
    <x-logo :alternative="true"></x-logo>
  </div>

  <div class="owl-carousel"
       data-items="1"
       data-loop="true"
       data-dots="false"
       data-nav="true"
       data-auto-play="true">
    @foreach($slides as $slide)
      <div class="item bg-cover bg-center" style="background-image: url('{{ $slide }}');"></div>
    @endforeach
  </div>

  <img src="{{ Roots\asset('images/header-l-bg.png') }}" alt="" class="absolute right-0 w-1/4 md:w-1/12 -bottom-1 z-10">
</div>
