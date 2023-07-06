<?php
$StaffEid = "";
$staffname = "";
$staffnic = "";
$stafftype = "";
$staffemail = "";
$staffuname = "";
$staffpassword = "";
$staffstatus = "";

include '../mysqldbconnection.php';


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    $my_id = $_REQUEST['myid'];
    $sql = "SELECT * FROM employee WHERE  id='$my_id' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            $StaffEid = $row["employee_code"];
            $staffname = $row["name"];
            $staffnic = $row["NIC_No"];
            $stafftype = $row["usertype"];
            $staffemail = $row["email"];
            $staffuname = $row["username"];
            $staffpassword = $row["password"];
            $staffstatus = $row["status"];
?>
            <div class="modal-body">
                <form action="Employeeupdate.php" method="POST" name="staffadd">
                    <!-- Not Change -->
                    <input class="form-control"  type="text" name="sid" id="sid" value="<?php echo $my_id; ?>" required />
                    <label>Employee ID code : <?php echo $StaffEid; ?> </label><br>
                    <label>Name of the Employee : <?php echo $staffname; ?> </label><br>
                    <label>National Identity Card Number : <?php echo $staffnic; ?></label><br>
                    <label>Username : <?php echo $staffuname; ?> </label><br>
                    <!-- Changing Imouts -->
                    <hr>
                    <label>Role of the Employee : "<?php echo $stafftype; ?> "</label><br>
                    <select class="form-control" name="Etype" id="Etype" >
                        <option value="">Select the role</option>
                        <option value="Admin ">Admin</option>
                        <option value="It Executive">IT Executive Office</option>
                        <option value="Tech Team">Tech Office</option>
                        <option value="System Engineer">System Engineer Office</option>
                        <option value="Network Team">Network manger</option>
                    </select><br/>

                    <label>Email Address: "<?php echo $staffemail; ?>"" </label><br>
                    <input class="form-control" type="text" name="Eemail" id="Eemail" value=""  /><br/>

                    <label>Old Password : "<?php echo $staffpassword; ?>"</label><br>
                    <input class="form-control" type="text" name="Epass" id="Epass" value="" placeholder="New Password"  /><br/>
                    
                    <label>Status of the Employees : "<?php echo $staffstatus; ?>"</label><br>
                    <select class="form-control" name="Estatus" id="Estatus" >
                        <option value="">Select the type</option>
                        <option value="Active Employee">Active Employee</option>
                        <option value="Inacrive Employee">Inacrive Employee</option>
                    </select>
                    <br />
                    <div class="d-grid gap-2">
                        <input class="btn btn-secondary" type="submit" value="Submit" />
                    </div>
                </form>
            </div>
<?php
        }
    }
    $conn->close();
}
?>