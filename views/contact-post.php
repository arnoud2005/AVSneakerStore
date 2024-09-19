<?php

if (!isset($_POST['submit'])) {
    print_r('formulier niet ingevuld! U wordt binnen 5 seconden terug gestuurd naar de contact pagina');

    header('refresh:5, contact.php');
}
?>
<h2>Bedankt voor het invullen!</h2>
<p>Uw gegevens:</p>
<p>Uw naam: <?= $_POST['firstname'] . ' ' . $_POST['lastname'] ?></p>
<p>We zullen u snel berichten op een van de onderstaande opties:</p>
<p>Email: <a href="mailto:<?= $_POST['email'] ?>"><?= $_POST['email'] ?></a> of telefoonnummer: <a href="tel:<?=$_POST['phonenumber'] ?>"><?=$_POST['phonenumber'] ?></a></p>
<p>Uw bericht:</p>
<?= $_POST['message'] ?>
<p>We nemen zo snel als mogelijk contact met u op</p>