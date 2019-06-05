<article @php post_class() @endphp>
  <header>
  </header>
  <div class="entry-content">
    <div class="post container container--article"> 
      <div class="post__thumb">
        @php the_post_thumbnail() @endphp
      </div>
      <div class="post__title">
        <h1 class="entry-title text-regular">
          {!! get_the_title() !!}
        </h1>
      </div>
      <div class="post__content">
        @php the_content() @endphp
      </div>
    </div>
  </div>
</article>
