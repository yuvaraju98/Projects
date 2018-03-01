<!DOCTYPE html>
<html>
<head><title>bikerally</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script type="text/javascript">


  </script>

  <style type="text/css"> 




</style>

</head>
<body style="background-color:white;">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Delete</a>
      </div>


    </div>
  </nav>

  <div class="jumbotron" >
    <h2 style="margin-left: 20px;">enter the details</h2>
    <p >
      <form action="" method="post" style="margin-left: 20px;">
        <label>Name:</label>
        <input type="text" name="id">



        <button input name="update" type="submit" class="btn  btn-info btn-md" data-toggle="collapse" data-target="#demo">Search</button>

      </form>
    </div>

    <table class="table table-striped">


      <?php

      if(isset($_POST['update'])){
       $con = mysqli_connect('localhost','root','++','bike');

       if(!$con) {
        echo 'Not connected to server!';
      }

      if(!mysqli_select_db($con,'bike')) {
        echo 'Database not selected!';
      }
      $Ge = $_POST['id'];


      $query="SELECT name,reg,loc FROM bike where name='$Ge'";
      $result =mysqli_query($con,$query);

      if ($result->num_rows > 0) {
                                    // output data of each row

       while($row = $result->fetch_assoc()) {


        echo '<table  class="table table-striped">
        <th>Name</th>
        <th>Reg</th>
        <th>Location</th>
        <th></th><tr>
        <td scope="row">' . $row['name']. '</td>
        <td>' . $row['reg'] .'</td>
        <td>' . $row['loc'] .'</td>
        <td>   <a href="delete2.php" class="btn  btn-danger btn-md" data>Delete</button></td>

       
        </tbody>
        </table>';

        session_start();
        $_SESSION['variable_name'] = $Ge;

      }
    }
  }




 
  ?>
 
</div> 


</body>




