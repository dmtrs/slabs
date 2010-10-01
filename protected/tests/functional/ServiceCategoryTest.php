<?php

class ServiceCategoryTest extends WebTestCase
{
	public $fixtures=array(
		'serviceCategories'=>'ServiceCategory',
	);

	public function testShow()
	{
		$this->open('?r=serviceCategory/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=serviceCategory/create');
	}

	public function testUpdate()
	{
		$this->open('?r=serviceCategory/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=serviceCategory/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=serviceCategory/index');
	}

	public function testAdmin()
	{
		$this->open('?r=serviceCategory/admin');
	}
}
