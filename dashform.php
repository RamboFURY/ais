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
  <div class="container">
  <div class="row">
  <div class="col-xs-6 col-xs-offset-3">
    <img src="https://img.icons8.com/cute-clipart/128/000000/edit.png">
  <div class="panel panel-primary">
      <div class="panel-heading"><h3>REGISTERATION FORM</h3></div>
      <div class="panel-body">
      <form class="form-default" action="adduser.php" method="POST" name="addentry">
      <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="please enter your complete name">
      <label for="uname">User Name:</label>
      <input type="text" name="uname" class="form-control" id="uname" placeholder="enter the user name you have chosen">
      <label for="mail">E-Mail:</label>
      <input type="email" name="mail" class="form-control" id="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="required" placeholder="enter your E-MAIL">
      <label for="mob">Contact:</label>
      <input type="tel" name="mob" class="form-control" id="mob" placeholder="enter your mobile number">
      <label for="addd">Address:</label>
      <input type="text" name="addd" class="form-control" id="addd" placeholder="place of residence">
      <!--
      <label for="gender">Select Gender</label><br>
      <form action="">
      <input type="radio" name="gender" value="male"> Male<br>
      <input type="radio" name="gender" value="female"> Female<br>
      <input type="radio" name="gender" value="other"> Other
      <br>
      <form action="" method="post">
      <label for="hobby">Hobbies:</label>
      <select id="hobby" name="hobby">
      <option value="1">SELECT</option>
      <option value="Dancing">Dancing</option>
      <option value="Drawing">Drawing</option>
      <option value="Writing">Writing</option>
      <option value="Listening music">Listening music</option>
      <option value="Socializing with Friends">Socializing with Friends</option>
      <option value="Swimming">Swimming</option>
      <option value="Writing">Writing</option>
      </select>
     </form>
   -->
   <label for="gender">Gender:(M/F)</label>
   <input type="text" name="gender" class="form-control" id="gender" placeholder="enter your gender">

   <label for="hobby">hobby:</label>
   <input type="text" name="hobby" class="form-control" id="hobby" placeholder="enter your hobbies">


      <br>
      <label for="dob">Date Of Birth:</label>
      <input type="date" name="dob" class="form-control" id="dob" placeholder="enter your date of birth">
      </form>
      <br>
      <!--
      <form action="upload.php" method="post" enctype="multipart/form-data">
      <p><b>Select image to upload:</b></p>
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="submit" value="Upload Image" name="submit">
      </form>
    -->
      <br>
      <label for="pswd">Password:</label>
      <input type="password" name="pswd" class="form-control" id="pswd" required="required" pattern=".{6,}" placeholder="create a strong password">

      <br>
      <div class="form-group">
      <button type="submit" class="btn btn-primary btn-block" value="SUBMIT" name="submitbtn">Submit</button><br>
      </div>
  </div>
</form>
<p>Already Registered?<a href="login.php"><b>  Click</b></a> here.</p>
</div> </div> </div></div> </div>
<footer class="footer">
    <div class="container">
       <center>
          <p></p>
       </center>
    </div>
</footer>
</body>
</html>
