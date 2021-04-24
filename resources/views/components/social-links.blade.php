@props([
  'colored' => false,
  'iconClass' => ''
])

<div {{ $attributes }}>
  @foreach(get_field('social', 'options') as $icon)
    <a :class="$iconClass" href="{{ $icon['link'] }}" target="_blank">
      {!! $icon[['color_icon', 'solid_icon'][(int) !$colored]] !!}
    </a>
  @endforeach
</div>
