<section class="extras m-t-55" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h4 class="border-subtitle text-center text-md-left">LATEST ARTICLES</h4>
                <section class="extras-blog extras__container m-t-30 flex-column flex-lg-row">
                    @foreach ($latest_posts->posts as $latest_post)
                        <div class="extras__item extras__item--image d-flex flex-column justify-content-end align-items-center" style="background-image: url('@php 
                        echo get_the_post_thumbnail_url( $latest_post->ID, 'large' ); 
                        @endphp')" >
                        <a href="
                                @php 
                                    echo get_the_permalink( $latest_post->ID ); 
                                @endphp
                                " class="entry-title--link light-text">
                        <div class="extras__item__meta">
                            <span class="entry-title light-text p-t-20 p-b-20 weight-500">{{$latest_post->post_title}}</span>
                        </div>
                    </a>
                        </div>
                    @endforeach
                </section>
            </div>
            <div class="col-md-6 col-sm-12 mt-5 mt-md-0">
                <h4 class="border-subtitle text-center text-md-left">CURRENTLY WORKING ON</h4>
                <section id="latestproject" class="extras__works extras__container m-t-30 flex-column flex-lg-row">
                    <div class="extras__item primary-bg d-flex flex-column justify-content-center align-items-center p-l-20 p-r-20 p-t-20 p-b-20 m-r-5">
                        <h3 class="light-text text-regular">BUDGETY</h3>
                        <div class="separator m-b-10"></div>
                        <p class="m-b-30 text-light text-regular text-center">A MERN stack app,<br/>
                            built to be deployed as
                            microservices. </p>
                        <a href="/latest-project-budgety" role="button" class="button button--small button--black small-text">DISCOVER MORE</a>
                    </div>
                    <div class="extras__item extras__item--image m-l-5" style="background-image: url(@asset('images/budgety/budgety_hp.jpg'))">
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>