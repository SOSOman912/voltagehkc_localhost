<?php 
use Jack\Voltage\Models\Client;use Jack\Voltage\Models\Case2;use Jack\Voltage\Models\Testimonial;use Jack\Voltage\Models\Socialmedia;class Cms60f64b3f77c34990000209_29ab816f5746a75ef5a8caebd4752901Class extends Cms\Classes\PageCode
{




public function onEnd(){

    
   // $theid =  $this->param('slug');
    
    $this['clients'] = Client::where('feature','1')->take(10)->orderby('id','asc')->get();
    $this['cases'] = Case2::where('id','>',0)->orderBy('title','asc')->take(6)->get();
    $this['testimonials'] = Testimonial::where('id','>','0')->get();
}
}
