<?php

class render 
{
    public function __tostring ()
    {
        $output = "\n the following methods are avabile for ".__CLASS__." objects o this class: \n";
        $output.= implode("\n",get_class_methods(__CLASS__));
        return $output;
    }
    public static function displayrecipe($recipe)
    {
        $output="";
        $output .=  $recipe->gettitle()."by".$recipe->getsource();
        $output .= "\n";
        $output .= implode(", ",$recipe->gettags());
        $output .= "\n\n";
        foreach ($recipe->getingredients() as $ing)
        {
            $output .= $ing["amount"]." ". $ing["measure"]. " ".$ing["item"];
            $output .= "\n";
        }
        $output .= "\n";
        $output .= implode("\n", $recipe->getinstructions());
        $output .= "\n";
        $output .= $recipe->getyield();
    }

}

