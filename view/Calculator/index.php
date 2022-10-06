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
        <p>2000 0.56 diena 9</p>
    </form>
</fieldset>


<?php if (isset($data)) ?>

<fieldset>
    <legend>Įvedėte šiuos duomenis</legend>
    <div class="red_text">
        <?php if (isset($exception)) echo $exception->getMessage() ?>
    </div>
    <table>
        <thead>
        <tr>
            <td>Suvartotas kiekis</td>
            <td>Tarifas</td>
            <td>Diena ar naktis</td>
            <td>Mėnuo</td>
            <td>Pašalinti duomenis</td>
        </tr>
        </thead>

        <tbody>
        <?php if (isset($data))
            foreach ($data as $key => $value) : ?>
                <tr>
                    <td><?= $value['amount'] ?></td>
                    <td><?= $value['price'] ?></td>
                    <td><?= $value['period'] ?></td>
                    <td><?= $value['month'] ?></td>
                    <td>
                        <form method="POST" action="./index.php">
                            <input type="hidden" name="delete" value="<?php echo $key ?>">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" value="Pašalinti šiuos duomenis">
                        </form>
                    </td>
                </tr>
                <tr>
                </tr>
            <?php endforeach; ?>
        <tr>

        </tr>
        </tbody>

    </table>
    <div class="below_buttons">
        <form class="below" method="POST" action="./index.php">
            <input type="hidden" name="_method" value="COUNT">
            <input type="submit" value="Skaičiuoti kainą">
        </form>
        <form class="below" method="POST" action="./index.php">
            <input type="hidden" name="_method" value="PAY">
            <input type="submit" value="Deklaruoti ir sumokėti">
        </form>
    </div>
</fieldset>
</body>
</html>
