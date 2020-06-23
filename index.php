<?php get_header();?>
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;?>
<?php get_footer(); ?>
    <!-- Slider start -->
    <!-- <section class="slider text-white">
      <div class="row">
        <div class="col-6 ml-4 c-verticalSlider">
          <p class="c-breeSerif c-font-6vw">a comfort corner for your child</p>
          <button type="button" class="btn btn-outline-light mb-5">LEARN MORE</button>
        </div>
      </div>
    </section> -->
    <!-- Slider End -->
    <!-- Welcome start -->
    <!-- <section>
      <div class="mt-5 container text-center w-75">
        <p class="c-breeSerif c-font-3vw">Welcome to Kids Corner</p>
        <p class="font-weight-lighter c-lato c-font-2vw">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in laoreet purus. Phasellus turpis lacus, feugiat eu tincidunt a, ultrices quis tellus. Ut eu justo a nunc gravida adipiscing. Aenean et lorem eget nunc adipiscing dapibus. Nullam viverra tincidunt nisl, ut tincidunt orci. Nulla facilisi. Etiam eu libero orci. Praesent sollicitudin risus nec auctor venenatis. Nunc sed iaculis diam. Duis tortor eros, convallis ultrices consequat id, congue quis justo. Curabitur ac    tincidunt odio.<br><br>
          If you are a parent looking for a place where your child will grow the best, look no further,
          <a href="#"><span class="text-primary">talk to us now.</span></a>
        </p>
      </div>
    </section> -->
    <!-- Welcome End -->
    <!-- OFFERINGS start -->
    <!-- <section class="offering text-white">
      <div class=" container text-center">
        <div class="pt-5 c-breeSerif c-font-3vw">
          Our Offerings
        </div>
        <div class="row">
          <div class="col-md m-5">
            <img class="img-fluid p-3 bg-light border border-light rounded-circle" src="<?php echo get_template_directory_uri(); ?>/images/backpack-1.png" alt="">
            <div class="m-3 c-breeSerif c-font-2vw">School Pickups</div>
            <p class="c-lato">Duis neque quam, auctor id sem sed, semper eleifend ligula. Donec mollis arcu vel sem ornare rutrum in in magna. Pellentesque in consectetur felis.</p>
          </div>
          <div class="col-md m-5">
            <img class="img-fluid p-3 bg-light border rounded-circle " src="<?php echo get_template_directory_uri(); ?>/images/bookshelf.png" alt="">
            <div class="m-3 c-breeSerif c-font-2vw">Extensive Library</div>
            <p class="c-lato">Duis neque quam, auctor id sem sed, semper eleifend ligula. Donec mollis arcu vel sem ornare rutrum in in magna. Pellentesque in consectetur felis.</p>
          </div>
          <div class="col-md m-5">
            <img class="img-fluid p-3 bg-light border rounded-circle " src="<?php echo get_template_directory_uri(); ?>/images/bus.png" alt="">
            <div class="m-3 c-breeSerif c-font-2vw">Outdoor Trips</div>
            <p class="c-lato">Duis neque quam, auctor id sem sed, semper eleifend ligula. Donec mollis arcu vel sem ornare rutrum in in magna. Pellentesque in consectetur felis.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md m-5">
            <img class="img-fluid p-3 bg-light border border-light rounded-circle" src="<?php echo get_template_directory_uri(); ?>/images/hamburger.png" alt="">
            <div class="m-3 c-breeSerif c-font-2vw">Healthy Food</div>
            <p class="c-lato">Duis neque quam, auctor id sem sed, semper eleifend ligula. Donec mollis arcu vel sem ornare rutrum in in magna. Pellentesque in consectetur felis.</p>
          </div>
          <div class="col-md m-5">
            <img class="img-fluid p-3 bg-light border rounded-circle " src="<?php echo get_template_directory_uri(); ?>/images/medicine.png" alt="">
            <div class="m-3 c-breeSerif c-font-2vw">First Aid Services</div>
            <p class="c-lato">Duis neque quam, auctor id sem sed, semper eleifend ligula. Donec mollis arcu vel sem ornare rutrum in in magna. Pellentesque in consectetur felis.</p>
          </div>
          <div class="col-md m-5">
            <img class="img-fluid p-3 bg-light border rounded-circle " src="<?php echo get_template_directory_uri(); ?>/images/packman.png" alt="">
            <div class="m-3 c-breeSerif c-font-2vw">Games & Activities</div>
            <p class="c-lato">Duis neque quam, auctor id sem sed, semper eleifend ligula. Donec mollis arcu vel sem ornare rutrum in in magna. Pellentesque in consectetur felis.</p>
          </div>
        </div>
      </div>
    </section> -->
    <!-- OFFERINGS end -->
    <!-- Upcoming Camps start -->
    <!-- <section>
      <div class="container m-2 text-center">
        <div class="container w-75 ">
        <p class=" c-breeSerif c-font-3vw">Upcoming Camps</p>
        <p class="font-weight-lighter c-lato c-font-1vw">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in laoreet purus. Phasellus turpis lacus, feugiat eu tincidunt a, ultrices quis tellus. Ut eu justo a nunc gravida adipiscing.</p>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-3">
            <img class="img-fluid col-sm-12 p-0" src="<?php echo get_template_directory_uri(); ?>/images/soccer.png" alt="">
            <div class="d-inline">
              <span class="c-breeSerif c-font-2vw text-secondary">Soccer Camp</span><br>
              <span class="c-lato c-font-1vw text-secondary">15th February 2014</span>
            </div>
            <div class="d-inline float-right">
              <span class="c-lato c-font-1vw text-white bg-info p-2">$35</span>
            </div>
            <hr class="bg-secondary">
            <p class="c-lato text-secondary">Proin luctus felis quis ipsum iaculis iaculis. Fusce turpis nisl, ullamcorper nec nisi pulvinar, ornare dapibus purus. Pellentesque lobortis semper egestas. Donec commodo nisl eu vulputate laoreet. </p>
            <button type="button" class="btn btn-outline-primary rounded-0 ">ENROLL TODAY</button>
          </div>
          <div class="col-md-4 mb-3">
            <img class="img-fluid col-sm-12 p-0" src="<?php echo get_template_directory_uri(); ?>/images/beach.png" alt="">
            <div class="d-inline">
              <span class="c-breeSerif c-font-2vw text-secondary">Beach Camp</span><br>
              <span class="c-lato c-font-1vw text-secondary">3rd March 2014</span>
            </div>
            <div class="d-inline float-right">
              <span class="c-lato c-font-1vw text-white bg-info p-2 ">$75</span>
            </div>
            <hr class="bg-secondary">
            <p class="c-lato text-secondary">Proin luctus felis quis ipsum iaculis iaculis. Fusce turpis nisl, ullamcorper nec nisi pulvinar, ornare dapibus purus. Pellentesque lobortis semper egestas. Donec commodo nisl eu vulputate laoreet. </p>
            <button type="button" class="btn btn-outline-primary rounded-0">ENROLL TODAY</button>
          </div>
          <div class="col-md-4 mb-3">
            <img class="img-fluid col-sm-12 p-0" src="<?php echo get_template_directory_uri(); ?>/images/pet.png" alt="">
            <div class="d-inline">
              <span class="c-breeSerif c-font-2vw text-secondary">Pet Keeping Camp</span><br>
              <span class="c-lato c-font-1vw text-secondary">31st February 2014</span>
            </div>
            <div class="d-inline float-right">
              <span class="c-lato c-font-1vw text-white bg-info p-2 ">$25</span>
            </div>
            <hr class="bg-secondary">
            <p class="c-lato text-secondary">Proin luctus felis quis ipsum iaculis iaculis. Fusce turpis nisl, ullamcorper nec nisi pulvinar, ornare dapibus purus. Pellentesque lobortis semper egestas. Donec commodo nisl eu vulputate laoreet. </p>
            <button type="button" class="btn btn-outline-primary rounded-0">ENROLL TODAY</button>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Upcoming Camps End -->
    <!-- Testimonials start -->
    <!-- <section class="testimonials mt-2 text-white">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row c-vertical">
              <img src="<?php echo get_template_directory_uri(); ?>/images/testimonials.png" class="img-fluid d-block" alt="...">
              <div class="w-50 ml-5">
                <p class="c-lato c-font-2vw">Since the day I started sending my son to Kids Corner, I have  seen him happy like never before. I can work worry free at office now.</p>
                <p class="c-breeSerif c-font-2vw">Scott Jhonson</p>
                <p class="c-breeSerif c-font-1vw">Downtown, New York</p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section> -->
    <!-- Testimonials End -->
    <!-- Blog posts started -->
    <!-- <section class="blog">
      <div class="container w-50 p-3 text-center mx-auto">
      <p class=" c-breeSerif c-font-3vw">Recent Blog Posts</p>
      <p class="font-weight-lighter c-lato c-font-1vw">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in laoreet purus. Phasellus turpis lacus, feugiat eu tincidunt a, ultrices quis tellus. Ut eu justo a nunc gravida adipiscing.</p>
      </div>
      <div class="container p-3">
        <div class="row">
          <div class="col-md-5 mr-5">
            <div class="container position-relative p-0">
              <img class="img-fluid col-md-12 p-0" src="<?php echo get_template_directory_uri(); ?>/images/blog1.png" alt="">
              <span class="c-lato c-font-1vw bg-white p-1 text-info position-absolute c-blogDate">Feburary 15, 2014</span>
            </div>
            <span class=" c-breeSerif c-font-2vw">Picnic to Rock Garden & Sukhna Lake</span>
            <hr>
            <p class="font-weight-lighter c-lato c-font-1vw">Vivamus laoreet vitae mi sit amet mattis. Praesent sagittis libero dui, et adipiscing lorem pharetra non. Vestibulum aliquam adipiscing magna ut adipiscing. Mauris sit amet ante nisl.</p>
          </div>
          <div class="col-md-6">
            <div class="row mb-1">
              <div class="col-sm-5 p-0 mr-5">
                <img class="img-fluid col-sm-12 pr-0" src="<?php echo get_template_directory_uri(); ?>/images/blog2.png" alt="">
                <span class="c-lato c-font-1vw bg-white p-1 text-info position-absolute c-blogDate">Feburary 4, 2014</span>
              </div>
              <div class="col-sm-5 p-0">
                <span class=" c-breeSerif c-font-1.5vw">New swings added in the park</span>
                <hr>
                <p class="font-weight-lighter c-lato c-font-1vw">Vivamus laoreet vitae mi sit amet mattis. Praesent sagittis libero dui, et adipiscing lorem pharetra non. Vestibulum aliquam adipiscing magna ut adipiscing.</p>
              </div>
            </div>
            <div class="row mt-6 mt-1">
              <div class="col-sm-5 p-0 mr-5">
                <img class="img-fluid col-sm-12 pr-0" src="<?php echo get_template_directory_uri(); ?>/images/blog3.png" alt="">
                <span class="c-lato c-font-1vw bg-white p-1 text-info position-absolute c-blogDate">January 25, 2014</span>
              </div>
              <div class="col-sm-5 p-0">
                <span class=" c-breeSerif c-font-1.5vw">Kite flying competition held</span>
                <hr>
                <p class="font-weight-lighter c-lato c-font-1vw">Vivamus laoreet vitae mi sit amet mattis. Praesent sagittis libero dui, et adipiscing lorem pharetra non. Vestibulum aliquam adipiscing magna ut adipiscing.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Blog posts end -->
    <!-- Get in touch -->
    <section class="contact text-white">
      <div class="container  ">
        <div class="container w-75 text-center">
        <p class=" c-breeSerif c-font-3vw pt-5">Get in Touch</p>
        <p class="font-weight-lighter c-lato c-font-1.5vw">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in laoreet purus. Phasellus turpis lacus, feugiat eu tincidunt a, ultrices quis tellus. Ut eu justo a nunc gravida adipiscing.
        </p>
        </div>
      </div>
      <div class="container">
        <div class="row p-5">
          <div class="col-md-4 mr-5">
            <p class=" c-breeSerif c-font-2vw pl-2">Contact Us</p>
            <table class="table text-white c-lato c-font-1.5vw ">
              <tbody >
                <tr>
                  <td><i class="fas fa-map-marker-alt"></i></td>
                  <td>4075, 13-B <br>1 Finite Road <br>Chandigarh - 160099 <br>India
                  </td>
                </tr>
                <tr>
                  <td><i class="fas fa-envelope-open-text"></i></td>
                  <td>mail@thesector.com</td>
                </tr>
                <tr>
                  <td><i class="fas fa-mobile-alt"></i></td>
                  <td>+91-001-767612345</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-lg-7">
            <p class=" c-breeSerif c-font-2vw">Request a Quote</p>
            <form class="border-white">
              <div class="form-group ">
                <input type="email" class="form-control bg-transparent rounded-0"  placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="phone" class="form-control bg-transparent rounded-0"  placeholder="Your Phone No.">
              </div>
              <div class="form-group">
                <textarea class="form-control bg-transparent rounded-0" rows="3" placeholder="Your Message"></textarea>
              </div>
              <button class="btn btn-outline-light rounded-0" type="button" name="button">SUBMIT</button>
            </form>
          </div>
        </div>
      </div>
    </section>
