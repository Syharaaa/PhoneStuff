<?php

//@Author 𝒮𝓎𝒽𝒶𝓇𝒶𝒶

interface PublicMethods{
 	public function callNumber($number);
 	public function getNumber();
 }
 class Phone implements PublicMethods{
     
    private $model;
    private $personalNumber;
 	public $owner;
 	
 	public function __construct($model, $owner, $number){
 		$this->model = $model;
 		$this->owner = $owner;
 		if (is_int($number) && strlen($number) >= 11){
 		    $this->personalNumber = $number;
 		}elseif(!$number){
 		    $this->personalNumber = intval("1".rand(100000000,9999999999));
 		}
 	}

 	public function callNumber($number){
 		if (is_int($number) || is_string($number) && strlen($number) >= 11){
 			echo "Calling.. ".$number;
 		}else
 		{
 			echo "Unknown Number";
 		}
 	}
 	
 	public function getNumber(){
 	    return $this->personalNumber;
 	}

 }

 $myPhone = new Phone("Samsung Galaxy J2 Prime", "Khalid Gurmanov", NULL);
 $myPhone->callNumber("+1(473)420-0009");
 echo "\nMy Phone number is.. ".$myPhone->getNumber();
