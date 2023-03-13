<?php
class Cls {

public $st;
   
public function __construct ($st) 
{
    $this-> st=$st;
}

}
$cstring= new Cls("Construct is one of the php function");
echo $cstring->st;
?>
