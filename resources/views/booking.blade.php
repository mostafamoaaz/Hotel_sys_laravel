<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agaza - Booking</title>
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
              <li class="active"><a href="#">BOOKING</a></li>
              <li><a href="contact">CONTACT US</a></li>
            </ul>
          </div>
        </div>
      </nav>
    <!--end of navbar-->

    <!--start of booking-body-->
      <div class="booking-head text-center">
        <h1>BOOK NOW<span> !</span></h1>
        <h3>Book now to get your room fastly</h3>
      </div>
      <section class="booking">
        <div class="container">
          <div class="booking-data">
            <form class="booking-form" method="POST" action="/reserveroom">
              {{csrf_field()}}
              <div class="row">
                <div class="col-sm-6 col-xs-12">
                  <div class="input-group">
                    <p>CHECK-IN:</p>
                    <input type="date" name="book-checkin" required="required">
                  </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                  <div class="input-group">
                    <p>CHECK-OUT:</p>
                    <input type="date" name="book-checkout" required="required">
                  </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                  <p>NUMBER OF ADULTS:</p>
                  <select name="book-adults-checker" required="required">

                    <option value="1">1</option><option value="2">2</option><option value="3">3</option>

                  </select>
                </div>

                <div class="col-sm-6 col-xs-12">
                  <p>SERVICES:</p>
                  <select name="serve-full" required="required">

                    <option value="Full Board">Full Board</option>
                    <option value="Half Board">Half Board</option>
                    <option value="All-Inclusive">All-Inclusive</option>

                  </select>
                </div>
                <div class="col-sm-6 col-xs-12">
                  <p>PAYMENT METHOD::</p>
                  <select name="payment_method" required="required">

                    <option value="On Arrival">On Arrival</option>
                    <option value="Online">Online</option>


                  </select>
                </div>

                 <div class="text-center"><input type="submit" value="Book Now"></div>
              </div>
            </form>
          </div>
        </div>
      </section>
    <!--end of booking-body-->

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
