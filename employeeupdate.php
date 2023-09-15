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
                        <p>EMPLOYEE DETAIL LIST</p>
                        <a href = "employeeselect.php" ><button type="submit" class="btnRegister"name="submit" value="Register">EMPLOYEE LIST</button></a> <br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabcontent">
                            <div class="tab-pan fade show active" id="home" role="tabpan1" aria-labelledby="home-tab">
                                <h3>EMPLOYEE DETAILS</h3>
                                    <form action="" method="POST">
                                        <div class="row register-form">
<?php

include 'connection1.php';

$eid = $_GET['eid'];

$selectquery = "SELECT * FROM `employee` WHERE  EmpId = '$eid' ";

$query = mysqli_query($con, $selectquery);

$result = mysqli_fetch_assoc($query);

  if(isset($_POST['submit'])){

    $eid = $_GET['eid'];

      $eid = $_POST['eid'];
      $ename = $_POST['ename'];
      $eds = $_POST['eds'];
      $esa = $_POST['esa'];
      $epn = $_POST['epn'];
    
      $updatequery = "UPDATE employee SET EmpId='$eid',EmpName='$ename',Designation='$eds',Salary='$esa',PhoneNo='$esa' WHERE EmpId='$eid' ";

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
                                                    <input type="text" class="form-control" placeholder="ENTER EMPLOYEE ID" name="eid" value="<?php echo $result['EmpId']; ?>" required/>
                                                </div>
                                                    <div class="form-group">
                                                        <input type="text"class="form-control" placeholder="ENTER EMPLOYEE NAME" name="ename" value="<?php echo $result['EmpName']; ?>" required/>
                                                    </div>
                                                 </div> 
                                                 <div class="col-md-6">
                                                     <div class="form-group">
                                                         <input type="text" class="form-control" placeholder="ENTER EMPLOYEE DESIGNATION" name="eds"  value="<?php echo $result['Designation']; ?>" required/>

                                                     </div>
                                                     <div class="form-group">
                                                         <input type="text"class="form-control" placeholder="ENTER EMPLOYEE SALARY" name="esa" value="<?php echo $result['Salary']; ?>"/>
                                                     </div>
                                                     <div class="form-group">
                                                         <input type="text" class="form-control" placeholder="ENTER EMPLOYEE PHONE NUMMBER" name="epn"  value="<?php echo $result['PhoneNo']; ?>" required/>
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

