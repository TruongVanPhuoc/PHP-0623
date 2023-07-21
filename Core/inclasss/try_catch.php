<?php
  class studen {
    private $name;
    private $age;
    private $gender;
    private $phone;
    function __construct($name, $age, $gender, $phone){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->phone = $phone;
    }
    function getName(){
        return $this->name;
    }
    function getphone(){
        $result = $this->phone;
        $result = substr($result,0,7)."xxx";
        return $result;
        }

  }
  $s1 = new studen("Hau",28,"Nam","00000");
  $s2 = new studen("Tau",25,"Nam","0099000");
 
  echo $s2->getphone();
?>