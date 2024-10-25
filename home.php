<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Hello</h1>

<?php
class Person {
    public $id;
    
    public function sayHello() {
       echo "Hello, my id is " . $this->id;
    }
 }
 
 $person = new Person();
 $person->id = "2702";
 $person->sayHello(); // Output: Hello, my na is John


?>
    
</body>
</html>