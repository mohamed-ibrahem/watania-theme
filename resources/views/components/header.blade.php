@props([
'alternativeHeader' => false,
'slides' => []
])
<header class="relative z-50">
  <div class="container">
    <div class="flex items-center py-6 justify-end lg:justify-start">
      <button type="button"
              class="lg:hidden rounded-md inline-flex items-center justify-center text-white hover:text-gray-200 focus:outline-none"
              aria-expanded="false"
              data-toggle="collapse"
              data-target=".mobile-menu">
        <span class="sr-only">Open menu</span>
        <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
             aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
      {!! wp_nav_menu([
        'container' => false,
        'theme_location' => 'primary_navigation',
        'menu_class' => 'primary_menu hidden lg:flex space-x-3',
      ]) !!}
      <div class="hidden lg:flex items-center justify-end lg:flex-1 lg:w-0">
        {!! get_search_form(false) !!}
      </div>
    </div>
  </div>
  <div class="absolute hidden top-0 inset-x-0 p-2 transition transform origin-top-right mobile-menu">
    <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
      <div class="pt-5 pb-6 px-5">
        <button type="button"
                class="absolute right-5 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-orange"
                data-toggle="collapse"
                data-target=".mobile-menu">
          <span class="sr-only">Close menu</span>
          <!-- Heroicon name: outline/x -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
               aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
        {!! wp_nav_menu([
          'container' => false,
          'theme_location' => 'primary_navigation',
          'menu_class' => 'primary_menu--mobile grid gap-y-4',
        ]) !!}
      </div>
      <div class="py-6 px-5 space-y-6">
        {!! get_search_form(false) !!}
      </div>
    </div>
  </div>
</header>

@unless($alternativeHeader)
  <x-social-links
    class="-right-0.5 space-y-2 bg-gradient-to-b from-green to-orange via-blue absolute py-2 rounded-l-lg top-1/4 w-14 flex flex-col items-center text-white z-50"
    icon-class="block w-full flex justify-center"
  ></x-social-links>

  <x-page-header :slides="$slides"></x-page-header>
@endunless
