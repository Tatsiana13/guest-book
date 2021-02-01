<?php
$data = file_get_contents("guest.txt");
$records = explode("<----->", $data);

echo "<div class='table'>";
echo "<table>";
echo "<th>Name</th><th>Email</th><th>Message</th><th>Time</th>";

foreach ($records as $record) {
    $row = explode("\n", trim($record));
    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
}
echo "</table>";
echo "</div>";
