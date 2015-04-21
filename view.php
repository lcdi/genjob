<?php


include ('functions.php');


connect_db();
?>


<style>

table {
	width:50%;
}
table,th,td {
	text-align:center;
	border:1px solid black;
	border-collapse:collapse;
}
tr:nth-child(even) {
    background-color: #BBBBBB;
}

</style>

<table>
	<tr>
		<th>Job Number</th>
		<th>Date</th>
		<th>Type</th>
		<th>Name</th>
		<th>Device</th>
		<th>Size</th>
	</tr>

<?php
					$query = "SELECT * FROM jobnumbers ORDER BY id ASC" or die("im dumb" . mysqli_error($con));
					$result = mysqli_query($con, $query);
					while($row = $result->fetch_array()) {
                                        $id     = $row['id'];
                                        $jobnumber = $row['jobnumber'];
                                        $date = $row['date'];
                                        $type = $row['type'];
                                        $name = $row['name'];
					                    $extra = $row['extra'];
                                        $size = $row['size'];
                                        echo "<tr><td class='center-text'>$jobnumber</td><td class='center-text'>$date</td><td class='center-text'>$type</td><td class='center-text'>$name</td><td class='center-text'>$extra</td><td class='center-text'>$size</td></tr>";
                                }


?>
</table>
	
