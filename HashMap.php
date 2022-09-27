<?php

class HashMap
{
    private $size;
    private $dictionary;

    public function __construct()
    {
        $this->size = 0;
        $this->dictionary = array();
    }

    function isKey($key):bool{
        if(in_array($key,array_keys($this->dictionary)) == false){
            return false;
        }
        return true;
    }

    function add_key($key, $value):bool{
        if(in_array($key,array_keys($this->dictionary)) == false) {
            $this->dictionary[$key] = $value;
            $this->size = $this->size +1;
            return true;
        }
        else{
            return false;
        }
    }
    function get_key_value($key){

        return $this->dictionary[$key];
    }

    function remove_key($key): bool
    {
            if(in_array($key,array_keys($this->dictionary)) != false){
                $value = $this->dictionary[$key];
                unset($this->dictionary[$key]);
                $this->size = $this->size -1;
                return true;
            }
            return false;
    }

    function update_key($key, $value): bool
    {
        if(in_array($key,array_keys($this->dictionary)) != false){
            $this->dictionary[$key] = $value;
            return true;
        }
        return false;
    }

    function keys(): array
    {
        return array_keys($this->dictionary);
    }

    function size():int{

        return $this->size;
    }

    function isEmpty():bool{
        if ($this->size >0) {
            return false;
        }
        return true;
    }

    function __toString(): string
    {
        return json_encode($this->dictionary);
    }
}










