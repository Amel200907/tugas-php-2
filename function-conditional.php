<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Berlatih Function PHP</h1>
    
    <?php
    echo "<h3> Soal No 1 Greetings </h3>";

    // Function Greetings
    function greetings($name) {
        echo "Halo $name, Selamat Datang di Garuda Cyber Institute!<br>";
    }

    // Memanggil fungsi
    greetings("Bagas");
    greetings("Wahyu");
    greetings("Septiana");

    echo "<br>";
    echo "<h3>Soal No 2 Reverse String</h3>";

    // Function Reverse String
    function reverseString($string) {
        $reversed = "";
        for ($i = strlen($string) - 1; $i >= 0; $i--) {
            $reversed .= $string[$i];
        }
        echo "$string => $reversed<br>";
    }

    // Memanggil fungsi
    reverseString("Septiana");
    reverseString("Garuda Cyber Institute");
    reverseString("We Are GC-Ins Developer");

    echo "<br>";
    echo "<h3>Soal No 3 Palindrome </h3>";

    // Function Palindrome
    function palindrome($string) {
        $reversed = "";
        for ($i = strlen($string) - 1; $i >= 0; $i--) {
            $reversed .= $string[$i];
        }

        if ($string == $reversed) {
            echo "$string => true<br>";
        } else {
            echo "$string => false<br>";
        }
    }

    // Memanggil fungsi
    palindrome("civic");
    palindrome("nababan");
    palindrome("jambaban");
    palindrome("racecar");

    echo "<h3>Soal No 4 Tentukan Nilai </h3>";

    // Function Tentukan Nilai
    function tentukan_nilai($nilai) {
        if ($nilai >= 85 && $nilai <= 100) {
            return "Sangat Baik<br>";
        } elseif ($nilai >= 70 && $nilai < 85) {
            return "Baik<br>";
        } elseif ($nilai >= 60 && $nilai < 70) {
            return "Cukup<br>";
        } else {
            return "Kurang<br>";
        }
    }

    // Memanggil fungsi
    echo tentukan_nilai(98); // Sangat Baik
    echo tentukan_nilai(76); // Baik
    echo tentukan_nilai(67); // Cukup
    echo tentukan_nilai(43); // Kurang
    ?>
</body>
</html>
