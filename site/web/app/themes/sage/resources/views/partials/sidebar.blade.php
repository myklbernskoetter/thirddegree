@php dynamic_sidebar('sidebar-primary') @endphp

<h2>test</h2>
@php
  wp_list_pages( array(
    'title_li' => 'Other Pages',
    'child_of' => get_the_ID(),
  ));
@endphp
