<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Itb\FoodRepository;

$FoodRepository = new FoodRepository();
$FoodRepository->dropTableFood();
$FoodRepository->deleteAllFromFood();
$FoodRepository->insertIntoFood('1','smoothie');
$FoodRepository->insertIntoFood('2','chicken');

header("Location: /index.php");
exit();




