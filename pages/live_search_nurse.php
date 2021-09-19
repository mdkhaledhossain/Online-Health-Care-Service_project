<?php
  require_once "./connection.php";

  if (isset($_POST['query'])) {
    $q = $_POST['query'];
    //   $query = "SELECT * FROM users WHERE first_name LIKE '$q%' LIMIT 100";
      $query = "SELECT full_name, age, gender,phone,division, cost_per_day,cost_per_month FROM workers JOIN nurses on workers.id = nurses.worker_id WHERE full_name LIKE '$q%' LIMIT 100";
      $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $name = $row[0];
            $age = $row[1];
            $gender = $row[2];
            $phone= $row[3];
            $division= $row[4];
            $cost_per_day = $row[5];
            $cost_per_month = $row[6];
          echo
          "<tr>
            <td>$name</td>
            <td>$age</td>
            <td>$gender</td>
            <td>$phone</td>
            <td>$division</td>
            <td>$cost_per_day</td>
            <td>$cost_per_month</td>

          </tr>";

          }
    } else {
      echo "<div>User not found</div>";
    }
  }
?>
