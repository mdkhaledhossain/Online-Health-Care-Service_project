<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worker-summary</title>
    <link rel="stylesheet" href="../asstes/css/worker_summary_css.css">
</head>
<body>
    
<table border = "1" align = "center">
<caption><div class = "table_header_1">Worker Summary Table</div></caption>
        <thead>
          <tr>
            <th>Division</th>
            <th>Count</th>
            <th>Sum_Salary</th>
            <th>Avarage_salary</th>
          </tr>
        </thead>

       
        <?php
        include('./connection.php');
        $view_worker_query = "select Division,count(id) as Count, sum(salary) as Sum_salary, avg(salary) as Avarage_salary 
        from workers
        group by division";
        $run = mysqli_query($conn, $view_worker_query);
        while ($row = mysqli_fetch_array($run)) {
           $Division     = $row[0];
           $Count   = $row[1];
           $Sum_salary  = $row[2];
           $Agv_salary   = $row[3];

        ?>

        <tr>
          <td><?php echo $Division; ?></td>
          <td><?php echo $Count; ?></td>
          <td><?php echo $Sum_salary; ?></td>
          <td><?php echo $Agv_salary; ?></td>>
        </tr>


        <?php 
        }
        ?>

      

      </table>



</body>
</html>