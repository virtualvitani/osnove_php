<?php
// 1. Pročitajte podatke iz datoteke polaznici.json, te ih ispišite u HTML tablicu.
// 2. Dodajte novog polaznika u datoteku polaznici.json, te podatke iz nje ponovo ispišite.


$polaznici = file_get_contents(__DIR__ . '/podaci/polaznici.json');
$polazniciArray = json_decode($polaznici, true);

function ispisPolaznika($polazniciArray)
{
?>
    <table border="1px">
        <tr>
            <th> Ime </th>
            <th> Prezime </th>
            <th> Godine </th>
            <th> Email </th>
            <th> Telefon </th>
        </tr>
        <?php foreach ($polazniciArray as $polaznik) : ?>
            <tr>
                <td> <?php echo $polaznik['name']; ?> </td>
                <td> <?php echo $polaznik['surname']; ?> </td>
                <td> <?php echo $polaznik['age']; ?> </td>
                <td> <?php echo $polaznik['email']; ?> </td>
                <td> <?php echo $polaznik['phone']; ?> </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php
};
ispisPolaznika($polazniciArray);

$polazniciArray[] = [
    'name' => 'Virtual',
    'surname' => 'Vitani',
    'age' => 30,
    'email' => 'lukas.premuzi@gmail.com',
    'phone' => '385914047060',
];
//i trebalo bi dodati provjeru da li je polaznik već u popisu, jer ovako dodaje istog polaznika pri svakom izvršenju


$polaznici = json_encode($polazniciArray);
file_put_contents(__DIR__ . '/podaci/polaznici.json', $polaznici);

ispisPolaznika($polazniciArray);