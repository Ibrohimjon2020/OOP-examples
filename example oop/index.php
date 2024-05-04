<?php
class Cofee
{
    public $ingredient = [];
    public $cost = 3000;
    public function boiling_water()
    {
        return "Suv qaynatish";
    }
    public function addIngredient(Ingredient $ingredient)
    {
        $this->ingredient[] = $ingredient->name();
        $this->cost += $ingredient->cost();

    }
}

interface Ingredient
{
    public function cost();
    public function name();
}

class Sugar implements Ingredient
{
    public function cost()
    {
        return 500;
    }
    public function name(){
        return "Add Sugar";
    }
}
class Milk implements Ingredient
{
    public function cost()
    {
        return 1000;
    }
    public function name(){
        return "Add Milk";
    }
}
class Butter implements Ingredient
{
    public function cost()
    {
        return 500;
    }
    public function name(){
        return "Add Butter";
    }
}
class Ice implements Ingredient
{
    public function cost()
    {
        return 800;
    }
    public function name(){
        return "Add Ice";
    }
}

$cofee = new Cofee();
$cofee->addIngredient(new Sugar());
$cofee->addIngredient(new Sugar());
$cofee->addIngredient(new Butter());
var_dump($cofee->ingredient);
echo " li cofee narxi: ".$cofee->cost;


