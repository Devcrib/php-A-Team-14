<?php
namespace App\String;


class StringBuilder
{
    public $string;

    public function __construct($string = '')
    {
        $this->string = $string;
    }

    public function put($string)
    {
        $this->string .= $string;
        return $this->string;
    }
 
    public function insert($index = 0, $string = '')
    {
        $this->string = substr($this->string, 0, $index).''. $string .''. substr($this->string, $index);
        return $this->string;
    }

    public function isEmpty($string)
    {
        if($string === '') {
            $this->string = $string;
            return 'string is empty';
        } else{
            $this->string = $string;
            return 'string is empty';
        }   
    }

    public function empty()
    {
        $this->string = '';
        return $this->string;
    }

}