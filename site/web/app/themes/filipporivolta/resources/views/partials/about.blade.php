@if (!$about_section->about_invert_color)
<section id="aboutme" class="about-me" style="background-image: linear-gradient(to bottom, rgba(35,35,35, 0.78), rgba(35,35,35, 0.78)), url(@asset('images/bgs/bg_black_texture.jpg'));">
@else 
<section id="aboutme" class="about-me" style="background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.38), rgba(255,255, 255, 0.38)), url(@asset('images/bgs/bg_white_texture.jpg'));">
@endif
  <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <h4 class="{{!$about_section->about_invert_color ? 'light-text border-subtitle' : 'alt-color border-subtitle'}}">{{$about_section->about_subtitle}}</h4>
        </div>
        <div class="col-xs-12 col-md-12 mt-1">
          <h2 class="{{!$about_section->about_invert_color ? 'light-text' : ''}}">{{$about_section->about_title}}</h2>
        </div>
        <div class="col-xs-12 col-md-6 mt-4 {{!$about_section->about_invert_color ? 'light-text' : ''}}">
          {{$about_section->about_first_column}}
        </div>
        <div class="col-xs-12 col-md-6 mt-md-4 {{!$about_section->about_invert_color ? 'light-text' : ''}}">
          {{$about_section->about_second_column}}
        </div>
        @if ($about_section->about_call_to_action_link) 
        <div class="col-xs-12 col-md-12 mt-5">
          <a href={{$about_section->about_call_to_action_link}} role="button" class="button button--medium button--primary small-text">{{$about_section->about_call_to_action_text}}</a>
        </div>
        @endif
      </div>
  </div>
</section>