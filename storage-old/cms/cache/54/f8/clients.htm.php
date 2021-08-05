<?php 
use Jack\Voltage\Models\Client;
class Cms5a813cf0db344537320397_467d918aeebd4a88b8d71bdf8179ebd9Class extends \Cms\Classes\PageCode
{
public function onEnd(){

    
   // $theid =  $this->param('slug');
    
    $this['clients'] = Client::where('id','>',0)->get();
        
}
}
