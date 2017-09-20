<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">

    
    <style>
			#sub
			{
				width:20%;
				margin-left:38%;
				background:#ed2553;
			}
    </style>
    
  </head>

  <body>

    
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Trigger'17 Login</h1>
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form action="log.php" method="post">
      <div class="input-container">
        <input type="text" name="us" id="Username" required="required"/>
        <label for="Register Number">Register Number</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" name="pa" id="Password" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <input id="sub" type="submit" name="submit" id="sub" class="btn btn-primary btn-lg" value="LOGIN"></input>

      <div class="footer"><p>For Registered Participants</p></div>
    </form>
  </div>
  
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
	