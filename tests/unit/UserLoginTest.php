<?php

class UserLoginTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

    protected $UserLogin;

	public function testusername()
	{

		$UserLogin = new \App\Models\UserLogin;
		$UserLogin->setUsername("aminul21");
        $UserLogin->setEmail("md.aminul.islam2@g.bracu.ac.bd");
        $UserLogin->setPassword("AMINUL321");

		$this->assertEquals($UserLogin->getUsername(),"aminul21");
        $this->assertEquals($UserLogin->getUseremail(),"md.aminul.islam2@g.bracu.ac.bd");
        $this->assertEquals($UserLogin->getUserpassword(),"AMINUL321");
	}
}