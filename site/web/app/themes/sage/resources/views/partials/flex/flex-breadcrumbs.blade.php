@php
  $results = App::breadcrumbs($post);
@endphp
@if(!empty($results))
  <nav class="wrapper section breadcrumbs-section" aria-label="breadcrumbs">
    <h2 class="crumb-header h5">You are here: </h2>
    <ul class="breadcrumbs">
        @foreach($results as $crumb)
          <li class="crumb"><a href="{{$crumb['link']}}">{{$crumb['title']}}</a></li>
        @endforeach
      <li class="crumb">{!! the_title() !!}</li>
    </ul>
  </nav>
@endif
