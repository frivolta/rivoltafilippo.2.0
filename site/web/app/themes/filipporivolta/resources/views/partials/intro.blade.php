@if (!$intro_section->intro_invert_colors)
<section id="intro" class="intro primary-bg">
@else
<section id="intro" class="intro">
@endif
    <div class="container">
      <div class="row align-items-center justify-content-between">
        @if (!$intro_section->intro_invert_colors)
        <!-- Section Tilte -->
        <div class="intro__description col-12 col-lg-5 md-margin-nine-bottom sm-margin-50px-bottom text-center text-md-left last-paragraph-no-margin">
           <h4 class="light-text border-subtitle">{{$intro_section->intro_text_subtitle}}</h4>
           <h2 class="light-text">{!!$intro_section->intro_text_title!!}</h2>
           <p class="light-text weight-500">{!!$intro_section->intro_text_text!!}</p>
           @if ($intro_section->intro_link_link)
           <a href={{$intro_section->intro_link_link}} role="button" class="button button--small button--black small-text">{{$intro_section->intro_link_text}}</a>
           @endif
        </div>
        <!-- ./Section Title -->
        <!-- Feature Boxes -->
        <div class="feature-boxes col-12 col-lg-6 md-margin-nine-bottom sm-margin-50px-bottom text-center text-md-left last-paragraph-no-margin row">
          <!-- Feature Column -->
          <div class="feature-boxes__item col-xs-12 col-md-6">
            <div class="intro__icon">
              <img src={{$intro_section->intro_first_icon}} alt="intro-icon"/>
            </div>
            <div class="intro__text">
              <h5 class="light-text weight-500">{{$intro_section->intro_first_title}}</h5>
              <p class="light-text weight-500">{{$intro_section->intro_first_text}}</p>
              @if ($intro_section->intro_first_link)
              <a class="light-link weight-600 small-text" href={{$intro_section->intro_first_link}}>Read More</a>
              @endif
            </div>
          </div>
          <!-- ./Feature Column -->
          <!-- Feature Column -->
          <div class="feature-boxes__item col-xs-12 col-md-6">
            <div class="intro__icon">
              <img src={{$intro_section->intro_second_icon}} alt="intro-icon"/>
            </div>
            <div class="intro__text">
              <h5 class="light-text weight-500">{{$intro_section->intro_second_title}}</h5>
              <p class="light-text weight-500">{{$intro_section->intro_second_text}}</p>
              @if ($intro_section->intro_second_link)
              <a class="light-link weight-600 small-text" href={{$intro_section->intro_second_link}}>Read More</a>
              @endif
            </div>
          </div>
          <!-- ./Feature Column -->
          <!-- Feature Column -->
          <div class="feature-boxes__item col-xs-12 col-md-6">
            <div class="intro__icon">
              <img src={{$intro_section->intro_third_icon}} alt="intro-icon"/>
            </div>
            <div class="intro__text">
              <h5 class="light-text weight-500">{{$intro_section->intro_third_title}}</h5>
              <p class="light-text weight-500">{{$intro_section->intro_third_text}}</p>
              @if ($intro_section->intro_third_link)
              <a class="light-link weight-600 small-text" href={{$intro_section->intro_third_link}}>Read More</a>
              @endif
            </div>
          </div>
          <!-- ./Feature Column -->
          <!-- Feature Column -->
          <div class="feature-boxes__item col-xs-12 col-md-6">
            <div class="intro__icon">
              <img src={{$intro_section->intro_fourth_icon}} alt="intro-icon"/>
            </div>
            <div class="intro__text">
              <h5 class="light-text weight-500">{{$intro_section->intro_fourth_title}}</h5>
              <p class="light-text weight-500">{{$intro_section->intro_fourth_text}}</p>
              @if ($intro_section->intro_fourth_link)
              <a class="light-link weight-600 small-text" href={{$intro_section->intro_fourth_link}}>Read More</a>
              @endif
            </div>
          </div>
          <!-- ./Feature Column -->
        </div>
        <!-- ./Feature Box -->
        @else
        <!-- Section Tilte-->
        <div class="intro__description col-12 col-lg-5 md-margin-nine-bottom sm-margin-50px-bottom text-center text-md-left last-paragraph-no-margin">
            <h4 class=" border-subtitle alt-color">{{$intro_section->intro_text_subtitle}}</h4>
            <h2 class="intro__description__title">{!!$intro_section->intro_text_title!!}</h2>
            <p class="weight-500">{!!$intro_section->intro_text_text!!}</p>
            @if ($intro_section->intro_link_link)
            <a href={{$intro_section->intro_link_link}} role="button" class="button button--small button--black small-text">{{$intro_section->intro_link_text}}</a>
            @endif
          </div>
         <!-- ./Section Title -->
         <!-- Feature Boxes -->
         <div class="feature-boxes col-12 col-lg-6 md-margin-nine-bottom sm-margin-50px-bottom text-center text-md-left last-paragraph-no-margin row">
           <!-- Feature Column -->
           <div class="feature-boxes__item col-xs-12 col-md-6">
             <div class="intro__icon">
               <img src={{$intro_section->intro_first_icon}} alt="intro-icon"/>
             </div>
             <div class="intro__text">
               <h5 class="weight-500">{{$intro_section->intro_first_title}}</h5>
               <p class=" weight-300">{{$intro_section->intro_first_text}}</p>
               @if ($intro_section->intro_first_link)
               <a class="weight-600 small-text" href={{$intro_section->intro_first_link}}>Read More</a>
               @endif
             </div>
           </div>
           <!-- ./Feature Column -->
           <!-- Feature Column -->
           <div class="feature-boxes__item col-xs-12 col-md-6">
             <div class="intro__icon">
               <img src={{$intro_section->intro_second_icon}} alt="intro-icon"/>
             </div>
             <div class="intro__text">
               <h5 class="weight-500">{{$intro_section->intro_second_title}}</h5>
               <p class=" weight-300">{{$intro_section->intro_second_text}}</p>
               @if ($intro_section->intro_second_link)
               <a class="weight-600 small-text" href={{$intro_section->intro_second_link}}>Read More</a>
               @endif
             </div>
           </div>
           <!-- ./Feature Column -->
           <!-- Feature Column -->
           <div class="feature-boxes__item col-xs-12 col-md-6">
             <div class="intro__icon">
               <img src={{$intro_section->intro_third_icon}} alt="intro-icon"/>
             </div>
             <div class="intro__text">
               <h5 class="weight-500">{{$intro_section->intro_third_title}}</h5>
               <p class=" weight-300">{{$intro_section->intro_third_text}}</p>
               @if ($intro_section->intro_third_link)
               <a class="weight-600 small-text" href={{$intro_section->intro_third_link}}>Read More</a>
               @endif
             </div>
           </div>
           <!-- ./Feature Column -->
           <!-- Feature Column -->
           <div class="feature-boxes__item col-xs-12 col-md-6">
             <div class="intro__icon">
               <img src={{$intro_section->intro_fourth_icon}} alt="intro-icon"/>
             </div>
             <div class="intro__text">
               <h5 class="weight-500">{{$intro_section->intro_fourth_title}}</h5>
               <p class=" weight-300">{{$intro_section->intro_fourth_text}}</p>
               @if ($intro_section->intro_fourth_link)
               <a class="weight-600 small-text" href={{$intro_section->intro_fourth_link}}>Read More</a>
               @endif
             </div>
           </div>
           <!-- ./Feature Column -->
         </div>
         <!-- ./Feature Box -->
      @endif
      </div>
    </div>
  </section>