<header class="banner">
  <div class="container">
    <a class="id" href="{{ home_url('/') }}"><img src="@asset('images/logo.svg')" alt="logo Fanny Maison"></a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
