<?php ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Like | Order
	</title>
	<link rel="stylesheet" type="text/css" href="order_style.css">
	</script>
</head>
<body>
	<?php include 'animated_background.php'; ?>
	<div class="waitaname">
		<div class="formContainer">
	  	<form>
	    	<p id="title">Likes Options</p>
	    	<input type="text" placeholder="Lien du post" id="link"><br>
	    	<div class="box">
	    		<div class="quantity">
	    			<p class="info">Quelle quantitee voulez-vous ?</p>
	    			<p>
	    				<input type="checkbox" name=""> 100
	    				<input type="checkbox" name=""> 250
	    				<input type="checkbox" name=""> 500
	    			</p>
	    		</div>
	    		<div class="speed">
	    			<p class="info">A quelles vitesse (likes par jours)?</p>
	    			<p>
	    				<input type="checkbox" name=""> 50/j
	    				<input type="checkbox" name=""> 150/j
	    			</p>
	    		</div>
	    		<input type="submit" name="submit">
	    		<?php include 'PaypalPayment.php' ?>
	    	</div>
	  	</form>

	  <div class="drop drop-1"></div>
	  <div class="drop drop-2"></div>
	  <div class="drop drop-3"></div>
	  <div class="drop drop-4"></div>
	  <div class="drop drop-5"></div>
		</div>
	</div>
</body>
</html>