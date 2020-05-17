<?php
$db = new SQLite3('mnt/sda1/sensor.db');
$results = $db->query('SELECT id,(julianday(time)- 2440587.5)*86400000 AS time,type,red,green,blue FROM sensor_data ORDER BY id DESC LIMIT 50');

while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
    $jsonArray[] = $row;
}

echo json_encode($jsonArray)
?>