<?php

$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">';
$message .= '
<body style="margin: 0; padding: 0;">
   <table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tr>
         <td style="padding: 0px 0 0px 0;">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
               <tr>
                  <td align="center" bgcolor="#003049" style="padding: 30px 0 10px 0; color: #FFF; font-size: 26px; font-weight: bold; font-family: Arial, sans-serif;line-height: 30px;"> Finance OSP </p></td>
               </tr>
               <tr>
                  <td bgcolor="#ffffff" style="padding: 30px 30px 30px 30px;">
                     <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        
                        <td>
                           ';
                           $message .= '
                           <table style="padding: 0px 0 0px 0;">
                              <thead style=" padding: 0px 0 0px 0; color: #153643; font-size: 18px; font-weight: bold; font-family: Arial, sans-serif;">
                                 <tr >
                                    <th  style="padding: 5px 5px 5px 5px;">    <h2>Thanks for checking out our website <br><strong>' . $name. '</strong>!</h2></th>    
                                 </tr>
                              </thead>
                          
                                 ';

                            
                                 
                                 $message .= '
                           
                           </table>
                           <table border="0" cellpadding="0" cellspacing="0" width="100%">
                              <tr>
                                 <td width="260" valign="top">
                                 </td>
                              </tr>
                           </table>
                        </td>
                        </tr>
                     </table>
                  </td>
               </tr>
               <tr>
                  <td bgcolor="#d62828" style="padding: 30px 30px 30px 30px;">
                     <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                           <td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width="100%; text-align: center;">
                              <a href="https://mareklanger.cz" style="color: #ffffff;"><font color="#ffffff">Link to our website</font></a>
                           </td>
                           
                        </tr>
                     </table>
                  </td>
               </tr>
            </table>
         </td>
      </tr>
   </table>
</body>
</html>';
$to = $email;
$subject = "Confirmation";
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$from .= mb_encode_mimeheader( 'Email Confirmation' ). ' <info@financeosp.com>';;
$headers .= 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion();
$potvrzeni = mb_send_mail( $to, $subject, $message, $headers );
