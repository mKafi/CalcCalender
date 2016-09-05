<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="css/syzygy_jquery.calc.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/custom.css"/>
	
	<!-- import only for calender -->
	<link href="css/calendar.css" type="text/css" rel="stylesheet" />
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/boot.strp.js.js"></script>
	<script src="js/syzygy_jquery.calc.js"></script>
	
	
</head>
	<body>
		<div class="container">
			<h2>A nice calculator<sup>Tariq Bhai</sup></h2><br/>
			<div id="calculator">
			  <div class="row">
				<div class="col-sm-3">
				  <div class="well clear">
					Clr
				  </div>
				</div>
				<div class="col-sm-9">
				  <div class="well result">
					0
				  </div>
				</div> 
				<div class="digits">
				  <div class="col-xs-3"><div class="well digit">7</div></div>
				  <div class="col-xs-3"><div class="well digit">8</div></div>
				  <div class="col-xs-3"><div class="well digit">9</div></div>
				  <div class="col-xs-3"><div class="well digit">+</div></div>
				  
				  <div class="col-xs-3"><div class="well digit">4</div></div>
				  <div class="col-xs-3"><div class="well digit">5</div></div>
				  <div class="col-xs-3"><div class="well digit">6</div></div>
				  <div class="col-xs-3"><div class="well digit">-</div></div>
				  
				  <div class="col-xs-3"><div class="well digit">1</div></div>
				  <div class="col-xs-3"><div class="well digit">2</div></div>
				  <div class="col-xs-3"><div class="well digit">3</div></div>
				  <div class="col-xs-3"><div class="well digit">*</div></div>
				  
				  <div class="col-xs-3"><div class="well digit">0</div></div>
				  <div class="col-xs-3"><div class="well digit">.</div></div>
				  <div class="col-xs-3"><div class="well digit">=</div></div>
				  <div class="col-xs-3"><div class="well digit">/</div></div>
				</div>
			  </div>
			</div>
			
			<div class="row">
				<h2>A nice calender <sup>For Tariq Bhai</sup></h2><br/>
				<?php
				require './classes/calender.class.php';
				 
				$calendar = new Calendar();
				 
				echo $calendar->show();
				?>
			</div>
			
		</div>
		
		<br/><br/><br/><br/><br/>
		
		
		
	</body>
</html>