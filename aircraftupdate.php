<!DOCTYPE html>
    <html>
        <head>
        <title> </title>
        </head>
        <body background="#">
            <style>
                body {font-family: Arial, Helvetica, sans-serif;}
                form {border: 0px solid #f1f1f1;}    
                input[type=text], input[type=password] {
                  width: 30%;
                  padding: 12px 20px;
                  margin: 8px 0;
                  display: inline-block;
                  border: 5px solid #ccc;
                  box-sizing: border-box;
                }       
                button {
                  background-color: #2194e0;
                  color: white;
                  padding: 14px 20px;
                  margin: 8px 8px;
                  border: none;
                  cursor: pointer;
                  width: 10%;
                }        
                button:hover {
                  opacity: 0.8;
                }              
                .imgcontainer {
                  text-align: center;
                  margin: 24px 0 12px 0;
                }    
                .container {
                  text-align: center;
                  padding: 16px;
                }       
                span.psw {
                  float: right;
                  padding-top: 16px;
                }
                @media screen and (max-width: 100px) {
                  span.psw {
                     display: block;
                     float: none;
                  }
                  button {
          background-color: #2194e0;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 10%;
        }    
                }      
                </style>
                                      <h1><a href="aircraft.php">
        <p align="right"><button>BACK</button></p>
        </a></h1>
            <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="" alt=""/>
                        <h3>WELCOME</h3>
                        <a href = "aircraftselect.php" ><button type="submit" class="btnRegister"name="submit" value="Register">REGISTER LIST</button></a> <br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabcontent">
                            <div class="tab-pan fade show active" id="home" role="tabpan1" aria-labelledby="home-tab">
                                <h3>AIRCRAFT DEATILS</h3>
                                    <form action="" method="POST">
                                        <div class="row register-form">
<?php

include 'connection2.php';

$or = $_GET['or'];

$selectquery = "SELECT * FROM `aircraft` WHERE  AircraftNo = '$or' ";

$query = mysqli_query($con, $selectquery);

$result = mysqli_fetch_assoc($query);

  if(isset($_POST['submit'])){

    $or = $_GET['or'];

      $or = $_POST['or'];
      $ord = $_POST['ord'];
      $men = $_POST['men'];
      $met = $_POST['met'];
      $mea = $_POST['mea'];
      $man = $_POST['man'];

    
      $updatequery = "UPDATE aircraft SET AircraftNo='$or',AircraftName='$ord',OperatorsId='$men',`OperatorsName`='$met',`ManufactureLocation`='$mea' WHERE AircraftNo='$or' ";

      $query = mysqli_query($con, $updatequery);

      if($query){
        ?>
         <script>
             alert('inserted successful');
        </script>
        <?php
      }
      else{
        ?>
        <script>
            alert('insert unsuccessful');
       </script>
       <?php
      }
  }
?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="ENTER AIRCRAFT NO" name="or" value="<?php echo $result['AircraftNo']; ?>" required/>
                                                </div>
                                                    <div class="form-group">
                                                        <input type="text"class="form-control" placeholder="ENTER AIRCRAFT NAME" name="ord" value="<?php echo $result['AircraftName']; ?>" required/>
                                                    </div>
                                                 </div> 
                                                 <div class="col-md-6">
                                                     <div class="form-group">
                                                         <input type="text" class="form-control" placeholder="ENTER OPERATORS ID" name="men"  value="<?php echo $result['OperatorsId']; ?>" required/>

                                                     </div>
                                                     <div class="form-group">
                                                         <input type="text"class="form-control" placeholder="ENTER OPERATOR NAME" name="met" value="<?php echo $result['OperatorsName']; ?>"/>
                                                     </div>
                                                     <div class="form-group">
                                                         <input type="text"class="form-control" placeholder="ENTER MANUFACTURE LOCATION" name="mea" value="<?php echo $result['ManufactureLocation']; ?>"/>
                                                     </div>
                                                     <div class="form-group">
                                                         <input type="text" class="form-control" placeholder="ENTER MANUFACTURE START DATE" name="man"  value="<?php echo $result['ManufactureStartDate']; ?>"/>
                                                     <br><button type="submit" class="btnRegister"name="submit" value="update">REGISTER</button></br>
                                                 </div>  
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </html>

