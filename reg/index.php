<?php
if(isset($_POST['name'])){
    $server= "localhost";
    $username="root";
    $password=""; 

    $conn = mysqli_connect($server ,$username,$password);

    if(!$conn){
      die("Connection is unsuccessful" . mysqli_connect_error());
    }
    
    $acc=   $_POST['acc'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $pass=$_POST['pass'];

     $sql="INSERT INTO `prac`.`user` (`acc`, `name`, `age`, `email`, `phone`, `pass`, `dt`) VALUES ( '$acc', '$name', '$age', '$email', '$phone', '$pass', '2022-05-05 14:09:34.000000');";
    //  echo $sql;

     if($conn->query($sql)==true){
      //  echo "Successfully inserted";
     }else{
       echo "ERROR: $sql <br> $conn->error";
     }
     $conn->close();
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form action="" method="post" style="padding: 10em; margin: 4em">
        <input type="number" name="acc" id="acc" placeholder="Enter Acct Number" />
        <br>
        <input type="text" name="name" id="name" placeholder="Enter Name" />
        <br />
        <input type="age" name="age" id="age" placeholder="Enter ur age" />
        <br />
        <input type="email" name="email" id="email" placeholder="Enter ur email" />
        <br />
        <input type="number" name="phone" id="phone" placeholder="Enter ur phone number" />
        <br>
        <input type="password" name="pass" id="pass" placeholder="Enter password" />
        <br />
        <input type="submit" name="btn" id="btn" value="sumbit" />
    </form>
</body>

</html>

<!-- INSERT INTO `user` (`sno`, `acc`, `name`, `age`, `email`, `phone`, `pass`, `dt`) VALUES ('1', '132465', 'vennela', '21', 'koiladavennela@gmail.com', '9658956569', '123', '2022-05-05 14:09:34.000000'); -->