<?php
include './../Sharefolder/Header.php';
include './../CSS/Res.php';
?>

<style>
    body {
        background-image: url('./../Images/Topview.jpg');
        background-position: center;
        background-size: fill;
        height: 100vh;

    }

    .box {
        margin: 0 px;
        padding-top: 1%;
        padding-left: 1%;
        padding-bottom: 1%;
        color: white;
    }

    .box-shawdow {
        -webkit-box-shadow: 0px 0px 67px -11px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 0px 0px 67px -11px rgba(0, 0, 0, 0.75);
        box-shadow: 0px 0px 67px -11px rgba(0, 0, 0, 0.75);
    }

    .box-shawdowin {
        -webkit-box-shadow: inset 0px 0px 69px -2px rgba(0, 0, 0, 0.98);
        -moz-box-shadow: inset 0px 0px 69px -2px rgba(0, 0, 0, 0.98);
        box-shadow: inset 0px 0px 69px -2px rgba(0, 0, 0, 0.98);
    }

    .box-shawdowinw {
        -webkit-box-shadow: inset 0px 0px 77px -34px rgba(255, 255, 255, 1);
        -moz-box-shadow: inset 0px 0px 77px -34px rgba(255, 255, 255, 1);
        box-shadow: inset 0px 0px 77px -34px rgba(255, 255, 255, 1);
    }

    .font1 {
        font-family: 'Comfortaa', cursive;
        text-align: center;
        font-size: 50px;
        text-decoration: underline;
        font-weight: 400;
    }

    .font2 {
        font-weight: 400;

    }

    .box02 {
        margin: auto;
        width: 75%;
        padding: 50px;
        font-weight: 400;
    }

    .box03 {
        margin: auto;
        padding-left: 2%;
        padding-right: 2%;
        font-weight: 100;
    }
</style>

<div class="box">
    <a class="btn btn-secondary" href="./../Folder-Attendance/Dashboard.php"><i class="bi bi-door-open"></i> Back to main page</a>
</div>
<h1 class="font1">Employees Register</h1>
<div class="box02  ">
    <form action="Employeedashbaord.php" method="POST" name="staffadd" ">
        <label>Employee Name : </label><br>
        <input class=" form-control" type=" text" name="Ename" id="Ename" value="" required /><br />
    <label>Employee NIC Number : </label><br>
    <input class="form-control" type=" text" name="Enic" id="Enic" value="" required /><br />
    <label>Employee Usertype : </label><br>
    <select class="form-control" name="Etype" id="Etype" required><br />
        <option value="">Select the type</option>
        <option value="Admin ">Admin</option>
        <option value="It Executive">IT Executive Office</option>
        <option value="Tech Team">Tech Office</option>
        <option value="System Engineer">System Engineer Office</option>
        <option value="Network Team">Network manger</option>
    </select><br />
    <label>Employee Email Address : </label><br>
    <input class="form-control" type=" text" name="Eemail" id="Eemail" value="" required /><br />
    <label>Employess Username : </label><br>
    <input class="form-control" type=" text" name="Euser" id="Euser" value="" required /><br />
    <label>password :</label><br>
    <input class="form-control" type=" password" name="Epass" id="Epass" value="" required /><br />
    <label>Employee Status : </label><br>
    <select class="form-control" name="Estatus" id="Estatus" required><br />
        <option value="">Select the type</option>
        <option value="Active_Employee ">Active Employee</option>
        <option value="Deactive_Employee">Deactive Employee</option>
    </select>
    <br />
    <div class="d-grid gap-2">
        <input class="btn btn-success btn-update" type="submit" value="Submit" />
        <button class="btn btn-success btn-danger " type="reset" value=""><i class='bi bi-arrow-clockwise'></i></button>

    </div>
    </form>
</div>

<div class="container">
    <h3 style="padding-bottom: 15px;">Employee Details</h3>
</div>
<div class="container ">
    <a class="d-grid gap-2 btn btn-success" href='./Employeedashbaord.php'><i class="bi bi-arrow-clockwise"></i></a> <br>
</div>

<div class="box03">
    <table id="example" class="table table-striped table-dark" style="width:100%; text-align: center; ">
        <thead>
            <tr>
                <th>EID</th>
                <th>Employee Regcode</th>
                <th>Name of the Employee</th>
                <th>Role of the Employee</th>
                <th>Employee Username</th>
                <th>Employee Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php include '../mysqldbconnection.php'; ?>
            <?php
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            } else {
                $sql = "SELECT *  From employee ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $my_id = $row["id"];
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["employee_code"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["usertype"] . "</td>";
                        echo "<td>" . $row["username"] . "</td>";
                        echo "<td>" . $row["status"] . "</td>";
                        echo "<td> <button   myid='" . $row['id'] . "' class='myModal btn btn-success' data-toggle='modal' data-target='#exampleModalCenter'><i class='bi bi-pen-fill'></i></button></td>";
                        echo "</tr>";
                    }
                }
                $conn->close();
            }
            ?>
        </tbody>
    </table>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 style="padding-bottom: 15px;">Employee profile Changes</h3>
                <button id="hidem" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div id="modalContent"></div>


            <div class="modal-footer">
                <button type="button" id="bdel" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });

    $('button.myModal').on('click', function() {

        var bb = $(this).attr("myid");
        $.ajax({
            url: 'EmpModel.php?myid=' + bb,
            type: 'GET',
            success: function(data) {
                $('#modalContent').html(data);
            }
        });
        $('#exampleModalCenter').modal('show');
    });
    $('#bdel').on('click', function() {
        $('#exampleModalCenter').modal('hide');
    });
    $('#hidem').on('click', function() {
        $('#exampleModalCenter').modal('hide');
    });
</script>

<?php include './../Sharefolder/Footer.php' ?>



<?php
if (isset($_POST["Ename"]) && $_POST["Ename"] != null) {
    $staffname = $_POST["Ename"];
    $staffnic = $_POST["Enic"];
    $stafftype = $_POST["Etype"];
    $staffemail = $_POST["Eemail"];
    $staffuname = $_POST["Euser"];
    $staffpassword = $_POST["Epass"];
    $staffstatus = $_POST["Estatus"];


    include '../mysqldbconnection.php';
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $sql = "SELECT max(id) as 'Emid' FROM employee";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $Eid =  $row["Emid"];
                $Eid++;
            }
        } else {
            echo "<script> alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
        }
        $conn->close();
    }

    include '../mysqldbconnection.php';
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "<script> alert('Output 03');</script>";

        $sql = "insert into employee (employee_code, name, NIC_No, usertype, email, username, password, status) 
            values ('EMP000" . $Eid . "', 
            '" . $staffname . "', 
            '" . $staffnic . "', 
            '" . $stafftype . "', 
            '" . $staffemail . "', 
            '" . $staffuname . "', 
            '" . $staffpassword . "', 
            '" . $staffstatus . "') ";

        if ($conn->query($sql) === TRUE) {
            echo "<script> alert('employee details added successfully');</script>";
            $_POST["Ename"] = NULL;
            //   header("Location: NewFuelStation.php");
            exit();
        } else {
            echo "<script> alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
        }
        $conn->close();
    }
}
