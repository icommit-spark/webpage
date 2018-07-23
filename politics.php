<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iCommit</title>
    <script src="js/vendor/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">

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
    $current = 'politics';
    include 'include/header.php';
    include 'include/navbar.php'
    ?>

      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Making a Difference</h1>
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
                  <h3>Politics</h3>
                  <p>The environmental movement’s challenge isn’t energy, it’s power. Power is what prompts political change, and youth have lots of power! We are too young to run for office, but we can exercise our political power to get politicians to act.
In the past, environmentalists lacked the power necessary to effect major change because there were only a few environmental champions in positions of power. But today, there is a movement of young people who care about the planet and who know how to use their political power to change things. .

You don’t have to sponsor new legislation (although that would be great) or plan a thousand person march (also cool).  Research shows that something as small as making a phone call can make a big difference. Take on these challenges - big and small - to use your political power to change the world.

Ready to commit?
</p>
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/slider_3.jpg)">
                    <iframe width="763" height="450" src="https://www.youtube.com/embed/PNc2S3u5XQA?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
          <div id="listPledges" class="panel panel-default">
              <table id="pledgesTable" class="display" width="100%">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Category</th>
                          <th>Pledge</th>
                          <th>Status</th>
                          <th>Points</th>
                          <th>Time</th>
                      </tr>
                  </thead>
              </table>
          </div>
      </section>


      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div style="margin-top: 0px" class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Meet Our Top Political Contributors</h2>
              <p class="lead">Get a chance to be featured here as one of the top contributors by committing to above tasks!</p>
            </div>
          </div>
          <!-- END row -->
          <?php
          include 'database/config.php';
          $sql = "SELECT `username`, count(*) FROM `pledges` WHERE `username` IS NOT NULL and `category`='politics' GROUP BY `username` ORDER BY count(*) DESC LIMIT 4";
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
                <h3>About iCommit</h3>
                <p>At iCommit, we value the Mother Earth and contribute to a Greener Future for the generations to come. Help us in our mission to improving our lifestyles for the greater good of mankind and motivate others around you. #GoGreen!</p>
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
                  <li><a href="index.html">Home</a></li>
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
    <link rel="stylesheet" type="text/css" href="css/datatables.min.css"/>
    <script src="js/moment.js"></script>
    <script src="js/datatables.min.js"></script>
    <script src="http://cdn.jsdelivr.net/qtip2/3.0.3/jquery.qtip.min.js"></script>
    <script>
        // populate the list of commits from custom.js
        populateCommits('politics');
    </script>

  </body>
</html>