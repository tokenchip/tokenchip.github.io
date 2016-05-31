<?php
session_start();

if($_POST && !empty($_POST['name']) && !empty($_POST['password'])) {
  
}


?>


<!DOCTYPE html>
<head>

  <title>HALE BESTIARY</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<style>
  .login {
  padding: 20px 250px;
}
.triskele {
  width: 20%;
  height: 20%;
}
body {
  background-color: #EEEEEE;
}
.title {
  padding-top: 20px;
}
</style>

</head>
<body> 
<h1 class="text-center title">HALE BESTIARY</h1>
<img class="img-responsive center-block triskele" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/42/Triskele-Symbol1.svg/2000px-Triskele-Symbol1.svg.png">
<div class="login">
  <form>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Name" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="pasword" placeholder="Ask Stiles or Lydia for the password" required>
    </div>
    <button type="submit" class="btn btn-default center-block">Log In</button>
  </form>
</div>
  </form>
</body>
</div>
</html>