<?php
session_start();
if(!isset($_SESSION['email'])){
  header("Location: ./login_admin.html");
  // echo"<script>window.open('./admin_login','_self') </script>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Admin view</title>
    <link rel="stylesheet" href="../asstes/css/admin_view_css.css">

    <style>
      body{
        background-color: darkcyan;
      }
        table {
            background-color:  #ffffff ;
            border-radius: 10px;
        }
        .table_header_1{
            font-weight: bold;
            font-size: 30px;
            color: black  ;
            background-color:    #9fbbc1  ;
            border-radius: 10px;
        }
    </style>

</head>
<body>
    <div class="fullbox">
        <div class="innerbox"> <div class="part1"><b> Online Health Care Service. <br> Admin Page</b></div> </div>
    </div>

     <h1> <p style= "text-align: center;
    background-color:   #905f09 ;
    border: rgb(3, 3, 66) solid 5px;
    margin-left: 23%;
    margin-right: 23%;
    border-radius: 10px;
    padding: 5px;">  Welcome <?php echo $_SESSION['email'] ?>  </p> </h1>

     
            <!-- !!!!!!!!!>>>>> User Info Table Start Here <<<<<<<!!!!!!!!! -->

        <hr><hr>
        <center><div>
        <input type="text" name="live_search_1" id="live_search_1" autocomplete="off"
          placeholder="Search user...">
        </div><br></center>

      <table border = "1" align = "center">
        <caption><div class = "table_header_1">Users Info Table</div></caption>
        <thead>
          <tr>
            <th>User ID</th>
            <th>First_Name</th>
            <th>Last_Name</th>
            <th>Age</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Password</th>
            <th>Post_Code</th>
            <th>District</th>
            <th>Street</th>
          </tr>
        </thead>

        <tbody id="tmp_1">
        <?php 
        include('./connection.php');
        $view_user_query = "select * from users";
        $run = mysqli_query($conn, $view_user_query);
        while ($row = mysqli_fetch_array($run)){
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

        ?>

            <tr>
                                                         <!-- <td><?= $user_id; ?></td> -->
                 <td><?php echo $user_id; ?></td>                                           
                 <td><?php echo $user_f_name; ?></td>
                 <td><?php echo $user_l_name; ?></td>
                 <td><?php echo $user_age; ?></td>
                 <td><?php echo $user_phone; ?></td>
                 <td><?php echo $user_email; ?></td>
                 <td><?php echo $user_password; ?></td>
                 <td><?php echo $user_post_code; ?></td>
                 <td><?php echo $user_district ; ?></td>
                 <td><?php echo $user_street; ?></td>

                 <td><a href="./edit_user_form.php?id=<?=$user_id;?>"><button>Edit</button></a></td>
                 <td>
                    <a href="./delete_user.php?id=<?=$user_id;?>"><button onclick="return confirm('Are you sure');">Delete</button></a>
                 </td>
            </tr>

        <?php     
        }
        ?>
        </tbody>
        <tbody id="search_result_1"></tbody>

    </table><br><hr><hr><br><br>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#live_search_1").keyup(function () {
                var query = $(this).val();
                if (query != "") {
                  $(document).click(function(data) {
                      $("#tmp_1").hide();
                    });
                    $.ajax({
                        url: 'live_search_user.php',
                        method: 'POST',
                        data: {
                            query: query
                        },
                        success: function (data) {

                            $('#tmp_1').html("");
                            $('#search_result_1').html(data);



                        }
                    });
                } else {
                   $('#tmp_1').css('display', 'none');
                }
            });
        });
    </script>


         <!-- !!!!!!!!!>>>>> User Info Table End Here <<<<<<<!!!!!!!!! -->

         <!-- !!!!!!!!!>>>>> Worker Info Table End Here <<<<<<<!!!!!!!!! -->

         <center><div>
        <input type="text" name="live_search_2" id="live_search_2" autocomplete="off"
          placeholder="Search worker...">
        </div><br></center>

         <table border = "1" align = "center">
        <caption><div class = "table_header_1">Worker Info Table</div></caption>
        <thead>
          <tr>
            <th>Worker_ID</th>
            <th>Full_Name</th>
            <th>Type</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Division</th>
            <th>Salary</th>
          </tr>
        </thead>

        <tbody id="tmp_2">
        <?php 
        // include('./connection.php');
        $view_worker_query = "select * from workers";
        $run = mysqli_query($conn, $view_worker_query);
        while ($row = mysqli_fetch_array($run)){
            $worker_id = $row[0];
            $worker_full_name = $row[1];
            $worker_type = $row[2];
            $worker_age = $row[3];
            $worker_gender = $row[4];
            $worker_phone = $row[5];
            $worker_division = $row[6];
            $worker_salary = $row[7];

        ?>

            <tr>
                                                         <!-- <td><?= $user_id; ?></td> -->
                 <td><?php echo $worker_id; ?></td>                                           
                 <td><?php echo $worker_full_name; ?></td>
                 <td><?php echo $worker_type; ?></td>
                 <td><?php echo $worker_age; ?></td>
                 <td><?php echo $worker_gender; ?></td>
                 <td><?php echo $worker_phone; ?></td>
                 <td><?php echo $worker_division; ?></td>
                 <td><?php echo $worker_salary; ?></td>

                 <td>
                    <a href="./edit_worker_form.php?id=<?=$worker_id;?>"><button>Edit</button></a></td>
                  <td>  
                    <a href="./delete_worker.php?id=<?=$worker_id;?>"><button onclick="return confirm('Are you sure');">Delete</button></a>
                 </td>
            </tr>

        <?php     
        }
        ?>

        </tbody>
        <tbody id="search_result_2"></tbody>

    </table><br><hr><hr><br><br>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#live_search_2").keyup(function () {
                var query = $(this).val();
                if (query != "") {
                  $(document).click(function(data) {
                      $("#tmp_2").hide();
                    });
                    $.ajax({
                        url: 'live_search_worker.php',
                        method: 'POST',
                        data: {
                            query: query
                        },
                        success: function (data) {

                            $('#tmp_2').html("");
                            $('#search_result_2').html(data);



                        }
                    });
                } else {
                   $('#tmp_2').css('display', 'none');
                }
            });
        });
    </script>


                <!-- !!!!!!!!!>>>>> User Info Table End Here <<<<<<<!!!!!!!!! -->


      <br><br><br>
      <center><a href="logout.php" class="button_1">LOG OUT</a></center>
   
</body>
</html>