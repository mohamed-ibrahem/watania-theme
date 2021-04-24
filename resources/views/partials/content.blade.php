<article @php(post_class())>
  <header>
    <h2 class="entry-title">
      <a href="{{ get_permalink() }}">
        {!! $title !!}
      </a>
    </h2>
    <time class="updated" datetime="{{ get_post_time('c', true) }}">
      {{ get_the_date() }}
    </time>

    <p class="byline author vcard">
      <span>{{ __('By', 'sage') }}</span>
      <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
        {{ get_the_author() }}
      </a>
    </p>
  </header>

  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article>
