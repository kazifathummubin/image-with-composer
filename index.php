<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Exam : 46</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<header class="row header">
			<div class="col-md-12">Header</div>
		</header>
		<div class="row">
			<div class="col-md-12">&nbsp;</div>
		</div>

		<div class="row">
			<div class="col-md-offset-1 col-md-9">
				<form class="form-horizontal" action="store.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="fname" class="col-sm-2 control-label">First Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="fname" placeholder="First Name" name="fname">
						</div>
					</div>
					<div class="form-group">
						<label for="lname" class="col-sm-2 control-label">Last Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname">
						</div>
					</div>

					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email Addr</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" placeholder="Email Address" name="email">
						</div>
					</div>

					<div class="form-group">
						<label for="biography" class="col-sm-2 control-label">Biography</label>
						<div class="col-sm-10">
							<textarea class="form-control" name="biography" id="biography" cols="50" rows="5"></textarea>
						</div>
					</div>

					<div class="form-group">
						<label for="doy" class="col-sm-2 control-label">Birth Year</label>
						<div class="col-sm-10">
							<select class="form-control" name="doy" id="doy">
								<option value="">Select Year</option>
								<option value="2015">2015</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>
								<option value="2018">2018</option>
								<option value="2019">2019</option>
								<option value="2020">2020</option>
								<option value="2021">2021</option>
								<option value="2022">2022</option>
								<option value="2023">2023</option>
								<option value="2024">2024</option>
								<option value="2025">2025</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="gender" class="col-sm-2 control-label">Gender</label>
						<div class="col-sm-10">
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female
						</div>
					</div>

					<div class="form-group">
						<label for="photo" class="col-sm-2 control-label">Photo</label>
						<div class="col-sm-10">
							<input type="file" name="photo" id="photo">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-success btn-lg" name="sub">Sign Up</button>
						</div>
					</div>
				</form>
			</div>
		</div>

		<footer class="row footer">
			<div class="col-md-12">Footer</div>
		</footer>
	</div>
</body>
</html>