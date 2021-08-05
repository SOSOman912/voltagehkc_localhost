<?php 
use Jack\Voltage\Models\Whatwedo;
class Cms610bc433dd630573617386_95ae96c5bc4f37f7c687af7aad40307bClass extends Cms\Classes\PartialCode
{
public function onEnd(){

    
   // $theid =  $this->param('slug');
    
    $this['whatwedo'] = Whatwedo::where('id','>','0')->get();
}
}
