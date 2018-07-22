<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iCommit</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://andwecode.com/wp-content/uploads/2015/10/jquery.leanModal.min_.js"></script>
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/owl.carousel.js"></script>
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="probootstrap-search" id="probootstrap-search">
      <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
    </div>

    <div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->

      <?php
      $current = 'index';
      include 'include/header.php';
      include 'include/navbar.php';
      ?>


      <section class="flexslider">
        <ul class="slides">
          <li style="background-image: url(img/slider_1.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">

                 <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Changing the Yourself. Changing the Planet.</h1>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url(img/slider_2.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Educating Yourself and Others</h1>
                  </div>
                </div>
              </div>
            </div>

          </li>
          <li style="background-image: url(img/slider_3.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Saving Money and Earning Happiness</h1>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </section>

      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h2>Start Building a Better Future</h2>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-flex-block">
                <div class="probootstrap-text probootstrap-animate">
                  <h3>About iCommit</h3>
                  <p>At iCommit, we value the Earth and strive to contribute to a thriving environment for the generations to come. As young adults, we believe that you need to play a role in protecting the planet. Help us in our mission aimed at youth that is encouraging them to commit to everyday challenges that would impact the environment. These challenges include things such as cutting back on meat, taking public transit and taking part in rallies and protests. You’ll save the Earth and gain points and badges while you’re at it!</p>
                  <p><a href="#" class="btn btn-primary">Sign Up</a></p>
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/slider_3.jpg)">
                    <iframe width="763" height="450" src="https://www.youtube.com/embed/eRLJscAlk1M?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section" id="probootstrap-counter">
        <div class="container">

          <div class="row">
            <div style="margin-left: 80px" class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-users2"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="20203" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">People Contributing</span>
                </div>
              </div>
            </div>
            <!--<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-user-tie"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="139" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">Tasks to Complete</span>
                </div>
              </div>
            </div>-->
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div style="margin-left: 120px" class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-library"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="99" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">Tasks to Complete</span>
                </div>
              </div>
            </div>
            <div style="margin-left: 80px" class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">

               <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-smile2"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50">1</span>%
                  </span>
                  <span class="probootstrap-counter-label">Respect</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-image: url(img/slider_2.jpg)">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
              <h2 class="mb0">Highlights</h2>
            </div>
          </div>
        </div>
        <div class="probootstrap-tab-style-1">
          <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
            <li class="active"><a data-toggle="tab" href="#featured-news">Trending</a></li>
            <li><a data-toggle="tab" href="#upcoming-events">Latest</a></li>
          </ul>
        </div>
      </section>

      <section style="margin-bottom: 0px" class="probootstrap-section probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">

              <div class="tab-content">

                <div id="featured-news" class="tab-pane fade in active">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel" id="owl1">
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"></figure>
                            <div class="probootstrap-text">
                              <h3><br> </h3>
                              <p>Take public transport three times a week.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>Transportation</span>

                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <div class="probootstrap-text">
                              <h3><br> </h3>
                              <p>Eat meat only twice a week.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>Food</span>

                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <div class="probootstrap-text">
                              <h3><br> </h3>
                              <p>Call Representatives about the issues you care about.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>Politics</span>

                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <div class="probootstrap-text">
                              <h3><br></h3>
                              <p>Don't waste food.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>Food</span>


                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                      </div>
                    </div>
                  </div>
                  <!-- END row -->

                </div>
                <div id="upcoming-events" class="tab-pane fade">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel" id="owl2">
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">

                            <div class="probootstrap-text">
                              <h3><br></h3>
                              <p>Take shorter showers to reduce water use. This will lower your water and heating bills too.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>Around the House</span>

                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <div class="probootstrap-text">
                              <h3><br></h3>
                                <p>When possible, buy meat from local sources.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>Food</span>

                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">

                            <div class="probootstrap-text">
                              <h3><br></h3>
                              <p>Go to a meaningful protest or rally.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>Politics</span>

                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <div class="probootstrap-text">
                              <h3><br></h3>
                              <p>Carpool one a week.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>Transportation</span>

                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                      </div>
                    </div>
                  </div>
                  <!--<div class="row">
                    <div class="col-md-12 text-center">
                      <p><a href="#" class="btn btn-primary">View all events</a></p>
                    </div>
                  </div>-->
                </div>

              </div>

            </div>
          </div>
        </div>
      </section>
<!--
      <section class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Our Featured Courses</h2>
              <p class="lead">Sed a repudiandae impedit voluptate nam Deleniti dignissimos perspiciatis nostrum porro nesciunt</p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/img_sm_1.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                  <h3>Application Design</h3>
                  <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam quos quis nisi voluptatum architecto rerum error.</p>
                  <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">2,928 students enrolled</span></p>
                </div>
              </div>

              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                  <h3>Chemical Engineering</h3>
                  <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam quos quis nisi voluptatum architecto rerum error.</p>
                  <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">7,202 students enrolled</span></p>
                </div>
              </div>

            </div>
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/img_sm_2.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                  <h3>Math Major</h3>
                  <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam quos quis nisi voluptatum architecto rerum error.</p>
                  <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">12,582 students enrolled</span></p>
                </div>
              </div>

              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/img_sm_4.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                  <h3>English Major</h3>
                  <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam quos quis nisi voluptatum architecto rerum error.</p>
                  <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">9,582 students enrolled</span></p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>-->
      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div style="margin-top: 0px" class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Meet Our Top Contributors</h2>
              <p class="lead">Get a chance to be featured here as one of the top contributors!</p>
            </div>
          </div>
          <!-- END row -->

          <?php
          include 'database/config.php';
          $sql = "SELECT `username`, count(*) FROM `pledges` WHERE `username` IS NOT NULL GROUP BY `username` ORDER BY count(*) DESC LIMIT 4";
          $result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
              $userVal = $row['username'];
              $sql2 = "SELECT `location` FROM `user` WHERE `username` = '$userVal'";
              $result2 = $conn->query($sql2);
              $row2 = $result2->fetch_assoc();
          ?>
              <div class="row">
                <div class="col-md-3 col-sm-6">
                  <div class="probootstrap-teacher text-center probootstrap-animate">
                    <figure class="media">
                      <img src="img/person_4.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
                    </figure>
                    <div class="text">
                      <h3><?php echo $row["username"];?></h3>
                      <p><?php echo $row2["location"];?></p>
                      <ul class="probootstrap-footer-social">
                        <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                        <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                        <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <?php
            }
              $conn->close();
             ?>
          </div>
        </div>
      </section>
      <section class="probootstrap-section probootstrap-bg probootstrap-section-colored probootstrap-testimonial" style="background-image: url(img/slider_4.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Everyday Motivation</h2>
              <p class="lead">Thoughts of People you May Know</p>
            </div>
          </div>
          <!-- END row -->
          <div class="row">
            <div class="col-md-12 probootstrap-animate">
              <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">
                <div class="item">

                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/kennedy.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                    </figure>
                    <blockquote class="quote">&ldquo;The supreme reality of our time is ... the vulnerability of our planet.&rdquo; <cite class="author"> &mdash; <span>John F. Kennedy</span></cite></blockquote>
                  </div>

                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/einstein.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                    </figure>
                    <blockquote class="quote">&ldquo;Problems cannot be solved at the same level of awareness that created them.&rdquo; <cite class="author"> &mdash;<span>Albert Einstein</span></cite></blockquote>
                  </div>
                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/mills.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                    </figure>
                    <blockquote class="quote">&ldquo;The sun is the only safe nuclear reactor, situated as it is some ninety-three million miles away.&rdquo; <cite class="author">&mdash; <span>Stephanie Mills</span></cite></blockquote>
                  </div>
                </div>
                  <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/david.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                    </figure>
                    <blockquote class="quote">&ldquo;What is the use of a house if you don't have a decent planet to put it on?.&rdquo; <cite class="author">&mdash; <span>Henry David Thoreau</span></cite></blockquote>
                  </div>
                </div>
                  <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/fox.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                    </figure>
                    <blockquote class="quote">&ldquo;A person who cares about the earth will resonate with its purity.&rdquo; <cite class="author">&mdash; <span>Sally Fox</span></cite></blockquote>
                  </div>
                </div>
                  <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/franklin.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                    </figure>
                    <blockquote class="quote">&ldquo;A nation that destroys its soils destroys itself. Forests are the lungs of our land, purifying the air and giving fresh strength to our people.&rdquo; <cite class="author">&mdash; <span>Franklin D. Roosevelt</span></cite></blockquote>
                  </div>
                </div>
                  <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/robert.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                    </figure>
                    <blockquote class="quote">&ldquo;There's so much pollution in the air now that if it weren't for our lungs, there'd be no place to put it all.&rdquo; <cite class="author">&mdash; <span>Robert Orben</span></cite></blockquote>
                  </div>
                </div>
                  <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/edison.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                    </figure>
                    <blockquote class="quote">&ldquo;The doctor of the future will give no medication, but will interest his patients in the case of the human frame, diet and in the cause and prevention of disease.&rdquo; <cite class="author">&mdash; <span>Thomas Edison</span></cite></blockquote>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- END row -->
        </div>
      </section>

      <!--<section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Why Choose Enlight School</h2>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Consectetur Adipisicing</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                </div>
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Aliquid Dolorum Saepe</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                </div>
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Eveniet Tempora Anisi</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Laboriosam Quod Dignissimos</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                </div>
              </div>

              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Asperiores Maxime Modi</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                </div>
              </div>

              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Libero Maxime Molestiae</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                </div>
              </div>

            </div>
          </div>

        </div>
      </section>-->

      <section class="probootstrap-cta">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Start contributing now!</h2>
              <a href="#" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Sign Up</a>
            </div>
          </div>
        </div>
      </section>
      <footer class="probootstrap-footer probootstrap-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Who we are</h3>
                <p>We're a homeschool activism class. Over the years, we’ve led rallies, raised money for the no-DAPL movement, led a poster campaign to welcome immigrants, and more.  We realized, though, that to create real change we needed to start a movement of youth making changes big and small.</p>
                <h3>Social</h3>
                <ul class="probootstrap-footer-social">
                  <li><a href="#"><i class="icon-twitter"></i></a></li>
                  <li><a href="#"><i class="icon-facebook"></i></a></li>
                  <li><a href="#"><i class="icon-instagram"></i></a></li>
                  <li><a href="#"><i class="icon-youtube"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-md-push-1">
              <div class="probootstrap-footer-widget">
                <h3>Links</h3>
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="food.html">Food</a></li>
                  <li><a href="transportation.html">Transportation</a></li>
                  <li><a href="shopping.html">Shopping</a></li>
                  <li><a href="house.html">Around the House</a></li>
                  <li><a href="politics.html">Politics</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Contact Info</h3>
                <ul class="probootstrap-contact-info">
                  <li><i class="icon-location2"></i> <span>Boston, MA, United States</span></li>
                  <li><i class="icon-mail"></i><span>ebarneson@gmail.com</span></li>
                  <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
                </ul>
              </div>
            </div>

          </div>
          <!-- END row -->

        </div>

        <div class="probootstrap-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-8 text-left">
                <p>&copy; iCommit 2018. All Rights Reserved.</p>
              </div>
              <div class="col-md-4 probootstrap-back-to-top">
                <p><a href="#" class="js-backtotop">Back to top <i class="icon-arrow-long-up"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>

    </div>
    <!-- END wrapper -->


    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>
