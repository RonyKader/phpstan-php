<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Associative Array</title>
</head>
<body>
    <?php
        $books = [
            [
                'name' => 'PHP',
                'author' => 'Jhon Deo',
                'url' => 'https://www.php.com'
            ],
            [
                'name' => 'JavaScript',
                'author' => 'Mr xyz',
                'url' => 'https://www.js.com'
            ],
            [
                'name' => 'MongoDB',
                'author' => 'Herbert',
                'url' => 'https://www.mongo.com'
            ]
        ];
    ?>

    <h2>Associative Array</h2>
    <ul>
    <?php foreach ($books as $book) :?>
        <li>Name: <?= $book['name']?></li>
        <li>Author: <?= $book['author']?></li>
        <li>Url: <?= $book['url']?></li>
    <?php endforeach;?>
    </ul>
</body>
</html>
