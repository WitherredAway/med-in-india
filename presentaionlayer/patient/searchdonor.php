<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet"  href="style2.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header class="header" style="width:100%;">
<a href="#" class="logo" style="margin-left: 50px;"><img src="image/Logo.png" alt="" height="50px"></i></a>
    <nav class="navbar">
        <a href=" index.php">MyInfo</a>
        <a href=" book.php">Book Appointment</a>
        <a href=" view.php">View Appointment</a>
        <a href="cancel.php">Cancel Booking</a>
        <a href=" searchdoctor.php">Search Doctor</a>
        <a href="donate.php">Donate Organ</a>
        <a href="searchdonor.php">Search Donar</a>
        <a href="../../call/appointment_room.html">Meeting</a>
        <a href="../../applicationlayer/Doctorpatient.php">Logout</a>
	</nav>
</header>
<h1 class="heading" style="text-align: center;padding-bottom: 2rem;text-shadow: var(--text-shadow);text-transform: uppercase;color: var(--black);font-size: 5rem;letter-spacing: 0.4rem;margin-top: 80px;">Search <span style="text-transform: uppercase;color: var(--green);">Donor</span></h1>
<body>



<form method="post" action="searchdonor.php">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group" style="margin-bottom: 5px;width: 100%; ">
		<label style="display: inline-block;text-align: left;position:absolute;right:740px;top:220px;font-size: 1.6rem;">Search By</label>
		<span style="display: inline-block;text-align: left;position:absolute;right:690px;top:250px;font-size: 1.6rem;">(Blood Group/Organ)</span>
		<input type="text" name="dID3" style="height: 50px;width: 200px;padding: 10px;font-size: 1.6rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;position:absolute;right:678px;top:280px;" >

	</div>

	<div class="input-group" style="margin-bottom: 5px;width: 100%; ">
		<button type="submit" name="SearchD" class="btn" style="margin: 5px auto;display: block;width:100px;height:30px;font-size: 1.6rem;color: white;background: #16a085;border: none;border-radius: 5px;cursor: pointer;position:absolute;right:730px;top:340px;">Search</button>
	</div>
		</form>
	</form>




		<?php

         if (isset($_POST['SearchD'])) {

         ?>	<table class="table2" style="border-collapse: collapse;width: 100%;color: #282828;font-family: monospace;font-size: 20px;text-align: center;margin-top: 220px;">
		<tr style="border:1px solid #16a085;">
		<th style="background-color: #16a085;color: white;">DonorID</th>
		<th style="background-color: #16a085;color: white;">DonorName</th>
		<th style="background-color: #16a085;color: white;">DonorAddress</th>
		<th style="background-color: #16a085;color: white;">DonorContactNumber</th>
		<th style="background-color: #16a085;color: white;">DonorEmail</th>
		<th style="background-color: #16a085;color: white;">DonorBloodGroup</th>
		<th style="background-color: #16a085;color: white;">DonorOrgan</th>



		</tr> <?php


		$dID3 =$mysqli -> real_escape_string($_POST['dID3']);

		$sql8="SELECT  * FROM  donor   WHERE donarblood=('$dID3') OR organ=('$dID3') ";
		$result8=$mysqli->query($sql8);
		if(mysqli_num_rows($result8)>=1){
			while ($row8=$result8->fetch_assoc()) {

				echo "<tr><td>".$row8["donarID"]."</td><td>".$row8["donarname"]."</td><td>".$row8["donaraddress"]."</td><td>".$row8["donarnumber"]."</td><td>".$row8['donaremail']."</td><td>".$row8['donarblood']."</td><td>".$row8['organ']."</td></tr>";
			}
			echo "</table";
		}
	}?>
 </table>
</body>
<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/3d4cf0b1-b1d8-43db-816d-95e960425658/webchat/config.js" defer></script>
</html>

