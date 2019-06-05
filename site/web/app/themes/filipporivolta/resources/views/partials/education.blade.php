<section class="content-area pb-0 secondary-bg">
  <div class="container">
      <h3 class="content-area__title">Education</h3>
      <div class="row">
        <!--Get fields from FrontPage class-->
        @foreach ($get_education_repeater_fields as $education_repeater_field)
          <div class="content-area__item col-md-4 col-sm-6 col-xs-12 mt-4 d-flex">
            <span class="list-bullet alt-color">•</span>
            <div class="content-area__container d-flex flex-column">
              <div class="content-area__item__title text-bold">
                <span class="std-color content-area__item__title__title">
                  @if($education_repeater_field->education_certification)
                  <span class="certification alt-color">CERT </span> -
                  @endif
                  {{$education_repeater_field->education_title}}
                </span>
              </div>
              <div class="content-area__item__meta">
                @if($education_repeater_field->education_institute)
                  <span class="std-color">{{$education_repeater_field->education_institute}}</span>
                @endif
                @if($education_repeater_field->education_date)
                  <span class="std-color">- {{$education_repeater_field->education_date}}</span>
                @endif
              </div>
          </div>
          </div>
        @endforeach
        <!--./Get fields from FrontPage class-->
      </div>
  </div>
</section>