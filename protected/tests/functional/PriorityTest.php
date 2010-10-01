<?php

class PriorityTest extends WebTestCase
{
	public $fixtures=array(
		'prioritys'=>'Priority',
	);

	public function testShow()
	{
		$this->open('?r=priority/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=priority/create');
	}

	public function testUpdate()
	{
		$this->open('?r=priority/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=priority/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=priority/index');
	}

	public function testAdmin()
	{
		$this->open('?r=priority/admin');
	}
}
