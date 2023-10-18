<?php 
include("dbcon.php");
date_default_timezone_set('Europe/Dublin');
$sql = "SELECT * from member";
$result = mysqli_query($conn, $sql);

echo "<SELECT name='memberID'>";

while($row = mysqli_fetch_assoc($result)) {
    $id=$row['id'];
    $fn=$row['firstname'];
    $sn=$row['surname'];
    echo "<OPTION value='$id'>$fn $sn</OPTION>";
}
echo "</SELECT>";


mysqli_query($conn, $sql);

mysqli_close($conn); 
?>