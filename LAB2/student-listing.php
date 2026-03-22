<?php
// Author: TAISEN
// Date: 22 March 2026
// Unit: IS312 Web Application Development

$conn = new mysqli("localhost", "root", "", "fru10");

$sql = "SELECT * FROM Student";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Listing</title>
</head>
<body>

<h2>Student List</h2>

<table border="1">
<tr>
    <th>StudentNo</th>
    <th>FirstName</th>
    <th>LastName</th>
    <th>Gender</th>
    <th>ContactNo</th>
    <th>ProgramCode</th>
</tr>

<?php
while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['StudentNo']}</td>
        <td>{$row['FirstName']}</td>
        <td>{$row['LastName']}</td>
        <td>{$row['Gender']}</td>
        <td>{$row['ContactNo']}</td>
        <td>{$row['ProgramCode']}</td>
    </tr>";
}
?>

</table>

</body>
</html>
