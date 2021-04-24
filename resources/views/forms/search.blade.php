<form role="search" method="get" class="search-form" action="{{ home_url('/') }}">
  <span class="sr-only">
    {{ _x('Search for:', 'label', 'sage') }}
  </span>

  <label class="flex space-x-3 items-center">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
    </svg>

    <input
      type="search"
      class="w-full px-3 py-1 border rounded-full outline-none focus:border-gray-400"
      placeholder="{!! esc_attr_x('Search&hellip;', 'placeholder', 'sage') !!}"
      value="{{ get_search_query() }}"
      name="s"
    >
  </label>
</form>
