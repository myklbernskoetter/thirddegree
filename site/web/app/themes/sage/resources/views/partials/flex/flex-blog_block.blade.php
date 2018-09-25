<div class="blog-section section">
  <div class="wrapper align-{{App::display()->alignment}}" >
    @if (!empty(App::generalFields()->text))
      <div class="section-text">{!! App::generalFields()->text !!}</div>
    @endif
  </div>
</div>
