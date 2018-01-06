 <?php

include('../../../config.php');

$q = $_REQUEST["q"];

$sql = "SELECT * FROM termine WHERE ID = ?";
$statement = $mysqli->prepare($sql);
$statement->bind_param('i', $q);
$statement->execute();
 
$result = $statement->get_result();
 
while($row = $result->fetch_object()) {
  echo "<td>" . $row->Datum . "</td>";
  echo "<td>" . $row->Veranstaltung  . "</td>";
  echo "<td>" . $row->Ort  . "</td>";
  echo "<td>" . $row->Details  . "</td>";
}


?> 