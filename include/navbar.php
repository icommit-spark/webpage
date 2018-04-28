<nav class="navbar navbar-default probootstrap-navbar">
  <div class="container">
    <div class="navbar-header">
      <div class="btn-more js-btn-more visible-xs">
        <a href="#"><i class="icon-dots-three-vertical "></i></a>
      </div>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

    <div id="navbar-collapse" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-center">
        <li class="active"><a href="index.html">Home&emsp;&emsp;&emsp;&emsp;</a></li>
        <li><a href="food.html">Food&emsp;&emsp;&emsp;&emsp;</a></li>
        <li><a href="transportation.html">Transportation&emsp;&emsp;&emsp;&emsp;</a></li>
        <li><a href="shopping.html">Shopping&emsp;&emsp;&emsp;&emsp;</a></li>
        <li><a href="house.html">Around the House&emsp;&emsp;&emsp;&emsp;</a></li>
        <li><a href="politics.html">Politics&emsp;&emsp;&emsp;&emsp;</a></li>
          <li class="active"><a href="contact.html"><b>Contact</b></a></li>
          <li><a class = "active" id = "login-button-clicker" href="#">Login</a></li>
          <div id="modal" class="container" style="display:none">
              <header class="popupHeader">
                                  <span class="modal_close"><i class="fa fa-times"></i></span>
                          </header>
                  <div class="row">
                      <div class="col-md-6 col-md-offset-3">
                          <div class="panel panel-login">
                              <div class="panel-heading">
                                  <div class="row">
                                      <div class="col-xs-6">
                                          <a href="#" class="active" id="login-form-link">Login</a>
                                      </div>
                                      <div class="col-xs-6">
                                          <a href="#" id="register-form-link">Register</a>
                                      </div>
                                  </div>
                                  <hr>
                              </div>
                              <div class="panel-body">
                                  <div class="row">
                                      <div class="col-lg-12">
                                          <form id="login-form" action="database/insertData.php" method="post" role="form" style="display: block;">
                                              <div class="form-group">
                                                  <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                              </div>
                                              <div class="form-group">
                                                  <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                              </div>
                                              <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-sm-6 col-sm-offset-3">
                                                          <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-lg-12">
                                                          <div class="text-center">
                                                              <a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </form>
                                          <form id="register-form" action="database/insertData.php" method="post" role="form" style="display: none;">
                                              <div class="form-group">
                                                  <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                              </div>
                                              <div class="form-group">
                                                  <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                              </div>
                                              <div class="form-group">
                                                  <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                              </div>
                                              <div class="form-group">
                                                  <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                              </div>
                                              <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-sm-6 col-sm-offset-3">
                                                          <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                                      </div>
                                                  </div>
                                              </div>
                                          </form>
                                          <button type="button" id ="closeModal" class="btn btn-default" data-dismiss="modal">Close</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
      </ul>
    </div>
  </div>
</nav>