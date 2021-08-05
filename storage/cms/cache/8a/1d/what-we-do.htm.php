<?php 
use Jack\Voltage\Models\Client;
use Jack\Voltage\Models\Case2;
use Jack\Voltage\Models\Testimonial;
use Jack\Voltage\Models\Socialmedia;
class Cms610a6a34011d2165481166_40c2dfd299949af9f1aa92b1d4190dddClass extends Cms\Classes\PageCode
{
public function onEnd(){

    
   // $theid =  $this->param('slug');
    
    $this['clients'] = Client::where('feature','1')->take(10)->orderby('id','asc')->get();
    $this['cases'] = Case2::where('id','>',0)->orderBy('title','asc')->take(6)->get();
    $this['testimonials'] = Testimonial::where('id','>','0')->get();
}
}
