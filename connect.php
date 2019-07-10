<?php

$username=$_POST['username'];
$password=$-POST['password'];

if(!empty($username)||!empty($password)){
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="testproject";

$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_error()){
die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error()); );
}
else{
$SQL ="INSERT INTO registation(username,password) values('$username','$password')";
if($conn->query(SQL));
echo  "login successfull anjali";
}
else{
    echo "Error: ".$SQL ."<br>".$conn->error;
}
$conn->close(); 
}
} 
    echo"password should not be empty";
    die();
        }
}
else{
    echo "username should not be empty";
    die();
}
?>