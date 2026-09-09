<?php
 
function hello() {
    var_dump('Hello');
}
 
$singleHello = function () {
    var_dump('Hello');
};
hello();
hello();
 
function helloName($name='Nameless') {
    var_dump("Hello, $name!");
}
 
helloName('Alissia');
helloName('Valeria');
 
function helloNameAndAge($name, $age) {
    var_dump("Hello, $name! Youa are $age years old");
}
 
helloNameAndAge('Alissia', 18);
helloNameAndAge('Anna', 20);
 
helloName();

$test = function () {

}
var_dump($test);


$numbers = [1, 2, 3, 4, 5];

$squares = array_map(function ($number) {
    return $number * 2;
}, $numbers);
$squares = array_map(fn($number) => $number * $number, $numbers);
var_dump($squares);

function cube($a) {
    if ($a < 0) {
        return -$a * $a * $a;
    }
    return $a * $a * $a;
    var_dump('This will never be executed');
}

var_dump(cube(4));

$answer = cube(5);
$text = "cube of 5 is $answer";
echo $text;

