<?php

namespace App\Models;

class UserOrder
{
	public $order_quantity;
	public $price;
	public $total_price;




	public function setQuantity($quantity)
	{
		$this->order_quantity =$quantity ;

	}
	public function getPrice($price)
	{
		$this->price =$price ;

	}

	public function getTotalprice()
	{
		$this->total_price=$this->order_quantity*$this->price;
		return $this->total_price;
	}
}