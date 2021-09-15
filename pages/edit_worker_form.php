<?php

include("connection.php");
$worker_id = $_GET['id'];
$sql = "select *from workers where id = '$worker_id'";
$get_worker = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($get_worker);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update_form</title>
    <link rel="stylesheet" href="../asstes/css/edit_form.css">
</head>
<body>


        

        <center><h1>Worker Edit Here </h1></center>

    <form action="./update_worker_form.php?id=<?=$row['id'];?>" method = "post">
    <div class = "edit_form">
    Worker Full_Name : <input type="text" name="full_name" value = "<?=$row['full_name'];?>"><br><br>
    Worker Type : <input type="text" name="type" value = "<?=$row['type'];?>"><br><br>
    Age : <input type="text" name="age" value = "<?=$row['age'];?>">
    Gender : <input type="text" name="gender" value = "<?=$row['gender'];?>"><br><br>
    Phone : <input type="text" name="phone" value = "<?=$row['phone'];?>">
    Division : <input type="text" name="division" value = "<?=$row['division'];?>"><br><br>
    Salary : <input type="text" name="salary" value = "<?=$row['salary'];?>"><br><br>

    <input type="submit" name= "update" value= "update"><br>
   
    </form>
    </div>

</body>
</html>


