<?php


include ('functions.php');


#connect_db();

$jobnumberpre = $_POST['jobnumberpre'];
$date     = $_POST['time'];
$type     = $_POST['type'];
$first    = $_POST['first'];
$last     = $_POST['last'];
$size      = $_POST['size'];
$extra	  = $_POST['extra'];

$jobnumberfull = $type . "-" . $jobnumberpre;
$name = $first . " " . $last;

        $code = "'$jobnumberfull', '$date', '$type', '$name', '$size', '$extra'";
       ?> 
	<center>
	<h3>Job Number: <?php echo "$jobnumberfull"; ?> </h3>
	<a href="jobnumber.php"><button type="button">Generate Another</button></a>
	<a href="view.php"><button type="button">View Jobs</button></a>
	</center>
	<?php 
	//echo "You inserted this job number into the database: $code";
        addjob($code);
        ?>
