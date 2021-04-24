<main
  class="relative min-h-screen flex flex-col overflow-hidden bg-top bg-cover bg-repeat-x"
  style="background-image: url('{{ Roots\asset('images/'. ($alternative ? 'alternative-' : '' ) . 'bg.png') }}')">
  <x-header :slides="$slides" :alternative-header="$alternative"></x-header>

  <div class="prose md:prose-lg prose-green max-w-none">
    {{ $slot }}
  </div>

  <x-footer></x-footer>
</main>
