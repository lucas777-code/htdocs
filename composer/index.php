<?php
require 'vendor/autoload.php';
// autoload do composer

$faker = Faker\Factory::create();
// criando um gerador de dados

echo "Nome: " . $faker->name() . "<br> <br>";
echo "Email: " . $faker->email() . "<br> <br>";
echo "Address: " . $faker->address() . "<br> <br>";



?>