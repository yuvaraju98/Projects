

<style>

    .btn {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.container {
text-align: center;
}
.textborder{

  border-style:outset;

}

</style>
<?php
$con = mysqli_connect('localhost','root','++');

if(!$con) {
    echo 'Not connected to server!';
}

if(!mysqli_select_db($con,'sports')) {
    echo 'Database not selected!';
}



$Name = $_POST['username'];
$Branch = $_POST['Branch'];
$USN=$_POST['USN'];
$Sports=$_POST['Sport'];
$phone=$_POST['phone'];






$sql4 = "INSERT INTO sports (SL,name,branch,usn,phone,sports) VALUES (NULL,'$Name','$Branch','$USN','$phone','$Sports')";


if(!mysqli_query($con,$sql4) ){
   echo '<div class="container">
  <div class="row textborder">
        <div class="col-sm-6 col-sm-offset-3">
        <br><br> <h2 style="color:orange"><center>Failed!</center></h2>
        
        <h3><center>Sorry,';
       
        echo $Name;
        echo '</center></h3>
        <p style="font-size:20px;color:#5C5C5C;">Your registration could not be completed .... Try again </p>
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
        <p style="font-size:20px;color:#5C5C5C;">Thank you for registering, Now go gear up and practice!!!.</p>
        <a href="index.html" class="btn  " >close </a>
    <br><br>
        </div>
        
  </div>
</div>';}

//header("refresh:2; url=form.html");
?>