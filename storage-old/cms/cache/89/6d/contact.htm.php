<?php 
class Cms5a81181695664796585405_8dc59da3b2b0daecfaff3a7d3fa3a1c4Class extends \Cms\Classes\PageCode
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
