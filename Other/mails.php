<?php
    // getting data of form on index.php
                        $first_name="Henil";
                        $last_name="Prajapati";
                        $email="henilcode@gmail.com";
                        $phone="955882092";
                        $subject="Text";
                        $message="Hi";

    $to="prajapatihenil1510@gmail.com";
    $subject="Mail From Ubsoftec";
    $txt="first_name =". $first_name . "\r\n last_name =" . $last_name ."\r\n email =" . $email .  
    "\r\n phone =" . $phone. "\r\n subject =" . $subject."\r\n message =" . $message;

    $headers= "From : noreply@rohan.com" . "\r\n" ."CC: sombodyelse@example.com";

    if($email != NULL)
    {
        mail($to,$subject,$txt,$headers);
    }else{
        echo "S";
    }
?>