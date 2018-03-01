 <!DOCTYPE html>
 <html>
 <head><title>bikerally</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
</html><body>
  <?php
  session_start();
   $con = mysqli_connect('localhost','root','++','bike');
  if(!$con) {
    echo 'Not connected to server!';
  }
  if(!mysqli_select_db($con,'bike')) {
    echo 'Database not selected!';
  }
  $Ge = $_POST['id'];
  $Loc = $_POST['taskOption'];
  $Ge=$_SESSION['variable_name'];
  $sql1="delete from bike where name='$Ge'";


  if(mysqli_query($con,$sql1)){
   echo '<div class="alert alert-success">
   <strong>Success!</strong> Update successfull !!!!.
   </div> ';
 }
 else {
  echo'<div class="alert alert-warning">
  <strong>Sorry!</strong> Could not be updated , Try again.
  </div>';
}
?>
<a href="processoutput.php" class="btn btn-success " >close </a>
</body>
</html>
