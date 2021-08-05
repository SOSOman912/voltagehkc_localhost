<?php 
use Jack\Voltage\Models\Client;
use Jack\Voltage\Models\Case2;
use Jack\Voltage\Models\Testimonial;
use Jack\Voltage\Models\Socialmedia;
use Jack\Voltage\Models\Corevalues;
use Jack\Voltage\Models\Homeslider;
use Jack\Voltage\Models\Popup;
use Jack\Voltage\Models\Homecase;
class Cms610baf59a6550593192500_ca517f89667b869b06cab7a2cb3a84efClass extends Cms\Classes\PageCode
{
public function onEnd(){

    
   // $theid =  $this->param('slug');
    $this['corevalues'] = Corevalues::where('id','>','0')->get();
    $this['homesliders'] = Homeslider::where('id','>','0')->get();
    $this['clients'] = Client::where('feature','1')->take(12)->orderby('id','desc')->get();
    $this['cases'] = Case2::where('id','>',0)->orderBy('created_at','desc')->take(6)->get();  //'title','asc'
    $this['testimonials'] = Testimonial::where('id','>','0')->get();
    $this['socialmedia'] = Socialmedia::where('id','1')->first();
    $this['popup'] = Popup::where('id','1')->first();
    $this['homecases'] = Homecase::where('id','>','0')->get();
    
    
}
}
