<html>
	<head>
		<title>Just for Kicks</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			$("#b1").click(function(){
				$("#center").toggle();
			});
		});
		</script>
	</head>

	<body>
		<div id="header">
			<a href="index.html"><img src="Soccer.png" id="headerpic"></a>
			<h2 id="title">Welcome to Just for Kicks Sporting Goods</h2>
			<ul id="navbar">
				<li><a href="index.html">Home</a></li>
				<li><a href="products.html">Products</a></li>
				<li><a href="order.php">Order</a></li>
				<li><a href="orderinfo.php" class="active">Order Information</a></li>
				<li><a href="contact.html">Contact Us</a></li>
				<li><a><button id="b1">Show/Hide Order Information</button></a></li>
			</ul>
		</div>
		
			<h2>Order Information</h2>		
		
		<div id="center">
			<?php
			$myfile = 'order.txt';
			$fh = fopen($myfile, 'r');
			echo fread($fh, filesize($myfile));
			fclose($fh);
			?>
		</div>
		<div id="bottom">
			<a href="contact.html"><h2>Contact Us!</h2></a></br>
			(169)124-9234
		</div>
	</body>
</html>
