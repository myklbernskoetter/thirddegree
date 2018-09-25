@php
  $object = get_queried_object();
  $cat_id = $object->taxonomy.'_'.$object->term_id;
@endphp

@extends('layouts.app')

@section('content')
    @if( have_rows('page_content', $cat_id) )
      @while ( have_rows('page_content', $cat_id) ) @php(the_row())
        @include('partials.flex.flex-' . get_row_layout())
      @endwhile
    @endif

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content.content-'.get_post_type())
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
