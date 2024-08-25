<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $num . 'learn' ?></title>
</head>
<body style="background: green">
<h1>Todo Lists ...</h1>

<ul>
    <?php foreach ($tasks as $task) : ?>
    <li><?= $task ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>