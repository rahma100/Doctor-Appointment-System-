<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Doctor Appointment Management System in PHP</title>

	    <!-- Custom styles for this page -->
	    <link href="vendor/bootstrap/bootstrap.min.css" rel="stylesheet">

	    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	    <link rel="stylesheet" type="text/css" href="vendor/parsley/parsley.css"/>

	    <link rel="stylesheet" type="text/css" href="vendor/datepicker/bootstrap-datepicker.css"/>

	    <!-- Custom styles for this page -->
    	<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	    <style>
	    	.border-top { border-top: 1px solid #e5e5e5; }
			.border-bottom { border-bottom: 1px solid #e5e5e5; }

			.box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }
	    </style>
	</head>
	<body>
		<div style="background-color: #1977cc;" class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3  border-bottom box-shadow">
			
		    <?php
		    if(!isset($_SESSION['patient_id']))
		    {
		    ?>
		    <div class="col text-right"><a href="login.php" class="text-white" style="text-decoration: none;">Login</a></div>
		   	<?php
		   	}
		   	?>
		    
	    </div>

	    
	    <br />
	    <br />
	    <div class="container-fluid">