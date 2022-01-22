<?php
    include('connection.php');
    if(isset($_POST['submit']))
    {
      $firstname= $_POST['firstname'];
      $lastname= $_POST['lastname'];
      $email= $_POST['email'];

   
      $result="insert into regtbl(firstname,lastname,email) values('".$firstname."','".$lastname."','".$email."')";
      
      
      mysqli_query($mysqli,$result);
      header("Location:filter.php");

    }
?>






<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title>Purchase Details</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
<form name="" method="POST" action="" enctype="multipart/form-data">
  <div class="row"> 
    <div class="col-sm-2">firstname:</div>
      <div class="col-sm-2">
        <input type="text" name="firstname" placeholder="firstname" class="form-control"> 
      </div>
    </div>

firstname:<input type="text" name="firstname" placeholder="firstname" class="form-control">	
lastname:<input type="text" name="lastname" placeholder="lastname" class="form-control">
email:<input type="email" name="email" placeholder="email" class="form-control">
<input type="submit" name="submit">
</form>
</div>
</body>
</html>