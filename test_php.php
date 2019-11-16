<!--UPDATE `Everything` SET `Money` = '4500' WHERE `Everything`.`id` = 6;-->
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="refresh" content="5">
  <title>Country Matrix</title>
  <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<table>
  <tr>
    
      <th>id</th>
      <th>Counry</th>
      <th>GDP</th>
      <th>Money</th>
      
    
  </tr>
  <?php 
  $conn = mysqli_connect("sql7.freesqldatabase.com","sql7311618","59SrLgP3Lv","sql7311618");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT id,username,GDP,Money  FROM Everything";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"] . "</td><td>"
. $row["GDP"]. "</td><td>" . $row["Money"]."</tr></td>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
  ?>
</table>
</body>
</html>