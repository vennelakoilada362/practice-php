<?php
    $server= "localhost";
    $username="root";
    $password="";
    $db="prac"; 

   $conn= mysqli_connect($server ,$username,$password);
    // mysqli_select_db($db);

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $query = "SELECT * FROM user where name='$name' && pass = '$pass'";
        $data = mysqli_query($conn,$query);
        $total = mysqli_num_rows($data);
    if(mysqli_num_rows($total)==1){
        echo "You Have Successfully Logged In";
        exit();
    }
    else{
        echo "You Have Entered Incorrect Details";
        exit();
    }
}
   
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="name" id="name" placeholder="Enter ur name">
        <br>
        <input type="password" name="pass" id="pass" placeholder="Enter password">
        <br>
        <input type="submit" name="submit">
    </form>
</body>

</html>