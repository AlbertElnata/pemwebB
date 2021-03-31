<?php
    require "Tabung.php";
    // $_GET['nama'] = "Albert Dewanata"
    // $_GET['nim'] = "192410101056"
    // print_r ($_GET);
    // var_dump ($_GET);

    // var_dump($_POST);

    // if (isset($_POST['submit_btn'])) {
    //     if (strlen($_POST['diameter']) > 0) {
    //         echo "login !";
    //     } else {
    //         echo "Isi diameter terlebih dahulu";
    //     }
    // })

    $tabung = new Tabung;

    if (isset($_POST['button_submit'])) {
        // $tabung = new Tabung($_POST['diameter'], $_POST['tinggi']);
        $tabung->setDiameter($_POST['diameter']);
        $tabung->setTinggi($_POST['tinggi']);

        // $tabung->hitungLuas();

    }

//     $luas = 0;
//     $volume = 0;

//     if (isset($_POST['button_submit'])) {
//         $diameter = $_POST['diameter'];
//         $tinggi = $_POST['tinggi'];

//         $r = $diameter / 2;

//         $luas = 2 * 3.14 * $r * $tinggi;
//         $volume = 3.14 * $r * $r * $tinggi;

//         echo "diameter $diameter <br/>";
//         echo "tinggi $tinggi <br/>";

//     }
// 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action='' method='post'>
        <input type='text' name='diameter'>
        <button name='submit_btn'>submit</button>
    </form> -->
    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name="button_submit">Hitung</button>

      
    </form>
    <hr>

    <ul>
        <li>Luas Selimut : <?= $tabung->getLuasSelimut(); ?></li>
        <li>Volume : </li>
    </ul>
</body>
</html>