

<?php
include 'connection.php';

$id=$_GET['updateid'];
if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $mobile =$_POST['mobile'];
    $password =$_POST['password'];

    $sql ="update `list` set id=$id, name='$name', email='$email', mobile='$mobile', password='$password'";

    $result=mysqli_query($conn,$sql);
    if($result) {
        echo "updated  successfully";
       // header('location:display.php');
    }else{
        die(mysqli_error($conn));
    } 

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php crude application</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container my-5">
    <form action="" method="post">
       <div>
       <label for="">Name</label>
       <input type="text" name="name" id="" placeholder="Enter your name" required autocomplete="off">
       </div> 

       <div>
       <label for="">email</label>
       <input type="email" name="email" id="" placeholder="Enter your email" required autocomplete="off">
       </div>

       <div>
       <label for="">Phone number</label>
       <input type="number" name="mobile" id="" placeholder="Enter your mobile number" required autocomplete = "off">
       </div>

       <div>
       <label for="">password</label>
       <input type="password" name="password" id="" placeholder="Enter your password" required autocomplete="off">
       </div>

       <button type="submit" class="btn btn-primary" name="submit">update</button>
    </form>
  </div>
       
              

</body>
</html>