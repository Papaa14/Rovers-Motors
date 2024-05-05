<!DOCTYPE html>
<html>
<head>
	<title>Add Car</title>

	<!-- DEFINING THE CHAR SET-->
	<meta charset="utf-8">

	<!--WEB FONTS REFERENCES-->
	<!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">

	<!-- SETTING VIEWPORT-->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS REFERENCE TO BOOTSTRAP -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" >
	
	<!-- EXTERNAL STYLES REFERENCE-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<link rel="stylesheet" type="text/css" href="css/addCar.css">
	<link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>


	<div class="g-bg-color--blue-lagoon box">
	<h1 class="heading g-font-weight--500">
		ADD CAR
	</h1>
	<div class="car-details">
		<form action="" method="POST">

			<!-- CAR MODEL NAME -->
			<div class="line-form">
				<div class="label-all">
					<label for="carName">Car model name</label>
				</div>
				<div>
					<input type="text" name="carName" id="carName" placeholder="Enter car model" required>
				</div>
			</div>

		

			<!-- AMOUNT -->
			<div class="line-form">
				<div class="label-all">
					<label for="price">Price of the car</label>
				</div>
				<div>
					<input type="number" name="price" min="500" max="3000" step="100" placeholder="How much rent do you want" required>
				</div>
			</div>

			<!-- CAR IMAGE -->
			<div class="line-form">
				<div class="label-all">
					<label for="upload">Upload an image of car</label>
				</div>
				<div>
					<input type="file" class="upload" name="pic" accept=".jpg,.png|image/*" required>
				</div>
			</div>

			
			<!-- SUBMIT BUTTON -->
			<div style="padding-top: 1rem" class="submit-btn">
				<input type="submit" class="btn g-color--dark g-bg-color--white" value="SUBMIT">
			</div>
			
		</form>
		<br>
	<br>
	</div>
	</div>
	<!-- SCRIPT REFERENCES -->
	<script type="text/javascript" src="js/addCar.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
</body>
</html>