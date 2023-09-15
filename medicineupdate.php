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
                  width: 30%;
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
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="" alt=""/>
                        <h3>WELCOME</h3>
                        <p>MEDICINE DETAILS</p>
                      <a href = "medicineselect.php" ><button type="submit" class="btnRegister"name="submit" value="Register">MEDICINE LIST</button></a>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabcontent">
                            <div class="tab-pan fade show active" id="home" role="tabpan1" aria-labelledby="home-tab">
                                <h3>MEDICINE DETAILS</h3>
                                    <form action="" method="POST">
                                        <div class="row register-form">
<?php

include 'connection1.php';

$mid = $_GET['mid'];

$selectquery = "SELECT * FROM `medicine` WHERE  MedId = '$mid' ";

$query = mysqli_query($con, $selectquery);

$result = mysqli_fetch_assoc($query);

  if(isset($_POST['submit'])){

    $mid = $_GET['mid'];

      $mid = $_POST['mid'];
      $mname = $_POST['mname'];
      $mtype = $_POST['mtype'];
      $comp = $_POST['comp'];
      $amo = $_POST['amo'];
      $edate = $_POST['edate'];
    
      $updatequery = "UPDATE medicine SET MedId='$mid',MedName='$mname',MedType='$mtype',Composition='$comp',Amount='$amo',ExpDate='$edate' WHERE MedId='$mid' ";

      $query = mysqli_query($con, $updatequery);

      if($query){
        ?>
         <script>
             alert('inserted successful');
             header('location: medicine.php');
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
                                                    <input type="text" class="form-control" placeholder="ENTER MEDICINE ID" name="mid" value="<?php echo $result['MedId']; ?>" required/>
                                                </div>
                                                    <div class="form-group">
                                                        <input type="text"class="form-control" placeholder="ENTER MEDICINE NAME" name="mname" value="<?php echo $result['MedName']; ?>" required/>
                                                    </div>
                                                 </div> 
                                                 <div class="col-md-6">
                                                     <div class="form-group">
                                                         <input type="text" class="form-control" placeholder="ENTER MEDICINE TYPE" name="mtype"  value="<?php echo $result['MedType']; ?>" required/>

                                                     </div>
                                                     <div class="form-group">
                                                         <input type="text"class="form-control" placeholder="ENTER MEDICINE COMPOSITION" name="comp" value="<?php echo $result['Composition']; ?>"/>
                                                     </div>
                                                     <div class="form-group">
                                                         <input type="text" class="form-control" placeholder="ENTER MEDICINE AMOUNT" name="amo"  value="<?php echo $result['Amount']; ?>" required/>

                                                     </div>
                                                     <div class="col-md-6">
                                                     <div class="form-group">
                                                         <input type="text" class="form-control" placeholder="ENTER EXPIRE DATE" name="edate"  value="<?php echo $result['ExpDate']; ?>" required/>

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

