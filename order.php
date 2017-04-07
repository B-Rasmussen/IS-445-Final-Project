<html>
	<head>
		<title>Just for Kicks</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<div id="header">
			<a href="index.html"><img src="Soccer.png" id="headerpic"></a>
			<h2 id="title">Welcome to Just for Kicks Sporting Goods</h2>
			<ul id="navbar">
				<li><a href="index.html">Home</a></li>
				<li><a href="products.html">Products</a></li>
				<li><a href="order.php" class="active">Order</a></li>
				<li><a href="orderinfo.php">Order Information</a></li>				
				<li><a href="contact.html">Contact Us</a></li>
			</ul>
		</div>
		
		<div id="center">
			<form action="order.php" method="post">
			<h2>Place your order here!</h2>
			Name: <input type="text" name="name">
			<br/></p>
			Address: <input type="text" name="address">
			<br/></p>
			Product Name: <input type="text" name="product">
			<br/></p>
			Quantity: <input type="text" name="quantity">
			<br/></p>
			<input type="reset" name="reset">
			<input type="submit" name="submit">
			</form>
			<?php
			$name = $_POST["name"];
			$address = $_POST["address"];
			$product = $_POST["product"];
			$quantity = $_POST["quantity"];
			$file = fopen('order.txt','a');
			$ordername = '<br/><br/>Name: ' . $name;
			$orderaddress = '<br/>Address: ' . $address;
			$orderproduct = '<br/>Product: ' . $product;
			$orderquantity = '<br/>Quantity: ' . $quantity;
			if($_POST["submit"]){
			fwrite($file, $ordername);
			fwrite($file, $orderaddress);
			fwrite($file, $orderproduct);
			fwrite($file, $orderquantity);
			}
			fclose($file);
			?>
		</div>
		<div id="bottom">
			<a href="contact.html"><h2>Contact Us!</h2></a></br>
			(169)124-9234
		</div>
	</body>
</html>
