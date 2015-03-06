<?php
if(isset($_POST['reg'])) {
    require "dbconn.php";
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = strip_tags($_POST['username']);
        $password=md5(strip_tags($_POST['password']));
        $repass=md5(strip_tags($_POST['repassword']));
        $email = strip_tags($_POST['email']);
        if($username==''){
            header('location:./reg.php?error=user name empty');
            exit();
        }
        if(!strcmp($password,$repass)==0) {
            header('Location:./reg.php?error=password not match');
            exit();
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header('location:reg.php?error=email not valid');
            exit();
        }
        $query = "select * from login1 where username='$username'";
        $result = mysql_query($query);
        if (mysql_num_rows($result) >= 1) {
            //Username is taken
            header('location:reg.php?error=username already taken. please try another one');
            exit();
        }

        /*This insert command for username, password and email. if you need any other field you can insert it here*/
        mysql_query("INSERT INTO login1(username,password,email) VALUES ('$username','$password','$email')") or  die("".mysql_error());
        //Here you can write conformation or success message or use any redirect
        echo "Register success";
    }
}
 else {
    header('location:reg.php');
    exit();
}
?>