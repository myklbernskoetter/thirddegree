<section class="section hero load-hidden">
  <div
    class="
      hero-section
      {{!empty(App::generalFields()->image) ? 'has-image' : '' }}
    "
    style="
      background-color: {{App::hero()->bgcolor}};
      @if(!empty(App::generalFields()->image)) background-image: url({{App::generalFields()->image['url']}}); @endif
    ">
    <header class="hero-title">
      @if (!empty(App::generalFields()->title))
        <h1 class="h1">{{App::generalFields()->title}}</h1>
      @endif
      @if (!empty(App::generalFields()->subtitle))
        <div class="subtitle">{{App::generalFields()->subtitle}}</div>
      @endif
    </header>
  </div>
  @if (!empty(App::generalFields()->text))
    <div class="hero-text wrapper">
        {!! App::generalFields()->text !!}
    </div>
  @endif
</section>
