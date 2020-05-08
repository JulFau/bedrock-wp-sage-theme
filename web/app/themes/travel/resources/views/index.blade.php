<html {!! get_language_attributes() !!}>
@include('partials.head')

<body @php body_class() @endphp>
  @php do_action('get_header') @endphp
  @include('partials.header')
  <section class="hero is-large has-background">
    @if {{ $property = get_field('tour_primary')}}
    <img class="hero-background" src="@asset('images/Banner_Background.jpg')" alt="">
    <div class="hero-body">
      <div class="container is-centered">
        <div class="columns is-mobile is-centered">
          <div class="column has-text-centered ">
            <div class="layer">
              <span class="is-size-4 is-size-7-mobile is-size-5-tablet">From $199/person</span>
            </div>
            <div class="title">
              Discover Greece
            </div>
            <div class="subtitle">
              TRAVEL WITH UNIQUE EXPERIENCE
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="services">
    <div class="container">
      <div class="columns is-variable is-8-desktop">
        <div class="column ">
          <div class="title">
            <span>discover</span>
            <h1>Our Hot Services</h1>
            <img src="@asset('images/services/Shape.png')" alt="">
          </div>
          <div class="content">
            <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry's standard
            </p>
          </div>

        </div>
        <div class="column is-four-fifths ">
          <div class="columns is-0 is-mobile is-multiline is-centered ">
            <div class="column is-one-third">
              <img src="@asset('images/services/flyght.jpg')" alt="Plane">
              <h2>Flight booking</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem.</p>
            </div>
            <div class="column is-one-third">
              <img src="@asset('images/services/hotel.jpg')" alt="Plane">
              <h2>Flight booking</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem.</p>
            </div>
            <div class="column is-one-third">
              <img src="@asset('images/services/family.jpg')" alt="Plane">
              <h2>Flight booking</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem.</p>
            </div>
            <div class="column is-one-third">
              <img src="@asset('images/services/boat.jpg')" alt="Plane">
              <h2>Flight booking</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem.</p>
            </div>
            <div class="column is-one-third">
              <img src="@asset('images/services/firecamp.jpg')" alt="Plane">
              <h2>Flight booking</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem.</p>
            </div>
            <div class="column is-one-third">
              <img src="@asset('images/services/corporate.jpg')" alt="Plane">
              <h2>Flight booking</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="video_tour" class="hero  is-dark has-background">
    <img class="hero-background is-transparent" src="@asset('images/hero-video-tour.jpg')" alt="">
    <div class="hero-body">
      <div class="container is-centered">
        <div class="columns is-mobile is-centered">
          <div class="column has-text-centered ">
            <span>DISCOVER</span>
            <h1>Watch Our Video Tour</h1>
            <img src="@asset('images/Shape_White.png')" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="hero-footer">
      <div class="container is-centered">
        <div class="columns  ">
          <div class="column is-mobile has-text-centered ">
            <img src="@asset('images/play_logo.png')" alt="">
            <video poster="@asset('images/video_poster.jpg')">
              <source src="" type="">
            </video>
          </div>
        </div>
      </div>

    </div>

  </section>
  <section id="level_acchived">

    <nav class="level">
      <div class="level-item has-text-centered">
        <div>
          <img src="@asset('images/acchived_lvl/stars.png')" alt="">
          <p class="title">120,859</p>
          <p class="heading">HAPPY TRAVELLERS</p>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div>
          <img src="@asset('images/acchived_lvl/tours.png')" alt="">
          <p class="title">2594</p>
          <p class="heading">SATISFIED TOURS</p>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div>
          <img src="@asset('images/acchived_lvl/world.png')" alt="">
          <p class="title">854</p>
          <p class="heading">DESTINATION</p>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div>
          <img src="@asset('images/acchived_lvl/building.png')" alt="">
          <p class="title">978</p>
          <p class="heading">HOTELS $ RESORTS</p>
        </div>
      </div>
    </nav>
  </section>
  <section id="popular-package">
    <div class="container is-desktop ">
      <div class="title has-text-centered">
        <span>WE OFFER</span>
        <h1>Popular Tour Package</h1>
        <img src="@asset('images/services/Shape.png')" alt="">
      </div>
      <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="card">
              <div class="card-image">
                <figure class="image is-5by4">
                  <div class="tag">
                    Honeymoon
                  </div>
                  <img src="@asset('images/tour/greece.jpg')" alt="Placeholder image">
                </figure>
              </div>
              <div class="card-content">
                <div class="content has-text-centered">
                  <span>$299/person</span>
                  <p>blue beauty of greece</p>
                  <span>5 days / 6 night</span>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <div class="card-image">
                <div class="tag">
                  Holidays
                </div>
                <figure class="image is-5by4">
                  <img src="@asset('images/tour/phuket.jpg')" alt="Placeholder image">
                </figure>
              </div>
              <div class="card-content">
                <div class="content has-text-centered">
                  <span>$299/person</span>
                  <p>blue beauty of greece</p>
                  <span>5 days / 6 night</span>

                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <div class="card-image">
                <div class="tag">
                  Holidays
                </div>
                <figure class="image is-5by4">
                  <img src="@asset('images/tour/paris.jpg')" alt="Placeholder image">
                </figure>
              </div>
              <div class="card-content">
                <div class="content has-text-centered">
                  <span>$299/person</span>
                  <p>blue beauty of greece</p>
                  <span>5 days / 6 night</span>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </section>
  <section id="get-off" class="hero">
    <img class="hero-background is-transparent" src="@asset('images/surfer.jpg')" alt="">
    <div class="hero-body">
      <div class="container is-centered">
        <div class="columns  is-centered">
          <div class="column has-text-centered">
            <h1>Get 10% Off on Your Next Travel</h1>
            <span>Maximum discount 1000$ per person</span>
            <form action="" class="field is-grouped">
              <p class="control  ">
                <input class="input is-medium is-rounded" type="text" placeholder="Enter your email">
              </p>
              <p class="control">
                <a class="button is-white is-rounded is-medium">
                  SUSCRIBE
                </a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="our-smiles">
    <div class="container is-centered has-text-centered is-mobile">
      <div class="title">
        <span>our smiles</span>
        <h1 class="is-capitalized">happy travelers</h1>
        <img src="@asset('images/services/Shape.png')" alt="">
      </div>
      <div class="columns">
        <div class="column">
          <div class="card">
            <div class="card-content is-centered has-text-centered">
              <figure class="image is-96x96">
                <img class="is-rounded" src="@asset('images/our_travelers/traveler1.jpg')" alt="">
              </figure>
              <p class="title is-5 is-capitalized">Travelers name</p>
              <p class="content">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard
              </p>
              <img src="@asset('images/our_travelers/forma.png')" alt="">
            </div>
          </div>

        </div>
        <div class="column">
          <div class="card">
            <div class="card-content is-centered has-text-centered">
              <figure class="image is-96x96">
                <img class="is-rounded" src="@asset('images/our_travelers/traveler1.jpg')" alt="">
              </figure>
              <p class="title is-5 is-capitalized">Travelers name</p>
              <p class="content">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard
              </p>
              <img src="@asset('images/our_travelers/forma.png')" alt="">
            </div>
          </div>

        </div>
        <div class="column">
          <div class="card">
            <div class="card-content is-centered has-text-centered">
              <figure class="image is-96x96">
                <img class="is-rounded" src="@asset('images/our_travelers/traveler1.jpg')" alt="">
              </figure>
              <p class="title is-5 is-capitalized">Travelers name</p>
              <p class="content">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard
              </p>
              <img src="@asset('images/our_travelers/forma.png')" alt="">
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <section id="book-now" class="hero has-background is-large">
    <img class="hero-background " src="@asset('images/book-hero.jpg')" alt="">

    <div class="hero-foot">
      <div class="container is-centered has-text-centered">
        <p class="title"> Ready to plan your trip ?</p>
        <a class="button is-medium is-rounded" href="">Book now</a>
      </div>
    </div>
  </section>
  <section id="destination">
    <div class="container ">
      <div class="title has-text-centered">
        <span>Destination</span>
        <h1 class="is-capitalized">Popular Tourism Countries</h1>
        <img src="@asset('images/services/Shape.png')" alt="">
      </div>
      <div class="columns is-variable is-8 is-mobile">
        <div class="column is-one-quarter">
          <div class="warp">
          <div class="background"></div>
          <img src="@asset('images/destination/thailand.jpg')" alt="">
          <div class="content">
            <div class="info">
              <p class="title">
                Country's name
              </p>
              <span>Price</span>
            </div>
            <a href=""> <img src="@asset('images/arrow_right.png')" alt=""></a>
          </div>
          </div>
        </div>

        <div class="column is-one-quarter">
          <div class="warp">
          <div class="background"></div>
          <img src="@asset('images/destination/italy.jpg')" alt="">

          <div class="content">
            <div class="info">
              
              <p class="title">
                Country's name
              </p>
              <span>Price</span>
            </div>
            <a href=""> <img src="@asset('images/arrow_right.png')" alt=""></a>
          </div>
        </div>
        </div>
        <div class="column is-one-quarter">
          <div class="warp">
          <div class="background"></div>
          <img src="@asset('images/destination/indonesia.jpg')" alt="">

          <div class="content">
            <div class="info">
              <p class="title">
                Country's name
              </p>
              <span>Price</span>
            </div>
            <a href=""> <img src="@asset('images/arrow_right.png')" alt=""></a>
          </div>
        </div>
        </div>
        <div class="column is-one-quarter">
          <div class="warp">
          <div class="background"></div>
          <img src="@asset('images/destination/thailand.jpg')" alt="">

          <div class="content">
            <div class="info">
              <p class="title">
                Country's name
              </p>
              <span>Price</span>
            </div>
            <a href=""> <img src="@asset('images/arrow_right.png')" alt=""></a>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">

  </footer>




  @php do_action('get_footer') @endphp
  @include('partials.footer')
  @php wp_footer() @endphp

</body>

</html>

{{--  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
</div>
{!! get_search_form(false) !!}
@endif --}}

{{-- @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile --}}
