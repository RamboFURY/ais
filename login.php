<!doctype html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/png" href="https://img.icons8.com/plasticine/100/000000/monitor.png"/>

    </head>
    <body>

      <div class="container">
      <div class="row">
      <div class="col-xs-6 col-xs-offset-3">
      <img src="https://img.icons8.com/plasticine/100/000000/monitor.png">
      <div class="panel panel-primary">
        <div class="panel-heading"><h3>USER LOGIN</h3></div>
        <div class="panel-body">
    <form class="form-default" action="validate.php" method="POST" name="checkLogin">
                             <div class="form-group">
                                 <label for="uname">Username: </label>
                                 <input type="text" name="uname" class="form-control" id="usname" placeholder="Enter Username">
                             </div>
                             <div class="form-group">
                                 <label for="pswd">Password: </label>
                                 <input type="password" name="pswd" class="form-control" id="pswd" placeholder="Enter Password">
                             </div>
                             <div class="form-group">
		                         <div><input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> />
	                        	 <label for="remember-me">Remember me</label>
                           </div></div>
                             <div class="form-group">
                                 <button type="submit" class="btn btn-primary btn-block">Log in</button>
                             </div>
    </form>
          </div>
        </div>
      </div></div></div>
    </body>
  </html>
