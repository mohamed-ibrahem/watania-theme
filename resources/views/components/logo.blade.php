@props([
  'alternative' => false
])
<img src="{{ Roots\asset('images/logo'. ( $alternative ? '-white' : '') .'.png') }}"
     alt="AlWatania logo"
     {{ $attributes->merge([
      'class' => 'w-auto sm:w-5/12 lg:w-3/12'
    ]) }}
>
