<?php

class Cart{
	
	public function setCart($productName, $quantity, $speed, $price, $link) {
		$productName = $productName;
		$quantity = $quantity;
		$speed = $speed;
		$price = $price;
		$link = $link;
	}

	public function getProducts($productName, $quantity, $speed, $price, $link): array {
		return [
			'name' => $productName,
			'quantity' => $quantity,
			'speed' => $speed,
			'price' => $price,
			'link' => $link
		]
	}

	public createReceipt($productName, $quantity, $speed, $price, $link) {
		$receipt = [
			gettimeofday(), $productName, $quantity, $speed, $price, $link
		]

		return $receipt;
	}
}



?>