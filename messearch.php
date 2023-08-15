<!DOCTYPE html>

<?php #include("func.php");?>

<html>
<head>
	<title>User Messages</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

<?php
if (isset($_POST['mes_search_submit'])) {
    $name = $_POST['mes_name'];
    $keyword = $_POST['mes_keyword'];
    $con = mysqli_connect("localhost", "root", "", "myhmsdb");
    $query = "SELECT * FROM contact WHERE name LIKE '%$name%' AND message LIKE '%$keyword%'";
    $result = mysqli_query($con, $query);
    ?>
    <!-- Display the search results -->
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">User Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th scope="col">Message</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['contact']; ?></td>
                    <td><?php echo $row['message']; ?></td>
                </tr>
            <?php
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