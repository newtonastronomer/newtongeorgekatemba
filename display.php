
<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crude operation</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <button class="btn btn-primary my-5"><a href="index.php" class="text-light">add user</a> </button> 
      
      <table class="table">
        <thead>
            <tr>
                <th scope="col">SI no</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">mobile</th>
                <th scope="col">password</th>
                <th scope="col">operations</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $sql="Select * from `list`";
            $result=mysqli_query($conn,$sql);
            if($result){
             
             while($row= mysqli_fetch_assoc($result) ){
              $id = $row['id'];
              $name = $row['name'];
              $email = $row['email'];
              $mobile = $row['mobile'];
              $password = $row['password'];

              echo '
              <tr>
              <th scope="row">'.$id.'</th>
              <td>'.$name.'</td>
              <td>'.$email.'</td>
              <td>'.$mobile.'</td>
              <td>'.$password.'</td>
  
                <td>
                <button class="btn  btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
                <button class="btn btn-danger" "text-light"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
            </td>
              </tr>';
             }
            }
            ?>
          
        </tbody>

      </table> 
    </div>
    
</body>
</html>