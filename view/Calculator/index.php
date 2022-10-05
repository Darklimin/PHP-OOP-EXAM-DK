<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Mokesčiai</title>
    <link rel="stylesheet" type="text/css" href="./view/Calculator/style.css"/>
</head>
<body>

<h1>Mokesčiai už elektrą</h1>

<fieldset>
    <legend>Įveskite savo duomenis</legend>
    <form method="POST" action="./index.php">
        <input type="hidden" name="id" value="">

        <input class="user_input" type="text" name='data' placeholder="Čia įveskite duomenis">

        <input type="submit" value="Įvesti duomenis">
        <p>Nurodykite savo duomenis:</p>
        <p>elektros kilovatvalandžių kiekį, tarifą ir ar tai dieninė ar naktinė elektra bei mėnesį už kurį yra
            mokama. Darykite tai kaip pavyzdyje:</p>
        <p>2000 0,56 diena 9</p>
    </form>
</fieldset>

<?php if (isset($data))
foreach ($data as $key => $value) : ?>
<fieldset>
    <legend>Įvedėte šiuos duomenys</legend>
    <p><?= $key + 1 ?></p>
    <p><?= $value ?></p>
</fieldset>
<?php endforeach; ?>

</body>
</html>
