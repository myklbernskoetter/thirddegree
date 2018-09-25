<section class="cta-section section">
  <div class="wrapper">
    @if(!empty(App::generalFields()->title))
      <h2 class="h2">{!! App::generalFields()->title !!}</h2>
    @endif
    @if (!empty(App::generalFields()->text))
      <p class="section-text">{!! App::generalFields()->text !!}</p>
    @endif
    @if (!empty(App::cta()->link))
      <a href="{{App::cta()->link['url']}}" target="{{App::cta()->link['target']}}" rel="noopener">{{App::cta()->link['title']}}</a>
    @endif
  </div>
</section>
