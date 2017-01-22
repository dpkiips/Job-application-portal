<!-- Ashutosh vashishtha @ copyright -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Job Application Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>

  </style>
</head>
<body>
<div class="container"
	<form method="post" action="" id="job-registration-form" class="form-horizontal">
	<div class="container">
		<div class="row">
			<div class="col-lg-offset-1 col-lg-7">
				<div id="main-content" role="main">
					<div class="den">
						<div>
							<h1 class="den-hero"> JOB APPLICATION FORM <span class="glyphicon glyphicon-pencil logo pull-right"></span></h1>
						</div>
						<hr class="fade-line">
						<hr class="fade-line">
						<p>
							<span class="glyphicon glyphicon-asterisk"></span>
							Indicates a required Field.
						</p>
						<div>
							<p>
								<em>Please enter your data accurately .We may need to send you important messages.</em>
							</p>
							<fieldset>
								<legand> <h3>Personal Information </h3></legand>
								<br>
								<div class="row">
									<div class="form-group col-md-4">
										<label class="control-lebel" for="NAME_FIRST">
											<span class="glyphicon glyphicon-asterisk">
											</span>
											First Name
										</label>
										<div>
											<input type="text" name="NAME_FIRST" value size="35" maxlength="45" id="NAME_FIRST" class="form-control" >
										</div>
									</div>
									<div class="form-group col-md-4">
										<label class="control-lebel" for="NAME_MIDDLE">
											Middle Name
										</label>
										<div>
											<input type="text" name="NAME_MIDDLE" value size="35" maxlength="45" id="NAME_MIDDLE" class="form-control" >
										</div>
									</div>
									<div class="form-group col-md-4">
										<label class="control-lebel" for="NAME_LAST">
											<span class="glyphicon glyphicon-asterisk">
											</span>
											Last Name
										</label>
										<div>
											<input type="text" name="NAME_LAST" value size="35" maxlength="45" id="NAME_LAST" class="form-control" >
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-6">
										<label class="control-lebel" for="EMAIL">
											<span class="glyphicon glyphicon-envelope">
											</span>
										</label>
										<div>
											<input type="text" name="EMAIL" value size="35" maxlength="100" id="EMAIL" class="form-control" >
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="control-lebel" for="MOBILE">
											<span class="glyphicon glyphicon-earphone">
											</span>
										</label>
										<div>
											<input type="text" name="PHONENO" value size="10" maxlength="10" id="PHONENO" class="form-control" >
										</div>
										 <input type="submit" class="btn btn-default" name="submit">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-6">
										<label class="control-label" for="dateofbirth">
											<span class="glyphicon glyphicon-asterisk">
											</span>
											Date Of Birth
										</label>
        							    <div class='input-group date' id='dateofbirth'>
                								<input type='text' class="form-control" />
                								<span class="input-group-addon">
                    								<span class="glyphicon glyphicon-calendar">
                    								</span>
                								</span>
										</div>
        							</div>
        							<div class="form-group col-md-3">
										<label class="control-label" for="gender">
											Gender
										</label>
        							    <div>
        							    	<select id="gender" class="form-control">
        							    		<option value="Male">Male</option>
        							    		<option value="Female">Female</option>
        							    	</select>
										</div>
        							</div>
        							<div class="form-group col-md-3">
										<label class="control-label" for="Nationality">
											Nationality
										</label>
        							    <div>
        							    	<select id="Nationality" class="form-control">
        							    		<option value="india">Indian</option>
        							    		<option value="Non-indian">Non-Indian</option>
        							    	</select>
										</div>
        							</div>
								</div>
							</fieldset>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</form>
</div>
</body>
</html>
