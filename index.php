<?php
class Hello
{
	public function world()
	{
		print 'Hello World';
	}
	public function sayHi($name)
	{
		print 'Hi, '.$name;
	}
}

$hello = new Hello;
$hello->world();