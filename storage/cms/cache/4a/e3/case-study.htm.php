<?php 
use Jack\Voltage\Models\Case2;
use Jack\Voltage\Models\Category;
class Cms610bacc46ce11611965524_728131359a089147c7c4f322854808deClass extends Cms\Classes\PageCode
{
public function onEnd(){

    
   // $theid =  $this->param('slug');
    
    $this['categories'] = Category::where('id','>',0)->orderBy('created_at','desc')->get();
    $this['cases'] = Case2::where('id','>',0)->orderBy('created_at','desc')->get();
    
    if (isset($_GET['thecat']))
    $this['theclick'] = $_GET['thecat'];
    
        
}
}
