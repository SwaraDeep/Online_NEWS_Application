<?php
$conn = new mysqli("localhost", "root", "12345", "mydb");
$sql = "CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `location` varchar(25) NOT NULL,
  `password` varchar(14) NOT NULL,
  `mobile` int(10) UNIQUE NOT NULL,
  `email` varchar(30) UNIQUE NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
";
if($conn->query($sql) == TRUE){
    echo "Table created successfully";
}else {
    echo "Error creating table: " .$conn->error;
}
$sql = "CREATE TABLE `mydb`.`currentuser` (
  `id` int(1) NOT NULL,
  `name` VARCHAR(50) NULL,
  `email` VARCHAR(45) NULL,
  `location` VARCHAR(20) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) VISIBLE);
";
if($conn->query($sql) == TRUE){
    $conn->query("INSERT INTO `mydb`.`currentuser` (`id`) VALUES ('1');");
    echo "<br>Currentuser Table created successfully";
}else {
    echo "Error creating table: " .$conn->error;
}
?>