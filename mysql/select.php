<?php
include "conecta.php";

$sql=" select id, login, email, date_format(data,'%d/%m/%Y') as data, obs from usuario
";

$result = mysqli_query($conn,$sql) or die (mysqli_error($conn));
?>
<style>
table, td, th {
  border: 1px solid black;
}
td {
  text-align: center;
}
table{
  width:  500px;
  border-collapse: collapse;
}
</style>
  <table  id="tabela">
    <thead>
      <tr>
      	<th>id</th>
        <th>Login</th>
        <th>E-mail</th>
 		<th>Data</th>
		<th>Obs</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";    
	echo "<td>".$row["id"]."</td>";
	echo "<td>".$row["login"]."</td>";
	echo "<td>".$row["email"]."</td>";
	echo "<td>".$row["data"]."</td>";
	echo "<td>".$row["obs"]."</td>";
	echo "</tr>";
}
echo "</tbody></table>";
mysqli_close($conn);
?>