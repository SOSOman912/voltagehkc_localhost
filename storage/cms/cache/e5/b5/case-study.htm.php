<?php 
use Jack\Voltage\Models\Case2;
use Jack\Voltage\Models\Category;
class Cms610a6726aa837716674382_cb59ff3a55294f54902042bf7b767d38Class extends Cms\Classes\PageCode
{
public function onEnd(){

    
   // $theid =  $this->param('slug');
    
    $this['categories'] = Category::where('id','>',0)->orderBy('created_at','desc')->get();
    $this['cases'] = Case2::where('id','>',0)->orderBy('created_at','desc')->get();
    
    if (isset($_GET['thecat']))
    $this['theclick'] = $_GET['thecat'];
    
        
}
}
