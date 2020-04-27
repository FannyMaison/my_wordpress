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
        <div class="link">
          @if(isset(Single::previousLink()->ID))
          <a data-anim-cursor="click" data-swup-transition="realisation" href="{{get_permalink(Single::previousLink()->ID)}}">
          <div class="link-realisation-overlay"></div>
            <span>Projet précédent</span>
            <span>{{ Single::previousLink()->name }}</span>
          </a>
          @endif
          @if(isset(Single::nextLink()->ID))
          <a data-anim-cursor="click" data-swup-transition="realisation" href="{{get_permalink(Single::nextLink()->ID)}}">
          <div class="link-realisation-overlay"></div>
            <span>Projet suivant</span>
            <span>{{ Single::nextLink()->name }}</span>
          </a>
          @endif
        </div>      
    </section>
  </div>
