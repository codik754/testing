<?php
   class classObj{
      public $var = 55;

      function classObj($var1);//ТАК возможно сделать

      function show(){
         echo "Value: ".$this->var;
      }
   }

   //ТАК ВОЗМОЖНО КАК_ТО СДЕЛАТЬ
   classObj::classObj($var1){
      $this->var = $var1;
   }

   $Obj = new classObj(10);
   $Obj->show(); 

   var_dump($Obj);
?>
