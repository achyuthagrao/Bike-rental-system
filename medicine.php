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
                 <h1><a href="admindashboard.php">
        <p align="right"><button>BACK</button></p>
        </a></h1>
            <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="" alt=""/>
                        <h2><font size="6">WELCOME</font></h2>
                        <a href = "medicineselect.php" ><button type="submit" class="btnRegister"name="submit" value="Register">MEDICINE LIST</button></a>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabcontent">
                            <div class="tab-pan fade show active" id="home" role="tabpan1" aria-labelledby="home-tab">
                                <h3><font size="6">MEDICINE DETAILS</font></h3>
                                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                                        <div class="row register-form">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="ENTER MEDICINE ID" name="mid" value="" required/>
                                                </div>
                                                    <div class="form-group">
                                                        <input type="text"class="form-control" placeholder="ENTER MEDICINE NAME" name="mname" value="" required/>
                                                    </div>
                                                 </div> 
                                                 <div class="col-md-6">
                                                     <div class="form-group">
                                                         <input type="text" class="form-control" placeholder="ENTER MEDICINE TYPE" name="mtype"  value="" required/>

                                                     </div>
                                                     <div class="form-group">
                                                         <input type="text"class="form-control" placeholder="ENTER COMPOSITION" name="comp" value=""/>
                                                     </div>
                                                     <div class="col-md-6">
                                                     <div class="form-group">
                                                         <input type="text" class="form-control" placeholder="ENTER MEDICINE AMOUNT" name="amo"  value="" required/>

                                                     </div>
                                                     <div class="col-md-6">
                                                     <div class="form-group">
                                                         <input type="text" class="form-control" placeholder="ENTER EXPIRE DATE" name="edate"  value="" required/>

                                                     </div>

                                                     <button type="submit" class="btnRegister"name="submit" value="Register">REGISTER</button>
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
<?php

include 'connection1.php';

  if(isset($_POST['submit'])){
      
      $mid = $_POST['mid'];
      $mname = $_POST['mname'];
      $mtype = $_POST['mtype'];
      $comp = $_POST['comp'];
      $amo = $_POST['amo'];
      $edate = $_POST['edate'];

      $insertquery = "INSERT INTO medicine(MedId, MedName, MedType, Composition, Amount, ExpDate) VALUES ('$mid','$mname','$mtype','$comp','$amo','$edate')";
    
      $query = mysqli_query($con, $insertquery);

      if($query){
        ?>
         <script>
             alert('insert successful');
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