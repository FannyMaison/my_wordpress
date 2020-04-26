  <header class="header_realisation">
    <h1 class="entry-title">{{{ $realisation->name }}}</h1>
    <p>{{ $realisation->subtitle }}</p>
  </header>
  <div class="entry-content leading-normal">
    <section>
      <div class="realisation_content">
        <div>
          <h5>Présentation du projet</h5>
          <p>{{ $realisation->description }}</p>
          <a href="{{ $realisation->link }}">Voir le Git</a>
          <div class="technologies">
            <h5>Technologies utilisées</h5>
            <p>{{ $realisation->technologies }}</p>
          </div>
        </div>
        <img src="{{ $realisation->img->url }}" alt="{{ $realisation->alt }}">
      </div>      
    </section>
  </div>
