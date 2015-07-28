<html>
<!-- test to see if this works-->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Burger 25</title>
    <!-- BOOTSTRAP STYLE SHEET -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS STYLE SHEET -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/get-shit-done.css" rel="stylesheet" />



	<!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>




</style>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<script>
function preload(arrayOfImages) {
    $(arrayOfImages).each(function(){
        $('<img/>')[0].src = this;
        // Alternatively you could use:
        // (new Image()).src = this;
    });
}

// Usage:

preload([
    '../img/burger25.gif',
    '../assets/img/burger25.png',

]);
</script>
<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Demo Contact Form';
        $to = 'robertarace@gmail.com';
        $subject = 'Message from Contact Demo ';

        $body = "From: $name\n E-Mail: $email\n Message:\n $message";

        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }

        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }

        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'Your anti-spam is incorrect';
        }

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }
?>
</head>
<body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <div id="navbar-full">
     <div id="navbar">
     <!--
         navbar-default can be changed with navbar-ct-blue navbar-ct-azzure navbar-ct-red navbar-ct-green navbar-ct-orange
         -->
         <nav class="navbar navbar-ct-grey navbar-transparent navbar-fixed-top" role="navigation">
           <div class="alert alert-success hidden">
             <div class="container">
                 <b>Lorem ipsum</b> dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
             </div>
           </div>

           <div class="container">
             <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
               </button>

               <a class="navbar-brand"> <p class="ordernow">ORDER NOW:732-270-0025</p></a>
               <div class="social">
                 <ul>
                   <li><a href="https://www.facebook.com/awesomeburgers"><i class="fa fa-lg fa-facebook"></i></a></li>
                   <li><a href="https://twitter.com/burger_25"><i class="fa fa-lg fa-twitter"></i></a></li>
                   <li><a href="https://plus.google.com/102270544025334014176/about"><i class="fa fa-lg fa-google-plus"></i></a>



               </ul>
            </div>
             </div>

             <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">

                <!-- <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                       <ul class="dropdown-menu">
                         <li><a href="#">Action</a></li>
                         <li><a href="#">Another action</a></li>
                         <li><a href="#">Something</a></li>
                         <li><a href="#">Another action</a></li>
                         <li><a href="#">Something</a></li>
                         <li class="divider"></li>
                         <li><a href="#">Separated link</a></li>
                       </ul>
                 </li>-->

               </ul>

               <ul class="nav navbar-nav navbar-right">
                     <li><a href="index.php">Home</a></li>
                     <li><a href="menu.html" class="btn btn-round btn-default">Menu</a></li>
                     <li><a href="specials.html">Specials</a></li>
                     <li><a href="location.html">Location</a></li>
                     <li><a href="#our_story">Our Story</a></li>
                     <li><a href="#section2">Contact</a></li>
                            <li> <a style="color:#ff0000;" href="assets/img/menuprint.pdf"><strong>Download Menu</strong></a></li>

                </ul>


             </div>
         </nav>
</div>
    <!-- NAVBAR CODE END -->
    <div id="home">
      <div class="parallax-like">
          <div class="overlay">


              <div class="container">
                  <div class="row" style="text-align:center; margin-top:50px;">
                    <div class="container">
                    <img style="height:auto; width:70%; margin-top:3%;" src="assets/img/logo.png">
                    <!--<h2 style="height:auto; width:100%; font-size:60px; font-family:Roboto; font-size:30pt; color:#ff0000;  "><strong>BURGERS - SHAKES - WINGS - SALADS</strong><h2/>
                      <ul style="text-align:left; margin-left:200px;">
                        <li>Sunday -Thursday: 11am-9pm</li>
                        <li>Friday: 11am- 10pm</li>
                        <li>Saturday: 11am-10pm</li>

                      </ul>-->
                    <!-- place parallax content here-->
                  </div>

                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </div>
    <!--HOME SECTION END  -->
    <section id="welcome" style="background-color:#f3f4ea;">
        <div class="container">
            <div id="welcome_row"class="row text-center pad-bottom">

                <div class="row">
                <div id="welcome_col" class="col-lg-6 col-md-6 col-sm-6" style="text-align:middle;">
                  <div class='animatedParent'>
                  <h1 id="welcome_text"style="font-family:Tungsten; font-size:100px; margin-top:10%;">WELCOME</br><img style ="" src ="assets/img/welcome.gif"></h1>

                <p style="text-align:justify;">Welcome to Burger25 where we build the best burgers you’ve ever had. We start with only the freshest ingredients and have created 25 awesome options.

In addition to 25 Awesome Burgers we offer Chicken Wings (boneless and regular), Hot Dogs, Hand Spun Shakes, Fresh Salads, and amazing sides.</p>
<p style="margin-left:-160px;">Hours:</p>
<ul class="hours">
  <li>Sunday -Thursday: 11am-9pm</li>
    <li>Friday: 11am- 10pm</li>
      <li>Saturday: 11am-10pm</li>
</ul>

                </div>
  </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img id="welcome_image" style="height:300px; margin-top:7%;" src="assets/img/stamp.png">
                </div>
                </div>
            </div>
        </div>
    </section>
    <!--SERVICES SECTION END  -->
  <div class="parallax-like1">
        <div class="overlay">


            <div class="container">
                <div class="row">





                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--PARALLAX LIKE / STATS SECTION END  -->
    <section id="product" style="background-color:#f3f4ea;" >
        <div class="container">

              <div class="container">
                  <div class="row" name="Our 25 Burgers" id="Our 25 Burgers">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <img id="our25_burgers"style="height:auto; width:100%; margin-top:10%;" src="assets/img/welcome.jpg">
                    </div>
                    <div class="row">
                    <div class='col-lg-6' style="padding-right:40px;">
                      <center>  <h1 class="our25">OUR25</h1></center>
                        <center><h1 class="burgers"style="">Burgers</h1></center>
                      <p id="paragraph"style=" margin-top:-40px; text-align:justify; margin-left:16.5%; margin-right:15%; font-size:11.5pt;">WE USE ONLY THE BEST INGREDIENTS THAT KEEP</p>
<p id="paragraph"style=" margin-top:-10px; text-align:justify; margin-left:16.5%; margin-right:15%; font-size:12pt;">
CUSTOMERS COMING BACK AGAIN AND AGAIN</p>
                        </div>
                    </div>
                  </div>
                  <div class="row" style="margin-top:5%;">
                  <div name="certified angus beef" id="certified angus beef">
                    <div class="col-lg-6 col-md-6">
                      <h1 style="font-family:festivo; font-size:45pt;">WE ONLY USE CERTIFIED ANGUS BEEF</h1>
                      <p style="margin-left:1%; margin-right:10%; text-align:justify;">The Certified Angus Beef ® brand is the best Angus brand available. It's a cut above USDA Prime, Choice and Select. Ten quality standards — including abundant marbling, ensure every bite is exceptionally flavorful, incredibly tender and naturally juicy.</p>
                    </div>
                    <div class="container">
                    <div class="col-lg-6 col-md-6">
                      <!--<img src="assets/img/kids.gif" style="margin-top:7%;">-->
                      <div>
                    <center>  <img style="height:auto; width:60%;"src="assets/img/certified.gif"></center>
                    </div>
                    </div>
                    </div>
                  </div>
                  </div>
                </section>

<section style="background-color:#f3f4ea;">
  <div class="container">
                  <div class="row" name="milkshakes" id="milkshakes">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                    <center><img id="milkshake_image" style="height:auto; width:80%; margin-bottom:80px;"src="assets/img/realshake.png"></center>
                  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <img src="assets/img/milkshakes.png" id="milkshake_font" style="height:auto; width:100%; margin-left:0%; margin-top:-60px;">
                        <p style="text-align:justify; margin-right:5%; margin-top:-70px; margin-left:18%;">We have new milshake flavors every month! Call or visit us to find out what our new flavor is!</p>
                    </div>
                  </div>
                </div>
                <div class="parallax-like1">
                      <div class="overlay">


                          <div class="container">
                              <div class="row">





                                      </div>
                                  </div>

                              </div>
                          </div>
                      </div>
                  </div>
                <div class="container">
                  <div class="row" name="ingredients" id="ingredients">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="text-align:center;">
                      <h1 id="our_story" style="font-family:Tungsten; font-size:125px;">OUR STORY</h1>

                      <div class="col-lg-12 col-md-12 col-sm-12">
                      <p style="padding-right:0px; text-align:justify; margin-left:16.5%; margin-right:16.5%; margin-top:-20px">We started humbly but with a grand plan: To create the 25 finest burgers anyone has ever tasted, end of story. And with nothing but a passion and this dream, we've grown and grown and exploded to this point where you're reading this right now and probably salivating.

Our secret? It's not one, admittedly. The best ingredients is a big part. An unrelenting love for the burger is the other big part. Between those two, we think we pretty much have our burger bases covered.

 So head on over to Burger 25 in Toms River and feast your eyes on the greatest burgers ever made. You won't be sorry you did.</p>
                      </div>
                  </div>
                  </div>
</section>
<section id="section2">
<div class="container">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12" style="text-align:center;">
                    <img style="margin-top:0%; height:auto; width:60%;"src="assets/img/yourself.gif">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">

    <form class="form-horizontal" role="form" method="post" action="index.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  name="name" placeholder="First & Last Name" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="email" placeholder="example@domain.com" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <! Will be used to display an alert to the user>
        </div>
    </div>
</form>

                        </div>

                  </div>


                </div>

    </section>





    <!-- CONTACT SECTION END-->

    <!-- CLIENTS SECTION END-->
    <footer>
        © 2015 Perspectiveco.co  | <a href="http://www.perspectiveco.co/" target="_blank">by Perspective Co.</a>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- REQUIRED SCRIPTS FILES -->
    <!-- CORE JQUERY FILE -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- REQUIRED BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- BACKGROUND VIDEO PLUGIN  -->
    <script src="assets/js/jquery.mb.YTPlayer.js"></script>
    <!-- SCROLLING SCRIPTS PLUGIN  -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!-- CUSTOM SCRIPTS   -->
    <script src="assets/js/custom.js"></script>




  <script src="jquery/jquery-1.10.2.js" type="text/javascript"></script>
  <script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
  <script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
  <script src="assets/js/gsdk-checkbox.js"></script>
  <script src="assets/js/gsdk-radio.js"></script>
  <script src="assets/js/gsdk-switch.js"></script>
  <script src="assets/js/get-shit-done.js"></script>


</body>

</html>
<script src="assets/js/css3-animate-it.js"></script>
