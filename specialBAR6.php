<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>
 <table>
 <tr>
  <th>Datetime</th> 
  <th>Total</th> 
  <th>Currentbalance</th>
  <th>Transactioncode</th>
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "project");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql="SELECT datetime, total, currentbalance, transactioncode FROM transaction WHERE accountNo='50500000001';";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["datetime"]. "</td><td>" . $row["total"] . "</td><td>". $row["currentbalance"]. "</td><td>" 
	. $row["transactioncode"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>