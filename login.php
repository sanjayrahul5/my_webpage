<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "data";
    
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
    }
    
    if(isset($_POST['submit']))
    {    
             $email = $_POST['email'];
             $password = $_POST['password'];
             $sql = "INSERT INTO login_list (email,password) VALUES ('$email','$password')";
             if (mysqli_query($conn, $sql)) {
                echo "New record has been added successfully !";
             } else {
                echo "Error: " . $sql . ":-" . mysqli_error($conn);
             }
             mysqli_close($conn);
    }

    echo "<script> location.href='http://localhost/mk%20travel/index1.html'; </script>";
    exit;
 ?>

?>