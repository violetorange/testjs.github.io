<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firebase</title>
</head>
<body>
    <?php 
        require 'vendor/autoload.php';

        use Kreait\Firebase\Factory;
        $factory = (new Factory())
            ->withDatabaseUri('https://wiki-39d39-default-rtdb.europe-west1.firebasedatabase.app/');

        $database = $factory->createDatabase();

 
        
        $x = 99;
        $y = 'some text, man';
        $newPost = $database
            ->getReference('articles')
            ->push([
                'int' => $x,
                'text' => $y
            ]);
    ?>
</body>
</html>