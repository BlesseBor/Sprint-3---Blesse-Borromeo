<?php
// connection
	$conn = mysqli_connect('localhost', 'root', '','db_connect');
	$sql = "SELECT name FROM bio_contact ";
	$result = $conn -> query($sql);
	
	if($result -> num_rows >0){
		
	while($row = $result -> fetch_assoc()){
		echo "<tr>".
			"<td align='center'>".$row["name"]."</td>".
			"</tr>";
		}
	}
	else{
		echo "0 results";
	}
	
	$conn->close();
?>
