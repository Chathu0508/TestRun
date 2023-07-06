<?php

if (isset($_POST["Ename"]) && $_POST["Ename"] != null) {
    $staffemail = $_POST["Eemail"];
    $staffpassword = $_POST["Epass"];
    $staffstatus = $_POST["Estatus"];
    $id=$_POST["sid"];
    
    echo "<script> alert('Output 01');</script>";
    include '../mysqldbconnection.php';
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $sql = "UPDATE employee SET usertype='$stafftype', email='$staffemail', password='$staffpassword', status= '$staffstatus' WHERE id = '$id'";
           echo "<script> alert('Output 02');</script>";
        if ($conn->query($sql) === TRUE) {
            echo "<script> alert('Employee details update successfully');</script>";
            $_POST["Ename"] = NULL;
            echo "<script> alert('Output 03');</script>";
            header("Location: Employeedashbaord.php");
            exit();
        } else {
            echo "<script> alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
            echo "<script> alert('Output 04');</script>";
        }
        $conn->close();
    }
}
?>
