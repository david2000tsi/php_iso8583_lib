<?php

require_once('../messages/Message0810.php');

class Message0810Test extends PHPUnit_Framework_TestCase{
	private $original0810Msg;
	private $generated0810Msg;
	private $iso0810Instance;

	public function testMsg()
	{
		$this->original0810 = "08108238000002C0080004000000000000000717123000999999123000071739006677880000000300000036554AF56DE67BAF6001";

		$this->iso0810Instance = new Message0810();

		$this->iso0810Instance->setField007("0717123000");
		$this->iso0810Instance->setField011("999999");
		$this->iso0810Instance->setField012("123000");
		$this->iso0810Instance->setField013("0717");
		$this->iso0810Instance->setField039("39");
		$this->iso0810Instance->setField041("00667788");
		$this->iso0810Instance->setField042("000000030000003");
		$this->iso0810Instance->setField053("6554AF56DE67BAF6");
		$this->iso0810Instance->setField070("001");

		$this->generated0810Msg = $this->iso0810Instance->getMessage();

		$this->assertTrue($this->generated0810Msg !== false);

		$this->assertEquals($this->original0810, $this->generated0810Msg);
	}
}