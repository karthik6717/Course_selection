<?php
session_start();
include("./connection.php");

//Check the connection 
if (!$conn) {
    die("connection failed:" . mysqli_connect_error());
}
if(isset($_POST['login'])){
    $userid = mysqli_real_escape_string($conn, $_POST['adminid']);
    $password = mysqli_real_escape_string($conn, $_POST['Apwd']);
    $enpass = md5($password);
    $user_check_query = "SELECT * FROM `admins` WHERE aid='$userid' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user)
    {
      if ($user['aid'] === $userid)
      {
        if ($user['password'] === $enpass)
        {
        
       
        $_SESSION['adminuser'] = $user['aid'];
        
        
        
        }else
        {
           echo "wrong password";
        } 
        
      }
    }else{
        echo "No user found";
    }

  }else{
  echo "session not found";
  

  }


?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
        <title>Admin</title>
        <style>
            
            .widthclass{
                width:100%;
                height: 90%;
            }
        </style>
    </head>

    <body>
        <br><center>
            <h1>
                Admin Pannel
            </h1>
        </center>
        <!-- Button trigger modal -->

<!-- Modal -->
<center>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content widthclass">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Receipt</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="overflow:scroll;">
        <img src="" alt="image" srcset="" id="imageView">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div></center>
        <?php 
       if(!isset($_POST['login'])){
        ?>
        <form action="admin.php" method="POST">
            <div class="container" style="width:70%%;">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" >Admin ID:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="adminid">

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" >Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="Apwd">
            </div>

            <button type="submit"  class="btn btn-primary" name="login">Submit</button>
            </div>
        </form>
        <?php
       } else{
        ?>
        <div class="container">
            <button class="btn btn-success" style="float:right;" onclick="location.href='./excelexport.php'">Download Excel file</button><br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">roll no</th>
                    <th scope="col">course</th>
                    <th scope="col">year</th>
                    <th scope="col">sem</th>
                    <th scope="col">branch</th>
                    <th scope="col">courses</th>
                    <th scope="col">upi ID</th>
                    <th scope="col">image</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $sqlq = "SELECT * FROM `data` ORDER BY sno ASC";
                $res = mysqli_query($conn, $sqlq);
                $count = 0;
                
                if(mysqli_num_rows($res)>0){
                while ($row = mysqli_fetch_array($res))
                {
                    $count += 1;
                    ?>
                    <tr>
                    <th scope="row"><?php echo $count;?></th>
                    <td><?php echo $row['Name'];?></td>
                    <td><?php echo $row['Roll_number'];?></td>
                    <td><?php echo $row['Course'];?></td>
                    <td><?php echo $row['Year'];?></td>
                    <td><?php echo $row['Semester'];?></td>
                    <td><?php echo $row['Branch'];?></td>
                    <td><?php echo $row['Course_code'];?></td>
                    <td><?php echo $row['upiref'];?></td>
                    <td><img src="recipts/<?php echo $row['receipt'];?>" alt="receipt" srcset="" width="100px" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="change(this.src)"></td>
                    
                </tr>
                    <?php
                }
            }
                ?>
                
                
            </tbody>
        </table>
        </div>
        <?php
       }
        ?>
        <script>
            const change = src => {
	document.getElementById('imageView').src = src
}



        </script>
        
    </body>

</html>
