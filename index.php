<!DOCTYPE html>
<html>
<head>
	<title>Image Upload - Ajax</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="container">
		<div class="choose">
			<h1 class="txtCH">Choose image:</h1>

			<form id="ajaxForm" method="post" action="process/upload.php" enctype="multipart/form-data">
				<input id="ajaxInput" type="file" name="image">
				<!-- <input type="submit" value="upload"> -->
			</form>
		</div>

		<div class="disCont">
			<div class="display"></div>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery-3.0.0.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>