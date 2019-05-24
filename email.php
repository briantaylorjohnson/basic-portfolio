<?php
if($_GET["message"]) {
    mail("briantaylorjohnson@gmail.com", "Form to email message", $_GET["message"], "From: " + $GET["name"] + " (" + $GET["email"] + ")" );
}
?>