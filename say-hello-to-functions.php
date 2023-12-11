<?php

function sayHello(): string {
    return "Hello";
}

function sayHelloTo(string $name): string {
    return "Hello $name";
}

echo sayHello() . PHP_EOL;

$name = "John";
echo sayHelloTo($name) . PHP_EOL;
