<?php
$db_username = 'system';
$db_password = 'tiger';
$db_connection_string = 'oci:dbname=//localhost:1521/XE';
// $db_connection_string = 'oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=localhost)(PORT=1521))(CONNECT_DATA=(SERVICE_NAME=XE)))';

try {
    $db = new PDO($db_connection_string, $db_username, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT USERNAME FROM DBA_USERS";

    // Execute the query
    $stmt = $db->query($sql);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['USERNAME'] . "<br>";
    }

    // Close the database connection
    $db = null;
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

