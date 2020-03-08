<?php
$conn = new mysqli("localhost", "root", "12345");
$conn->query("USE myDB;");
$image = $_POST["image"];
$title = $_POST["title"];
$writer = "";
$result = $conn->query("SELECT * FROM `currentuser` WHERE `id`=1;");
if($result == NULL){
    echo "No account found with given details";
}elseif ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $writer = $row["name"];
    }
}
$description = $_POST["desc"];
$date = "Now";
$que = "SELECT * FROM news;";
$result = $conn->query($que);
$id = $result->num_rows + 1;
if($image != NULL && $title != NULL && $description != NULL){
$sql = "insert into news(idnews, imageurl, title, description, writer) values($id,'$image','$title','$description','$writer')";
}
if($conn->query($sql) === TRUE){
    echo "Uploaded Succesfully!";
}else{
    echo "Error while uploading: " . $conn->error;
    echo $id . "<br>  " . $image . "<br>  " . $title . "<br>  " . $description . "<br>  " . $writer . "<br>  " . $date;
}
?>