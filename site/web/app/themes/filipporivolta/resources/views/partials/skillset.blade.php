<section id="expertise" class="content-area secondary-bg" id="skillset">
    <div class="container">
        <!-- Main Languages Area -->
        <h3 class="content-area__title">Main Languages</h3>
        <div class="row">
          <!--Get fields from FrontPage class-->
          @foreach ($get_mainlanguages_repeater_fields as $mainlanguages_repeater_field)
            <div class="content-area__item col-md-4 col-sm-6 col-xs-12">
              <div class="content-area__item__title text-bold">
                <span class="std-color content-area__item__title__title">
                    <span class="list-bullet alt-color">•</span> {{$mainlanguages_repeater_field->mainlanguages_title}}
                </span>
              </div>
            </div>
          @endforeach
          <!--./Get fields from FrontPage class-->
        </div>
        <!-- ./Main Languages Area -->
        <!-- Skillset Area -->
        @foreach ($get_skillset_repeater_fields as $skillset_repeater_field)
            <h3 class="content-area__title m-t-64">{{$skillset_repeater_field->skillset_title}}</h3>
            <div class="row">
                <!--Get fields from FrontPage class-->
                @foreach ($skillset_repeater_field->skillset_items as $skillset_item)
                <div class="content-area__item col-md-4 col-sm-6 col-xs-12">
                <div class="content-area__item__title text-bold">
                    <span class="std-color content-area__item__title__title">
                        <span class="list-bullet alt-color">•</span>{{$skillset_item->skillset_item_name}}
                    </span>
                </div>
                </div>
                @endforeach
                <!--./Get fields from FrontPage class-->
            </div>
        @endforeach
        <!-- ./Skillset Area -->
        <div class="d-flex flex-row justify-content-center m-t-64">
            <a href={{$cv_download_link->cv_download_link_url}} role="button" class="button button--medium button--primary small-text" target="_blank">DOWNLOAD AS PDF (IT)</a>
        </div>
    </div>
  </section>