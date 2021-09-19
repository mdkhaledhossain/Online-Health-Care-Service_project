<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete History</title>
    <link rel="stylesheet" href="../asstes/css/delete_history_css.css">
</head>
<body>

    <div class="fullbox">
        <div class="innerbox"> <div class="part1"><b> Online Health Care Service. <br> Admin Page</b></div> </div>
    </div><br><br><hr><hr>

    <!-- >>>>>>>>>>>>>>User delete history table start <<<<<<<<<<<< -->
<table border = "1" align = "center">
        <caption><div class = "table_header_1">User Delete History</div></caption>
        <thead>
          <tr>
            <th>ID</th>
            <th>First_Name</th>
            <th>Last_Name</th>
            <th>User_id</th>
            <th>Age</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Delete_Time</th>
          </tr>
        </thead>

        <?php 
         include('./connection.php');
        $view_user_d_query = "select * from remove_user";
        $run = mysqli_query($conn, $view_user_d_query);
        while ($row = mysqli_fetch_array($run)){
            $ID = $row[0];
            $First_name= $row[1];
            $Last_name = $row[2];
            $User_id = $row[3];
            $Age = $row[4];
            $Email = $row[5];
            $Phone = $row[6];
            $Delete_time = $row[7];

        ?>

            <tr>
                                                         
                 <td><?php echo $ID; ?></td>                                           
                 <td><?php echo $First_name; ?></td>
                 <td><?php echo $Last_name; ?></td>
                 <td><?php echo $User_id; ?></td>
                 <td><?php echo $Age; ?></td>
                 <td><?php echo $Email; ?></td>
                 <td><?php echo $Phone; ?></td>
                 <td><?php echo $Delete_time; ?></td>

            </tr>

        <?php     
        }
        ?>

    </table><br>
    <!-- >>>>>>>>>>>>>>User delete history table end <<<<<<<<<<<< -->

        <!-- >>>>>>>>>>>>> worker delete history table start <<<<<<<<<<< -->

        <br><hr><hr><br>
        <table border = "1" align = "center">
        <caption><div class = "table_header_1">Worker Delete History</div></caption>
        <thead>
          <tr>
            <th>ID</th>
            <th>Full_Name</th>
            <th>Worker_ID</th>
            <th>Type</th>
            <th>Division</th>
            <th>Salary</th>
            <th>Delete_Time</th>
          </tr>
        </thead>

        <?php 
        $view_worker_d_query = "select * from remove_worker";
        $run = mysqli_query($conn, $view_worker_d_query);
        while ($row = mysqli_fetch_array($run)){
            $ID = $row[0];
            $Full_name= $row[1];
            $Worker_ID = $row[2];
            $Type= $row[3];
            $Division = $row[4];
            $Salary = $row[5];
            $Delete_time = $row[6];

        ?>

            <tr>
                                                         
                 <td><?php echo $ID; ?></td>                                           
                 <td><?php echo $Full_name; ?></td>
                 <td><?php echo $Worker_ID; ?></td>
                 <td><?php echo $Type; ?></td>
                 <td><?php echo $Division; ?></td>
                 <td><?php echo $Salary; ?></td>
                 <td><?php echo $Delete_time; ?></td>

            </tr>

        <?php     
        }
        ?>

    </table><br><hr><hr><br>


</body>
</html>