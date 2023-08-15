<!DOCTYPE html>
 <?php #include("func.php");?>
<html>
<head>
	<title>Doctor Details</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

<?php
// doctorsearch.php

if (isset($_POST['doctor_search_submit'])) {
    $doctorName = $_POST['doctor_name'];

    // Perform the search query
    $con = mysqli_connect("localhost", "root", "", "myhmsdb");
    $query = "SELECT * FROM doctb WHERE username LIKE '%$doctorName%'";
    $result = mysqli_query($con, $query);
    ?>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Doctor Name</th>
                <th scope="col">Specialization</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Fees</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                $username = $row['username'];
                $spec = $row['spec'];
                $email = $row['email'];
                $password = $row['password'];
                $docFees = $row['docFees'];

                echo "<tr>
                        <td>$username</td>
                        <td>$spec</td>
                        <td>$email</td>
                        <td>$password</td>
                        <td>$docFees</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
    <?php
}
?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> 

</body>
</html>