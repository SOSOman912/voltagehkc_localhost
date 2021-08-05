<?php 
use Jack\Voltage\Models\Client;
class Cms610ab1bfdfce5286645057_5de2e60974832b24f32ba0a674915f27Class extends Cms\Classes\PageCode
{
public function onEnd(){

    
   // $theid =  $this->param('slug');
    
    $this['clients'] = Client::where('id','>',0)->orderby('id','desc')->get();
        
}
}
