
<?php
    require_once __DIR__ . '../config.php';

    // Create connection
    $con = mysqli_connect(
    MAIL_DB_HOST,
    MAIL_DB_USER,
    MAIL_DB_PASS,
    MAIL_DB_NAME
    );

    // Check connection
    if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

?>