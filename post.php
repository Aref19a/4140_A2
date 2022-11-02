<?php
$conn = mysqli_connect('localhost', 'root', 'root', '4140_A2');
if ($conn) {
    $newItem = rand(1, 100);
    $insertItem = "INSERT INTO POs923 (poNo923, clientCompID923, dateOfPO923, status923) VALUES ($newID, 'B00812923','05/12/1999','1')";
    $results = mysqli_query($conn,$insertQuery);
    if ($results) {
        echo "New PO Submitted - ID $newID";
    }
}
?>