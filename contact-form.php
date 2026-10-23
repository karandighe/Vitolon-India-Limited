<?php


if($_SERVER['REQUEST_METHOD']=='POST')
{

    $to = 'vitolonindia@gmail.com';    
    $subject = 'Website Enquiry';

    $secretKey = '6Lc1nPwtAAAAAFYYFeQ_N6HOvEhy3YXrAA85vhMr';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
        {

            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']); 
                
            $responseData = json_decode($verifyResponse);

            if($responseData->success)
            {
                $data='<table border="1" bordercolor="#ccc" align="center" width="650" style="width:650px;" cellpadding="10" cellspacing="0">';

                $data.='<tr><td colspan="2" align="center">Enquiry Details</td></tr>';/* field name */
    
                $data.='<tr><td>Select Division / Requirement:</td><td>'.$_POST['service'].'</td></tr>';

                $data.='<tr><td>Nearest Regional Facility:</td><td>'.$_POST['facility'].'</td></tr>';

                $data.='<tr><td>Name:</td><td>'.$_POST['full_name'].'</td></tr>';

                $data.='<tr><td>Email: </td><td>'.$_POST['email'].'</td></tr>';

                $data.='<tr><td>Mobile No: </td><td>'.$_POST['phone'].'</td></tr>'; 

                $data.='<tr><td>Company / Textile Mill Name: </td><td>'.$_POST['company'].'</td></tr>'; 

                $data.='<tr><td>Message: </td><td>'.$_POST['message'].'</td></tr>';
    
                $data.='</table>';
    
                $message=$data;
    
                $headers = "MIME-Version: 1.0" . "\r\n";
    
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
                $headers .= 'From: server@vitolon.in' . "\r\n";
    
                header('Content-Type: application/json');
    
                if(mail($to,$subject,$message,$headers)){
                    
                    header('Location: success.php');
                   
                }
                else
                {
                   
                    header('Location: failed.php');
                }
            }

        }
    }


}
?>