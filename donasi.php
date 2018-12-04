<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div>
	<!--navbar-->
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
<div class="jumbotron text-center">
  <h1>Donasi</h1>
  <!--navbar-->
  <div class="container">
</div>
<?php
	$conn= new mysqli("localhost","root","","mydb");
	$result=$conn->query('SELECT * FROM page');
	while(1){
		echo'<div class="row">';
		$j=0;
		while($j<3 && $result!=empty){
			$row=mysqli_fetch_assoc($result);
			if($row==NULL)break;
			echo'<div class="col-lg-4 col-sm-6 portfolio-item rounded border border-success bg-success">
			  <div class="card h-100">
				<div class="card-body">
				  <h4 class="card-title">
					'+$row['title']+'
				  </h4>
				  <p class="card-text">'+$row['small_desc']+'</p>
				<form action="validate%20sign-in.php" method=post>
					<input type=radio name=id_page value='+$row['id_page']+'style=display:none;>
					<button type=submit>visit<button>
				</form>
				</div>
			  </div>
			</div>';
			$j++;
		}
		echo'</div>'
		$conn= new mysqli("localhost","root","","mydb");
	}
			//value in the middle
?>
</div>

</body>
</html>