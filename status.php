functio<?php
$conn = mysqli_connect('localhost', 'root', 'root', '4140_A2');
if ($conn) {
    $sql = "SELECT status923 FROM POs923 WHERE poNo923 = 0";
    $results = mysqli_query($conn, $sql);
    $status = "Active";
    echo "Status for PO is $status";
}
?>