<!DOCTYPE html>
<html>
<head>
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href=" assets/css/slicknav.css">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>
<body>
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/nivo-lightbox.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>
    <script src="assets/js/map.js"></script>
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>


    <!-- Donate Us Section -->
    <section id="donate-map" class="section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Let's Donate</h1>
            </div>
          </div>
          <div class="col-lg-7 col-md-12 col-xs-12">
            <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
              <div class="form-wrapper">
                <form role="form" method="post" id="contactForm" name="contact-form" action=validate_donation.php data-toggle="validator">
                  <div class="row">
                    <div class="col-md-12 form-line">
                      <div class="form-group">
					  
                        <input type="text" class="form-control" id="name" name="uname" placeholder="Your Full Name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-12 form-line">
                      <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
                    <div class="col-md-12 form-line">
                      <div class="form-group">
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone number" required data-error="Please enter your phone number">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
					
					<input type=text name=id_page class="form-control" id="id_page" value="
					<?php
					echo$_POST['id_page'];
					?>
					"checked style=display:none>
					  
                    <div class="col-md-12 form-line">
                      <div class="form-group">
                        <input type="number" class="form-control" id="donation" name="Donation" placeholder="Your Donation" required data-error="Please enter your donation">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="sel1">Select list (select one):</label>
                          <select class="form-control" id="sel1">
                            
                            <option>Transfer Mandiri</option>
                            <option>Transfer BCA</option>
                            <option>Transfer BNI</option>
                            <option>Transfer BRI</option>
                          </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="checkbox">
                        <label><input type="checkbox">Do you accept our terms and privacy?</label>
                      </div>
					  
                      <div class="form-submit">
					  
                        <button type="submit" class="btn btn-common" id="form-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Us Now</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Donate Us Section End -->

</body>
</html>
