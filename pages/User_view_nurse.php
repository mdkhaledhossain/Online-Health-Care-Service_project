<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asstes/css/user_view_nurse_css.css">
    <title>Nurses</title>
</head>
<body>
    
    
<div class="fullbox">
        <div class="innerbox"> <div class="part1"><b> Online Health Care Service </b></div> </div>
        <div class="innerbox"> <div class="part2">Welcome to our platform</div> </div>
        <div class="innerbox"> <div class="part3">Here You can Find Private Nurse</div> </div>
    </div>
    <br><hr><hr>

<table border = "1" align = "center">
        <caption><div class = "table_header_1">Nurse Info Table</div></caption>
        <thead>
          <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Division</th>
            <th>Cost_per_day</th>
            <th>Cost_per_month</th>
          </tr>
        </thead>

        <?php 
         include('./connection.php');
        $view_nurse_query = "SELECT full_name, age, gender,phone,division, cost_per_day,cost_per_month FROM workers JOIN nurses on workers.id = nurses.worker_id;";
        $run = mysqli_query($conn, $view_nurse_query);
        while ($row = mysqli_fetch_array($run)){
            $name = $row[0];
            $age = $row[1];
            $gender = $row[2];
            $phone= $row[3];
            $division= $row[4];
            $cost_per_day = $row[5];
            $cost_per_month = $row[6];

        ?>

            <tr>
                                                         <!-- <td><?= $user_id; ?></td> -->
                 <td><?php echo $name; ?></td>                                           
                 <td><?php echo $age; ?></td>
                 <td><?php echo $gender; ?></td>
                 <td><?php echo $phone; ?></td>
                 <td><?php echo $division; ?></td>
                 <td><?php echo $cost_per_day; ?></td>
                 <td><?php echo $cost_per_month; ?></td>

            </tr>

        <?php     
        }
        ?>

    </table><br><hr><hr><br><br>




</body>
</html>