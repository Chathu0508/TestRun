<?php 

if (isset($_POST["username"])) {
    $user = $_POST["username"];
    $pass = $_POST["pass"];

    include '../mysqldbconnection.php';

    $sql = "SELECT * FROM employee WHERE username = '" . $user . "' AND password='" . $pass . "' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $_POST["username"] = NULL;

            $_SESSION["userName"] = $row['name'];
            $_SESSION["userId"] = $row['id'];
            $_SESSION["userType"] = $row['type'];
            echo "<script> alert('Welcome Mr. " . $row['name'] . "');  window.location.href='Dashboard.php';</script>";
            header("location: dashbaord.php");
            exit();
        }
    } else {
        echo "<script> alert('Error: Wrong username or password.');</script>";
    }
    $conn->close();
}
?>