<?php
$con=mysqli_connect("localhost","USER","PASS","jobs");
	if (mysqli_connect_errno($con)){
       		echo "Failed to connect to MySQL";
}
function addjob($code) {


        global $con;

	$query = "INSERT INTO jobnumbers (`jobnumber`,`date`,`type`,`name`,`size`,`extra`) VALUES($code);";
        if (!mysqli_query(connect_db(), $query)) {
                die('ERROR: ' . mysqli_error($con));
        } else {
                echo "<br /> Success!";
        }

}

function getjobs() {

        global $con;

        $query = "SELECT * FROM jobnumbers ORDER BY id ASC" or die("im dumb" . mysqli_error($con));
        //eventually we'll just use the mysql fetch and parse into table and make $itemsf equal that
        $result = mysqli_query($con, $query);
        while($row = $result->fetch_array()) {
                $job[0]              = $row['id'];
                $job[1]              = $row['jobnumber'];
        }
        return $job;
}






?>
