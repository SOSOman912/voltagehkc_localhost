<?php 
use Jack\Voltage\Models\Case2;
use Jack\Voltage\Models\Category;
class Cms5a811e17a5396203580126_20782c31f6e3a693d0518a267bf7700eClass extends \Cms\Classes\PageCode
{
public function onEnd(){

    
   // $theid =  $this->param('slug');
    
    $this['categories'] = Category::where('id','>',0)->orderBy('title','asc')->get();
    $this['cases'] = Case2::where('id','>',0)->orderBy('title','asc')->get();
    
    if (isset($_GET['thecat']))
    $this['theclick'] = $_GET['thecat'];
    
        
}
}
