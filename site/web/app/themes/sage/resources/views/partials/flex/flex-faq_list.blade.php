<section class="faq-section section">
  <div class="wrapper">
    @if(!empty(App::generalFields()->title))
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

    @if (!empty(get_sub_field('faq')))
      <ul class="faq-list">
        @foreach(get_sub_field('faq') as $item)
          <li class="faq-item">
            <h3>
              <button class="faq-button" type="button" name="button">
                <span class="faq-section header">
                  @if (!empty($item['title']))
                    <span class="title">{{$item['title']}}</span>
                  @endif
                  @if (!empty($item['icon']))
                    <span class="icon">{{$item['icon']}}</span>
                  @endif
                </span>
              </button>
            </h3>
            <span class="faq-section faq-text">
              @if (!empty($item['text']))
                {!! $item['text'] !!}
              @endif
              <a href="/">link</a>
            </span>
          </li>
        @endforeach
      </ul>
    @endif
  </div>
</section>
