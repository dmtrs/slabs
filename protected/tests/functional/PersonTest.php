<?php

class PersonTest extends WebTestCase
{
	public $fixtures=array(
		'persons'=>'Person',
	);

	public function testShow()
	{
		$this->open('?r=person/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=person/create');
	}

	public function testUpdate()
	{
		$this->open('?r=person/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=person/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=person/index');
	}

	public function testAdmin()
	{
		$this->open('?r=person/admin');
	}
}
