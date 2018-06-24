<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <body>
      
          <!--navbar-->
    	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="index.php">LETS TALK</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
			  </button>

		  <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="margin-left: 100px;">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			  <li class="nav-item active" style="margin-left: 100px;">
				<a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item" style="margin-left: 100px;">
				<a class="nav-link btn btn-outline-danger" href="#">LOG OUT</a>
			  </li>
			</ul>
		  </div>
		</nav>
    <!--end navbar-->
    <br>
    <br>
    <!--dashbody-->
    	<div class="container row">
    		<!--left-->
    		<div class="container col-4">
    		
    			<!-- Nav pills -->
				<ul class="nav flex-column nav-pills">
				  <li class="nav-item">
					<a class="nav-link active" data-toggle="pill" href="#home">My Feed</a>
				  </li><br><br>
				  <li class="nav-item">
					<a class="nav-link" data-toggle="pill" href="#menu1">My Profile</a>
				  </li><br><br>
				  <li class="nav-item">
					<a class="nav-link" data-toggle="pill" href="#menu2">Account Settings</a>
				  </li>
				</ul>


    		</div>
    		<!--right-->
    		<div class="container offset-2 col-6">
    			<!-- Tab panes -->
					<div class="tab-content">
					  <div class="tab-pane container active" id="home"><!--post from feed go here--></div>
					  
					  <div class="tab-pane container fade" id="menu1">
					  	<div class="card">
					  		<form method="post" action="#">
					  			<div class="card-body"></div>
					  			<div class="card-footer"></div>
					  		</form>
					  	</div>
					  </div>
					  
					  <div class="tab-pane container fade" id="menu2">...</div>
					  
					</div>
    		</div>
    		
    	</div>
    
    <!--end dashbody-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="js/bootstrap.min.js"></script>
 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>