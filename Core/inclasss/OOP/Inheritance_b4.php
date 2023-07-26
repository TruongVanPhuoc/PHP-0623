<?php
// class Fruit {
//   public $name;
//   public $color;
//   public function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color;
//   }
//   public function intro() {
//     echo "The fruit is {$this->name} and the color is {$this->color}.";
//   }
// }

// // Strawberry is inherited from Fruit
// class Strawberry extends Fruit {
//   public function message() {
//     echo "Message ";
//   }
// }
// $strawberry = new Strawberry("Strawberry", "red");
// $strawberry->message();
// $strawberry->intro();



// class Fruit {
//     public $name;
//     public $color;
//     public function __construct($name, $color) {
//       $this->name = $name;
//       $this->color = $color;
//     }
//     protected function intro() {
//       echo "1";
//     }
//   }
  
//   class Strawberry extends Fruit {
//     public function message() {
//       echo "2";

//     }
//   }
  
//   // Try to call all three methods from outside class
//   $strawberry = new Strawberry("Strawberry", "red");
//   $strawberry->message();
//   $strawberry->intro();




/** GHÌ ĐÈ */

// class Fruit {
//   public $name;
//   public $color;
//   public function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color;
//   }
//   public function intro() {
//     echo "The fruit is {$this->name} and the color is {$this->color}.";
//   }
// }

// class Strawberry extends Fruit {
//   public $weight;
//   public function __construct($name, $color, $weight) {
//     $this->name = $name;
//     $this->color = $color;
//     $this->weight = $weight;
//   }
//   public function intro() {
//     echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
//   }
// }

// $fruit = new Fruit("Kiwi", "yellow", 30);
// $fruit->intro();

// $strawberry = new Strawberry("Apple", "red", 50);
// $strawberry->intro();




/** The final Keyword: Ngăn chặn k cho ghì đè hoặc kế thừa */

// final class Fruit {
//     // some code
//   }
  
//   // will result in error
//   class Strawberry extends Fruit {
//     // some code
//   }

//   class Fruit {
//     public $name;
//     public $color;
//     final public function intro() {
//       // some code
//     }
//   }
  
//   class Strawberry extends Fruit {
//     // will result in error
//     public function intro() {
//       // some code
//     }
//   }

?>