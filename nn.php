<?php
 
function createArray(int $neuron, int $layer = 1) : array{
 $buffer = [];
 for($i=0;$i<$layer;$i++){
  $buf = [];
  for($b=0;$b<$neuron;$b++){
   $buf[] = 0;
  }
  $buffer[] = $buf;
 }
 return $buffer;
}

function layerSize(array $array) : int{
 return count($array);
}

function neuronSize(array $array) : int{
 if(layerSize($array) == 0){
  return 0;
 }
 return count($array[0]);
}

function completeSize(array $array) : int{
 return layerSize($array) * neuronSize($array);
}
