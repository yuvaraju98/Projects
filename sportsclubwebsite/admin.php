
<!DOCTYPE html>
<html>
<head><title>Sports</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript">


</script>
       
  <style type="text/css"> 

.btn-dark{

color: #ffffff; background-color: #000000; border-color:#6B8E23;
}

.btn-dark:hover, .btn-dark:focus, .btn-dark:active, .btn-dark.active, .open .dropdown-toggle.btn-dark
                        { color: #ffffff; background-color: #006400;border-color:grey; }


</style>

</head>
<body style="background-color:black;">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Organizers Page</a>
      </div>
       <h1>pahe opebed</h1> 
<?php 
echo 'working';
$con = mysqli_connect('localhost','root','++','sports');

                       if(!$con) {
                        echo 'Not connected to server!';
                      }

                      if(!mysqli_select_db($con,'bike')) {
                        echo 'Database not selected!';
                      }

                      ?>
                       </div>
  </nav>







  <div class="row-md-12">

    

    <div class="col-md-4" >

        <div class="container">
  <h2><br>Records</h2>
  <!-- Trigger the modal with a button -->
   <nav class="nav navbar-inverse" style="display:block;width:15%;height:100%">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        
       
        <li><a href="#" data-toggle="modal" data-target="#myModal1">Cricket</a></li>
        <li><a href="#"  data-toggle="modal" data-target="#myModal2">Kabaddi</a></li>
        <li><a href="#"  data-toggle="modal" data-target="#myModal4">Football</a></li>
        <li><a href="#" data-toggle="modal" data-target="#myModal3">Volley Ball</a></li>
        <li><a href="update2.php" >Update</a></li>
        <li><a href="delete.php" >Delete</a></li>

      </ul>
    </div>
  </nav>
<!-- Mysore stored proc-->
<div class="modal fade" id="myModal1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cricket</h4>
      </div>
      <div class="modal-body">

       <table class="table table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Reg No</th>
            <th>Branch</th>

          </tr>
        </thead>
        <tbody>

         <?php

                        //$query="SELECT I.name,I.phone,R.reg,R.model FROM bike as I,bikeinfo as R where loc='Mysore' AND R.reg=I.reg";
         $result=mysqli_query($con,"Selct * from sports where sports='cricket'")
         //$result =mysqli_query($con,"CALL GetOfficeByCountry('Mysore');");
         if ($result->num_rows > 0) {
                              // output data of each row

          while($row = $result->fetch_assoc()) {


            echo '<tr>
            <td scope="row">' . $row['name']. '</td>
            <td>' . $row['phone'] .'</td>
            <td> '.$row['usn'] .'</td>
            <td> '.$row['branch'] .'</td>
            </tr>';
          }
        } else {
          echo "0 results";
        } 
        ?>
      </tbody>
    </table></div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
<!-- goa stored proc-->

  
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">To Goa</h4>
        </div>
        <div class="modal-body">
          
             <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Reg No</th>
                          <th>Model</th>
                        </tr>
                      </thead>
                      <tbody>

                       <?php
                       $con = mysqli_connect('localhost','root','++','bike');

                       if(!$con) {
                        echo 'Not connected to server!';
                      }

                      if(!mysqli_select_db($con,'bike')) {
                        echo 'Database not selected!';
                      }
                      $place="Mysore";
                     //$query="SELECT I.name,I.phone,R.reg,R.model FROM bike as I,bikeinfo as R where loc='panaji' AND R.reg=I.reg";
                      $result =mysqli_query($con,"CALL GetOfficeByCountry('panaji');");
                      if ($result->num_rows > 0) {
                              // output data of each row

                        while($row = $result->fetch_assoc()) {


                          echo '<tr>
                          <td scope="row">' . $row['name']. '</td>
                          <td>' . $row['phone'] .'</td>
                          <td> '.$row['reg'] .'</td>
                          <td> '.$row['model'] .'</td>
                          </tr>';
                        }
                      } else {
                        echo "0 results";
                      } 
                      ?>
                    </tbody>
                  </table></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- to kanyakumari-->
  <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Kanyakumari</h4>
        </div>
        <div class="modal-body">
          
             <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Reg No</th>
                          <th>Model</th>
                        </tr>
                      </thead>
                      <tbody>

                       <?php
                       $con = mysqli_connect('localhost','root','++','bike');

                       if(!$con) {
                        echo 'Not connected to server!';
                      }

                      if(!mysqli_select_db($con,'bike')) {
                        echo 'Database not selected!';
                      }
                      $place="Mysore";
                     //$query="SELECT I.name,I.phone,R.reg,R.model FROM bike as I,bikeinfo as R where loc='panaji' AND R.reg=I.reg";
                      $result =mysqli_query($con,"CALL GetOfficeByCountry('kanyakumari');");
                      if ($result->num_rows > 0) {
                              // output data of each row

                        while($row = $result->fetch_assoc()) {


                          echo '<tr>
                          <td scope="row">' . $row['name']. '</td>
                          <td>' . $row['phone'] .'</td>
                          <td> '.$row['reg'] .'</td>
                          <td> '.$row['model'] .'</td>
                          </tr>';
                        }
                      } else {
                        echo "0 results";
                      } 
                      ?>
                    </tbody>
                  </table></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<!-- nominee-->


  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nominees</h4>
        </div>
        <div class="modal-body">
          <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Dependent Name</th>
                          <th>Phone</th>
                         
                        </tr>
                      </thead>
                      <tbody>

                       <?php
                       $con = mysqli_connect('localhost','root','++','bike');

                       if(!$con) {
                        echo 'Not connected to server!';
                      }

                      if(!mysqli_select_db($con,'bike')) {
                        echo 'Database not selected!';
                      }
                        $query="SELECT I.name,N.nname,N.nph FROM info as I,nom as N,bike as B where B.name=I.name and I.inid=N.inid";
                        $result =mysqli_query($con,$query);
                        if ($result->num_rows > 0) {
                                // output data of each row

                          while($row = $result->fetch_assoc()) {


                            echo '<tr>
                            <td scope="row">' . $row['name']. '</td>
                            <td>' . $row['nname'] .'</td>
                            <td> '.$row['nph'] .'</td>
                            
                            </tr>';
                          }
                        } else {
                          echo "0 results";
                        }

                      ?>
                    </tbody>
                  </table></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<!--reg-->>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Participants</h4>
        </div>
        <div class="modal-body">
          
            <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>name</th>
                          <th>Gender</th>
                          <th>Phone</th>
                          <th>Age</th>
                        </tr>
                      </thead>
                      <tbody>

                       <?php
                       $con = mysqli_connect('localhost','root','++','bike');

                       if(!$con) {
                        echo 'Not connected to server!';
                      }

                      if(!mysqli_select_db($con,'bike')) {
                        echo 'Database not selected!';
                      }
                       $query="SELECT B.name,I.Gender,B.phone,I.Age FROM info I,bike B where B.name=I.name ";
                      $result =mysqli_query($con,$query);
                      if ($result->num_rows > 0) {
                              // output data of each row

                        while($row = $result->fetch_assoc()) {


                          echo '<tr>
                          <td scope="row">' . $row['name']. '</td>
                          <td>' . $row['Gender'] .'</td>
                          <td> '.$row['phone'] .'</td>
                          <td> '.$row['Age'] .'</td>
                          </tr>';
                        }
                      } else {
                        echo "0 results";
                      } 
                      ?>
                      </tbody>
                    </table>
                  </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

    </div>




    <div class="col-md-8" id="bg" style="height:100%;background:url(2.jpg);background-size: cover;">
      <br><br><br><br><br>
      <?php
      $con = mysqli_connect('localhost','root','++','bike');

      if(!$con) {
        echo 'Not connected to server!';
      }

      if(!mysqli_select_db($con,'bike')) {
        echo 'Database not selected!';
      }



      $query = "SELECT COUNT(*) as c FROM bike";
      $result = mysqli_query($con,$query);
      $row = mysqli_fetch_assoc($result);
      echo '<br><br><br><p style="font-size:200px;margin-left:420px;">'. $row['c'].'</p><br><br><br><br><br>'; //Here is your count>
      ?>
    </div>

  </div>


 
</body>
</html>