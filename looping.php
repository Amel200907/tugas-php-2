<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>
    
    <!-- Soal No 1: Looping I Love PHP -->
    <?php
    echo "<h3>Soal No 1 Looping I Love PHP</h3>";
    
    echo "LOOPING PERTAMA<br>";
    for ($i = 2; $i <= 20; $i += 2) {
        echo "$i - I Love PHP<br>";
    }

    echo "LOOPING KEDUA<br>";
    for ($i = 20; $i >= 2; $i -= 2) {
        echo "$i - I Love PHP<br>";
    }
    ?>

    <!-- Soal No 2: Looping Array Modulo -->
    <?php
    echo "<h3>Soal No 2 Looping Array Modulo</h3>";
    
    $numbers = [18, 45, 29, 61, 47, 34];
    $sisaBagi = [];

    foreach ($numbers as $number) {
        $sisaBagi[] = $number % 5;
    }

    echo "Array numbers: ";
    print_r($numbers);
    echo "<br>Array sisa baginya adalah: ";
    print_r($sisaBagi);
    ?>

    <!-- Soal No 3: Loop Associative Array -->
    <?php
    echo "<h3>Soal No 3 Looping Associative Array</h3>";
    
    $items = [
        ["id" => "001", "name" => "Keyboard Logitech", "price" => 60000, "description" => "Keyboard yang mantap untuk kantoran", "source" => "logitek.jpeg"],
        ["id" => "002", "name" => "Keyboard MSI", "price" => 300000, "description" => "Keyboard gaming MSI mekanik", "source" => "msi.jpeg"],
        ["id" => "003", "name" => "Mouse Genius", "price" => 50000, "description" => "Mouse Genius luar lebih pintar", "source" => "genius.jpeg"],
        ["id" => "004", "name" => "Mouse Jerry", "price" => 30000, "description" => "Mouse yang disukai kucing", "source" => "jerry.jpeg"],
    ];

    foreach ($items as $item) {
        echo "Array [id] => {$item['id']} [name] => {$item['name']} [price] => {$item['price']} [description] => {$item['description']} [source] => {$item['source']}<br>";
    }
    ?>

    <!-- Soal No 4: Asteriks 5x5 -->
    <?php
    echo "<h3>Soal No 4 Asterix 5x5</h3>";
    
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    ?>
</body>
</html>
