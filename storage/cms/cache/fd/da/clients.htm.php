<?php 
use Jack\Voltage\Models\Client;
class Cms610bacc0c581b801141305_1ec83011ceec508b06cc2f683ad8e6d9Class extends Cms\Classes\PageCode
{
public function onEnd(){

    
   // $theid =  $this->param('slug');
    
    $this['clients'] = Client::where('id','>',0)->orderby('id','desc')->get();
        
}
}
