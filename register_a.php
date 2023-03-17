<?php
extract($_POST);
// include("database.php");
require 'database.php';
// $id = 1;
if(isset($_POST['save'])) {
        $query="INSERT INTO register(First_Name, Last_Name, Email, Password) VALUES ('$first_name', '$last_name', '$email', '$pass')";
        $sql=mysqli_query($conn,$query) or die("Could Not Perform the Query");
        header ("Location: index.php?status=success");
        // $id++;
}