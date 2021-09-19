<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asstes/css/user_view_nurse_css.css">
    <title>Doctor</title>
</head>
<body>
    
    
<div class="fullbox">
        <div class="innerbox"> <div class="part1"><b> Online Health Care Service </b></div> </div>
        <div class="innerbox"> <div class="part2">Welcome to our platform</div> </div>
        <div class="innerbox"> <div class="part3"> Doctor Information</div> </div>
    </div>
    <br><hr><hr><br>

   

    <table border = "1" align = "center">
        <caption><div class = "table_header_1">Doctor Info Table</div></caption>
        <thead>
          <tr>
            <th>ID</th>
            <th>Doctor_Name</th>
            <th>Speciality</th>
            <th>Phone</th>
            <th>Visiting_Time</th>
            <th>Hospital_Name</th>
            <th>Hospital_Location</th>
          </tr>
        </thead>

        <?php 
         include('./connection.php');
        $view_doctor_query = "SELECT * from doctor_info";
        $run = mysqli_query($conn, $view_doctor_query);
        while ($row = mysqli_fetch_array($run)){
            $Id = $row[0];
            $Doctor_name = $row[1];
            $Speciality= $row[2];
            $Phone = $row[3];
            $Visiting_Time = $row[4];
            $Hospital_Name = $row[5];
            $Hospital_Location = $row[6];
            
        ?>

            <tr>
                                                         
                 <td><?php echo $Id; ?></td>                                           
                 <td><?php echo $Doctor_name; ?></td>
                 <td><?php echo $Speciality; ?></td>
                 <td><?php echo $Phone; ?></td>
                 <td><?php echo $Visiting_Time; ?></td>
                 <td><?php echo $Hospital_Name; ?></td>
                 <td><?php echo $Hospital_Location; ?></td>
              
            </tr>

        <?php     
        }
        ?>


    </table><br><hr><hr><br><br>



</body>
</html>