<?php
  require_once "./connection.php";

  if (isset($_POST['query'])) {
    $q = $_POST['query'];
      $query = "SELECT * FROM workers WHERE full_name LIKE '$q%' LIMIT 100";
      $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $worker_id = $row[0];
            $worker_full_name = $row[1];
            $worker_type = $row[2];
            $worker_age = $row[3];
            $worker_gender = $row[4];
            $worker_phone = $row[5];
            $worker_division = $row[6];
            $worker_salary = $row[7];
            
          echo
          "<tr>
            <td>$worker_id</td>
            <td>$worker_full_name</td>
            <td>$worker_type</td>
            <td>$worker_age</td>
            <td>$worker_gender</td>
            <td>$worker_phone</td>
            <td>$worker_division</td>
            <td>$worker_salary</td>
            
            <td><a href='./edit_worker_form.php?id=$worker_id'>Edit</a></td>
            <td>
              <a href='./delete_worker.php?id=$worker_id'><button onclick='return confirm(\"Are you sure?\");'> Delete </button></a>
            </td>

          </tr>";

          }
    } else {
      echo "<div>User not found</div>";
    }
  }
?>
