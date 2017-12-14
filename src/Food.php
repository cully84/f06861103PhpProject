<?php
namespace Itb;

class Food
{
    private $id;
    private $food;

    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getfood()
    {
        return $this->food;
    }


    public function setfood($food)
    {
        $this->food = $food;
    }

}