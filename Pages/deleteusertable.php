<?php
$conn = new mysqli("localhost", "root", "12345", "myDB");
if($conn->query("DROP TABLE users,currentuser;") === TRUE){
    echo "Tables dropped!";
}else{
    echo "Error droping table: " .$conn->error;
}
$conn->close();
?>