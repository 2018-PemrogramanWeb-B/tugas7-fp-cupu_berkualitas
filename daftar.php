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


    <!-- Daftar Start -->
    <section id="daftar" class="section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Daftar</h1>
            </div>
          </div>
          <div class="col-lg-7 col-md-12 col-xs-12">
            <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
              <div class="form-wrapper">
                <form role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator" action="validate sign-in.php">
                  <div class="row">
                    <div class="col-md-12 form-line">
                      <div class="form-group">
                        <input type="text" class="form-control" name="uname" placeholder="Username" required data-error="Please enter your Username">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
					<div class="col-md-12 form-line">
						<div class="form-group">
							<input type="text" class="form-control" name="email" placeholder="Email" required data-error="Please enter your Email">
							<div class="help-block with-errors"></div>
						</div> 
					</div>
                      <div class="col-md-12 form-line">
                          <div class="form-group">
                            <input type="password" class="form-control" name="pswd" placeholder="password" required data-error="Please enter your password again">
                            <div class="help-block with-errors"></div>
                          </div>
                      </div>
						
                      <div class="col-md-12 form-submit">
                        <button type="submit" class="btn btn-common" id="form-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Daftar</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                      </div>
                    </div>
                </form>
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- Login End -->

</body>
</html>
