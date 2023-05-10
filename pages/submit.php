<?php 
include("dbconnect.php");
  $rating = (int) $_POST['rate'];
    $query = "INSERT INTO `ratings`(`rating`) VALUES ('5')";
    // $returnValue = mysqli_query($db, $query);
    $msg = "test";

    mail("willswiston3@gmail.com","Subject",$msg);

    $secondaryQuery = "SELECT * FROM `ratings` WHERE 1";
    $secondaryReturnValue = mysqli_query($db, $secondaryQuery);
    $numRecords = mysqli_num_rows($secondaryReturnValue);
    echo $numRecords;

    mysqli_close($db);
?>