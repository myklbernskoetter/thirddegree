<section class="section">
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

    @if(get_sub_field("columns"))
      <div class="split-section">
        @foreach(get_sub_field("columns") as $index => $item)
          <div class="
            column-container
            {{ $index === 2 ? 'split-3' : '' }}
            {{ $item['border?'] == 1 ? 'has-border' : '' }}
            {{ get_sub_field('animated?') == 1 ? 'is-animated' : '' }}"
            >
          @if (!empty($item['link']))
            <a
              href="{!! $item['link']['url'] !!}"
              rel=noopener
              target="{!! $item['link']['target'] !!}"
              style="background-image: url('{{ $item['image']['url'] }}')"
              class="{{!empty($item['image']) ? 'has-bg-image' : '' }}"
            >
              <span class="content-wrapper">
                @if (!empty($item['title']))
                  <h3 class="h3 split-container-headline">
                    {{ $item['title'] }}
                  </h3>
                @endif
                @if (!empty($item['text']))
                  <span class="split-text">
                    {!! $item['text'] !!}
                  </span>
                @endif
                <span class="hover-indicator">&uarr;</span>
                <span class="split-cta" >
                  {!! $item['link']['title'] !!}
                </span>
              </span>
            </a>
          @else
            @if (!empty($item['title']))
              <h3 class="h3 split-container-headline">
                {{ $item['title'] }}
              </h3>
            @endif
            @if (!empty($item['text']))
              <span class="split-text">
                {!! $item['text'] !!}
              </span>
            @endif
          @endif
          </div>
        @endforeach
      </div>
    @endif
  </div>
</section>
