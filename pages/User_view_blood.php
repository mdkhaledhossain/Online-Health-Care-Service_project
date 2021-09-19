<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asstes/css/user_view_nurse_css.css">
    <title>Oxygen</title>
</head>
<body>
    
    
<div class="fullbox">
        <div class="innerbox"> <div class="part1"><b> Online Health Care Service </b></div> </div>
        <div class="innerbox"> <div class="part2">Welcome to our platform</div> </div>
        <div class="innerbox"> <div class="part3"> Emargency Blood Service</div> </div>
    </div>
    <br><hr><hr><br>

   

    <table border = "1" align = "center">
        <caption><div class = "table_header_1">Blood Info Table</div></caption>
        <thead>
          <tr>
            <th>ID</th>
            <th>Blood_Group</th>
            <th>Cost_Per_litre</th>
            <th>Location</th>
          </tr>
        </thead>

        <?php 
         include('./connection.php');
        $view_blood_query = "SELECT * from blood";
        $run = mysqli_query($conn, $view_blood_query);
        while ($row = mysqli_fetch_array($run)){
            $Id = $row[0];
            $Blood_group = $row[1];
            $Cost_per_litre = $row[2];
            $Location= $row[3];
            
        ?>

            <tr>
                                                         
                 <td><?php echo $Id; ?></td>                                           
                 <td><?php echo $Blood_group; ?></td>
                 <td><?php echo $Cost_per_litre; ?></td>
                 <td><?php echo $Location; ?></td>
              

            </tr>

        <?php     
        }
        ?>


    </table><br><hr><hr><br><br>



</body>
</html>