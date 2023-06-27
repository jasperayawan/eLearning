<?php
session_start();
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$dbname = "eltech_db";

$conn = mysqli_connect($host, $username, $password, $dbname);

if(isset($_POST["action"])){
    if($_POST["action"] == "register"){
        register();
    }
    else if($_POST["action"] == "login"){
        login();
    }
}

// Register
function register(){
    global $conn;

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if(empty($name) || empty($email) || empty($password)){
        echo "Please Fill Out The Form!";
    }

    $user = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

    if(mysqli_num_rows($user) > 0){
        echo "Email has already taken!";
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users VALUES('','$name','$email','$hashedPassword')";
    mysqli_query($conn, $query);
    echo "Register Successfully!";
}

// login
function login(){
    global $conn;

    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

    if(mysqli_num_rows($user) > 0){
        $row = mysqli_fetch_assoc($user);
        $hashedPassword = $row["password"];
        if(password_verify($password, $hashedPassword)){
            echo "Login Successfully!";
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
        }
        else{
            echo "Wrong Password";
            exit;
        }
    }
    else{
        echo "User Not Registered!";
        exit;
    }
}
?>