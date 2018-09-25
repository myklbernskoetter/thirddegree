<section class="section">
  <div class="wrapper">
    @if (!empty(App::generalFields()->title))
      <h2 class="h2">{!! App::generalFields()->title !!}</h2>
    @endif
    @if (!empty(App::generalFields()->subtitle))
      <div class="subtitle">
        {!! App::generalFields()->subtitle !!}
      </div>
    @endif
    @if (!empty(App::generalFields()->text))
      <div class="section-text">{!! App::generalFields()->text !!}</div>
    @endif

    @if( App::relationship()->relationship )
        @foreach (App::relationship()->relationship as $post)
          <div class="related-section">
            <span class="blurb">
              {!! $post->post_content !!}
            </span>
            <span class="image">
              <a href="{{esc_url( get_permalink($post->ID))}}"><img src="{{get_the_post_thumbnail_url($post->ID)}}"></a>
            </span>
          </div>
          <a class="btn primary" href="{{esc_url( get_permalink($post->ID))}}">Click here to view the archive</a>
        @endforeach
      </ul>
    @endif
  </div>
</section>
