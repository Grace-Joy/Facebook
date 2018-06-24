<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>LetsTalk</title>
  </head>
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
				<a class="nav-link btn btn-outline-primary" data-toggle="modal" data-target="#modLogin" >LOGIN</a>
			  </li>
			</ul>
		  </div>
		</nav>
    <!--end navbar-->
    
    <!--modal for login-->   
     <div class="modal" tabindex="-1" role="dialog" id="modLogin">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
		  
			 <form method="post" action="">
			 	 <div class="modal-header">
					<h5 class="modal-title">LOGIN TO YOUR ACCOUNT</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
			  	</div>
			  	
			  <div class="modal-body">
				<input type="text" class="form-control" name="uname" placeholder="Input your Username">
				<br>
				<input type="password" class="form-control" name="pswd" placeholder="Input your Password">
				<br>
			  </div>
			  
			  <div class="modal-footer">
			  	<input type="submit" class="btn btn-outline-success" value="LOGIN" name="login">
				<input type="reset" class="btn btn-outline-danger" value="RESET">
			  </div>
			 </form>
			  
			</div>
		  </div>
		</div>
      <!--end modal--> 
	<!--body-->
<br>
	<div class="container row">
		<div class="container offset-1 col-6 offset-1">
			<img src="img/header.png" style="margin: 50px 10px 50px 10px;">
		</div>
		<!--left-->
		<div class="container col-4">
				<h1 style="font-size: 25px;font-family: Baskerville, Palatino Linotype, Palatino, Century Schoolbook L, Times New Roman, serif;">Sign Up Today To Join Our Beautiful Community</h1>
			<form action="#" method="post">
				<input type="text" class="form-control" name="surname" placeholder="Input your Surname">
				<br>
				<input type="text" class="form-control" name="firstname" placeholder="Input your Firstname">
				<br>
				<input type="text" class="form-control" name="lastname" placeholder="Input your Lastname">
				<br>
				<input type="text" class="form-control" name="uname" placeholder="Input your Username">
				<br>
				<input type="password" class="form-control" name="pswd" placeholder="Input your Password">
				<br>
				<input type="submit" class="btn btn-outline-success" value="SIGN UP" name="signup">
				<input type="reset" class="btn btn-outline-danger" value="RESET">
				
			</form>
		</div>
		<!--right-->
	</div>

	<!--end body-->
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="js/bootstrap.min.js"></script>
 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>