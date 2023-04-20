<?php
$mysqli = new mysqli('localhost', 'root', '', 'awp');
// $mysqli->query("INSERT INTO tblStudents SET firstname='Donykage', lastname='donykage'");

// $result = $mysqli->query("SELECT * FROM tblStudents ORDER BY id DESC LIMIT 10");
$result = $mysqli->query("SELECT id, first_name FROM tblStudents ");

$result_count = $mysqli->field_count;
// echo $result_count;
// print($result_count);
// exit();
function dbQuery($result)
{
    echo "
    <table border=1>
    <tr>
    
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email Address</th>
    <th>Country</th></tr>
  ";
    while ($row = $result->fetch_array()) {
        echo '<tr><td>' . $row['id'] . '</td>';
        echo '<td>' . $row['first_name'] . '</td>';
        echo '<td>' . $row['last_name'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['location'] . '</td></tr>';
    }
    echo "</table>";
}

dbQuery($result);

$mysqli->close();
