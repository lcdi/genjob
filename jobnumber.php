




<?php

include ('functions.php');

#connect_db();

$jobs = getjobs();
$lastjob = $jobs[1];
$jobid = $jobs[0];

$date = date("mdy");
$jobnumberpre = $date . "-" . $jobid;





?>

<html>


<style>

#wrapper {
	width: 300px;
	margin: auto;
	border: 1px solid black;
	padding: 5px;
}


</style>


<script type="text/javascript">


function validate()
{
   if( document.myForm.first.value == "" )
   {
     alert( "Please provide your name!" );
     document.myForm.first.focus() ;
     return false;
   }
   if( document.myForm.last.value == "" )
   {
     alert( "Please provide your Last!" );
     document.myForm.last.focus() ;
     return false;
   }
    if( document.myForm.size.value == "" )
   {
     alert( "Please provide a size!" );
     document.myForm.last.focus() ;
     return false;
   }
   


    if(!document.myForm.check.checked) {
	 alert( "I guess you aren't sure!" );
	return false;
   }

   return( true );
}

</script>



<body>

<center><h2> Generate Job Number</h3></center>
<div id="wrapper">
<?php
echo " <center>Last Job: $lastjob </center><br />";
?>
<form name = "myForm" action="generate.php" onsubmit="return (validate());" method="post">
Time: <input type="text" name="time" value="<?php echo date("Y-m-d H:i:s"); ?>"><br>
Job Type: <select name="type"> <option value="DR">DR</option><option value="FI">FI</option></select><br>
*First name: <input type="text" name="first"><br>
*Last Name: <input type="text" name="last"><br>
Device: <input type="text" name="extra"><br>
*Size of Device (gb): <input type="text" name="size"><br>
<br />
*Are you sure? <input type="checkbox" name="check"><br>
<br />
Job name will be: <br />
[FI/DR]-<?php echo $jobnumberpre; ?> <br />
<input name="jobnumberpre" type="hidden" value="<?php echo $jobnumberpre; ?>"></input>
<input type="submit"></input> <a href="view.php"><button type="button">View Jobs</button></a>

</form>

</div>
</body>
</html> 
