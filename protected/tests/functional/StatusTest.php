<?php

class StatusTest extends WebTestCase
{
	public $fixtures=array(
		'statuses'=>'Status',
	);

	public function testShow()
	{
		$this->open('?r=status/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=status/create');
	}

	public function testUpdate()
	{
		$this->open('?r=status/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=status/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=status/index');
	}

	public function testAdmin()
	{
		$this->open('?r=status/admin');
	}
}
