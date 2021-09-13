<?php

include("connection.php");
$user_id = $_GET['id'];
$sql = "select *from users where id = '$user_id'";
$get_user = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($get_user);

// echo $row['id'];
// echo $row['first_name'];
// echo $row['last_name'];
// echo $row['email'];
// echo $row['password'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update_form</title>
</head>
<body>

        <?php $_SESSION['email'] = $row['email'];?>

    <form action="./update.php?id=<?=$row['id'];?>" method = "post">
    
    User First Name : <input type="text" name="first_name" value = "<?=$row['first_name'];?>"><br>
    User Last Name : <input type="text" name="last_name" value = "<?=$row['last_name'];?>"><br>
    Age : <input type="text" name="age" value = "<?=$row['age'];?>"><br>
    Phone : <input type="text" name="phone" value = "<?=$row['phone'];?>"><br>
    Email : <input type="text" name="email" value = "<?=$row['email'];?>"><br>
    Password : <input type="password" name="password" value = "<?=$row['password'];?>"><br>
    Post Code : <input type="text" name="post_code" value = "<?=$row['post_code'];?>"><br>
    District : <input type="text" name="district" value = "<?=$row['district'];?>"><br>
    Street : <input type="text" name="street" value = "<?=$row['street'];?>"><br>

    <input type="submit" name= "update" value= "update">
   
    </form>
</body>
</html>


