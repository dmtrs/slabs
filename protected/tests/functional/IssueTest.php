<?php

class IssueTest extends WebTestCase
{
	public $fixtures=array(
		'issues'=>'Issue',
	);

	public function testShow()
	{
		$this->open('?r=issue/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=issue/create');
	}

	public function testUpdate()
	{
		$this->open('?r=issue/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=issue/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=issue/index');
	}

	public function testAdmin()
	{
		$this->open('?r=issue/admin');
	}
}
