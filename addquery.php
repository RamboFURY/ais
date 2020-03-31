<?php/*
      session_start();

      if(!isset($_SESSION['uname']))
      {
           $_SESSION['error'] = 'noaccess';
           header("Location:login.php");
      }*/
?>
<!doctype html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="icon" type="image/png" href="https://img.icons8.com/doodle/48/000000/opened-folder--v3.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Query-DataBase</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <div class="logo">
        <a href="dashform.php" class="logo-link"><p>DataBase</p></a>
    </div>
            <!-- Navigation Bar, also contains a search box -->
            <nav class="searchres-bar">
                <ul class="nav-list">
                  <li>
                    <form class="searchform searchform-nav" action="search.php" method="get">
                        <div class="form-group">
                            <input type="text" name="query" class="searchbox searchbox-nav" id="username" placeholder="Search..." <?php if(isset($_GET['query'])) {echo 'value="'.$_GET['query'].'"';}?>>
                            <button type="submit" class="btn btn-secondary searchbtn searchbtn-nav">Search</button><!--search box and button field for accessing databse at the same time-->
                        </div>
                    </form>
                  </li>
                    <li><a class = "nav-darklnk" href="addissue.php"><button type="submit" class="nav-btn">Add Query</a></li>
                    <li>
                      <!-- Displays the name of the logged in user from session and presnets relevant account options in a dropdown-->
                      <div class="dropdown">
                        <button type="submit" class="nav-btn"><?php echo $_SESSION['name']; ?></button>
                        <div class="dropdown-content">
                        <a href="logout.php">Logout</a>
                        </div>
                      </div>
                    </li>
                </ul>
            </nav>
  </header>
  <main>
    <div class="addnew-main">
      <?php
      // Display relevant success/error message after a user submit a new issue.
       if(isset($_SESSION['error']))
       {
         if($_SESSION['error']=='add_issue_failed')
         {
           echo '<div class = "errormessage">Unable to Add New Issue. Please Try Again.<div>';
           unset($_SESSION['error']);
         }
         if($_SESSION['error']=='noerror')
         {
           echo '<div class = "successmessage">Issue has been Submitted Successfully for Moderation.<div>';
           unset($_SESSION['error']);
         }
       }
      ?>
    <!-- Form to accept details of new issue -->
    <form class="form-default form-create-topic" action="submitissue.php" method="post" name="addissue">
            <div class="form-group">
                <label for="title">Topic Title</label>
                    <input type="text" name="title" class="form-control issue-title" id="title" placeholder="Title of your Issue">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                    <textarea name="description" class="form-control form-textarea" rows="5" cols="100" placeholder="Please Describe the Issue"></textarea>
            </div>
            <div class="form-group">
                <label for="resolution">Resolution</label>
                    <textarea name="resolution" class="form-control form-textarea" rows="5" cols="100" placeholder="Resolution for the Described Issue"></textarea>

            </div>
            <button type="submit" class="btn btn-secondary">Submit</button>
        </form>

<script>
      //Add issue form validation using jquery.
      $(function() {
        // Initialize form validation on the registration form.
        // It has the name attribute "registration"
        $("form[name='addissue']").validate({
        // Specify validation rules
    rules: {
      title: {
        required: true,
        minlength: 10,
        maxlength: 250
      },
      description: {
        required: true,
        minlength: 10
      },
      resolution: {
        required: true,
        minlength: 10
      }
    },
    // Specify validation error messages
    messages: {
      title: {
        required: "Please provide a title",
        minlength: "The title must be at least 10 characters long",
        maxlength: "The title must be less than 250 characters long"
      },
      description: {
        required: "Please provide a description",
        minlength: "The description must be at least 10 characters long"
      },
      resolution: {
        required: "Please provide a resolution",
        minlength: "The resolution must be at least 10 characters long"
      },
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>
</body>
</html>
