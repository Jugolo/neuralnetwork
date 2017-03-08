<?php
class NeuaralArray{
  priavte $layer, $neural;
  private $buffer = [];

  public function __construct(int $layer, int $neural){
    $this->layer = $layer;
    $this->neural = $neural;
    for($i=0;$i<$this->completeSize();$i++){
      $this->buffer[] = 0;
    }
  }
  
  public function completeSize() : int{
    return $this->layer*$this->neural;
  }
  
  public function showDebug(){
    for($li=0;$li<$this->layer;$li++){
      if($li != 0){
        echo "<br>\r\n";
      }
      for($ni=0;$ni<$this->neural;$ni++){
        if($ni != 0){
          echo " ";
        }
        echo $this->buffer[($li+1)*$ni];
      }
    }
  }
}
