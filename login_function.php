<?php
    session_start();
    @include 'login-config.php';

    if(isset($_POST['Username']) && isset($_POST['Password'])) {

        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $Username = validate($_POST['Username']);
        $Password = validate($_POST['Password']);

        if(empty($Password) && empty($Username)) {
            header("Location: login.php?error=Username and Password are Required");
            exit();
        }
        else if(empty($Password)) {
            header("Location: login.php?error=Password is Required");
            exit();
        }
        else if(empty($Username)) {
            header("Location: login.php?error=Username is Required");
            exit();
        }
        else {
            $sql = "SELECT * FROM user_form WHERE userName = '$Username' AND passWord = '$Password' ";
            $result = mysqli_query($connect, $sql);

            if(mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['userName'] === $Username && $row['passWord'] === $Password) {
                    $_SESSION['userName'] = $row['userName'];
                    $_SESSION['firstName'] = $row['firstName'];
                    $_SESSION['lastName'] = $row['lastName'];
                    $_SESSION['userID'] = $row['userID'];
                    header("Location: index.html");
                    exit();
                }
                else {
                    header("Location: login.php?error=Incorrect Username or Password");
                    exit();
                }
            }
            else {
                header("Location: login.php?error=Incorrect Username or Password");
                exit();
            }
        }
    }
    else {
        header("Location: login.php");
        exit();
    }


?>