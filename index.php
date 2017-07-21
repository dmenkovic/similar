<!DOCTYPE html>
<html>
<body>

<!-- Associative array -->
<?php
$person = array("firstName"=>"Dobrica", "lastName"=>"Menkovic", "age"=>"34");
echo $person['firstName'] . " is " . $person['age'] . " years old. ----- ( PHP Assoc.Array )";
?>

<p id="demo1"></p>
<p id="demo2"></p>

<!-- JS Objects -->
<script>
var person = { firstName:"Dobrica", lasttName:"Menkovic", age:34 };
document.getElementById("demo1").innerHTML = person.firstName + " is " + person.age + " years old. ----- ( JS Object )";
    
// JS Array: var persom = ["Dobrica", "Menkovic", 34];
    
// Object Constructor:
function Person(first, last, age) {
    this.fName = first;
    this.lName = last;
    this.age = age;
}
var myFather = new Person ("Stanimir", "Menkovic", 70);
var myMother = new Person ("Nadica", "Menkovic", 55);
document.getElementById("demo2").innerHTML = myMother.fName + " is " + myMother.age + " years old. ----- ( JS Object Constructor )";
</script>
</body>
</html>
