<?php

class UserOrderTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $UserOrder;

	public function testTotalPrice()
	{

		$this->UserOrder = new \App\Models\UserOrder;
		
		$this->UserOrder->setQuantity(3);
		
		$this->UserOrder->getPrice(4);
		
		$this->assertEquals($this->UserOrder->getTotalprice(),12);
	}
}