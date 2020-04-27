@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <section class="py-3">
    <p class="introduction">Enchantée,<br><span class="text">Fanny Maison, créatrice de costume en tout genre</span><span id="feature" class="text"></span><span class="text"> et développeuse</span><br>Bienvenue sur mon portfolio</p>
    <h2>Mes réalisations</h2>
    <hr>
    <div class="flex rounded bg-powderblue">
      @foreach($realisations as $realisation)
      <div class="w-1/3 relative px-3">
        <a href="{{ $realisation->permalink }}" class="no-underline">
          <div class="bg-grey-light flex-col rounded">
            <img class="rounded mb-4" src="{{ $realisation->thumb }}" alt="{{ $realisation->alt }}">
            <p class="uppercase text-center">{{ $realisation->name }}</p>
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
