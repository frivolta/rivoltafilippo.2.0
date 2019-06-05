<!-- Header -->
<header class="header navbar navbar-default bootsnav navbar-fixed-top header-light background-transparent white-link navbar-expand-lg on no-full">
  <div class="container d-inline-flex justify-content-end">
    
    <!-- Logo -->
    <div class="col-auto pl-lg-0 mr-auto logo">
        <a href="/" title="Filippo Rivolta" class="logo__link"><img class="logo__image" src={{ $header_options -> logo_standard }} class="logo-dark" alt="Pofo"></a>
    </div>
    <!-- ./End Logo -->

    <!-- Navigation -->
    <div class="d-md-flex d-none justify-content-end navigation flex-row">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navigation__nav d-flex flex-row hidden-sm-down']) !!}
        @endif
    </div>
    <!-- ./End Navigation -->

    <!-- Social -->
    <div class="col-auto pr-lg-0 social">
      @if ($social_options -> linkedin)
        <a class="social__item"href={{$social_options -> linkedin}} target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-light svg-social"><path class="svg-social" d="M417.2 64H96.8C79.3 64 64 76.6 64 93.9V415c0 17.4 15.3 32.9 32.8 32.9h320.3c17.6 0 30.8-15.6 30.8-32.9V93.9C448 76.6 434.7 64 417.2 64zM183 384h-55V213h55v171zm-25.6-197h-.4c-17.6 0-29-13.1-29-29.5 0-16.7 11.7-29.5 29.7-29.5s29 12.7 29.4 29.5c0 16.4-11.4 29.5-29.7 29.5zM384 384h-55v-93.5c0-22.4-8-37.7-27.9-37.7-15.2 0-24.2 10.3-28.2 20.3-1.5 3.6-1.9 8.5-1.9 13.5V384h-55V213h55v23.8c8-11.4 20.5-27.8 49.6-27.8 36.1 0 63.4 23.8 63.4 75.1V384z"/></svg>
        </a>
      @endif
      @if ($social_options -> instagram)
        <a class="social__item"href={{$social_options -> instagram}} target="_blank" class="svg-light">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-light svg-social"><path class="svg-social" d="M336 96c21.2 0 41.3 8.4 56.5 23.5S416 154.8 416 176v160c0 21.2-8.4 41.3-23.5 56.5S357.2 416 336 416H176c-21.2 0-41.3-8.4-56.5-23.5S96 357.2 96 336V176c0-21.2 8.4-41.3 23.5-56.5S154.8 96 176 96h160m0-32H176c-61.6 0-112 50.4-112 112v160c0 61.6 50.4 112 112 112h160c61.6 0 112-50.4 112-112V176c0-61.6-50.4-112-112-112z"/><path d="M360 176c-13.3 0-24-10.7-24-24s10.7-24 24-24c13.2 0 24 10.7 24 24s-10.8 24-24 24zM256 192c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64m0-32c-53 0-96 43-96 96s43 96 96 96 96-43 96-96-43-96-96-96z"/></svg>
        </a>
      @endif
      @if ($social_options -> facebook)
        <a class="social__item"href={{$social_options -> facebook}} target="_blank" class="svg-light">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-light svg-social"><path class="svg-social" d="M426.8 64H85.2C73.5 64 64 73.5 64 85.2v341.6c0 11.7 9.5 21.2 21.2 21.2H256V296h-45.9v-56H256v-41.4c0-49.6 34.4-76.6 78.7-76.6 21.2 0 44 1.6 49.3 2.3v51.8h-35.3c-24.1 0-28.7 11.4-28.7 28.2V240h57.4l-7.5 56H320v152h106.8c11.7 0 21.2-9.5 21.2-21.2V85.2c0-11.7-9.5-21.2-21.2-21.2z"/></svg>
        </a>
      @endif
    </div>
    <div class="mobile-menu__trigger mobileTrigger">☰</div>
    <!-- ./End Navigation -->

  </div>
</header>

<!-- Mobile Menu -->
<nav class="mobile-menu">
  <h4 class="mobile-menu__close">CLOSE</h4>
  <ul class="mobile-menu__list">
    <li class="mobile-menu__item"><a href="#aboutme" class="mobile-menu__item__link">Home</a></li>
    <li class="mobile-menu__item"><a href="#expertise" class="mobile-menu__item__link">Expertise</a></li>
    <li class="mobile-menu__item"><a href="#blog" class="mobile-menu__item__link">Blog</a></li>
    <li class="mobile-menu__item"><a href="/latest-project-budgety" class="mobile-menu__item__link">Latest Project</a></li>								
    <li class="mobile-menu__item"><a href="#contact" class="mobile-menu__item__link">Contact</a></li>								
  </ul>
</nav>
<!-- ./End Mobile Menu -->


<!-- ./Header -->
</div>
<!-- ./End Navigation Mobile Menu-->
