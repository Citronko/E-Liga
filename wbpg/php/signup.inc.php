<?php
if(isset($_POST['signup-submit'])){

    require 'dbh.inc.php';

$username= $_POST['uid'];
$email= $_POST['mail'];
$password= $_POST['pwd'];
$passwordRepeat= $_POST['pwd-repeat'];

if (empty($username) || empty($email) || empty($username) || empty($username)){
    header("Location: ../signup.html?error=emptyfields&uid=".$username."&mail=".$email);
exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
    header("Location: ../signup.html?error=invalidmail&uid=".$username);
    exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
header("Location: ../signup.html?error=invalidmailuid");
exit();
}
else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../signup.html?error=invalidmail&uid=".$email);
    exit();
}
else if($password !== $passwordRepeat){
    header("Location: ../signup.html?error=passwordcheck&uid=".$username."&mail=".$email);
    exit();
}
else{
    $sql= "SELECT uidUsers FROM users WHERE uidUsers=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
     header("Location: ../signup.html?error=sqlerror");
      exit();
    }
    else{
      mysqli_stmt_bind_param ($stmt,"s",$username); 
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheckition > 0) {
        header("Location: ../signup.html?error=usertaken&uid=".$email);
      exit();
      }
      else {
        $sql= "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?,  ?,  ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location: ../signup.html?error=sqlerror");
             exit();
      }
      else {
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param ($stmt,"sss",$username, $email, $hashedPwd); 
        mysqli_stmt_execute($stmt);
        header("Location: ../signup.html?signup=success");
         exit();
      }
    }
}
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
}
else {
    header("Location: ../signup.html");
    exit();
}