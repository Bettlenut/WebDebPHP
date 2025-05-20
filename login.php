<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password = $password . "system";
        
        $con = mysqli_connect("localhost", "batch1", "batch1", "db_tiongsan", "3307");
        
        $sql = "SELECT * FROM `tbl_users` WHERE `username` = '$username'";
        $result = $con -> query($sql);
        if($result -> num_rows > 0){
            $row = $result -> fetch_assoc();
            
            //PASSWORD VERIFY
            if(password_verify($password,$row["password"])){
                if($row["role"] == "Administrator"){
                    header("Location: Admin/Dashboard.php");
                }else{
                    header("Location: Student/Dashboard.php");
                }
            }else {
                echo "Login Error";
            }
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method = "POST">
        <label for="username">Username</label>
        <input type="text" id ="username" name="username">

        <label for="password">Password</label>
        <input type="password" id ="password" name="password">

        <input type="submit" value = "Login">
    </form>
</body>
</html>