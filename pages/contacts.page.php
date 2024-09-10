<h1>Laissez moi un message</h1>

<?php

print_r($_POST);

if(isset($_POST) && count($_POST)){
    echo "Bien envoyé chacal !";

    echo $_POST['name'] . " a envoyé un message ";
}
dd($contactsConfig);

?>

<form action="#" method="post" >

<div>
    <label for="name"> Entre ton blaze ma caille !</label>
    <input type="text" name="name" required>
</div>
<div>
    <label for="message"> Ecris ton message</label>
    <input type="text" name="message" required>
</div>

<div>
    <input type="submit" value="Envoyer !">
</div>
</form>