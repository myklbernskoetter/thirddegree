<div class="full-width-wrapper">
  @if (!empty(App::generalFields()->title))
  <header class="header">
    <span class="h1">{{App::generalFields()->title}}</span>
    @if (!empty(App::generalFields()->subtitle))
      <span class="subtitle">{{App::generalFields()->subtitle}}</span>
    @endif
  </header>
@endif

  @if (!empty(App::generalFields()->image))
    <span class="full-width-image-wrapper">
      <img class="full-width-image" src="{{App::generalFields()->image['url']}}" alt="">
    </span>
  @endif
</div>
