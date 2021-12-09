<?php

    // Get the form fields, removes html tags and whitespace.
    
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    
   
    
    

    // Check the data.
    // if (empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     header("Location: index.php?success=-1");
    //     exit;
    // }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: /index.php?success=-1");
        exit;
    }

    

    // Set the recipient email address. Update this to YOUR desired email address.
    // $recipient = "jason.william.griffin@gmail.com";
    // $recipient = "neilbarry3@gmail.com";
    $recipient = "picanxasauce@gmail.com";

    // Set the email subject.
    $subject = "MAILING LIST REQUEST from $email";

    // Build the email content.
    
    $email_content .= "Email: $email\n\n";
    $email_content .= "Has requested to join the mailing list!
    ";
    
    $email_content .= "\n";
    
    


    // Build the email headers.
    $email_headers = "From: <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
    // header("Location: index.php?success=1");
    header("Location: /index.php?success=1");

?>