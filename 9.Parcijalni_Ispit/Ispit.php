<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcijalni Ispit - Osnove PHP-a</title>
    <style>
        body {
            background-image: url(https://i.szalas.hu/hotels/1452964/original/38257997.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
<style>

        input{
            text-align: left;
            margin: 10px;
            padding: 10px 20px 10px 20px;
            border-radius: 20px;
            position: sticky;
            color: red;
        }

        table{
            border: none;
            margin: 30px;
        }

        th{
            padding: 10px 20px 10px 20px;
            border-radius: 20px;
            border: solid 4px;
        }

        td{
            padding: 10px;
            border-radius: 50px;
            border: solid 2px;
            color: black;
        }

    </style>

<?php

const FILE_PATH = __DIR__ . '/words.json';
$postData = $_POST;
$errors = [];
$words = [];

if (file_exists(FILE_PATH)) {
    $words = file_get_contents(FILE_PATH);
    $words = json_decode($words, true);
}

function countVowels(string $text): int
{
    $cnt = 0;
    $cnt += substr_count($text, 'a');
    $cnt += substr_count($text, 'e');
    $cnt += substr_count($text, 'i');
    $cnt += substr_count($text, 'o');
    $cnt += substr_count($text, 'u');
    $cnt += substr_count($text, 'A');
    $cnt += substr_count($text, 'E');
    $cnt += substr_count($text, 'I');
    $cnt += substr_count($text, 'O');
    $cnt += substr_count($text, 'U');
    return $cnt;
}

// Skripta uklanja whitespace na pocetku i na kraju rijeci

if (!empty($postData["word"])) {
    $word = trim($postData["word"]);

// Skripta provjerava da li su slova upisana, u slucaju da nisu, sprema gresku

    if (!preg_match('/^[\p{Latin}]+$/u', $word)) {
        $errors['word'] = "Krivo ste upisali Ime.";
    } else {
        $length = mb_strlen($word);
        $samoglasnici = countVowels($word);
        $suglasnici = $length - $samoglasnici;
        $words[] = [
            "word" => $word,
            "length" => $length,
            "vowels" => $samoglasnici,
            "consonants" => $suglasnici,
        ];

// Skripta sluzi da funkcija ostane array
     
        $allWords = json_encode($words); 
        file_put_contents(FILE_PATH, $allWords);
    }
} elseif (isset($postData["word"])) {
    
// Skripta salje praznu rijec
    
    $errors['word'] = "Unesi Ime za obradu.";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcijalni Ispit - Osnove PHP-a</title>
</head>

<body>

    <h2>Provjera imena gostiju u Zaton Holiday Resortu</h2>

    <div id="parent" style="display: flex;">

        <div id="left" style="flex-basis: 100%;">
            <form method="POST">

                <label for="word"><b>Ime:</b></label><br>
                <input type="text" id="word" name="word"><br>

                <p style="color:red">
                    <?php
                    if (!empty($errors)) {
                        foreach ($errors as $key => $error) {
                            echo "$error";
                        }
                    }
                    ?>
                </p>

                <input type="submit" value="Pošalji">

            </form>
            <p><a href='Ispit.php'>Provjera slova u Imenu</a></p>
        </div>

        <div id="right" style="flex-basis: 100%;">
            <br>
            <table border="1">
                <tr align="center">
                    <th>Ime</th>
                    <th>Broj slova</th>
                    <th>Broj samoglasnika</th>
                    <th>Broj suglasnika</th>
                </tr>

                <?php
                if (!empty($words)) {
                    foreach ($words as $word) {
                ?>
                        <tr>
                            <td><?= $word["word"] ?></td>
                            <td><?= $word["length"] ?></td>
                            <td><?= $word["vowels"] ?></td>
                            <td><?= $word["consonants"] ?></td>
                        </tr>
                <?php
                    }
                }
                ?>

            </table>

        </div>

    </div>

</body>

</html>