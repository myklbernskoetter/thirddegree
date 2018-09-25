@php
  $posts = App::recentPosts();
@endphp

<section class="recent-section section">
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

    @if (!empty($posts))
      <ul class="recent-list">
        @foreach($posts as $index => $post)
          <li class="recent-item">
            @if($loop->first)
              <a class="image" href="{{esc_url( get_permalink($post['ID']))}}">
                {!! get_the_post_thumbnail($post['ID'], 'large') !!}
              </a>
            @else
              <a class="thumbnail-image" href="{{esc_url( get_permalink($post['ID']))}}">
                {!! get_the_post_thumbnail($post['ID'], 'thumbnail') !!}
              </a>
            @endif

            <span class="content-wrapper">
              <a href="{{esc_url( get_permalink($post['ID']))}}">
                <span class="h2 post-headline">{{$post['post_title']}}</span>
              </a>
              <span class="post-categories">
                @foreach(get_the_category($post['ID']) as $category)
                  @if($category->cat_name != 'Uncategorized')
                    @if($loop->first)
                      {{$category->cat_name}}
                    @else
                    , {{ $category->cat_name}}
                    @endif
                  @endif
                @endforeach
              </span>
              <span class="post-date">
                {{date('n-j-Y', strtotime($post['post_date']))}}
              </span>
              <span class="post-excerpt">{!! $post['post_content'] !!}</span>
            </span>
          </li>
        @endforeach
      </ul>
    @endif
  </div>
</section>
