@php
  $year = Date('Y');
@endphp

<footer class="site-footer">
  <nav class="nav-footer" aria-label="Footer Navigation">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'footer-nav']) !!}
    @endif
  </nav>
  <div class="container">
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
  <div class="copyright">
    &copy; {{$year}} lorem ipsum
  </div>
</footer>
