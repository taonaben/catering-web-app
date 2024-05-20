<?php
$db = new SQLite3('Tayamika.db');

$result = $db->query('SELECT * FROM your_table');
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    echo $row['column_name'] . "<br>";
}
?>;
/home/yochyy/Desktop/2.2 Project/database.php
