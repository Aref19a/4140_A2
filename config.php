<?php
$con = mysqli_connect('localhost', 'root', 'root', '4140_A2');
$response = array();
if ($con) {
    $sql = "SELECT * FROM Parts923";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $x = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $response[$x]['partNo923'] = $row['partNo923'];
            $response[$x]['partName923'] = $row['partName923'];
            $response[$x]['currentPrice923'] = $row['currentPrice923'];
            $response[$x]['qoh923'] = $row['qoh923'];
            $x++;
        }
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
} else {
    echo "DATABASE CONNECTION FAILED! TRY AGAIN BUDDY.";
}
