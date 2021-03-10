<?php

    $mhs = [
        [
            'nama' => 'Albert',
            'nim' => '192410101056',
            'usia' => '19',
        ]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array</title>
</head>
<body>
    <h2>DATA MAHASISWA</h2>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Nim</th>
                <th>Usia</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($mhs as $mahasiswa) : ?>
                <tr>
                    <td><?php echo $mahasiswa['nama'] ?></td>
                    <td><?php echo $mahasiswa['nim'] ?></td>
                    <td><?php echo $mahasiswa['usia'] ?></td>
                </tr>
            <?php endforeach; ?>
        <tbody>
    </table>
</body>
</html>