@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <section class="py-5">
    <h2>Mes réalisations</h2>
    <div class="flex my-10 -mx-3">
      @foreach($realisations as $realisation)
      <div class="w-1/3 relative px-3">
        <a href="{{ $realisation->permalink }}" class="text-black no-underline">
          <div class="bg-grey-light flex flex-col p-5 rounded">
            <img class="rounded mb-5" src="{{ $realisation->thumb }}" alt="{{ $realisation->alt }}">
          </div>
        </a>  
      </div>
      @if  ($loop->iteration % 3 === 0)
      </div>
      <div class="flex mb-5">
      @endif
      @endforeach
    </div>
  </section>
@endsection
