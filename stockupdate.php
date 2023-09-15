<!DOCTYPE html>
    <html>
        <head>
        <title> </title>
        </head>
        <body background="phramacy.jpg">
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
            <div class="container register">
            <h1><a href="stock.php">
        <p align="right"><button>BACK</button></p>
        </a></h1>
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="" alt=""/>
                        <h3>WELCOME</h3>
                        <a href = "stockselect.php" ><button type="submit" class="btnRegister"name="submit" value="Register">COMPANY LIST</button></a> <br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabcontent">
                            <div class="tab-pan fade show active" id="home" role="tabpan1" aria-labelledby="home-tab">
                                <h3>COMPANY DETAILS</h3>
                                    <form action="" method="POST">
                                        <div class="row register-form">
<?php

include 'connection1.php';

$sid = $_GET['sid'];

$selectquery = "SELECT * FROM `company` WHERE  CompanyId = '$sid' ";

$query = mysqli_query($con, $selectquery);

$result = mysqli_fetch_assoc($query);

  if(isset($_POST['submit'])){

    $sid = $_GET['sid'];

      $sid = $_POST['sid'];
      $smed = $_POST['smed'];
      $stype = $_POST['stype'];
      $sq = $_POST['sq'];
    
      $updatequery = "UPDATE `company` SET `CompanyId`='$sid',`CompanyMed`='$smed',`MedType`='$stype',`CompanySupply`='$sq' WHERE CompanyId='$sid'";

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
                                                    <input type="text" class="form-control" placeholder="ENTER STOCK ID" name="sid" value="<?php echo $result['CompanyId']; ?>" required/>
                                                </div>
                                                    <div class="form-group">
                                                        <input type="text"class="form-control" placeholder="ENTER STOCK MED" name="smed" value="<?php echo $result['CompanyMed']; ?>" required/>
                                                    </div>
                                                 </div> 
                                                 <div class="col-md-6">
                                                     <div class="form-group">
                                                         <input type="text" class="form-control" placeholder="ENTER STOCK TYPE" name="stype"  value="<?php echo $result['MedType']; ?>" required/>

                                                     </div>
                                                     <div class="form-group">
                                                         <input type="text"class="form-control" placeholder="ENTER STOCK QUANTITY" name="sq" value="<?php echo $result['CompanySupply']; ?>"/>
                                                     </div>
                                                     <button type="submit" class="btnRegister"name="submit" value="update">REGISTER</button>
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

