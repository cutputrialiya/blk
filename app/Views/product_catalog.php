<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $tittle ?></title>
</head>
<body>
    <h1><?= $brand ?></h1>
    <hr />
    <ul>
        <?php foreach ($product as $item) : ?>

            <li><?= $item ?></li>

        <?php endforeach; ?>
    </ul>
</body>
</html>