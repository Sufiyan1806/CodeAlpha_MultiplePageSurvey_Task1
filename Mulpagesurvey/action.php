<?php


    // Sanitize and process the form data
    $gender ="'". $_POST["gender"]."'";
    $age = "'".$_POST["age"]."'";
    $profession = "'".$_POST["profession"]."'"; // Assuming the checkbox values are in an array named "profession"
    $shopOnline = "'".$_POST["shopOnline"]."'";
    echo "$gender $age $profession $shopOnline";
    $connect = mysqli_connect("localhost","root","","survey");
    mysqli_query($connect,"insert into survey values(".$gender.",".$age.",".$profession.",".$shopOnline.")");
    mysqli_close($connect);
    header("location:index.php");
?>