<?php
// class Fruit {
//   public $name;
//   protected $color = "red";
//   private $weight = 90;

//   public function setColor($color) {
//     $this->color = $color;
//   }

//   public function getColor() {
//     return $this->color;
//   }

//   public function setWeight($weight) {
//     $this->weight = $weight;
//   }

//   public function getWeight() {
//     return $this->weight;
//   }
// }

// $mango = new Fruit();
// echo $mango->name = 'Mango'; // OK
// echo $mango->getColor(); // ERROR
// echo $mango->getWeight(); // ERROR
/**
public: có thể truy cập từ bất cứ đâu
protected: các phương thức và thuộc tính được truy xuất trong 1 lớp và các lớp còn (thừa kế)
private: các phương thức và thuộc tính được truy xuất trong 1 lớp 
*/













class Fruit {
  public $name;
  protected $color;
  private $weight;
}

$mango = new Fruit();
$mango->name = 'Mango'; // OK
$mango->color = 'Yellow'; // ERROR
$mango->weight = '300'; // ERROR

?>