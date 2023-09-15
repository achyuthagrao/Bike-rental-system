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
                        <a href = "orderselect.php" ><button type="submit" class="btnRegister"name="submit" value="Register">ORDER LIST</button></a> <br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabcontent">
                            <div class="tab-pan fade show active" id="home" role="tabpan1" aria-labelledby="home-tab">
                                <h3>ORDER DETAILS</h3>
                                    <form action="" method="POST">
                                        <div class="row register-form">
<?php

include 'connection1.php';

$or = $_GET['or'];

$selectquery = "SELECT * FROM `orders` WHERE  OrderId = '$or' ";

$query = mysqli_query($con, $selectquery);

$result = mysqli_fetch_assoc($query);

  if(isset($_POST['submit'])){

    $or = $_GET['or'];

      $or = $_POST['or'];
      $ord = $_POST['ord'];
      $men = $_POST['men'];
      $met = $_POST['met'];
      $mea = $_POST['mea'];
    
      $updatequery = "UPDATE orders SET OrderId='$or',OrdersDate='$ord',MedName='$men',`MedType`='$met',`MedAmount`='$mea' WHERE OrderId='$or' ";

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
                                                    <input type="text" class="form-control" placeholder="ENTER ORDER ID" name="or" value="<?php echo $result['OrderId']; ?>" required/>
                                                </div>
                                                    <div class="form-group">
                                                        <input type="text"class="form-control" placeholder="ENTER ORDER DATE" name="ord" value="<?php echo $result['OrdersDate']; ?>" required/>
                                                    </div>
                                                 </div> 
                                                 <div class="col-md-6">
                                                     <div class="form-group">
                                                         <input type="text" class="form-control" placeholder="ENTER MEDICINE NAME" name="men"  value="<?php echo $result['MedName']; ?>" required/>

                                                     </div>
                                                     <div class="form-group">
                                                         <input type="text"class="form-control" placeholder="ENTER MEDICINE TYPE" name="met" value="<?php echo $result['MedType']; ?>"/>
                                                     </div>
                                                     <div class="form-group">
                                                         <input type="text" class="form-control" placeholder="ENTER MEDICINE AMOUNT" name="mea"  value="<?php echo $result['MedAmount']; ?>" required/>
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

