<section class="content-area secondary-bg">
        <div class="container">
            <h3 class="content-area__title">Experience</h3>
            <div class="row">
              <!--Get fields from FrontPage class-->
              @foreach ($get_experience_repeater_fields as $experience_repeater_field)
                <div class="content-area__item col-md-4 col-sm-6 col-xs-12 mt-4 d-flex">
                  <span class="list-bullet alt-color">•</span>
                  <div class="content-area__container d-flex flex-column">
                  <div class="content-area__item__title text-bold">
                    <span class="std-color content-area__item__title__title">
                      @if($experience_repeater_field->experience_certification)
                      <span class="certification alt-color">CERT </span> -
                      @endif
                      {{$experience_repeater_field->experience_title}}
                    </span>
                  </div>
                  <div class="content-area__item__meta d-flex flex-column">
                    <span class="std-color text-bold">{{$experience_repeater_field->experience_institute}}</span>
                    @if($experience_repeater_field->experience_date)
                      <span class="std-color mt-2">{{$experience_repeater_field->experience_date}}</span>
                    @endif
                  </div>
                  </div>
                </div>
              @endforeach
              <!--./Get fields from FrontPage class-->
            </div>
            <div class="d-flex flex-row justify-content-center mt-4">
              <a href={{$cv_download_link->cv_download_link_url}} role="button" class="button button--medium button--primary small-text" target="_blank">DOWNLOAD AS PDF (IT)</a>
            </div>
        </div>
      </section>