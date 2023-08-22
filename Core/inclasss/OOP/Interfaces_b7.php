<?php
// Interface definition
interface Animal {
  public function makeSound();
  public function nameAnimal();
}

// Class definitions
class Cat implements Animal {
  public function makeSound() {
    echo " Meow ";
  }
  public function nameAnimal() {
    echo " Meo ";
  }
}

class Dog implements Animal {
  public function makeSound() {
    echo " Bark ";
  }
  public function nameAnimal() {
    echo " Pug ";
  }
}

class Mouse implements Animal {
  public function makeSound() {
    echo " Squeak ";
  }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach($animals as $animal) {
  $animal->makeSound();
}
?>


<!-- interface dùng từ khoá interface thay cho class và các phương thức bên trong không có phần thân (chỉ có khai báo).

Tất cả các phương thức được định nghĩa trong một interface phải được khai báo là public; đó là đặc tính của interface. -->


