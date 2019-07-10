<?php
$USERNAME=$_POST['USERNAME'];
$PASSWORD=$_POST['PASSWORD'];
$DEPT=$_POST['DEPT'];
$ADDRESS=$_POST['ADDRESS'];
$AGE=$_POST['AGE'];
$DOB=$_POST['DOB'];
$GENDER=$_POST['GENDER'];


if(!empty($USERNAME) ||!empty($PASSWORD)||!empty($DEPT) ||!empty($ADDRESS) ||!empty($AGE) ||!empty($DOB) ||!empty($GENDER) )
{ 
    
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="regphp";  

     $conn=new mysqli($host,$dbusername,$dbpassword,$dbname );

     if(mysqli_connect_error())
     {
         die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
     }
     else{
         
         $SQL= "INSERT INTO register (USERNAME,PASSWORD,DEPT,ADDRESS,AGE,DOB,GENDER ) values(?, ?, ?, ?, ?, ?, ?)";
               if($conn->query($sql)){
                    echo "new record is inserted";
               }
               else
               {
                   echo "Error:".$sql."<br>".$conn->error;
               }
         /*$stmt=$conn->prepare($SELECT);
         $stmt->bind_param("s",ID);
         $stmt->execute();
         $stmt->bind_result($ID);
         $stmt->store_result();
         $rnum=$stmt->num_rows;

         if($rnum==0)
         {
            $stmt->close(); 
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ssssii",$NAME,$DEPT,$ADDRESS,$AGE,$DOB,$GENDER);
            $stmt->execute();
            echo "new record is inserted successfully";
         }else{
             echo "someone have that number";
         }
         $stmt->close();*/
         $conn->close();
    /* }
     }*/

    }   
    else{
    echo "all fields are required";
    die();
    }
?>