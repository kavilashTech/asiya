<?php 

ini_set("mail.log", "tmp/mail.log");
ini_set("mail.add_x_header", TRUE);


 ini_set('mail.add_x_header','On'); 

 ini_set('sendmail_from','contact@anhexim.com'); 
 
//  ini_set('SMTP','smtp.gmail.com'); 
 ini_set('SMTP','mail.anhexim.com'); 
 ini_set('username','contact@anhexim.com');
 ini_set('password','$ANH@123#exim');
 ini_set('smtp_port','465'); 



// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP; 
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php'; 
require 'PHPMailer/PHPMailer.php'; 
require 'PHPMailer/SMTP.php'; 
$phpemail = new PHPMailer(TRUE);


 ?>