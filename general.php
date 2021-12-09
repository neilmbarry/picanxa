<?php

    // Get the form fields, removes html tags and whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    
    $message = trim($_POST["message"]);
    
    

    // Check the data.
    // if (empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     header("Location: index.php?success=-1");
    //     exit;
    // }
    if (empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: /index.php?success=-1");
        exit;
    }

    

    // Set the recipient email address. Update this to YOUR desired email address.
    // $recipient = "jason.william.griffin@gmail.com";
    // $recipient = "neilbarry3@gmail.com";
    $recipient = "picanxasauce@gmail.com";

    // Set the email subject.
    $subject = "GENERAL INQUIRY from $name";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message: $message\n\n";
    
    $email_content .= "\n";
    
    


    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
    // header("Location: index.php?success=1");
    header("Location: /index.php?success=1");

?>