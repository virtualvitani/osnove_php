<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcijalni Ispit - Osnove PHP-a</title>
</head>
<body>

<?php

// Skripta povezivanja podataka sa words.json datotekom

const FILE_PATH = __DIR__ . '/words.json';
$postData = $_POST;
$errors = [];
$words = [];

if (file_exists(FILE_PATH)) {
    $words = file_get_contents(FILE_PATH);
    $words = json_decode($words, true);
}

// Skripta koja kalkulira samoglasnike

function countVowels(string $text): int
{
    $cnt = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

    foreach ($vowels as $vowel) {
        $cnt += substr_count($text, $vowel);
    }

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