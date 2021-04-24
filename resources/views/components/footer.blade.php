<footer class="mt-auto">
  <div class="container flex items-center mb-3">
    <div class="w-9/12 grid grid-cols-1 md:grid-cols-4 gap-3 items-center flex-1">
      <div>
        <x-logo class="w-3/12"></x-logo>
      </div>
      @for($sidebar = 1; $sidebar <= 2; $sidebar++)
        @php(dynamic_sidebar('footer-sidebar-' . $sidebar))
      @endfor
      <div>
        <h3 class="text-lg font-bold text-green">Follow us</h3>
        <x-social-links :colored="true" class="flex space-x-1 mt-3"></x-social-links>
      </div>
    </div>
    <img src="{{ Roots\asset('images/footer-icon.png') }}" alt="" class="hidden sm:block mx-auto w-2/12 md:w-1/12">
  </div>
  <div class="bg-gradient-to-l from-green to-orange via-blue py-6">
    <div class="container flex flex-col items-center lg:flex-row justify-between lg:space-x-3">
      <div>
        {!! wp_nav_menu([
          'container' => false,
          'theme_location' => 'footer_navigation',
          'menu_class' => 'footer_menu flex space-x-3',
        ]) !!}
      </div>
      <p class="text-white text-sm">Copyright © 2021. All rights reserved. Informa Markets, a trading division of Informa PLC.</p>
    </div>
  </div>
</footer>
