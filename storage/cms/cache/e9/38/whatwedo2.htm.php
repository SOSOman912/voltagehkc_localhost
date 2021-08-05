<?php 
use Jack\Voltage\Models\Whatwedo;
class Cms60f64b3f8052f644467713_85b0cc73ab49d807c141e7660c277e1bClass extends Cms\Classes\PartialCode
{
public function onEnd(){

    
   // $theid =  $this->param('slug');
    
    $this['whatwedo'] = Whatwedo::where('id','>','0')->get();
}
}
