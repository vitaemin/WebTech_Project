<!DOCTYPE html>
<html>
    <head>
        <title>Receiving Input</title>
    </head>
    <body>
        <h2>Thank You: Got Your Input</h2>
        <?php
            $email = $_POST["email"];
            $contact = $_POST["contact"];
            print ("<br>Your email address is: $email");
            print ("<br>Contact preference is: $contact");
        ?>
    </body>
</html>