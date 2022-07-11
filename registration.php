<?php
include 'conn.php';
$name = $_POST["user"];
$pass = $_POST["pwd"];
$cnpass = $_POST["cnpwd"];
$age = $_POST["age"];
$phnumber = $_POST["phnumber"];
if($name =="" || $pass == "" || $cnpass ==""|| $age ==""|| $phnumber==""){
    header('location:signup.php');
}
else{
    if($pass != $cnpass)
    {
    header('location:signup.php');
    }
}

$sql = "select * from usertable where name= '$name'";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);
if($num> 0){
    echo"Matriculation number already in use<br>";
    echo "<p>Already registered? <a href='login.php'>Login</a></p>";
}
else{
    $reg = " insert into usertable (name , password) values ('$name','$pass')";
    $validquery=mysqli_query($conn,$reg);
    if($validquery==1){
        header('location:login.php');
    }
}
?>