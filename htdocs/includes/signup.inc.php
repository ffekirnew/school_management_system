<?php

if (isset($_POST['submit']))
{
    include_once 'dbh.inc.php';

    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //error handlers
    //checking for emtpy places
    if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd))
    {
        header("location: ../signup.php?signup=empty");
        exit();
    }

    else
    {
        if (!pregmatch("/^[a-zA-Z*$/]", $first) || !pregmatch("/^[a-zA-Z*$]/", $last))
        {
             header("location: ../signup.php?signup=invalid");
             exit();
        }

        else
        {
            if(!filter_var($email, filter_validate_email))
            {
                header("location: ../signup.php?signup=email");
                exit();
            }

            else
            {
               $sql = "SELECT * FROM users Where user_uid = '$uid'";
                $result = mysqli_query($conn, $sql);
                $resultcheck = mysqli_num_row($results);
                if ($resultcheck > 0)
                {
                    header("location: ../signup.php?signup=user");
                    exit();
                }

                else
                {
                    //hashing the password
                    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ($first, $last, $email, $uid, $hashedpwd);";
                    mysqli_query($conn, $sql);
                    header("location: ../signup.php?signup=success");
                    exit();
                }
            }
        }
    }
}
else
{
    header("location: ../signup.php");
    exit();
}