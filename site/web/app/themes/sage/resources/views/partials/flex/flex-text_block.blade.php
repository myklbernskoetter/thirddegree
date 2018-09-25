<section class="text-section section">
  <div class="wrapper align-{{App::display()->alignment}}" >
    @if (!empty(App::generalFields()->title))
      <h2 class="h2">{!! App::generalFields()->title !!}</h2>
    @endif
    @if (!empty(App::generalFields()->text))
      <div class="section-text">{!! App::generalFields()->text !!}</div>
    @endif
  </div>
</section>
