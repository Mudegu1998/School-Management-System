<?php
require_once ('db.php');
$sql="SELECT * FROM sms_teacher WHERE user_id=$user_id";
$row= mysqli_query($con, $sql);
$result=mysqli_fetch_query($row,$sql);

if (mysqli_num_rows($result)>0) {
while ($row=mysqli_fetch_assoc($result)) {
    ?>
    <table>
    <tr>
    <td><?php echo "$row=['ID'];"?></td>
    <td><?php echo "$row=['NAME'];"?></td>
    <td><?php echo "$row=['Email'];"?></td>
    <td><?php echo "$row=['Action'];?"></td>

    <td><a href="edit_teacher.php" class="btn btn-warning my-3">Edit</a></td>
    </tr>
    </table>
    <?php 
}   
}
// Edit teacher logic goes here
// After processing, redirect back to teacher_list.php or show a success message

include_once ('header:teacher_list.php');
?>

