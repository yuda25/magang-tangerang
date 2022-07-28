<?php

class recipe
{
    // properties
    private $title;
    private $ingredients = array();
    private $instruction = array();
    private $yield;
    private $tag = array();
    private $source = "alena holoigan";

    private $measurement = array(
        "tsp",
        "tbsp",
        "oz",
        "lb",
        "fl oz",
        "print",
        "quart",
        "galon"
    );
    // method
    public function ___construck ($title = null)
    {
        if(empty($title))
        {
            $this->settitle($title);
        }
    }

    public function __tostring ()
    {
        $output = "you are caling" .__CLASS__."object with title\"";
        $output.=  $this->gettitle() . "\"";
        $output.= basename(__FILE__)." at ". __DIR__.".";
        $output.= "\n this display form line" . __LINE__."in method" . __METHOD__;
        $output.= "\n this following methods are avabile for objects o this class: \n";
        $output.= implode("\n",get_class_methods(__CLASS__));
        return $output;
    }

    public function settitle($title)
    {
        if(empty($title))//ucword untuk memunculkan huruf besar pada awal texs
        {
            $this->title = null;
        }else
        {
            $this->title = ucwords($title);
        }
    }

    public function gettitle()
    {
        return $this->title;
    }
    public function addingredlients($item,$amount=null,$measure=null)
    {
        if ($amount != null && !is_float($amount) && !is_int($amount))
        {
            exit("the amount must be a foat: ".gettype($amount)."$amount given");
        }
        if($measure !=null && !in_array(strtolower($measure),$this->measurement)){
            exit ("please enter a valid measurement".implode(",",$this->measurement));
        }
        $this->ingredients[]= array
        (
            "item"=>ucwords($item),
            "amount"=>$amount,
            "measure"=>strtolower($measure) 
        );
    }

    public function getingerdients()
    {
        return $this->ingredients;
    }

    public function addinstruction($string)
    {
        $this->instruction[]=$string;
    }

    public function getinstruction()
    {
        return $this->instruction;
    }

    public function addtag($tag)
    {
        $this->tags[] = strtolower($tag);
    }

    public function gettags()
    {
        return $this->tags;
    }

    public function setyield($yield)
    {
        $this->yield = $yield;
    }

    public function getyield($yield)
    {
        return $this->yield;
    }

    public function setsource($source)
    {
        $this->source = ucwords($source); 
    }

    public function getsource()
    {
        return $this->source;
    } 

}



