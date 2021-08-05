<?php 
use Jack\Voltage\Models\Whatwedo;
class Cms610ab8470d244120139587_ac62b33844989ec2f0c310fa9dce8b21Class extends Cms\Classes\PartialCode
{
public function onEnd(){

    
   // $theid =  $this->param('slug');
    
    $this['whatwedo'] = Whatwedo::where('id','>','0')->get();
}
}
