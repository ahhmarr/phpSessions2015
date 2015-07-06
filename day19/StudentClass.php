<?php 

class StudentBlueprint {

	function __construct($name,$age,$location,$course,$total)
	{
		echo 'construct fired '.__FUNCTION__;
		$this->name=$name;
		$this->age=$age;
		$this->location=$location;
		$this->courses=$course;
		$this->total=$total;

	}

	function registration()
	{
		return $this->name.' is Registered';
	}

	function displayAge()
	{
		return 'age of student '.$this->age;
	}

	function displayCourse()
	{
		return 'course enrolled :: '.$this->course;
	}

	function displayPercentage()
	{
		return $this->total/100;
	}

}







$arnab=new StudentBlueprint('arnab singh',33,'somewhere','course',89);

echo $arnab->displayAge();