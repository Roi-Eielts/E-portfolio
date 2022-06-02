
<link href="css/contact-form.css" rel="stylesheet">
<div class="container margin-under">
    <div class="fcf-body">
        <div id="fcf-form">
            <h3 class="fcf-h3">Neem contact op.</h3>
            <form id="fcf-form-id" class="fcf-form-class" method="post">
                <div class="fcf-form-group">
                    <label for="Name" class="fcf-label">je naam</label>
                    <div class="fcf-input-group">
                        <input type="text" id="Name" name="Name" class="fcf-form-control" required>
                    </div>
                </div>
                <div class="fcf-form-group">
                    <label for="Email" class="fcf-label">je Email adres</label>
                    <div class="fcf-input-group">
                        <input type="email" id="Email" name="Email" class="fcf-form-control" required>
                    </div>
                </div>
                <div class="fcf-form-group">
                    <label for="Message" class="fcf-label">je bericht</label>
                    <div class="fcf-input-group">
                        <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
                    </div>
                </div>
                <div class="fcf-form-group">
                    <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">verstuur</button>
                </div>
            </form>
        </div>
    </div>
    <!-- php code erachter -->
    <?php
    if (isset($_POST['Email'])) {
        // EDIT THE 2 LINES BELOW AS REQUIRED
        $email_to = "roieielts@gmail.com";
        $email_subject = "contact E-portfolio";

        function problem($error)
        {
            echo "Sorry ik ben wat problemen tegen gekomen! ";
            echo "De problemen: <br><br>";
            echo $error . "<br>";
            echo "Ga A.U.B. terug naar een andere pagina om deze pagina te resetten. <br><br>";
            die();
        }

        // validation expected data exists
        if (
            !isset($_POST['Name']) ||
            !isset($_POST['Email']) ||
            !isset($_POST['Message'])
        ) {
            problem('Sorry maar er is een probleem met uw ingevoerde informatie.');
        }

        $name = $_POST['Name']; // required
        $email = $_POST['Email']; // required
        $message = $_POST['Message']; // required
        $ipaddress = getenv("REMOTE_ADDR");
        

        $error_message = "";
        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

        if (!preg_match($email_exp, $email)) {
            $error_message .= 'Email adress niet geldig.<br>';
        }

        $string_exp = "/^[A-Za-z .'-]+$/";

        if (!preg_match($string_exp, $name)) {
            $error_message .= 'De naam dat je hebt ingevoerd is niet geldig.<br>';
        }

        if (strlen($message) < 2) {
            $error_message .= 'Het bericht is niet geldig.<br>';
        }

        if (strlen($error_message) > 0) {
            problem($error_message);
        }

        $email_message = "Form details below.\n\n";

        function clean_string($string)
        {
            $bad = array("content-type", "bcc:", "to:", "cc:", "href");
            return str_replace($bad, "", $string);
        }

        $email_message .= "Name: " . clean_string($name) . "\n";
        $email_message .= "Email: " . clean_string($email) . "\n";
        $email_message .= "Message: \r\n" . clean_string($message) . "\n";
        $email_message .= "ip: $ipaddress\r\n";

        // create email headers
        $headers = 'From: ' . $email . "\r\n" .
            'Reply-To: ' . $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        @mail($email_to, $email_subject, $email_message, $headers);

        echo"<p>Dankje voor het contacteren van mij! Ik neem zo snelmogelijk contact op.</p>";
        die();
    }

        ?>
</div>