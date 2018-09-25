<section class="featured-section section">
  <div class="wrapper">
    <div class="featured-block @if(App::featured()->border) has-border @endif">
      <header>
        @if (!empty(App::featured()->icon))
          <span class="icon">Icon: {{App::featured()->icon}}</span>
        @endif
        @if (!empty(App::generalFields()->title))
          <h2 class="h2">{{App::generalFields()->title}}</h2>
        @endif
        @if (!empty(App::generalFields()->subtitle))
          <div class="subheading">{{App::generalFields()->subtitle}}</div>
        @endif
      </header>
      <div class="featured-{{App::cta()->alignment}}">
        @if (!empty(App::generalFields()->text))
          <p class="">
            {!! App::generalFields()->text !!}
          </p>
        @endif
        @if (!empty(App::generalFields()->image))
          <img src="{{App::generalFields()->image['url']}}" alt="{{App::generalFields()->image['alt']}}">
        @endif
      </div>
      @if(!empty(App::cta()->link))
        <div class="featured-cta">
          <a href="{{App::cta()->link['url']}}" class="btn {{App::cta()->style}}">
            {{App::cta()->link['title']}}
          </a>
        </div>
      @endif
    </div>
  </div>
</section>
