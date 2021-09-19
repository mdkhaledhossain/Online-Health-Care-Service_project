<?php
  require_once "./connection.php";

  if (isset($_POST['query'])) {
    $q = $_POST['query'];
      $query = "SELECT * FROM users WHERE first_name LIKE '$q%' LIMIT 100";
      $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $user_id = $row[0];
            $user_f_name = $row[1];
            $user_l_name = $row[2];
            $user_age = $row[3];
            $user_phone = $row[4];
            $user_email = $row[5];
            $user_password = $row[6];
            $user_post_code = $row[7];
            $user_district = $row[8];
            $user_street = $row[9];
            $_SESSION['email'] = $user_email;
          echo
          "<tr>
            <td>$user_id</td>
            <td>$user_f_name</td>
            <td>$user_l_name</td>
            <td>$user_age</td>
            <td>$user_phone</td>
            <td>$user_email</td>
            <td>$user_password</td>
            <td>$user_post_code</td>
            <td>$user_district</td>
            <td>$user_street</td>
            <td><a href='./edit_user_form.php?id=$user_id'>Edit</a></td>
            <td>
              <a href='./delete_user.php?id=$user_id'><button onclick='return confirm(\"Are you sure?\");'> Delete </button></a>
            </td>
          </tr>";

          }
    } else {
      echo "<div>User not found</div>";
    }
  }
?>
