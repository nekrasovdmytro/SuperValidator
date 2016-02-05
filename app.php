<?php
/**
 * Created by PhpStorm.
 * User: nekrasov
 * Date: 05.02.16
 * Time: 16:13
 */

include "vendor/autoload.php";

use SuperValidator\SuperValidator;
use SuperCriteria\NumericCriteria;

$data = [
    'age' => '24',
    'name' => 'Dmytro',
    'city' => 'Lviv',
    'address' => 'Svobody str.',
    'homenumber' => '45'
];

$validator = new SuperValidator();

$validator->addSource($data)
    ->addCriteria('age', new NumericCriteria())
    ->addCriteria('name', new NumericCriteria())
    ->addCriteria('homenumber', new NumericCriteria());

if ($validate = $validator->validate() === true) {
    echo "OK\n";
} else {
    echo "Not OK:\n";
    var_dump($validator->getErrors());
}

