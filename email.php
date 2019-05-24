<?php
if($_POST["message"]) {
    mail("briantaylorjohnson@gmail.com", "Form to email message", $_POST["message"], "From: " + $POST["name"] + " (" + $POST["email"] + ")" );
}
?>