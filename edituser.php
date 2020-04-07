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
  <div class="col-xs-10 col-xs-offset-1">
  <img src="https://img.icons8.com/cute-clipart/128/000000/edit.png">
  <div class="panel panel-primary">
    <div class="panel-heading"><h3>USER EDITING FIELD</h3></div>
    <div class="panel-body">
<form class="form-default" action="adduser.php" method="post" name="addentryuser">
  <div class="form-group">
      <label for="name">Name of User</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="modify name"><br>
      <label for="uname">UserName of User</label>
      <input type="text" name="uname" class="form-control" id="uname" placeholder="modify official username"><br>
      <label for="mail">E-mail of User</label>
      <input type="text" name="mail" class="form-control" id="mail" placeholder="modify registered mail-id"><br>
      <label for="mob">Contact of User</label>
      <input type="text" name="mob" class="form-control" id="mob" placeholder="modify personal contact info."><br>
      <label for="area">Address of User</label>
      <input type="text" name="area" class="form-control" id="area" placeholder="modify present address"><br>
      <label for="dob">DOB of User</label>
      <input type="text" name="dob" class="form-control" id="dob" placeholder="modify existing DOB"><br>
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-secondary btn-block" value="update" name="submitbtn">Update</button><br>
      </div>
    </form></div></div></div></div></div>
</body>
</html>
