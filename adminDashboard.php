<?php
require_once 'include/adminHeader.php';
require_once 'include/connectDB.php';

$sql = "SELECT * FROM applications ORDER BY status DESC";
$sql2 = "SELECT * FROM reservations ORDER BY status DESC";

$result = $connect->query($sql);
$result2 = $connect->query($sql2);
$connect->close();
?>
<div class="adminDashContainer">
    <h1>NIC Application Requests</h1>
    <br>
    <table>
        <tr>							
            <th>Name</th>
            <th>DOB</th>
            <th>Gender</th>
            <th>Address</th>
            <th>BC Number</th>
            <th>Civil Status</th>
            <th>Email</th>
            <th>Contact</th>
            <th>User ID</th>
            <th>Status</th>
            <th>Options</th>
        </tr>
        <?php
            while($rows = $result->fetch_assoc())
            {
        ?>
        <tr>
            <td><?php echo $rows['name'];?></td>
            <td><?php echo $rows['dob'];?></td>
            <td><?php echo $rows['gender'];?></td>
            <td><?php echo $rows['address'];?></td>
            <td><?php echo $rows['bcnum'];?></td>
            <td><?php echo $rows['cvstatus'];?></td>
            <td><?php echo $rows['email'];?></td>
            <td><?php echo $rows['contact'];?></td>
            <td><?php echo $rows['user_id'];?></td>
            <td><?php echo $rows['status'];?></td>
            <td>
            <form action='include/admin/approveApplication.php?name="<?php echo $rows['app_id']; ?>"' method="GET">
            <input type="hidden" name="app_id" value="<?php echo $rows['app_id']; ?>">
            <button type="submit"><i class="fa fa-check-square"></i></button></form> 

            <form action='include/admin/disapproveApplication.php?name="<?php echo $rows['app_id']; ?>"' method="GET">
            <input type="hidden" name="app_id" value="<?php echo $rows['app_id']; ?>">
            <button type="submit"><i class="fa-solid fa-square-xmark"></i></button></form> 

            <form action='include/admin/deleteApplication.php?name="<?php echo $rows['app_id']; ?>"' method="GET">
            <input type="hidden" name="app_id" value="<?php echo $rows['app_id']; ?>">
            <button type="submit"><i class="fa-solid fa-trash"></i></button></form> 
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

<!-- -->

<div class="adminDashContainer">
    <h1>Appointment Reservation Requests</h1>
    <br>
    <table>
        <tr>							
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Reason</th>
            <th>Date</th>
            <th>User ID</th>
            <th>Status</th>
            <th>Options</th>
        </tr>
        <?php
            while($rows2 = $result2->fetch_assoc())
            {
        ?>
        <tr>
            <td><?php echo $rows2['name'];?></td>
            <td><?php echo $rows2['email'];?></td>
            <td><?php echo $rows2['contact'];?></td>
            <td><?php echo $rows2['reason'];?></td>
            <td><?php echo $rows2['date'];?></td>
            <td><?php echo $rows2['user_id'];?></td>
            <td><?php echo $rows2['status'];?></td>
            <td>
            <form action='include/admin/approveAppointment.php?name="<?php echo $rows2['res_id']; ?>"' method="GET">
            <input type="hidden" name="res_id" value="<?php echo $rows2['res_id']; ?>">
            <button type="submit"><i class="fa fa-check-square"></i></button></form> 

            <form action='include/admin/disapproveAppointment.php?name="<?php echo $rows2['res_id']; ?>"' method="GET">
            <input type="hidden" name="res_id" value="<?php echo $rows2['res_id']; ?>">
            <button type="submit"><i class="fa-solid fa-square-xmark"></i></button></form> 

            <form action='include/admin/deleteAppointment.php?name="<?php echo $rows2['res_id']; ?>"' method="GET">
            <input type="hidden" name="res_id" value="<?php echo $rows2['res_id']; ?>">
            <button type="submit"><i class="fa-solid fa-trash"></i></button></form> 
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

<?php require_once 'include/footer.php'; ?>