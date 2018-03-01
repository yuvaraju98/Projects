<!DOCTYPE html>
<html>
<head><title>bikerally</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <style type="text/css">	
  #cnter {
   color: #154360;
   text-align: center;
 }
 #cdd {
   margin: 0 auto;
   width: 200px;
   color:white;
 }
 #first{
   background-image:url(my.jpg);
   background-size: 100% 100%;
   background-repeat: no-repeat;
   height:100vh;
   width:100%;
 }
 #reg{color: white;
  height:100vh;
  background-image:url(m6.jpg);
  background-size: 100% 100%;
}
#pp{
	background-color: black;
	background-size: 100% 100%;
	opacity: 0.9;
	border-color: black;
}
#colp{/*for basicinfo headinh**/
 background-color:black;
}
#b{
  /*for textbox inside blakc*/
  color:black;
}
</style>
</head>
<body>
  <div id="first">
    <a href="processoutput.php">Organisers page</button></a>
    <div id="cnter"><h2 ><br><br><br><br><br>Its Not The Destination.. Its The Ride...!!!</h2>
    </div>
    <br><br><br>
    
    <a href="#reg"><button type="button" class="btn btn-primary btn-block " id="cdd" ><h4 >Register</h4 ></button></a>
  </div>
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">log in</h4>
        </div>
        <div class="modal-body">
         <form action="">
          <div class="form-group">
            <label for="email">ID:</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="pwd">password:</label>
            <input type="password" class="form-control" id="pwd">
          </div>
        </form> 
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </div>
</div>
<div id="reg">
  <p><h2> <br><br><center>Register</center></h2></p>
  <br><br><br>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="pill" href="#home">New Rider</a></li>
    <li><a data-toggle="pill" href="#menu1">Registered Rider</a></li>
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <form action="process3.php" method="post">
       <div class="panel-group" id="accordion">
        <div class="panel panel-default" id="pp">
          <div class="panel-heading" id="colp">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" >
              Basic Info</a>
            </h4>
          </div>
          <div id="collapse1" class="panel-collapse-inverse collapse in">
            <div class="panel-body ">
              <p>Name:<br> <input type="text" id="b" name="username">
                <br></p>
                <p>Phone: <br><input type="text" id="b" name="email">
                  <br></p>
                  <p>Gender:<br>    <select name="Gender" id="b">
                   <option value="Male">Male</option>
                   <option value="Female">Female</option>
                 </select>
                 <br></p>
                 <p>Insurance:<br>  <input type="text" id="b" name="Inid">
                  <br></p>
                  <p>Age: <br>    <input type="text" id="b" name="Age">
                    <br></p>
                    Location:<br>
                    <select name="taskOption" id="b" style="width:200px;" >
                      <option value="Mysore">Mysore</option>
                      <option value="panaji">Goa</option>
                      <option value="Kanyakumari">Kanyakumari</option>
                    </select>
                    <p>
                      <br><p>
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><input type="next" value=" next " class="btn btn-primary"></a>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default" id="pp">
                    <div class="panel-heading" id="colp">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                        About Your Bike..</a>
                      </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>Reg No:<br> <input type="text" id="b" name="reg">
                          <br></p>
                          <p>Model 	<br>	<input type="text" id="b" name="Model">
                            <br></p>
                            <p>Make: 	<br>	<input type="text" id="b" name="Make">
                              <br></p>
                              <p>CC:		<br> 	<input type="text" id="b" name="CC">
                                <br></p>
                                <input type="submit" value=" Register " class="btn btn-primary">
                              </div>
                            </div>
                          </div>
                        </form>
                      </div> 
                    </div>
                    <div id="menu1" class="tab-pane fade">
                     <form action="processpre.php" method="post">
                       <div class="panel-group" id="accordion">
                        <div class="panel panel-default" id="pp">
                          <div class="panel-heading" id="colp">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" >
                              Basic Info</a>
                            </h4>
                          </div>
                          <div id="collapse1" class="panel-collapse-inverse collapse in">
                            <div class="panel-body ">
                              <p>Name:<br> <input type="text" id="b" name="username">
                                <br></p>
                                <p>Phone: <br><input type="text" id="b" name="email">
                                  <br></p>
                                  <p>RegNo:<br>  <input type="text" id="b" name="reg">
                                    <br></p>
                                    Location:<br>
                                    <select name="taskOption" id="b" style="width:200px;" >
                                      <option value="Mysore">Mysore</option>
                                      <option value="panaji">Goa</option>
                                      <option value="Kanyakumari">Kanyakumari</option>
                                    </select>
                                    <p>
                                      <br><p>
                                       <input type="submit" value=" Register " class="btn btn-primary">
                                     </div>
                                   </div>
                                 </div>
                               </form>
                             </div>
                           </div>
                         </body>
                         </html>