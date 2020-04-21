@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  	{{ dd(get_post_type()) }}
    @include('partials.content-single-'.get_post_type())
  @endwhile
@endsection
