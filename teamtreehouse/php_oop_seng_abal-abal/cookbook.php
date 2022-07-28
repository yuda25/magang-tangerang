<?php

include "recipe.php";
include "render.php";

$recipe1 = new recipe("my first holiday\n");
$recipe1->setsource = "grandma holigan";
$recipe1->addingredlients("egg",1);
$recipe1->addingredlients("flour",2,"cup");

$recipe2 = new recipe();
$recipe2 ->getsource = "betty croker\n";
$recipe1->settitle("my second recipe\n");

echo $recipe1->gettitle();
foreach ($recipe1->getingerdients() as $ing)
{
    echo "\n". $ing["amount"] . " " .$ing["measure"]." ".$ing["item"];
}

$recipe1->addinstruction("this is my first instruction");
$recipe2->addinstruction("this is my second instruction");

echo implode("\n",$recipe1->getinstruction());

$recipe1->addtag("break fast");
$recipe2->addtag("main course");

echo implode(",",$recipe1->gettags());

$recipe1->setyield("6 servings");

echo render::displayrecipe($recipe1);
echo new render();       
