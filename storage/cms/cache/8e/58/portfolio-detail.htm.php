<?php 
use Jack\Voltage\Models\Case2;use Jack\Voltage\Models\Category;class Cms60f5c3eb2aeeb980315270_aec5688d3ee3af89700366ce1db6c794Class extends Cms\Classes\PageCode
{


public function onEnd(){

    
    $theslug =  $this->param('slug');
    
    $this['categories'] = Category::where('id','>',0)->orderBy('title','asc')->get();
    $this['case'] = Case2::where('slug',$theslug)->first();
    if($this['case']){
        $this->page->title = $this['case']->title;
        $this['imageCount'] = count($this['case']->image1);
    }else{
        header('Location: https://www.voltagehk.com/404');
    }
}
}
