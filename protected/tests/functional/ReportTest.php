<?php

class ReportTest extends WebTestCase
{
	public $fixtures=array(
		'reports'=>'Report',
	);

	public function testShow()
	{
		$this->open('?r=report/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=report/create');
	}

	public function testUpdate()
	{
		$this->open('?r=report/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=report/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=report/index');
	}

	public function testAdmin()
	{
		$this->open('?r=report/admin');
	}
}
