<section class="section gallery-section">
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

    @if (!empty(get_sub_field('images')))
      <div class="gallery-items-wrapper">
        @foreach(get_sub_field("images") as $item)
          <div class="image-container">
            <img class="gallery-image" src="{{$item['image']['url']}}" alt="{{$item['image']['alt']}}">
          </div>
        @endforeach
      </div>
    @endif
  </div>
</section>
