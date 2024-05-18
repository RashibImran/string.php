<?php

class Person {

// attributes
public $personName;
public $personAge;

// constructor


public function __construct($name, $age) {

        $this->personName=$name;
        $this->personAge=$age;
  


}


 


// method


public function introduce() {


  echo "My name is ".$this->personName." and I am ".$this->personAge." Years old";


}


}


// Example:


$person = new Person("John", 30);


$person->introduce();


?>

