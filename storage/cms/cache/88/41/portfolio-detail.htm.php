<?php 
use Jack\Voltage\Models\Case2;
use Jack\Voltage\Models\Category;
class Cms610bb34092453972753609_fc039e42dde0d699d8f66b9276fa97b9Class extends Cms\Classes\PageCode
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
