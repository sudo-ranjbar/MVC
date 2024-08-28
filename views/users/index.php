<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body style="background: green">
<h1>Users ...</h1>
<?php nice_dump($all_users); ?>

<h2>users information</h2>

<?php nice_dump($user10); ?>
<?php nice_dump($user2['name']); ?>

<h2>number of records with email=ali@mail.com</h2>
<?php nice_dump($ali_count); ?>
</body>
</html>
