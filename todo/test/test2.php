<?php

include 'test/con.php';

$sql = "SELECT * FROM category";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo 'ERROR ' . mysqli_error($conn);
}
else {
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_array($result)) {
        print_r($row);
    }
}
