<?php 
use Jack\Voltage\Models\Case2;use Jack\Voltage\Models\Category;class Cms60f5c7f8c7bdf611792970_6a65d798791345d616d5a70e6cf97bafClass extends Cms\Classes\PageCode
{


public function onEnd(){

    
   // $theid =  $this->param('slug');
    
    $this['categories'] = Category::where('id','>',0)->orderBy('created_at','desc')->get();
    $this['cases'] = Case2::where('id','>',0)->orderBy('created_at','desc')->get();
    
    if (isset($_GET['thecat']))
    $this['theclick'] = $_GET['thecat'];
    
        
}
}
