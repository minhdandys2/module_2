<?php

class MyList
{
    public $size=0;
    public static $DEFAULT_CAPACITY = 10;
    public $arrayList;

    public function MyList()
    {
        $this->arrayList = array();
    }

    public function MyListCapacity($capacity)
    {
        $this->arrayList = array($capacity);
    }

    public function add($index, $object)
    {
        array_splice($this->arrayList, $index, 1, $object);
        $this->size();
    }

    public function remove($index)
    {
        array_splice($this->arrayList, $index, 1);
        $this->size();
    }

    public function size()
    {
        return count($this->arrayList);
    }

    public function cloneArr()
    {
        $arrOne = new MyList();
        $arrTwo = clone $arrOne;
        return $arrTwo;
    }

    public function contains($value)
    {
        if (in_array($value, $this->arrayList)) {
            return "true";
        } else {
            return "false";
        }
    }

    public function indexOf($value)
    {
        if (in_array($value, $this->arrayList)) {
            return array_search($value, $this->arrayList);
        } else {
            return -1;
        }
    }

    public function addLastArray($value)
    {
        array_push($this->arrayList, $value);
    }

    public function ensureCapacity($minCapacity)
    {
        $this->MyListCapacity($minCapacity);
    }

    public function get($index)
    {
        return $this->arrayList[$index];
    }
    public function clear(){
        return $this->arrayList = array();
    }
    public function display(){
        return [$this->size(),$this->arrayList];
    }
}











