<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agaza - Contact Us</title>
    <link href="{{asset("css/font-awesome.min.css")}}"  rel="stylesheet"/>
    <link href="{{asset("css/bootstrap.min.css")}}"     rel="stylesheet"/>
    <link href="{{asset("css/style.css")}}"             rel="stylesheet"/>
    <link href="{{asset("images/lo.png")}}"             rel="icon" type="image/png"/>
  </head>
  <body>

    <!--Start of social and info-->
    <section class="social-info">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12">
            <div class="social-icons">
              <i class="fa fa-facebook" aria-hidden="true"></i>
              <i class="fa fa-twitter" aria-hidden="true"></i>
              <i class="fa fa-google-plus" aria-hidden="true"></i>
              <i class="fa fa-rss" aria-hidden="true"></i>
            </div>
          </div>
          @auth
          <div class="col-sm-6 col-xs-12">
            <div class="top-info">
              <p><a href="myaccount.html">{{Auth::user()->name }}</a> | <a href="{{ route('logout') }}">Log Out</a></p>
            </div>
          </div>
          @endauth
          @guest
          <div class="col-sm-6 col-xs-12">
            <div class="top-info">
              <p><a href="login">Log In</a> | <a href="sign-up">Sign Up</a></p>
            </div>
          </div>
          @endguest
        </div>
      </div>
    </section>
    <!--Start of social and info-->

    <!--start of navbar-->
    <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="navbar-header">
              <a href="index">
                <img src="images/logo.jpg" width="80" height="80">
              </a>
            </div>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index">Home</a></li>
              <li><a href="rooms">ROOMS</a></li>
              <li><a href="services">SERVICES</a></li>
              <li><a href="booking">BOOKING</a></li>
              <li class="active"><a href="#">CONTACT US</a></li>
            </ul>
          </div>
        </div>
      </nav>
    <!--end of navbar-->

    <!--start of check-in-out-->
    <div class="check-in-out" onclick="openNav()">
      <h3>BOOK NOW</h3>
      <i class="fa fa-address-book-o" aria-hidden="true"></i>
    </div>
    <div id="mySidenav" class="sidenav text-center">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <form method="POST">
        <p>CHECK-IN:</p>
          <input type="date" placeholder="Check-In" name="home-checkin" required="required">
          <p>CHECK-OUT:</p>
          <input type="date" placeholder="Check-Out" name="home-checkout" required="required">
          <p>NUMBER OF ADULTS:</p>
          <select name="adults-checker" required="required">
            <option>ADULTS</option>
            <option value="1">1</option><option value="2">2</option><option value="3">3</option>
            <option value="4">4</option><option value="5">5</option><option value="6">6</option>
            <option value="7">7</option><option value="8">8</option><option value="9">9</option>
            <option value="10">10</option><option value="11">11</option><option value="12">12</option>
          </select>
          <p>NUMBER OF ROOMS:</p>
          <select name="rooms-checker" required="required">
            <option>ROOMS</option>
            <option value="1">1</option><option value="2">2</option><option value="3">3</option>
            <option value="4">4</option>
          </select>
          <p>From <span>USD110</span> /night</p>
          <input type="submit" class="btn" value="CHECK YOUR BOOK">
      </form>
    </div>
    <!--end of check-in-out-->

    <!--start of contact us body-->
    <section class="contact-us">
      <div class="container">
        <div class="text-center">
          <h1>GET IN TOUGHT<span> !</span></h1>
          <h3>Send us your inquires and feedbacks!</h3>
        </div>
        <div class="contact-form-holder">


          <form id="contactus-form" action="addfeedback" method="POST">
            {{csrf_field()}}
            <div class="row">

              <div class="col-xs-12">

              </div>

              <div class="col-sm-6 col-xs-12">
                <div class="input-group input-group-lg">
                  <span class="input-group-addon" id="basic-addon1">?</span>
                  <input type="text" class="form-control" name="contact-subject" placeholder="Subject" aria-describedby="basic-addon1" required="required">
                </div>
              </div>
              <div class="col-xs-12">
                <div class="form-group">
                  <textarea class="form-control" name="contact-message" rows="5" placeholder="Message" required="required"></textarea>
                </div>
              </div>
              <div class="col-xs-12">
                <div class="form-group">
                  <input type="submit" name ="contact-submit" value="Send" class="btn">
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>
    </section>
    <!--end of contact us body-->

    <!--start of footer-->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <div class="footer-contact">
              <h3>Contact Us</h3>
              <p>
                Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. <span>Vivamus magna justo</span>,
                lacinia eget consectetur sed, convallis at tellus. <br><br>Nulla porttitor accumsan tincidunt.
                Vivamus tortor eget <span>felis porttitor</span> volutpat. Vestibulum ante ipsum primis in
                faucibus orci luctus et ultrices posuere cubilia Curae.
              </p>
              <button>Contact Us</button>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="footer-office">
              <h3>Manger Office Hours</h3>
              <h4>Openning Days:</h4>
              <p>Monday – Friday : 9am to 20 pm</p>
              <p>Saturday : 9am to 17 pm</p>
              <h4>Vacations :</h4>
              <p>All Sunday Days</p>
              <p>All Official Holidays</p>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="subscribe">
              <h3>Subscribe</h3>
              <p>
                Leave your mail and we'll talk to you soon.
              </p>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Enter Your Mail">
                <span class="input-group-btn">
                  <button class="btn" type="button">Submit</button>
                </span>
              </div>
              <div class="social-icons">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                  <i class="fa fa-google-plus" aria-hidden="true"></i>
                  <i class="fa fa-rss" aria-hidden="true"></i>
                </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--end of footer-->

    <!--start of last section-->
    <section class="last-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12">
            <div class="copyright">
              <p>Agaza © All Rights Reserved. Developed by <a href="#">FCIH Team</a></p>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="footer-links">
              <ul class="list-unstyled">
                <li><a href="index">HOME</a></li>
                <li><a href="rooms">ROOMS</a></li>
                <li><a href="services">SERVICES</a></li>
                <li><a href="booking">BOOKING</a></li>
                <li><a href="contact">CONTACT US</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--ennd of last section-->

    <!--start of scroll to top button-->
    <div id="scrollTop">
        <i class="fa fa-chevron-circle-up fa-4x" aria-hidden="true"></i>
    </div>
    <!--end of scroll to top button-->

    <script src="{{URL::asset("js/jquery-1.12.1.min.js")}}"></script>
    <script src="{{URL::asset("js/jquery.nicescroll.js")}}"></script>
    <script src="{{URL::asset("js/wow.min.js")}}"></script>
    <script src="{{URL::asset("js/bootstrap.min.js")}}"></script>
    <script src="{{URL::asset("dist/owl.carousel.min.js")}}></script>
    <script src="{{URL::asset("js/main.js")}}"></script>
  </body>
</html>
