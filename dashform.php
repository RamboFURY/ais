<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="https://img.icons8.com/cute-clipart/128/000000/edit.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ED1T</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/e394687089.js"></script>
</head>
<body>
  <div class="panel panel-primary">
    <div class="panel-heading"><h3>REGISTERATION FORM</h3></div>
    <div class="panel-body">
<form class="form-default" action="" method="post" name="register">
  <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="please enter your complete name">
      <label for="username">User Name:</label>
      <input type="text" name="uname" class="form-control" id="uname" placeholder="enter the user name you have chosen">
      <label for="email">E-Mail:</label>
      <input type="text" name="email" class="form-control" id="email" placeholder="enter your E-MAIL">
      <label for="dob">Date Of Birth:</label>
      <input type="text" name="dob" class="form-control" id="dob" placeholder="enter your date of birth">
      <label for="add">Address:</label>
      <input type="text" name="add" class="form-control" id="add" placeholder="place of residence">
      <label for="mob">Contact:</label>
      <input type="text" name="mob" class="form-control" id="mob" placeholder="enter your mobile number">
      <label for="hobby">Hobbies:</label>
      <label for="hobbies"></label>
      <select id="hobby">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      </select>
      <br>
      <label for="gender">Select Gender</label><br>
      <form action="">
      <input type="radio" name="gender" value="male"> Male<br>
      <input type="radio" name="gender" value="female"> Female<br>
      <input type="radio" name="gender" value="other"> Other
      </form>
      <br>
      <label for="pwd">Password:</label>
      <input type="password" name="pwd" class="form-control" id="pwd" placeholder="create a strong password">
      <label for="pwd">Renter-Password:</label>
      <input type="password" name="pwd" class="form-control" id="pwd" placeholder="enter password again">
      <div class="form-group">
      <a href="#"><button type="submit" class="btn btn-primary btn-block" value="SUBMIT" name="submitbtn">Submit</button></a><br>
      </div>
  </div>
</form>
<p>Already Registered?<a href="#"><b>  Click</b></a> here.</p>
</div> </div> </div>
<footer class="footer">
    <div class="container">
       <center>
          <p></p>
       </center>
    </div>
</footer>
</body>
</html>
