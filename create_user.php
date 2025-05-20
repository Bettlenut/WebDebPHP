<?php
    /**
     * REQUEST METHOD: POST, GET
     * POST = $_POST[];
     * GET = _GET[];
     */

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $role = $_POST["role"];
        echo "Plain Password: $password <br>";

        // ENCRYPTION
        $password = $password . "system";
        $cipher = password_hash($password, PASSWORD_DEFAULT);
        echo "Cipher Password: $cipher <br>";

        // DECRYPTION
        $decrypted = password_verify($password, $cipher);
        echo "Decrypted Password: $decrypted <br>";


        // DATABASE CONNECTION
        //                     servername   username  password  database name  port
        $con = mysqli_connect("localhost", "batch1", "batch1", "db_tiongsan", "3307");

        //CHECK CONNECTION
        if($con->connect_error){
            echo "Error" . $con->connect_error;
        }else{
            echo "Connected";
        }


        //INSERT QUERY
        $sql = "INSERT INTO `tbl_users`(`username`, `password`, `role`) VALUES ('$username','$cipher', '$role')";
        $con  -> query($sql);
    }

?>