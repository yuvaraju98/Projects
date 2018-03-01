<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<?php
$con = mysqli_connect('localhost','root','++');
if(!$con) {
    echo 'Not connected to server!';
}
if(!mysqli_select_db($con,'bike')) {
    echo 'Database not selected!';
}
$Name = $_POST['username'];
$Email = $_POST['email'];
$Reg=$_POST['reg'];
$Gen = $_POST['Gender'];
$Inid=$_POST['Inid'];
$Age=$_POST['Age'];
$nname=$_POST['nname'];
$nph=$_POST['nph'];
$Model=$_POST['Model'];
$Make=$_POST['Make'];
$CC=$_POST['CC'];
$Loc = $_POST['taskOption'];
$sql4 = "INSERT INTO bike (SL,name,phone,reg,loc) VALUES (NULL,'$Name','$Email','$Reg','$Loc')";
$sql1 = "INSERT INTO info (name,Gender,Inid,Age) VALUES ('$Name','$Gen','$Inid','$Age')"; 
$sql2="INSERT INTO bikeinfo (reg,model,make,cc) VALUES ('$Reg','$Model','$Make','$CC')";
if(!mysqli_query($con,$sql1) || !mysqli_query($con,$sql2) || !mysqli_query($con,$sql4)){
   echo '<div class="container">
  <div class="row text-center">
        <div class="col-sm-6 col-sm-offset-3">
        <br><br> <h2 style="color:orange">Failed</h2>
        
        <h3>Sorry,' .$Name.'</h3>
        <p style="font-size:20px;color:#5C5C5C;">Your registration could not be completed .... Try again </p>
        <a href="index.php" class="btn btn-success " >close </a>
    <br><br>
        </div>
        
  </div>
</div>';
}
else{
echo '<div class="container">
	<div class="row text-center">
        <div class="col-sm-6 col-sm-offset-3">
        <br><br> <h2 style="color:#0fad00">Success</h2>
        
        <h3>Dear,' .$Name.'</h3>
        <p style="font-size:20px;color:#5C5C5C;">Thank you for Registering, Hope you enjoy the experience . For any queries feel free to email us.</p>
        <a href="index.php" class="btn btn-success " >close </a>
    <br><br>
        </div>
        
	</div>
</div>';}
//header("refresh:2; url=form.html");
?>