<section class="timeline dark-bg">
  <div class="container">
    <div class="row d-flex flex-column">
        <div class="col-12 d-flex flex-column">
        <h4 class="alt-color border-subtitle text-center text-md-left">{{$timeline_section->timeline_title}}</h4>
    <h2 class="light-text text-center text-md-left">{{$timeline_section->timeline_subtitle}}</h2>
        </div>
    </div>
    <div class="row d-flex justify-content-around">
      <div class="col-12 d-flex flex-md-row flex-column">
        @foreach ($get_timeline_repeater_fields as $timeline_repeater_field)
          <div class="timeline__item @if(!$timeline_repeater_field->timeline_repeater_active) timeline__item--inactive @endif">
            <p class="light-text">{{$timeline_repeater_field->timeline_repeater_title}}</p>
          </div>
        @endforeach
      </div>
    </div>
    <div class="row d-flex flex-column m-t-40">
        <div class="col-12 d-flex flex-column">
      <h4 class="alt-color border-subtitle text-center text-md-left">STACK TAGS</h4>
  <h2 class="light-text text-center text-md-left">Tchnologies</h2>
        </div>
  </div>
  <div class="row">
    <!--Get fields from FrontPage class-->
    @foreach ($get_technologies_repeater_fields as $technology_repeater_field)
      <div class="content-area__item col-md-3 col-sm-4 col-xs-6 mt-4 d-flex">
        <span class="list-bullet alt-color">•</span>
        <div class="content-area__container d-flex flex-column">
        <div class="content-area__item__title text-bold">
          <span class="std-color content-area__item__title__title light-text">
            {{$technology_repeater_field->technology_item_name}}
          </span>
        </div>
        </div>
      </div>
    @endforeach
    <!--./Get fields from FrontPage class-->
  </div>
</div>
</section>