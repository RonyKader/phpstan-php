<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <?php $books = [ 'PHP', 'Laravel','JavaScript','React','Vue','MongoDB','MySql']; ?>
    <h2>Welcome to Book List</h2>
    <ul>
        <?php foreach($books as $book ) :?>
            <li><?= $book ?></li>
        <?php endforeach;?>
    </ul>
</body>
</html>