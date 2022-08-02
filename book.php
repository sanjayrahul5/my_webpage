<?php
$dsn = 'mysql:host=localhost;dbname=data';
$username='root';
$password='';

try{
    $con = new PDO($dsn,$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $ex){
    echo 'Not Connection '.$ex->getMessage();

}
 $ticketid ='';
 $name ='';
 $phone = '';
 $address = '';
 $route = '';
 $date = '';




     $name = $_POST['name'];
     $phone = $_POST['phone'];
     $address = $_POST['address'];
     $route = $_POST['route'];
     $date = $_POST['date'];



 

if(isset($_POST['insert'])){

    
        $sql = "INSERT INTO bookings(name,phone,address,route,date) VALUES('$name','$phone','$address','$route','$date')";

       
        if($sql)
        {
           
                echo '<h2>Registered Successfully</h2>';
        }
       
    }




