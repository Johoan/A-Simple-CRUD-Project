<?php 

session_start();

    include 'connection.php';
    include 'function.php';

    if($_isset($_POST['submit'])){

        //something was posted
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($fullname) && !empty($email) && !empty($password) && !is_numeric($email) && !is_numeric($fullname)){


            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id, fullname, email, password) values ('$user_id', '$fullname', '$email', '$password')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;

        } else {

            echo "Please enter some valid information!";
        }
    }

?>

<!DOCTYPE html>

<html>

    <body>

        <form method="post">
            <fieldset>
                <legend>Register</legend>
                <input type="text" name="fullname" placeholder="enter full name"><br><br>
                <input type="email" name="email" placeholder="enter your email"><br><br>
                <input type="password" name="password" placeholder="enter your password"><br><br>
                <button type="submit" name="submit">Submit</button><br><br>
                <span>Already a member? <?php echo " "; ?></span><a href="login.php">Click to login</a>
                

            </fieldset>


        </form>

    </body>


</html>
