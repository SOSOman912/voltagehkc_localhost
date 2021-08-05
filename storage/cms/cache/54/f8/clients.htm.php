<?php 
use Jack\Voltage\Models\Client;class Cms60f5dd165ddd3169319534_46164ab2ee4b705558a8c46ed925e6cdClass extends Cms\Classes\PageCode
{

public function onEnd(){

    
   // $theid =  $this->param('slug');
    
    $this['clients'] = Client::where('id','>',0)->orderby('id','desc')->get();
        
}
}
