<?php
$con = mysqli_connect('localhost','root','++');

if(!$con) {
    echo 'Not connected to server!';
}

if(!mysqli_select_db($con,'sports')) {
    echo 'Database not selected!';
}



$Name = $_POST['Name'];
$Branch = $_POST['email'];
$USN=$_POST['comment'];



$sql4 = "INSERT INTO reviews(Name, email,comment) VALUES ('$Name','$Branch','$USN')";


if(!mysqli_query($con,$sql4) ){
   echo '<div class="container">
  <div class="row textborder">
        <div class="col-sm-6 col-sm-offset-3">
        <br><br> <h2 style="color:orange"><center>Failed!</center></h2>
        
        <h3><center>Sorry,';
   
        echo $Name;
        echo '</center></h3>
        <p style="font-size:20px;color:#5C5C5C;">Your query could not be submitted....Try again </p>
        <a href="index.html" class="btn  " >close </a>
    <br><br>
        </div>
        
  </div>
</div>';
}

else{
echo '<div class="container">
  <div class="row textborder">
        <div class="col-sm-6 col-sm-offset-3">
        <br><br> <h2 style="color:#0fad00">Success</h2>
        
        <h3>Dear,' .$Name.'</h3>
        <p style="font-size:20px;color:#5C5C5C;">Thank you. Your query had been submitted.</p>
        <a href="index.html" class="btn  " >close </a>
    <br><br>
        </div>
        
  </div>
</div>';}

//header("refresh:2; url=form.html");
?>