<?php 
use Jack\Voltage\Models\Case2;
use Jack\Voltage\Models\Category;
class Cms5a817b7cd7e52575849957_f5e2696c1617202ae744f0954813bee7Class extends \Cms\Classes\PageCode
{
public function onEnd(){

    
    $theslug =  $this->param('slug');
    
    $this['categories'] = Category::where('id','>',0)->orderBy('title','asc')->get();
    $this['case'] = Case2::where('slug',$theslug)->first();
    $this->page->title = $this['case']->title;
        
}
}
