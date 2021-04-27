<?php 

session_start();

    include("connection.php");
    include("function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        //something was posted
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password) && !is_numeric(($email))){


            //read from database
        
            $query = "select * from users where email = 'email' limit 1";
            $result = mysqli_query($con, $query);
            if($result){

                if($result && mysqli_num_rows($result) > 0){

                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['password'] === $password){

                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: index.php");
                        die;
                    }
                }
            }


        

        } else {

            echo "Please enter some valid information!";
        }
    }

?>

<!DOCTYPE html>

<html>

    <body>

        <form>
            <fieldset>
                <legend>Login</legend>

                <input type="email" name="email" placeholder="enter your email"><br><br>
                <input type="password" name="password" placeholder="enter your password"><br><br>
                <a href="#"><em>forgot password?</em></a><br>
                <input type="submit" name="Login"><br><br>
                
                <span>New member? <?php echo " "; ?></span><a href="registration.php">Register</a>
                

            </fieldset>


        </form>

    </body>


</html>