<?php
session_start();
require 'connection.php';

if (isset($_POST['btnRegister'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars(md5(($_POST['password'])));


    // check email
    $CheckEmail = "SELECT * FROM user WHERE email='$email'";
    $result     =  mysqli_query($connection, $CheckEmail);
    $count      =  mysqli_num_rows($result);

    if ($count > 0) {
        echo "<script>alert('Email has already been taken.');window.location.href='index.html';</script>";
    } else {
        $dbquery = "INSERT INTO user (name , email, password) 
                    VALUES('$name' , '$email' , '$password') ";

        $dataquery = mysqli_query($connection, $dbquery);
        if ($dataquery) {
            echo "<script>alert('Registration successful, Please proceed to login');window.location.href='../index.html';</script>";
        } else {
            mysqli_error($connection);
        }
    }
}
if (isset($_POST['btnLogin'])) {
    $email    =  $_POST['email'];
    $password =  md5($_POST['password']);

    $query         = "SELECT * FROM user WHERE email = '$email'";
    $loginResult   = mysqli_query($connection, $query);

    ///////////////////////////CHECKING User LOGIN/////////////////////////////
    if (mysqli_num_rows($loginResult)>0) {
        while ($row   = mysqli_fetch_assoc($loginResult)) {
            $dbuserID = $row['userID'];
            $dbname  = $row['name'];
            $dbemail = $row['email'];
            $dbpass  = $row['password'];
        }
        if ($email === $dbemail && $password === $dbpass) {
            $_SESSION['userID' ]=$dbuserID;
            $_SESSION['email']=$dbemail;
            $_SESSION['name']=$dbname;
             
            echo "<script>alert('Welcome $dbname.');window.location.href='../studentHome.php';</script>";
        } else {
            echo "<script>alert('Email and Password does not match.');window.location.href='../index.html'</script>";
        }
    }
}
