<?php 

require_once 'person.php';

class PersonTest extends PHPUnit_Framework_TestCase 
{
	public $test;

	public function setUp()
	{
		$this->test = new Person('Victor');
	}

	public function testSeONomeEIgualAVictor() 
	{
		$nome = $this->test->getName();
		$this->assertTrue($nome == 'Victor2');
	}

}


?>