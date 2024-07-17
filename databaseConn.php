<?php
$conn = mysqli_connect('localhost', 'root', '', 'sistemrekapsppver2');

// Check database connection
if (!$conn) {
    echo "Database connection fail";
} else {
    echo "Database connection success";
}
