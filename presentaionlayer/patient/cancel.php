<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>

<head>
	<title>Patient</title>
	<link rel="stylesheet" href="style2.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap"
		rel="stylesheet">
</head>

<header class="header" style="width:100%;">
	<a href="#" class="logo" style="margin-left: 50px;"><img src="image/Logo.png" alt="" height="50px"></i></a>
	<nav class="navbar">
		<a href=" index.php">MyInfo</a>
		<a href=" book.php">Book Appointment</a>
		<a href=" view.php">View Appointment</a>
		<a href="cancel.php">Cancel Booking</a>
		<a href=" searchdoctor.php">Search Doctor</a>
		<!--<a href="donate.php">Donate Organ</a>
		<a href="searchdonor.php">Search Donar</a>
		<a href="../../call/appointment_room.html">Meeting</a>-->
		<a href="../../applicationlayer/Doctorpatient.php">Logout</a>
	</nav>
</header>

<body>
	<h1 class="heading"
		style="text-align: center;padding-bottom: 2rem;text-shadow: var(--text-shadow);text-transform: uppercase;color: var(--black);font-size: 5rem;letter-spacing: 0.4rem;margin-top: 80px;">
		Cancel <span style="text-transform: uppercase;color: var(--green);">Booking</span>
	</h1>
	<form method="post" action="cancel.php">

		<?php include('../../datalayer/errors.php'); ?>

		<div style="display: flex; justify-content: center;">
			<img src="image/Cancelbook.gif" alt="">
			<div class="input-group" style="margin-bottom: 5px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
				<label
					style="display: inline-block;text-align: left;font-size: 1.6rem;">Appointment
					ID</label>
				<input type="text" name="AppoID2"
					style="height: 50px;width: 200px;padding: 10px;font-size: 1.6rem;border-radius: 5px;border: 1px solid #282828;display: inline-block;box-sizing: border-box;">
				<button type="submit" name="cancel" class="btn" class="btn"
					style="margin: 5px auto;display: block;width:100px;height:30px;font-size: 1.6rem;color: white;background: #16a085;border: none;border-radius: 5px;cursor: pointer;">Cancel</button>
			</div>
		</div>
	</form>
</body>
<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/3d4cf0b1-b1d8-43db-816d-95e960425658/webchat/config.js" defer></script>

</html>