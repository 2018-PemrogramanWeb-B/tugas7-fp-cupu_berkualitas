<!doctype html>
<html lang="en">
  <head>
    <title>F-SHARE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="assets/css/style.css"> 
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
    



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Navbar Start -->
    <div>
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
            <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""  width="50" height="60" ></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item active">
                <a class="nav-link" href="homelogin">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutlogin">
                  About
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="howtologin">
                  How
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="donatelogin">
                  Donate
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="home">
                  Logout
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
      <!-- Navbar End -->

      <!-- Tempat start --> 
    <section id="tempat" class="section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Bantu kota ABCDEFG</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">20 December 2018 - 31 December 2018</p>
            </div>
            <div class="row">
          <div class="col-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="assets/img/gallery/black.jpg" alt="">
              </div>
            </div>
          </div>

          <?php
			$conn= new mysqli("localhost","root","","mydb");
			if ($conn->connect_error) {
			die("Connection failed: <br>" . $conn->connect_error);
			}
			$result=$conn->query('SELECT * FROM page');
			$row=mysqli_fetch_assoc($result);

			$total=$row['total'];
			$box=(int)($total*0.6/6000);
			$donasi=$total-$box*6000;
			?>
          <table>  
          <tr>
            <td>Jumlah Box</td>
			<td>:</td><td><?php
			echo $box;
			?></td>
            <td></td>
          </tr>
          <tr>
            <td>Jumlah Sumbangan</td>
			<td>:</td><td><?php
			echo $donasi;
			?></td>
            
          </tr>
          <tr>
            <td>Total seluruhnya</td>
			<td>:</td><td><?php
			echo $total;
			?></td>
          </tr>
          </table>
          <br>
              <h5>Kota ABCDEFG merupakan kota yang terletak di VWXYZ dan telah mengalami musibah banjir bandang pada bulan November lalu sehingga semua stok pangan dan pertanian terhanyut oleh banjir. Selain itu akses menuju kesana sangatlah susah karena hanya 1 jalan menuju kesana dan sangat </h5>
          </div>
        </div>
      </div>
    </div>
    </section>
    <!-- Tempat End -->

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
                <form role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                  <div class="row">
                    <div class="col-md-12 form-line">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="email" placeholder="Your Full Name" required data-error="Please enter your name">
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
                            <option>GO-PAY</option>
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
     <!-- Aboutus end -->
 </body>
 </html>