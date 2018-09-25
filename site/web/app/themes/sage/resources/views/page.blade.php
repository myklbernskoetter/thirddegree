@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="page-content">
      @if(have_rows('page_content'))
        @while (have_rows('page_content')) @php(the_row())
          @include('partials.flex.flex-' . get_row_layout())
        @endwhile
      @else
        {{'Layout Not Found'}}
      @endif
    </div>
  @endwhile
@endsection
