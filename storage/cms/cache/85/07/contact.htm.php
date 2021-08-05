<?php 
class Cms610ab1ceab62e622882461_ff360e14afe28d3f284eb1cc752d42ccClass extends Cms\Classes\PageCode
{
public function onUpdateform(){
    
       $name = post('name');
       $email = post('email');
       $subject = post('subject');
       $message = post('message');

    
       $vars = [
            'name' => $name, 
            'email' => $email, 
            'subject' => $subject,
            'message2' => $message,


       ];
       
  
       
        if (post('message')!=''){
            Mail::send('notifycontact', $vars, function($message) {
                $message->to( 'hello@voltage-pr.com', '');
            
            });
            
        }
        
      
    
    
}
}
