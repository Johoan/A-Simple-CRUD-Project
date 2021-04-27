<?php 

session_start();

    include("connection.php");
    include("function.php");

    $user_data = check_login($con);

?>

<!DOCTYPE html>
<html>

<head>

    <title>My Website</title>

</head>

<body>

    <a href="logout.php">Logout</a>

    <h1>This is Home Page</h1>

    <p> Welcome, <?php echo $user_data['name'];?></p>

</body>



</html>