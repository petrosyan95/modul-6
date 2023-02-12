<?php

$textStorage = [];

function add (array &$array , string $key , string $value) : void
{

   if (count($array) !== 0){
        $array[count($array)][$key] = $value ;
   }else{
       $array[0][$key] = $value ;
   }

};

add($textStorage,"title","text");

add($textStorage, "body","text");

function remove (array &$array, $key) : bool
{

 if (array_key_exists($key,$array)){
     unset($array[$key]);
     return true;
 }else{
     return false;
 }

};

var_dump(remove($textStorage,0));

var_dump(remove($textStorage,5));

var_dump($textStorage);


function edit (array &$array ,int $key ,string $keyTatle ,string $text = null)
{
    if (array_key_exists($key,$array)){
        foreach ($array as $ind => &$val){

            ($text === null)?$text = implode(array_values($val)):$text;

            unset($val[implode(array_keys($array[$key]))]);

            $val[$keyTatle] = $text ;

            return true;
        }
    }else{

        return false;
    }



}

edit($textStorage,1,"samvel");

var_dump($textStorage);

var_dump(edit($textStorage,5,"false"));