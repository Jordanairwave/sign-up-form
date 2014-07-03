<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<title>Sign Up form</title>
	<meta charset="utf-8">
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link href="css/style.css?v=1.0" rel="stylesheet" type="text/css" />

</head>
<body>
	<div id="page-wrap">
		<section id="main-content">
			<form id="sign-up-form" method="post" action="form/send.php">
				<fieldset>
					<label for="forename">First Name</label>
					<input type="text" name="forename" id="forename" />
				</fieldset>
				<fieldset>
					<label for="surname">Surname</label>
					<input type="text" name="surname" id="surname" />
				</fieldset>
				<fieldset>
					<label for="email">Email Address</label>
					<input type="text" name="email" id="email" />
				</fieldset>
				<fieldset class="birthday-wrapper">
					<h3>Please enter your birthday</h3>
					<fieldset>
						<label for="day">Day</label>
						<select name="day">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select>
					</fieldset>
					<fieldset>
						<label name="month">Month</label>
						<select name="month">
							<option value="1">January</option>
							<option value="2">February</option>
							<option value="3">March</option>
							<option value="4">April</option>
							<option value="5">May</option>
							<option value="6">June</option>
							<option value="7">July</option>
							<option value="8">August</option>
							<option value="9">September</option>
							<option value="10">October</option>
							<option value="11">November</option>
							<option value="12">December</option>
						</select>
					</fieldset>
					<fieldset>
						<label for="year">Year</label>
						<input type="text" name="year" id="year" />
					</fieldset>
				</fieldset>
				<fieldset>
					<button type="submit">Submit</button>
				</fieldset>
				<input type="hidden" class="code" name="code" id="code" value="<?php echo date('dmY') . uniqid(); ?>" />
				<p id="form-messages"></p>
				<div id="error-messages">
					<div class="container">
					</div>
				</div>
			</form>
		</section>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/scripts.js?v=1.0"></script>
</body>

</html>