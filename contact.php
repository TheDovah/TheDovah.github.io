<?php

    if($_POST["submit"]) {
        $recipient="johasja@gmail.com";
        $subject="Email from portfolio";
        $sender=$_POST["sender"];
        $senderEmail=$_POST["email"];
        $message=$_POST["message"];

        $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

        mail($recipient, $subject, $mailBody, "From: $sender <$sender>");

        $thankYou="Thank you for the email! Your message has been sent.";
    }

    include 'header.php';

?>

    <head>
        <link href="css/General.css" rel="stylesheet">
        <link href="css/contactStylesheet.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">



            <div class = "piece">
                <h1>Fill out this form to contact me</h1>

                <p class = "information">

                    Want to know more? Feel free to send me an email and ask me questions or connect with me on Twitter or LinkedIn. I am open to speak about my portfolio and future work possibilities.
                    <br><br>
    <!--                --><?//=$thankYou ?>
                </p>

            </div>

            <div class = "form">


                <form method = "post" action = "contact.php">
                    <fieldset>
                        <legend>Your name or Company</legend>
                        <input required type = "text" id = "sender" name = "sender" placeholder = "Your name/company" />
                    </fieldset>
                    <fieldset>
                        <legend>Your email</legend>
                        <input required type="email" id = "email" name = "email" placeholder = "Your email">
                    </fieldset>
                    <fieldset>
                        <legend>Your message</legend>
                        <textarea name = "message" placeholder = "Your message"></textarea>
                    </fieldset>
                        <input type="submit" name = "submit">
                </form>
            </div>

            <div class="references">
                            <h3>References</h3>
                        <p>For the font: <a href="https://fonts.google.com/specimen/Alfa+Slab+One?preview.size=50&preview.text=Forklife&preview.text_type=custom&sidebar.open&selection.family=Alfa+Slab+One" target="_blank">Google Fonts</a></p>
            </div>
            <div class="footer">&copy; 2020, Emil.</div>
        </div>
    </body>

    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js" defer></script>
    <!--<script src="index.js" ></script>-->

</html>