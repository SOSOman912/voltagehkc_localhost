<?php 
class Cms60f5c5dd43445631931251_c383fa48da6c4869b675b10698166678Class extends Cms\Classes\PageCode
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
