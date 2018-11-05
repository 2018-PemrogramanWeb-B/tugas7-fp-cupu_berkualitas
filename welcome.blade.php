<!doctype html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel {
  /* any dimensions are fine, it can be responsive with max-width */
  width: 100vw;
  height: 50vh;
}

.carousel-inner {
  /* make sure your .items will get correct height */
  height: 100%;
}

.item {
  background-size: cover;
  background-position: 50% 50%;
  width: 100%;
  height: 100%;
}
.img{
	background-size:cover;
}

  </style>
  </head>
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <div>
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">F-SHARE</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About us</a></li>
              <li><a href="#howto">How to</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="Sign"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
          </div>
        </nav>
  
    </div>
        <div>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="broken beach.png" alt="broken beach">
              <div class="carousel-caption">
                <h3>title ke x</h3>
                <p>comment ke a</p>
              </div>
            </div>

            <div class="item">
              <img src="broken beach.png" alt="broken beach">
              <div class="carousel-caption">
                <h3>title ke y</h3>
                <p>comment ke b</p>
              </div>
            </div>

            <div class="item">
              <img src="broken beach.png" alt="broken beach">
              <div class="carousel-caption">
                <h3>title ke z</h3>
                <p>comment ke c</p>
              </div>
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
          </div>
        </div>
		<div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed elit lorem. Vivamus ac lectus justo. Integer tempor sed dui sit amet cursus. Phasellus in nisi id neque dapibus pulvinar at commodo magna. Etiam eleifend ipsum vel facilisis facilisis. Etiam ut turpis in tellus varius volutpat. Morbi risus lacus, ultricies et maximus eleifend, interdum vitae ligula. Donec ut hendrerit metus, at facilisis magna. Suspendisse nec ante in dolor egestas dignissim sed vitae orci. Pellentesque sit amet mauris tristique, blandit tellus in, auctor felis. Ut imperdiet pharetra imperdiet.

Sed eu est a justo pulvinar tincidunt eu ac purus. Quisque sit amet nisi lectus. Aenean ut magna id purus sagittis molestie id ultrices justo. Vestibulum congue fringilla urna, in rutrum odio volutpat eu. Fusce vel felis at tortor accumsan pretium. Suspendisse potenti. Nulla facilisi.

Phasellus sit amet maximus libero. Suspendisse in ipsum elit. Nullam risus lorem, pharetra sit amet dolor ac, finibus imperdiet sapien. Mauris lobortis molestie sapien, id faucibus dolor lobortis sed. Sed sit amet rutrum sem. Ut vulputate enim at urna pretium ultrices. Nullam vulputate arcu nec pulvinar pretium. Etiam pretium ut lorem quis dictum. Nulla sed massa nec nisl dictum cursus eu nec dolor. Pellentesque lacinia massa sit amet ligula tincidunt volutpat. In gravida in quam sed laoreet.

Integer suscipit sodales ultricies. Sed aliquet feugiat elit, sed sollicitudin mi scelerisque ut. Donec nec nulla porttitor velit consequat malesuada in ut nulla. Integer bibendum lacinia iaculis. Fusce id diam urna. Phasellus consectetur eleifend ex non efficitur. Vestibulum venenatis imperdiet nisi quis gravida.

Sed tincidunt ut odio vel consectetur. Donec scelerisque vestibulum elit luctus pretium. Aenean urna erat, sodales iaculis dignissim non, tincidunt sed erat. Pellentesque ac tortor et quam sagittis malesuada at in tellus. Proin lobortis ac velit sed egestas. Donec mattis odio ac arcu dapibus imperdiet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur porttitor velit sem, quis pellentesque leo interdum in. Suspendisse id tortor magna. Suspendisse potenti. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In hac habitasse platea dictumst. Phasellus sit amet iaculis nunc. Duis et nulla efficitur, tincidunt erat vitae, eleifend felis.</p></div>


 </body>
</html>