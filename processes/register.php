<?php
 include 'connection.php';
if(isset($_POST['signup_button'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    if($password1 != $password2){
        header("Location:../index.php?signup=InvalidPassword!");
    }else{

        $sql = "INSERT INTO teachers(FirstName,LastName,UserName,Email,Passwrd) VALUES('$firstname','$lastname','$username','$email','$password2');";
        mysqli_query($connection, $sql);
        header("Location:./index.php?signup=success");
    }

}

?>

